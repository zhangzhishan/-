<?php
class AttrAction extends Action{
	private $nav=null;
	public function __construct(){
		parent::__construct();
		$this->nav=new NavModel();
	}
	public function index(){
		if(isset($_SESSION['admin'])){
			$this->tpl->assign('allAttr',$this->model->findAll());
			$this->tpl->display(ADMIN_STYLE.'attr/show.tpl');
		}else{
			
			$this->redirect->success('','?a=admin&m=runLogin');
		}
		
	}
	public function runAdd(){
		if($_POST['send']){
			$this->model->add() ? $this->redirect->success('add attribute successfully','?a=attr') : $this->redirect->error('add attribute unsuccessfully');
		}
		$this->tpl->assign('way',array(0=>'singleselection',1=>'doubleselection'));
		$this->tpl->assign('allNav',$this->nav->getAllGoodsNav());
		$this->tpl->display(ADMIN_STYLE.'attr/add.tpl');
	}	
	
	public function runDelete(){
		if(isset($_GET['id']) && $_GET['m']=='runDelete'){
			$this->model->delete() ? $this->redirect->success('delete attribute successfully', PREV_URL) : $this->redirect->error('delete attribute unsuccessfully');
		}
	}
	
	public function runUpdate(){
		if(isset($_POST['send']))$this->model->update() ? $this->redirect->success('modificate successfully',$_POST['prev_url']) : $this->redirect->error('modificate unsuccessfully');
		if(isset($_GET['id']) && $_GET['m']=='runUpdate'){
			$this->tpl->assign('oneAttr',$this->model->findOne());
			$this->tpl->assign('way',array(0=>'singleselection',1=>'doubleselection'));
			$this->tpl->assign('allNav',$this->nav->getAllGoodsNav());
			$this->tpl->assign('prev_url',PREV_URL);
			$this->tpl->display(ADMIN_STYLE.'attr/update.tpl');
		}
		
	}
	
	public function isExist(){
		echo $this->model->isExist();
	}	
}