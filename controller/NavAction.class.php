<?php
class NavAction extends Action{
	private $brand=null;
	private $price=null;
	public function __construct(){
		parent::__construct();
		$this->brand=new BrandModel();
		$this->price=new PriceModel();
	}
	//show navigation list
	public function index(){
		if(isset($_SESSION['admin'])){
			$this->page();
		$flag=false;
		if(isset($_GET['sid'])){
			$this->tpl->assign('oneNav',$this->model->findOne());
			$this->tpl->assign('prev_url',PREV_URL);
			$flag=true;			
		}
		$this->tpl->assign('flag',$flag);
		$allNav=$this->model->findAll();
		if($flag){
			$allBrands=$this->brand->getAll();			
			foreach($allNav as $key=>$value){
				if(!empty($value->brand)){
					$value->brand=unserialize(htmlspecialchars_decode($value->brand));
				};
				if(Validate::isArray($value->brand)){
					$temp=$value->brand;
					$value->brand='';
					foreach($temp as $val){
						foreach($allBrands as $k=>$v){
							if($val==$v->id)$value->brand[$k]=$v->name;	
						}
					}
				}
				$value->brand= Validate::isArray($value->brand) ? implode(',', $value->brand) : 'other brand';
			}		
		}
		
		$this->tpl->assign('allNav',$allNav);
		$this->tpl->display(ADMIN_STYLE.'nav/show.tpl');
		}else{
			
			$this->redirect->success('','?a=admin&m=runLogin');
		}
		
	}
	//to sort data
	public function runSort(){
		if(isset($_POST['send']))$this->model->sort() ? $this->redirect->success(null,PREV_URL) : $this->redirect->error('sort fault');
	}
	//add a new list of data
	public function runAdd(){
		if(isset($_POST['send'])){
			if($this->model->add()){
				$this->redirect->success('add navigation list successfully',$_POST['prev_url']);
			}else{
				$this->redirect->error('add navigation list unsuccessfully');
			};
		}
		$this->tpl->assign('allPrice',$this->price->getAllNavPrice());		
		$this->tpl->assign('prev_url',PREV_URL);
		isset($_GET['id']) ? $oneNav=$this->model->findOne() : $oneNav= '';
		$allBrands=Tool::setFormItem($this->brand->getAllBrands(), 'id', 'name');
		$allBrands['1']='other brand';
		$this->tpl->assign('allBrands',$allBrands);
		$this->tpl->assign('oneNav',$oneNav);
		$this->tpl->display(ADMIN_STYLE.'nav/add.tpl');
	}
	//delete a list of data
	public function runDelete(){
		if(isset($_GET['id']) && $_GET['m']=='runDelete'){
			$this->model->delete() ? $this->redirect->success('delete navigation successfully', PREV_URL) : $this->redirect->error('delete navigation unsuccessfully');
		}
	}
	//modification a list of data
	public function runUpdate(){
		if(isset($_POST['send'])){
			$this->model->update() ? $this->redirect->success('modificate navigation successfully', $_POST['url']) : $this->redirect->error('modificate navigation unsuccessfully');
		}
		if(isset($_GET['id'])){
			$oneNav=$this->model->findOne();
			$allBrands=Tool::setFormItem($this->brand->getAllUpdateBrands(), 'id', 'name');
			$allBrands['1']='other brand';
			$this->tpl->assign('allPrice',$this->price->getAllNavPrice());
			$this->tpl->assign('allBrands',$allBrands);
			$this->tpl->assign('updateBrands',$this->model->getUpdateBrands());
			$this->tpl->assign('oneNav',$oneNav[0]);
			$this->tpl->assign('prev_url',PREV_URL);
			$this->tpl->display(ADMIN_STYLE.'nav/update.tpl');
		}
	}
	//delete a list of data
	public function isExist(){
		echo $this->model->isExist();
	}
	
}