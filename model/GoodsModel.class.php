<?php
class GoodsModel extends Model{
	public function __construct(){
		parent::__construct();
		$this->fields=array('id','nav','brand','name','attr','thumb_small',
				'sn','price_sale','price_market','weight','price_cost',
				'keyword','unit','unit','thumb','content','is_up','is_promote','is_recommend',
				'is_freight','inventory','warn_inventory');
		$this->tables=array(DB_FREFIX.'goods');
		$this->check=new GoodsCheck();
		
		list(
				$this->R['id'],
				$this->R['navid'],
				$this->R['goodsid'],
				$this->R['sn'],
				$this->R['act'],
				$this->R['name'],
				$this->R['price'],
				$this->R['brand'],
				$this->R['attr'],
		)=$this->getRequest()->getParam(array(
				isset($_GET['id']) ? $_GET['id'] : null,
				isset($_GET['navid']) ? $_GET['navid'] : null,
				isset($_GET['goodsid']) ? $_GET['goodsid'] : null,
				isset($_GET['sn']) ? $_GET['sn'] : null,
				isset($_GET['act']) ? $_GET['act'] : null,
				isset($_POST['name']) ? $_POST['name'] : null,
				isset($_GET['price']) ? $_GET['price'] : null,
				isset($_GET['brand']) ? $_GET['brand'] : null,
				isset($_GET['attr']) ? $_GET['attr'] : null,
		));
	}
	public function add(){
		$where=array("name='{$this->R['name']}'");
		if(!$this->check->checkAdd($this,$where))$this->check->showError();
		$addData=$this->getRequest()->filter($this->fields);
		$addData['date']=Tool::getDate();
		$attr='';
		if($addData['attr']){
			foreach($addData['attr'] as $key=>$value ){
				$attr .=$key.':';
				foreach($value as $v){
					$attr .=$v.'|';
				}
				$attr=substr($attr, 0,'-1').';';
			}
			$addData['attr']=substr($attr,0,-1);
		}		
		return parent::add($addData);
	}
	
	public function update(){
		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkOne($this,$where))$this->check->showError();

