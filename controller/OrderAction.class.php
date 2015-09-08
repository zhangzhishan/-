<?php
class OrderAction extends Action{
	private $delivery=null;
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		if(isset($_SESSION['admin'])){
			parent::page();
		$this->tpl->assign('allOrder',$this->model->findAll());
		$this->tpl->display(ADMIN_STYLE.'order/show.tpl');
		}else{
			
			$this->redirect->success('','?a=admin&m=runLogin');
		}
		
	}
	//delete a list of data
	public function runDelete(){
		if(isset($_GET['id']) && $_GET['m']=='runDelete'){
			$this->model->delete() ? $this->redirect->success('delete order successfully', PREV_URL) : $this->redirect->error('Delete order unsuccessfully, please make sure the order is cancelled!');
		}
	}
	//cancel order without operation in 24 hours  
	public function clear(){
		$this->model->clear() ? $this->redirect->success('clear order successfully', PREV_URL) : $this->redirect->error('clear order unsuccessfully');		
	}

	
	public function runUpdate(){
		$this->delivery=new DeliveryModel();
		if(isset($_POST['send'])) $this->model->update() ? $this->redirect->success('modificate order successfully', $_POST['prev_url']) : $this->redirect->error('modificate order unsuccessfully');
		if(isset($_GET['id'])){
			$oneOrder=$this->model->findOne();
			$this->tpl->assign('oneOrder',$oneOrder);
			$this->tpl->assign('prev_url',PREV_URL);
			$this->tpl->assign('allDelivery',$this->delivery->getOrderDelivery());
			$this->tpl->display(ADMIN_STYLE.'order/update.tpl');
		}
	}
	
}