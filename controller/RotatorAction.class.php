<?php
class RotatorAction extends Action{

	public function __construct(){
		parent::__construct();
	}
	public function index(){
		if(isset($_SESSION['admin'])){
					$this->page(10);
		$allRotator=$this->model->findAll();
		$this->tpl->assign('allRotator',$allRotator);
		$this->tpl->display(ADMIN_STYLE.'rotator/show.tpl');

		}else{
			
			$this->redirect->success('','?a=admin&m=runLogin');
		}
	}
	
	public function runAdd(){
		if(isset($_POST['send'])){
			if($this->model->add()){
				$this->redirect->success('add rotator successfully','?a=rotator');
			}else{
				$this->redirect->error('add rotator unsuccessfully');
			};
		}
		$this->tpl->display(ADMIN_STYLE.'rotator/add.tpl');
	}
	
	public function runUpdate(){
		if(isset($_POST['send'])) $this->model->update() ? $this->redirect->success('modificate good successfully', $_POST['prev_url']) : $this->redirect->error('modificate good unsuccessfully');
		if(isset($_GET['id'])){
			$one=$this->model->findOne();
			$this->tpl->assign('one',$one[0]);
			$this->tpl->assign('prev_url',PREV_URL);
			$this->tpl->display(ADMIN_STYLE.'rotator/update.tpl');
		}
	}
	
	public function runDelete(){
		if(isset($_GET['id']) && $_GET['m']=='runDelete'){
			$this->model->delete() ? $this->redirect->success('delete rotator successfully', PREV_URL) : $this->redirect->error('delete good unsuccessfully');
		} 
	}

	
	public function isShow(){
		if($this->model->isShow())$this->redirect->success('','?a=rotator');
	}

	
	public function runSort(){
		if(isset($_POST['send']))$this->model->sort() ? $this->redirect->success(null,PREV_URL) : $this->redirect->error('sort unsuccessfully');
	}
}