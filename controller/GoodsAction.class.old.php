<?php
class GoodsAction extends Action{
	private $nav;
	private $brand;
	private $attr;
	public function __construct(){
		parent::__construct();
		$this->nav=new NavModel();
		$this->brand=new BrandModel();
		$this->attr=new AttrModel();
	}
	public function index(){
		if(isset($_SESSION['admin'])){
			$this->page(10);
		$allGoods=$this->model->findAll();
		$this->tpl->assign('allGoods',$allGoods);
		$this->tpl->display(ADMIN_STYLE.'goods/show.tpl');
		}else{
			
			$this->redirect->success('','?a=admin&m=runLogin');
		}
		
	}
	//add a new list of data
	public function runAdd(){
		if(isset($_POST['send'])){
			if($this->model->add()){
				$this->redirect->success('add goods successfully','?a=goods');
			}else{
				$this->redirect->error('add goods unsuccessfully');
			};
		}
		$this->tpl->assign('goodsNav',$this->nav->getAllGoodsNav());
		$this->tpl->display(ADMIN_STYLE.'goods/add.tpl');
	}
	//modificate a list of data
	public function runUpdate(){
		if(isset($_POST['send'])) $this->model->update() ? $this->redirect->success('modificate goods successfully', $_POST['prev_url']) : $this->redirect->error('modificate goods unsuccessfully');
		if(isset($_GET['id'])){
			$oneGoods=$this->model->findOne();
			$this->tpl->assign('oneGoods',$oneGoods[0]);
			$this->tpl->assign('prev_url',PREV_URL);
			$this->tpl->assign('goodsNav',$this->nav->getAllGoodsNav());
			$this->tpl->assign('bool',array(1=>'YES',0=>'NO'));
			$this->tpl->display(ADMIN_STYLE.'goods/update.tpl');
		}
	}
	//delete a list of data
	public function runDelete(){
		if(isset($_GET['id']) && $_GET['m']=='runDelete'){
			$this->model->delete() ? $this->redirect->success('delete good successfully', PREV_URL) : $this->redirect->error('delete good unsuccessfully');
		} 
	}
	//detect ajax data
	public function isExist(){
		echo $this->model->isExist();
	}
	//detect ajax data update
	public function isUpExist(){
		echo $this->model->isUpExist();
	}
	//ajax refresh brands
	public function ajaxBrands(){
		$id=$this->nav->getUpdateBrands();
		if(!empty($id)){
			$in=implode("','",$id);
			echo $this->brand->ajaxBrands($in);
		}			
	}
	//get good attribute
	public function ajaxGetAttr(){
		echo $this->attr->getGoodsAttr();
	}
	//up or down a good
	public function isUP(){
		if($this->model->isUp())$this->redirect->success('','?a=goods');
	}
	//promote good or not 
	public function isPromote(){
		if($this->model->isPromote())$this->redirect->success('','?a=goods');
	}
	//recommend good or not
	public function isRecommend(){
		if($this->model->isRecommend())$this->redirect->success('','?a=goods');
	}
}