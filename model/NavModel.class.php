<?php
class NavModel extends Model{
	public function __construct(){
		parent::__construct();
		$this->fields=array('id','name','info','price','sort','sid','brand');
		$this->tables=array(DB_FREFIX.'nav');
		$this->check=new NavCheck();
		list(
				$this->R['id'],
				$this->R['navid'],
				$this->R['sid'],
				$this->R['name'],
				$this->R['attr'],
				$this->R['n'],
		)=$this->getRequest()->getParam(array(
				isset($_GET['id']) ? $_GET['id'] : null,
				isset($_GET['navid']) ? $_GET['navid'] : null,
				isset($_GET['sid']) ? $_GET['sid'] : null,
				isset($_POST['name']) ? $_POST['name'] : null,
				isset($_GET['attr']) ? $_GET['attr'] : null,
				isset($_GET['n']) ? $_GET['n'] : null,
		));
	}
	
	public function getFrontTenNav(){
		return parent::select(array('id','name','sort'),array('where'=>array("sid='0'"),'order'=>'sort ASC','limit'=>'10'));
	}
	public function getAllGoodsNav(){
		$mainNavs=$childNavs=array();
		$allFrontNavs=parent::select(array('id','name','sid'),array('order'=>'sort ASC'));
		foreach($allFrontNavs as $key=>$value){
			$value->sid==0 ? $mainNavs[]=$value : $childNavs[]=$value;
		}
		foreach($mainNavs as $key=>$value){
			foreach($childNavs as $k=>$v){
				if($value->id==$v->sid){
					$value->child[$v->id]=$v->name;
				}
			}
		}
		return $mainNavs;		
	}
	public function getFrontNav(){
		$where=array("id='{$this->R['navid']}'");
		$allFrontNavs=array();
		if(!$this->check->checkOne($this, $where))$this->check->showError('./');
		$allFrontNavs=parent::select(array('id','name','sid'),array('order'=>'sort ASC'));
		$oneFrontNav=Tree::getInstance()->getTree($allFrontNavs, $this->R['navid']);
		if(isset($oneFrontNav[0]->child)){
			$this->tables=array(DB_FREFIX.'goods');
			foreach($oneFrontNav[0]->child as $key=>$value){
				$result=parent::select(array('COUNT(*) as count'),array('where'=>array("nav='{$value->id}'")));
				$oneFrontNav[0]->child[$key]->count=$result[0]->count;
			};
			$this->tables=array(DB_FREFIX.'nav');
		}		
		return $oneFrontNav;
	}
	public function getFrontPrice(){
		$where=array("id='{$this->R['navid']}'");
		$allPrice=parent::select(array('id','price'),array('where'=>$where));
		$allPrice[0]->price=unserialize(htmlspecialchars_decode($allPrice[0]->price));
		if(!empty($allPrice[0]->price)){
			foreach($allPrice[0]->price as $key=>$value){
				unset($allPrice[0]->price[$key]);
				$k=str_replace('-', ',', $value);
				$allPrice[0]->price[$k]=$value;
			}
		};	
		return $allPrice[0];
	}
	public function getFrontBrand(){
		$where=array("id='{$this->R['navid']}'");
		$nav=parent::select(array('id','sid','brand'),array('where'=>$where));
		$this->tables=array(DB_FREFIX.'brand');
		if($nav[0]->sid==0){			
			$allBrand=parent::select(array('id','name','type'),
					array('where'=>array("type='{$nav[0]->id}'")));
		}elseif(!empty($nav[0]->brand)){
			$id=unserialize(htmlspecialchars_decode($nav[0]->brand));
			$id=str_replace(',', "','", implode(',', $id));
			$where=array("id IN ('$id')");
			$allBrand=parent::select(array('name','id','type'),array('where'=>$where));
		}
		$allBrand=tool::setFormItem($allBrand, 'id', 'name');
		$this->tables=array(DB_FREFIX.'nav');		
		return $allBrand;
	}
	public function getFrontAttr(){
		$array=array();
		$allNav=parent::select(array('id','sid'));		
		foreach($allNav as $key=>$value){
			if($value->sid==$this->R['navid']){
				$array[]=$value->id;
			}else{
				$array[]=$this->R['navid'];
			};
		}		
		$this->tables=array(DB_FREFIX.'attr');
		$allAttr=parent::select(array('name','item','id','nav'));
		$frontAttr=array();
		foreach($allAttr as $key=>$value){
			$value->nav=explode(',', $value->nav);
			if(array_intersect($array, $value->nav)){
				$value->item=explode('|', $value->item);
				$getAttr=explode('-', $this->R['attr']);
				$attrArray=array_intersect($getAttr, $value->item);
				$value->flag= $attrArray ? true :false;	
				$value->all= implode('-', array_diff($getAttr, $value->item)) ? '&attr='.implode('-', array_diff($getAttr, $value->item)) : null;				
				foreach($value->item as $k=>$v){					
					if(!Validate::isNullArray($attrArray)){
						foreach($attrArray as $val){
							$attrArray[0]=$val;
						}
						$value->temp[]=$temp=str_replace($attrArray[0], $v, $this->R['attr']);
					}elseif(!isset($this->R['attr']) || empty($this->R['attr'])){
						$value->temp[]=$v;
					}elseif(Validate::isNullArray($attrArray)){
						$value->temp[]=$this->R['attr'].'-'.$v;
					}						
				}
				$value->attr=array_combine($value->item,$value->temp);			
				$frontAttr[]=$value;
			}	
		}
		return $frontAttr;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	public function getAllMainNavs(){
		return parent::select(array('id','name','sort'),
							array('where'=>array('sid=0'),'order'=>' sort ASC')
								);
	}	
	public function findAll(){
		$where=array("sid='{$this->R['sid']}'");
		return parent::select(array('id','name','info','sort','sid','brand'),array('where'=>$where,'order'=>' sort ASC','limit'=>$this->limit));
	}
	public function add(){
		$where=array("name='{$this->R['name']}'");
		if(!$this->check->checkAdd($this,$where))$this->check->showError();
		$addData=$this->getRequest()->filter($this->fields);
		$addData['sort']=$this->nextId();
		if(!isset($_POST['brand']))$_POST['brand']=array('0'=>'1');
		$addData['brand']=serialize($_POST['brand']);
		$addData['price']=serialize($_POST['price']);
		return parent::add($addData);
	}
	public function update(){
		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkUpdate($this))$this->check->showError();
		if(!$this->check->checkOne($this,$where))$this->check->showError();		
		$updateData=$this->getRequest()->filter($this->fields);
		if(!isset($_POST['brand']))$_POST['brand']=array('0'=>'1');
		$updateData['brand']=serialize($_POST['brand']);
		$updateData['price']=serialize($_POST['price']);
		return parent::update($where,$updateData);
	}
	public function delete(){
		$where=array("id='{$this->R['id']}'");
		return parent::delete($where);
	}
	
