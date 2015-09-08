<?php
class BrandModel extends Model{

	public function __construct(){
		parent::__construct();
		$this->fields=array('id','name','url','info','reg_time','type');
		$this->tables=array(DB_FREFIX.'brand');
		$this->check=new BrandCheck();
		
		
		list(
				$this->R['id'],
				$this->R['name']
		)=$this->getRequest()->getParam(array(
				isset($_GET['id']) ? $_GET['id'] : null,
				isset($_POST['name']) ? $_POST['name'] : null,
		));
	}
	
	public function add(){
		$where=array("name='{$this->R['name']}'");
		if(!$this->check->checkAdd($this,$where))$this->check->showError();
		$addData=$this->getRequest()->filter($this->fields);
		$addData['reg_time']=Tool::getDate();
		return parent::add($addData);
	}
	
	public function update(){
		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkOne($this,$where))$this->check->showError();
		if(!$this->check->checkUpdate($this))$this->check->showError();
		$updateData=$this->getRequest()->filter($this->fields);
		return parent::update($where,$updateData);
	}
	
	public function delete(){
		$where=array("id='{$this->R['id']}'");
		return parent::delete($where);
	}
	
	public function isOne(Array $where){
		return parent::isOne($where);
	}
	
	public function findAll(){
		return parent::select(array('name','url','info','reg_time','id','type'),
				array('order'=>' reg_time DESC','limit'=>$this->limit));
	}
	
	public function getAll(){
		return parent::select(array('name','url','info','reg_time','id','type'),
				array('order'=>' reg_time DESC',));
	}
	
	public function getAllBrands(){
		$where=array("type='{$this->R['id']}'");
		return parent::select(array('id','name','url','info','type'),
				array('where'=>$where));
	}
	public function getAllUpdateBrands(){
		$this->tables=array(DB_FREFIX.'nav');
		$nav=parent::select(array('sid','id'),array('where'=>array("id='{$this->R['id']}'")));
		$this->tables=array(DB_FREFIX.'brand');
		return parent::select(array('id','name','type'),
				array('where'=>array("type='{$nav[0]->sid}'")));
	}
	
	public function findOne(){
		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkOne($this,$where))$this->check->showError();
		return parent::select(array('id','name','url','info','type'),
				array('where'=>$where,'limit'=>'1'));
	}
	
	public function isExist(){
		$where=array("name='{$this->R['name']}'");
		return $this->check->isExist($this,$where);
	}
	
	public function total(){
		return parent::total();
	}
	
	public function ajaxBrands($param){
		$temp= $this->select(array('name','id'),array('where'=>array("id IN ('$param')")));
		if(!empty($temp)){
			return urldecode(json_encode(Tool::setFormItem($temp, 'id', 'name')));
		}		
	}
}