		if(!$this->check->checkUpdate($this,array("id<>'{$this->R['id']}'","sn='{$this->R['sn']}'")))$this->check->showError();
		$updateData=$this->getRequest()->filter($this->fields);
		$updateData['thumb_small']='';		
		if(!Validate::isNullArray($updateData['attr'])){
			$attr='';
			foreach($updateData['attr'] as $key=>$value ){
				$attr .=$key.':';
				foreach($value as $v){
					$attr .=$v.'|';
				}
				$attr=substr($attr, 0,'-1').';';					
			}
			$updateData['attr']=substr($attr,0,-1);	
		}		
		return parent::update($where,$updateData);
	}
	
	public function findAll(){
		$this->tables=array(DB_FREFIX.'goods a',DB_FREFIX.'nav b');
		$allGoods=parent::select(array('a.id','a.name','a.nav','a.sn','a.price_sale','a.brand','a.inventory','a.is_up','a.is_promote','a.is_recommend','b.name AS nav'),
				array('where'=>array('a.nav=b.id '),'order'=>' a.is_up DESC,a.date DESC','limit'=>$this->limit));
		$this->tables=array(DB_FREFIX.'brand');
		$allBrand=Tool::setFormItem(parent::select(array('name','id'),array('order'=>'reg_time DESC')), 'id', 'name');
		foreach($allGoods as $key=>$value){
			if($value->brand==0){
				$value->brand='other brands';
			}else{
				$value->brand=$allBrand[$value->brand];
			}
		}
		$this->tables=array(DB_FREFIX.'goods');
		
		return $allGoods;
	}
	
	public function searchGoods(){
		if(isset($_POST['search'])){
			$this->tables=array(DB_FREFIX.'goods a',DB_FREFIX.'nav b');
			if($_POST['way']=='nav'){
				$allGoods=parent::select(array('a.id','a.name','a.nav','a.sn','a.price_sale','a.thumb_small',
						'a.brand','a.inventory','a.is_up','a.is_promote','a.is_recommend','a.sale_count',
						'(SELECT COUNT(*) FROM mengranzhang_wbsd14_ass2_commend c WHERE c.goods_id=a.id) AS count'
						),
						array('where'=>array('a.nav=b.id ',"b.name LIKE '%{$_POST['content']}%'"),'order'=>'a.date DESC','limit'=>$this->limit));
				$this->tables=array(DB_FREFIX.'goods');
			}else{
				$allGoods=parent::select(array('a.id','a.name','a.nav','a.sn','a.price_sale','a.thumb_small',
						'a.brand','a.inventory','a.is_up','a.is_promote','a.is_recommend',
						),
						array('where'=>array('a.nav=b.id ',"a.name LIKE '%{$_POST['content']}%'"),'order'=>'a.date DESC','limit'=>$this->limit));
			}			
			return $allGoods;
		}
	}
	
	public function fileGoods($file) {
		foreach ($file as $key=>$value) {
			if(!is_object($value)){
				$goods = parent::select(array('id,nav,name'),
						array('where'=>array("thumb='upload/{$_GET['file']}/$value' OR
						thumb_small='upload/{$_GET['file']}/$value' OR
								content LIKE '%upload/{$_GET['file']}/$value%'")));


				if (!Validate::isNullArray($goods)) {
					$goods[0]->pic = $value;
					$goods[0]->name=$goods[0]->name.'[<strong style="color:green;font-size:12px;">Goods </strong>]';
					$file[$key] = $goods[0];
				}
			}						
		}
		return $file;
	}
	
	public function getAllGoodsCount(){
		$result=parent::select(array('COUNT(*) AS count'),
				array('where'=>array("is_up='1'")));
		return $result[0]->count;
	}
	
	public function warnInventoryCount(){
		$result=parent::select(array('COUNT(*) AS count'),
				array('where'=>array("inventory<=warn_inventory")));
		return $result[0]->count;
	}
	
	public function downGoodsCount(){
		$result=parent::select(array('COUNT(*) AS count'),
				array('where'=>array("is_up=0")));
		return $result[0]->count;
	}
	
	public function promoteGoodsCount(){
		$result=parent::select(array('COUNT(*) AS count'),
				array('where'=>array("is_promote=0")));
		return $result[0]->count;
	}
	
	public function getHotSale(){	
		$this->tables=array(DB_FREFIX.'goods a',DB_FREFIX.'nav b');
		$allGoods=parent::select(array('a.id','a.name','a.nav','a.sn','a.sale_count','a.thumb_small','a.price_sale','a.brand','a.inventory','a.is_up'),
				array('where'=>array('a.nav=b.id '),'order'=>' a.sale_count DESC','limit'=>5));
		//"MONTH(NOW())=DATE_FORMAT(date,'%c')";
		$this->tables=array(DB_FREFIX.'goods');
		return $allGoods;
	}
	
	public function getPromoteGoods(){
		$this->tables=array(DB_FREFIX.'goods g');
		$allGoods=parent::select(array('g.id','g.name','g.nav','g.sn','g.price_sale','g.price_market','g.brand','g.sale_count','g.inventory','g.is_up','g.is_promote','g.thumb_small','(SELECT COUNT(*) FROM mengranzhang_wbsd14_ass2_commend c WHERE c.goods_id=g.id) AS count'),
				array('where'=>array('is_promote=1'),'order'=>' is_up DESC,date DESC'));
		$this->tables=array(DB_FREFIX.'goods');
		return $allGoods;
		
	}
	
	public function getRecommendGoods(){
		$this->tables=array(DB_FREFIX.'goods g');
		$allGoods=parent::select(array('g.id','g.name','g.nav','g.sn','g.price_sale','g.price_market','g.brand','g.sale_count','g.inventory','g.is_up','g.is_promote','g.thumb_small','(SELECT COUNT(*) FROM mengranzhang_wbsd14_ass2_commend c WHERE c.goods_id=g.id) AS count'),
				array('where'=>array('is_recommend=1'),'order'=>' is_up DESC,date DESC'));
		$this->tables=array(DB_FREFIX.'goods');
		return $allGoods;
	
	}
	
	public function findOne(){
		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkOne($this,$where))$this->check->showError();
		return parent::select(array('id','nav','brand','attr','name','sn','price_sale','price_market','weight','price_cost','keyword','unit','unit','thumb','content','is_up','is_promote','is_recommend','is_freight','inventory','warn_inventory'),
				array('where'=>$where,'limit'=>'1'));
	}
	
	public function getDetailsGoods(){
		$where=array("id='{$this->R['goodsid']}'");
		if(!$this->check->checkOne($this,$where))$this->check->showError();
		$goods=parent::select(array('id','nav','brand','attr','name','sn','price_sale','price_market','weight','price_cost','keyword','unit','unit','thumb','thumb_small','content','is_up','is_freight','inventory','warn_inventory'),
				array('where'=>$where,'limit'=>'1'));
		$this->tables=array(DB_FREFIX.'brand');
		$allBrand=Tool::setFormItem(parent::select(array('id','name')), 'id', 'name');
		if($goods[0]->brand==0 || $goods[0]->brand==1){
			$goods[0]->brand='other brands';
		}else{
			$goods[0]->brand=$allBrand[$goods[0]->brand];
		}		
		
		$goods[0]->content=htmlspecialchars_decode($goods[0]->content);
		$this->tables=array(DB_FREFIX.'goods');
		
		if (isset($_COOKIE['history'][$goods[0]->id])) {
			setcookie('record['.$_oneGoods[0]->id.']', '', time() - 60 * 60 * 24 * 7);
		}
		setcookie('history['.$goods[0]->id.']',serialize(array(
			'goodsid'=>$goods[0]->id,
			'navid'=>$goods[0]->nav,
			'name'=>$goods[0]->name,
			'thumb_small'=>$goods[0]->thumb_small,
			'price_sale'=>$goods[0]->price_sale,
		)),time()+24*60*60*7);
		if(isset($_COOKIE['history'])){
			$keys=array_keys($_COOKIE['history']);
			if(count($keys)>5){
				setcookie('history['.$keys[0].']','',time()-7*24*60*60);
			}
		}
		return $goods;
	}
	
	public function getHistory(){
		$history=array();
		if(isset($_COOKIE['history'])){
			foreach($_COOKIE['history'] as $key=>$value){
				$history[$key]=unserialize($value);
			}
		}
		return array_reverse($history);
	}
	
	public function setCompare(){
		if(isset($_COOKIE['compare'])){
			if($this->R['navid']==current($_COOKIE['compare'])){
				setcookie('compare['.$this->R['goodsid'].']',$this->R['navid'],time()+24*60*60*7);
			}else{
				$this->check->setMessage('Cannot compare different categories goods');
				$this->check->showError('',1);
			}
		}else{
			setcookie('compare['.$this->R['goodsid'].']',$this->R['navid'],time()+24*60*60*7);
		}	
	}
	
	public function deleteCompare(){
		if($this->R[id] && isset($_COOKIE['compare'])){
			setcookie('compare['.$this->R['id'].']','',time()-24*60*60*7);
		}
	}
	
	public function clearAll(){
		if (isset($_COOKIE['compare'])) {
			foreach ($_COOKIE['compare'] as $_key=>$_value) {
				setcookie('compare['.$_key.']', '', time() - 60 * 60 * 24 * 7);
			}
		}
		return true;
	}
	
	public function getGoodsCompare(){
		if(isset($_COOKIE['compare'])){
			arsort($_COOKIE['compare']);
			$key=array_keys($_COOKIE['compare']);
			$id=implode("','", $key);
			$this->tables=array(DB_FREFIX.'goods g');
			$allGoods=parent::select(array('id','name','thumb','attr',
					'(SELECT name FROM mengranzhang_wbsd14_ass2_brand c WHERE c.id=g.brand) AS brand',
					'price_sale','price_market','unit','sn','weight',
					'sale_count','thumb_small',
					'nav','(SELECT COUNT(*) FROM mengranzhang_wbsd14_ass2_commend c WHERE c.goods_id=g.id) AS count'),
					array('where'=>array("id IN ('$id')",'is_up=1'),'limit'=>3));
			$this->tables=array(DB_FREFIX.'goods');
			return $allGoods;
		}		
	}
	
	public function clearHistory(){
		if (isset($_COOKIE['history'])) {
			foreach ($_COOKIE['history'] as $_key=>$_value) {
				setcookie('history['.$_key.']', '', time() - 60 * 60 * 24 * 7);
			}
		}
		return true;
	}
	
	public function delete(){
		$where=array("id='{$this->R['id']}'");
		return parent::delete($where);
	}
	
	public function isUp(){
		if(!Validate::isNullStr($this->R['id']) && !Validate::isNullStr($this->R['act'])){
			if($this->R['act']=='up'){
				return parent::update(array("id='{$this->R['id']}'"), array('is_up'=>'1'));
			}elseif($this->R['act']=='down'){
				return parent::update(array("id='{$this->R['id']}'"), array('is_up'=>'0'));
			}
		}
	}
	
	public function isPromote(){
		if(!Validate::isNullStr($this->R['id']) && !Validate::isNullStr($this->R['act'])){
			if($this->R['act']=='yes'){
				return parent::update(array("id='{$this->R['id']}'"), array('is_promote'=>'1'));
			}elseif($this->R['act']=='no'){
				return parent::update(array("id='{$this->R['id']}'"), array('is_promote'=>'0'));
			}
		}
	}
	
	public function isRecommend(){
		if(!Validate::isNullStr($this->R['id']) && !Validate::isNullStr($this->R['act'])){
			if($this->R['act']=='yes'){
				return parent::update(array("id='{$this->R['id']}'"), array('is_recommend'=>'1'));
			}elseif($this->R['act']=='no'){
				return parent::update(array("id='{$this->R['id']}'"), array('is_recommend'=>'0'));
			}
		}
	}
	
	public function getListGoods(){
		$id=$this->getId();
		$priceSql='';
		$attrSql='';
		$brandSql='';
		$attrSql='';
		if($this->R['price']){
			$priceSql='AND price_sale BETWEEN '.str_replace(',', ' AND ', $this->R['price']);
		}
		if($this->R['brand']){
			$brandSql=' AND brand='.$this->R['brand'];
		}
		if($this->R['attr']){
// 			$attrSql =str_replace('-', '%', $this->R['attr']);
// 			$attrSql =" AND attr LIKE '%$attrSql%'";
			$temp=explode('-',$this->R['attr']);
			foreach($temp as $key=>$value){
				$attrSql.=" AND attr LIKE '%$value%' " ;
			}
		}
		$this->tables=array(DB_FREFIX.'goods g');
		$allGoods=parent::select(array('id','name','thumb','price_sale','price_market','unit','sale_count','thumb_small','nav','(SELECT COUNT(*) FROM mengranzhang_wbsd14_ass2_commend c WHERE c.goods_id=g.id) AS count'),
				array('where'=>array("nav IN ('$id') $priceSql $brandSql $attrSql",'is_up=1'),'order'=>'date DESC','limit'=>$this->limit));	
		$this->tables=array(DB_FREFIX.'goods');
		foreach($allGoods as $value){
			// die(var_dump($value->thumb_small));
			
			// var_dump($value);
			// var_dump(!Validate::isNullStr($value->thumb_small));
			// var_dump(!Validate::isNullStr($value->thumb));
			// // die('old');
			// die(var_dump(Validate::isNullStr($value->thumb_small) and !Validate::isNullStr($value->thumb)));
			if(Validate::isNullStr($value->thumb_small) and !Validate::isNullStr($value->thumb)){
				// die(var_dump($value->thumb_small));
				$img=new Image($value->thumb);
				$img->thumb(220, 220);
				$img->outImage('220x220');			
				parent::update(array("id='{$value->id}'"), array('thumb_small'=>$img->getPath()));
				$value->thumb_small=$img->getPath();
			}
			
		}
		return $allGoods;
		
	}
	
	public function isFlow(){
		$goods=array();
		foreach($_COOKIE['cart'] as $key=>$value){
			$temp=unserialize(stripcslashes($value));
			$goods[$key]=(object)null;
			$goods[$key]->num=$temp['num'];
			$goods[$key]->name=$temp['name'];
		};
		$flag=false;
		foreach($goods as $key=>$value){
			$where=array("id='{$key}'","inventory<{$value->num}");
			$obj=parent::select(array('id','inventory'),array('where'=>$where));			
			if(!!$obj){
				$this->check->setMessage($value->name.'Less stock,the number of stock：'.$obj[0]->inventory);
				$flag=true;
			}
		}
		if($flag){
			$this->check->showError();
		}
		return true;
	}
	
	public function setInventory(){
		$goods=array();
		foreach($_COOKIE['cart'] as $key=>$value){
			$temp=unserialize(stripcslashes($value));
			$goods[$key]=(object)null;
			$goods[$key]->num=$temp['num'];
			$goods[$key]->name=$temp['name'];
		};
		foreach($goods as $key=>$value){
			$where=array("id='{$key}'");
			echo $value->num;
			parent::update($where, array('inventory'=>array('inventory-'.$value->num),'sale_count'=>array('sale_count+'.$value->num)));
		}		
	}
	// in ()
	public function getId(){
		$resultGoods=array();
		$id='';
		$this->tables=array(DB_FREFIX.'nav');
		$allNav=parent::select(array('id','name','sid'),array('order'=>' sort DESC'));
		foreach($allNav as $value){
			if($value->sid==$this->R['navid']){
				$id .=$value->id.',';
			}
		}
		$this->tables=array(DB_FREFIX.'goods');
		$id= empty($id) ? $this->R['navid'] : str_replace(',', "','", substr($id, 0,-1));
		return $id;
	}
	
	public function isExist(){
		$where=array("sn='{$this->R['sn']}'");
		return $this->check->isExist($this,$where);
	}
	public function isUpExist(){
		$where=array("sn='{$this->R['sn']}'","id<>'{$this->R['id']}'");
		return $this->check->isExist($this,$where);
	}
	
	public function total(){
			if($this->getId()){
				$where=array('where'=>array("nav IN ('{$this->getId()}')"));
				return parent::total($where);
			}elseif($_POST['way']=='nav' && isset($_POST['content'])){
				$this->tables=array(DB_FREFIX.'goods a',DB_FREFIX.'nav b');
				$where=array("b.name LIKE '%{$_POST['content']}%'");
				$this->tables=array(DB_FREFIX.'goods');
				return parent::total($where);
			}else{
				$where='';
				return parent::total($where);
			};
			
		
		
	}
}