	public function sort(){
		foreach($_POST['sort'] as $key=>$value){
			if(!is_numeric($value))continue;
			$where=array("id=$key");
			parent::update($where, array('sort'=>$value));
		}
		return true;
	}
	
	public function findOne(){
		$whereChildList=array("id='{$this->R['sid']}'");
		$whereItem=array("id='{$this->R['id']}'");
		if(isset($_GET['sid']))return parent::select(array('id','name','info','sid','sort'),array('where'=>$whereChildList,'limit'=>'1'));
		if(!$this->check->checkOne($this, $whereItem))$this->check->showError();
		$nav=parent::select(array('id','name','price','info','sid','sort','brand'),
				array('where'=>$whereItem,'limit'=>'1'));
		$nav[0]->price=unserialize(htmlspecialchars_decode($nav[0]->price));
		return $nav;
	}
	public function getUpdateBrands(){
		$updateBrands=parent::select(array('brand'),
				array('where'=>array("id='{$this->R['id']}'")));	
		if($updateBrands[0]->brand !='0'){		
			return unserialize(htmlspecialchars_decode($updateBrands[0]->brand));
		};
	}
	
	public function total(){
		$where=array("sid='{$this->R['sid']}'");
		return parent::total(array('where'=>$where));
	}
	
	public function isExist(){
		$where=array("name='{$this->R['name']}'");
		return $this->check->isExist($this,$where);
	}
	
}