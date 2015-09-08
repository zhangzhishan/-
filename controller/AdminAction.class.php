<?php
class AdminAction extends Action{
	private $manage=null;
	private $order=null;
	private $goods=null;
	public function __construct(){
		parent::__construct();
		$this->manage=new ManageModel();
		$this->order=new OrderModel();
		$this->goods=new GoodsModel();
	}
	public function index(){
		if(isset($_SESSION['admin'])){
			$this->tpl->assign('oneManage',$_SESSION['admin']);
			$this->tpl->display(ADMIN_STYLE.'public/admin.tpl');
		}else{
			
			$this->redirect->success('','?a=admin&m=runLogin');
		}
		
	}
	//Login
	public function RunLogin(){
		if(isset($_POST['send'])){
			if($this->manage->login()){
				$longer=$this->manage->getLoginer();
				$_SESSION['admin']['name']=$longer[0]->user;
				$_SESSION['admin']['level']=$longer[0]->level_name;
				$this->manage->setLoginDetails();
				$this->redirect->success('Loginsuccess','?a=admin');			
			}			
		}
		$this->tpl->display(ADMIN_STYLE.'/public/login.tpl');
	}
	//退出登录
	public function loginOut(){
		if(isset($_SESSION['admin']))session_destroy();
		$this->redirect->success('','?a=admin');
	}
	//ajax验证Login
	public function ajaxLogin(){
		echo $this->manage->isExist()=='true' ? 'false' : 'true';
 	}
 	//
 	public function ajaxPwd(){
 		echo $this->manage->ajaxPwd();
 	}

	public function main(){
		$this->tpl->assign('server',$_SERVER);
		$this->tpl->assign('os',$_ENV["OS"]);
		$this->tpl->assign('allGoodsCount',$this->goods->getAllGoodsCount());
		
		$this->tpl->assign('warnInventoryCount',$this->goods->warnInventoryCount());
		
		$this->tpl->assign('downGoodsCount',$this->goods->downGoodsCount());
		
		$this->tpl->assign('promoteGoodsCount',$this->goods->promoteGoodsCount());
		
		$this->tpl->assign('count1',$this->order->getCount1());
		
		$this->tpl->assign('count2',$this->order->getCount2());
		
		$this->tpl->assign('count3',$this->order->getCount3());
		
		$this->tpl->assign('count4',$this->order->getCount4());
		$this->tpl->display(ADMIN_STYLE.'public/main.tpl');
	}
	
}