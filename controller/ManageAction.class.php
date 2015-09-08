<?php
class ManageAction extends Action{
	private $level;
	public function __construct(){
		parent::__construct();
		$this->level=new LevelModel();
	}
	public function index(){
		if(isset($_SESSION['admin'])){
					$this->page();
		$allManage=$this->model->findAll();
		$this->tpl->assign('allManage',$allManage);
		$this->tpl->display(ADMIN_STYLE.'manage/show.tpl');

		}else{
			
			$this->redirect->success('','?a=admin&m=runLogin');
		}
	}
	//delete a list of data
	public function runDelete(){
		if(isset($_GET['id']) && $_GET['m']=='runDelete'){
			$this->model->delete() ? $this->redirect->success('delete administrator successfully', PREV_URL) : $this->redirect->error('delete administrator unsuccessfully');
		}
	} 
	public function runAdd(){		
		if(isset($_POST['send'])){
			if($this->model->add()){
				$this->redirect->success('add administrator successfully','?a=manage');
			}else{
				$this->redirect->error('add administrator unsuccessfully');
			};
		}
		$this->tpl->assign('allLevel',Tool::setFormItem($this->level->findAll(), 'id', 'level_name'));
		$this->tpl->display(ADMIN_STYLE.'manage/add.tpl');
	}
	public function runUpdate(){	
		if(isset($_POST['send'])) $this->model->update() ? $this->redirect->success('modificate administrator successfully', $_POST['url']) : $this->redirect->error('modificate administrator unsuccessfully');
		if(isset($_GET['id'])){
			$this->tpl->assign('allLevel',Tool::setFormItem($this->level->findAll(), 'id', 'level_name'));
			$oneManage=$this->model->findOne();
			$this->tpl->assign('oneManage',$oneManage[0]);
			$this->tpl->assign('prev_url',PREV_URL);
			$this->tpl->display(ADMIN_STYLE.'manage/update.tpl');
		}
		
	}
	//ajax detect data
	public function isExist(){
		echo $this->model->isExist();
	}
	
	
}