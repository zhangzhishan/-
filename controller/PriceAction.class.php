<?php
class PriceAction extends Action{
	private $brand=null;
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		if(isset($_SESSION['admin'])){
					$this->page();
		$this->tpl->assign('allPrice',$this->model->findAll());
		$this->tpl->display(ADMIN_STYLE.'price/show.tpl');

		}else{
			
			$this->redirect->success('','?a=admin&m=runLogin');
		}
	}
	
	public function runSort(){
		if(isset($_POST['send']))$this->model->sort() ? $this->redirect->success(null,PREV_URL) : $this->redirect->error('sort unsuccessfully');
	}
	
	public function runAdd(){
		if(isset($_POST['send'])){
			if($this->model->add()){
				$this->redirect->success('add price interval successfully','?a=price');
			}else{
				$this->redirect->error('add price interval unsuccessfully');
			};
		}
		$this->tpl->display(ADMIN_STYLE.'price/add.tpl');
	}
	
	public function runDelete(){
		if(isset($_GET['id']) && $_GET['m']=='runDelete'){
			$this->model->delete() ? $this->redirect->success('delete price interval successfully', PREV_URL) : $this->redirect->error('delete price interval unsuccessfully');
		}
	}
	
	public function runUpdate(){
		if(isset($_POST['send'])){
			$this->model->update() ? $this->redirect->success('modificate price interval successfully', $_POST['prev_url']) : $this->redirect->error('modificate price interval unsuccessfully');
		}
		if(isset($_GET['id'])){
			$this->tpl->assign('onePrice',$oneNav=$this->model->findOne());
			$this->tpl->assign('prev_url',PREV_URL);
			$this->tpl->display(ADMIN_STYLE.'price/update.tpl');
		}
	}
	
	public function isExist(){
		echo $this->model->isExist();
	}
	
}