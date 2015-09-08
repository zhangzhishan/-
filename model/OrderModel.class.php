<?php
class OrderModel extends Model{
	public function __construct(){
		parent::__construct();
		$this->fields=array('id','user','name','email','tel',
				'address','buildings','code','delivery','pay',
				'price','ordernum','order_pay','order_delivery','order_state',
				'delivery_name','delivery_url','delivery_num','refund','is_record',
				'text','goods','ps','date');
		$this->tables=array(DB_FREFIX.'order');	
		list(
				$this->R['id'],
				$this->R['goods_id'],
				$this->R['order_id'],
				$this->R['order_state'],
				$this->R['order_delivery'],
				$this->R['refund'],
				$this->R['is_record'],
		)=$this->getRequest()->getParam(array(
				isset($_GET['id']) ? $_GET['id']: null,
				isset($_GET['goods_id']) ? $_GET['goods_id'] : null,
				isset($_GET['order_id']) ? $_GET['order_id'] : null,
				isset($_POST['order_state']) ? $_POST['order_state'] : null,
				isset($_POST['order_delivery']) ? $_POST['order_delivery'] : null,
				isset($_POST['refund']) ? $_POST['refund'] : null,
				isset($_POST['is_record']) ? $_POST['is_record'] : null,
		));
	}
	
	public function getCount1(){
		$result=parent::select(array('COUNT(*) AS count'),
				array('where'=>array("order_state ='confirmed'","order_delivery='undelivery'")));
		return $result[0]->count;
	}
	
	public function getCount2(){
		$result=parent::select(array('COUNT(*) AS count'),
				array('where'=>array("order_state ='unconfirmed'")));
		return $result[0]->count;
	}
	
	public function getCount3(){
		$result=parent::select(array('COUNT(*) AS count'),
				array('where'=>array("order_state ='confirmed'","order_pay='unpaid'")));
		return $result[0]->count;
	}
	
	public function getCount4(){
		$result=parent::select(array('COUNT(*) AS count'),
				array('where'=>array("refund='1'")));
		return $result[0]->count;
	}
	
	public function order(){
		$orderData=$this->getRequest()->filter($this->fields);
		$orderData['date']=tool::getDate();
		$orderData['goods']=serialize($_COOKIE['cart']);
		$orderData['ordernum']=Tool::getOrderNum();	
		return parent::add($orderData);
	}
	
	public function findAll(){
		return parent::select(array('id','name','user','date','price','ordernum','order_state','order_pay','order_delivery','refund'),
				array('order'=>'id DESC','limit'=>$this->limit));
	}
	public function findAllFrontOrder(){
		$where=array("user='{$_COOKIE['user']}'");
		return parent::select(array('id','name','user','date','price','ordernum','order_state','order_delivery','order_pay','refund'),
				array('where'=>$where,'order'=>'id DESC','limit'=>$this->limit));
	}
	
	public function findOne(){
		$where=array("id='{$this->R['id']}'");
		$order=parent::select(array('id','user','name','email','tel','address',
									'buildings','code','delivery','pay',
									'price','ordernum','order_pay','order_delivery',
									'delivery_name','delivery_url','delivery_num','refund','is_record',
									'order_state','text','goods','ps','date'),
							array('where'=>$where));
		$goods=unserialize(htmlspecialchars_decode($order[0]->goods));
		if(!Validate::isArray($goods))exit('Error Operation');
		foreach($goods as $key=>$value){
			$goods[$key]=unserialize($value);
			foreach($goods[$key]['attr'] as $k=>$v){
				unset($goods[$key]['attr'][$k]);
				$goods[$key]['attr'][str_replace('　　', '', $k)]=$v;
			}
		}
		$order[0]->goods=$goods;
		return $order;
	}
	
	public function delete(){
		$where=array("id='{$this->R['id']}'","order_state='Cancelled' OR refund='2'");
		return parent::delete($where);
	}

	public function runpaid(){
		$where=array("id='{$this->R['id']}'");
		return parent::update($where, array('order_state'=>'confirmed', 'order_pay' => 'paid'));
	}
	
