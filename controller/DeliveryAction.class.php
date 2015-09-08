<?php
class DeliveryAction extends Action{
	public function __construct(){
		parent::__construct();
	}
	//show navigation list 
	public function index(){
		if(isset($_SESSION['admin'])){
			$this->page();
		$this->tpl->assign('allDelivery',$this->model->findAll());
		$this->tpl->display(ADMIN_STYLE.'delivery/show.tpl');
		}else{
			
			$this->redirect->success('','?a=admin&m=runLogin');
		}
		
	}
	//add a new list of data
	public function runAdd(){
		if(isset($_POST['send'])){
			if($this->model->add()){
				$this->redirect->success('add logistics company successfully','?a=delivery');
			}else{
				$this->redirect->error('add logistics company unsuccessfully');
			};
		}
		$this->tpl->display(ADMIN_STYLE.'delivery/add.tpl');
	}
	//delete a new list of data
	public function runDelete(){
		if(isset($_GET['id']) && $_GET['m']=='runDelete'){
			$this->model->delete() ? $this->redirect->success('delete logistics distribution successfully', PREV_URL) : $this->redirect->error('delete logistics distribution unsuccessfully');
		}
	}
	//modificate a new list of data
	public function runUpdate(){
		if(isset($_POST['send'])){
			$this->model->update() ? $this->redirect->success('modificate logistics distribution successfully', $_POST['prev_url']) : $this->redirect->error('modificate logistics distribution unsuccessfully');
		}
		if(isset($_GET['id'])){
			$this->tpl->assign('oneDelivery',$this->model->findOne());
			$this->tpl->assign('prev_url',PREV_URL);
			$this->tpl->display(ADMIN_STYLE.'delivery/update.tpl');
		}
	}
	//detect ajax data
	public function isExist(){
		echo $this->model->isExist();
	}
	
}