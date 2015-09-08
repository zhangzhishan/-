<?php
class DeliveryModel extends Model{
	public function __construct(){
		parent::__construct();
		$this->fields=array('id','name','url','info','date','price_in','price_out','price_add');
		$this->tables=array(DB_FREFIX.'delivery');
		$this->check=new DeliveryCheck();
		
		list(
				$this->R['id'],
				$this->R['name'],
		)=$this->getRequest()->getParam(array(
				isset($_GET['id']) ? $_GET['id'] : null,
				isset($_POST['name']) ? $_POST['name'] : null,
		));
	}

//admin data
	public function findAll(){
		return parent::select(array('id','name','url','date','info','price_in','price_out','price_add'),array('limit'=>$this->limit));
	}
// front data 
	public function findAllDelivery(){
		return parent::select(array('id','info','name','url','price_in','price_out','price_add'));
	}
	
	public function findOne(){		
		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkOne($this,$where))$this->check->showError();
		return parent::select(array('id','name','url','info','price_in','price_out','price_add'),array('where'=>$where,'limit'=>'1'));
	}
	
	public function getOrderDelivery(){
		return parent::select(array('id','name','url','date','info'));
	}
	
	public function add(){
		$where=array("name='{$this->R['name']}'");
		if(!$this->check->checkAdd($this,$where))$this->check->showError();
		$addData=$this->getRequest()->filter($this->fields);
		$addData['date']=Tool::getDate();
		return parent::add($addData);
	}
	
	public function update(){
		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkOne($this,$where))$this->check->showError();
		if(!$this->check->checkUpdate($this,array("id<>'{$this->R['id']}'","name='{$this->R['name']}'")))$this->check->showError();			
		$updateData=$this->getRequest()->filter($this->fields);
		return parent::update($where,$updateData);
	}
	
	public function delete(){
		$where=array("id='{$this->R['id']}'");
		return parent::delete($where);
	}

	
	public function total(){
		return parent::total();
	}
	
	public function isExist(){
		$where=array("name='{$this->R['name']}'","id<>'{$this->R['id']}'");
		return $this->check->isExist($this,$where);
	}
	
}