	public function cancel(){
		$where=array("id='{$this->R['id']}'");
		
		$order_goods=parent::select(array('id','goods'),array('where'=>$where));
		$goods=unserialize(htmlspecialchars_decode($order_goods[0]->goods));
		$this->tables=array(DB_FREFIX.'goods');
		foreach($goods as $key=>$value){
			$value=unserialize($value);
			parent::update(array("id='{$key}'"), array('inventory'=>array('inventory+'.$value[num]),'sale_count'=>array('sale_count-'.$value[num])));
		}
		$this->tables=array(DB_FREFIX.'order');
		return parent::update($where ,array('order_state'=>'Cancelled'));
	}
	
	public function refund(){
		$where=array("id='{$this->R['id']}'");
		return parent::update($where, array('refund'=>'1'));
	}
	
	public function clear(){
		$where = array("HOUR(TIMEDIFF(NOW(), date))>24 AND order_state='unconfirmed' AND order_pay='unpaid' AND order_delivery='undelivery'");
		$obj=parent::select(array('goods'),array('where'=>$where));
		$this->tables=array(DB_FREFIX.'goods');
		foreach($obj as $key=>$value){
			$goods=unserialize(htmlspecialchars_decode($value->goods));
			foreach($goods as $k=>$v){
				$temp=unserialize(htmlspecialchars_decode($v));
				parent::update(array("id='{$k}'"), array('inventory'=>array("inventory+".$temp['num']),'sale_count'=>array("sale_count-".$temp['num'])));
			}
		}
		$this->tables=array(DB_FREFIX.'order');
		$updateData['order_state']='Cancelled';
		return parent::update($where, $updateData);
	}
	
	public function update(){
		$where=array("id='{$this->R['id']}'");
		$updateData=$this->getRequest()->filter($this->fields);
		if($this->R['is_record']==0 && $this->R['order_delivery']=='Delivered'){
			$this->tables=array(DB_FREFIX.'record');
			foreach($_POST['goods_id'] as $key=>$value){
				$recordDate['goods_id']=$value;
				$recordDate['user']=$_POST['user'];
				$recordDate['name']=$_POST['goods_name'][$value];
				$recordDate['num']=$_POST['goods_num'][$value];
				$recordDate['attr']=$_POST['goods_attr'][$value];
				$recordDate['price']=$_POST['goods_price_sale'][$value];
				$recordDate['date']=tool::getDate();
				parent::add($recordDate);
			}					
		};
		if($this->R['order_state']=='Cancelled' || $this->R['refund']==2){
			$order_goods=parent::select(array('id','goods'),array('where'=>$where));
			$goods=unserialize(htmlspecialchars_decode($order_goods[0]->goods));
			$this->tables=array(DB_FREFIX.'goods');
			foreach($goods as $key=>$value){
				$value=unserialize($value);				
				parent::update(array("id='{$key}'"), array('inventory'=>array('inventory+'.$value[num]),'sale_count'=>array('sale_count-'.$value[num])));
			}					
		}
		$this->tables=array(DB_FREFIX.'order');
		$updateData['is_record']=1;
		return parent::update($where, $updateData);
	}
	
	
	public function isCart(){
		if(isset($_COOKIE['cart'])){
			return true;
		}else{
			$this->check=new Check();
			$this->check->setMessage('There is no goods in list');
			$this->check->showError();
		}
	}
	
	public function getCommendGoods(){
		$where=array("id='{$this->R['order_id']}'");
		$oneGoods=parent::select(array('goods'),array('where'=>$where,'limit'=>'1'));
		$oneGoods[0]->goods=unserialize(htmlspecialchars_decode($oneGoods[0]->goods));
		if(Validate::isArray($oneGoods[0]->goods)){
			foreach($oneGoods[0]->goods as $key=>$value)
				$oneGoods[0]->goods[$key]=unserialize(htmlspecialchars_decode($value));
		}
		$oneGoods=$oneGoods[0]->goods;
		return $oneGoods[$this->R['goods_id']];
	}
	
	public function isCommendOrder(){
		$where=array("id='{$this->R['order_id']}'");
		$result=parent::select(array('id','order_delivery'),array('where'=>$where));
		if($result[0]->order_delivery !='Delivered'){
			$check=new check();
			$this->check->setMessage('Sorry you cannot evaluate');
			$this->check->showError();
		}	
	}
	
	public function getNextId(){
		return parent::nextId();
	}
	public function total(){
		return parent::total(array("user='{$_COOKIE['user']}'"));
	}

}