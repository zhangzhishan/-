<?php
class CommendAction extends Action{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		if(isset($_SESSION['admin'])){
			$this->page();
		$allCommned=$this->model->getAll();
		$this->tpl->assign('allCommend',$allCommned);
		$this->tpl->display(ADMIN_STYLE.'commend/show.tpl');
		}else{
			
			$this->redirect->success('','?a=admin&m=runLogin');
		}
		
	}
	
	public function runDelete(){
		if(isset($_GET['id']) && $_GET['m']=='runDelete'){
			$this->model->delete() ? $this->redirect->success('delete comment successfully', PREV_URL) : $this->redirect->error('delete comment unsuccessfully');
		}
	} 
	public function runUpdate(){	
		if(isset($_POST['send'])) $this->model->update() ? $this->redirect->success('modificate comment successfully', $_POST['url']) : $this->redirect->error('modificate comment unsuccessfully');
		if(isset($_GET['id'])){
			$oneCommend=$this->model->getOne();
			$this->tpl->assign('oneCommend',$oneCommend[0]);
			$this->tpl->assign('star',array(
					'5'=>'★★★★★',
					'4'=>'★★★★',
					'3'=>'★★★',
					'2'=>'★★',
					'1'=>'★'
			));
			$this->tpl->assign('prev_url',PREV_URL);
			$this->tpl->display(ADMIN_STYLE.'commend/update.tpl');
		}
		
	}
	
	
	public function isExist(){
		echo $this->model->isExist();
	}
	
	
}