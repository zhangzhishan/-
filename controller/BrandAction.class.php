<?php
class BrandAction extends Action{
	private $nav=null;
	public function __construct(){
		parent::__construct();
		$this->nav=new NavModel();
	}
	public function index(){
		if(isset($_SESSION['admin'])){
			$this->page();
		$allFrand=$this->model->findAll();
		$allMainNavs=$this->nav->getAllMainNavs();
		foreach($allFrand as $key=>$value){
			foreach($allMainNavs  as $k=>$v){
				if($value->type==$v->id){
					$value->type=$v->name;
				}
			}
		}
		foreach($allFrand as $value){
			if($value->type=='0')$value->type='special type';
		}
		$this->tpl->assign('allFrand',$allFrand);
		$this->tpl->display(ADMIN_STYLE.'brand/show.tpl');
		}else{
			
			$this->redirect->success('','?a=admin&m=runLogin');
		}
		
	}
	
	public function runAdd(){
		if(isset($_POST['send'])){
			if($this->model->add()){
				$this->redirect->success('add brand successfully','?a=brand');
			}else{
				$this->redirect->error('add brand unsuccessfully');
			};
		}
		$this->tpl->assign('allMainNavs',Tool::setFormItem($this->nav->getAllMainNavs(), 'id', 'name'));
		$this->tpl->display(ADMIN_STYLE.'brand/add.tpl');
	}
	
	public function runUpdate(){
		if(isset($_POST['send'])) $this->model->update() ? $this->redirect->success('modification brand successfully', $_POST['prev_url']) : $this->redirect->error('modification brand unsuccessfully');
		if(isset($_GET['id'])){
			$oneBrand=$this->model->findOne();
			$this->tpl->assign('oneBrand',$oneBrand[0]);
			$this->tpl->assign('prev_url',PREV_URL);
			$this->tpl->assign('allMainNavs',Tool::setFormItem($this->nav->getAllMainNavs(), 'id', 'name'));
			$this->tpl->display(ADMIN_STYLE.'brand/update.tpl');
		}
	}
	
	public function runDelete(){
		if(isset($_GET['id']) && $_GET['m']=='runDelete'){
			$this->model->delete() ? $this->redirect->success('delete brand successfully', PREV_URL) : $this->redirect->error('delete brand unsuccessfully');
		}
	}
	
	public function isExist(){
		echo $this->model->isExist();
	}
}