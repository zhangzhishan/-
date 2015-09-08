<?php
class UserAction extends Action{
	private $nav;
	private $address;
	private $order;
	private $commend;
	private $collect;
	private $goods;
	public function __construct(){
		parent::__construct();
		$this->nav=new NavModel();
		$this->address=new AddressModel();
		$this->order=new OrderModel();
		$this->goods=new GoodsModel();
		$this->commend=new CommendModel();
		$this->collect=new CollectModel();
		$this->cart=new cart();
	}
	public function index(){
		$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
		$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
		// $this->tpl->assign('user',$this->model->findOne()[0]);
		$this->tpl->assign('user',$this->model->findOne());
		$this->tpl->display(FRONT_STYLE.'public/user.tpl');
	}
	public function reg(){
		if(isset($_POST['send'])){
			if($this->model->add()){
				$this->redirect->success('register member successfully ','?a=user&m=login',1);
			}else{
				$this->redirect->error('register member unsuccessfully',1);
			};
		}
		$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
		$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
		$this->tpl->display(FRONT_STYLE.'public/reg.tpl');
	}

	public function update(){
		if(isset($_POST['send'])){
			if($this->model->update()){
				$this->redirect->success('modificate member successfully','?a=user',1);
			}else{
				$this->redirect->error('modificate member unsuccessfully',1);
			};
		}
	}

	public function update2(){
		if(isset($_POST['send'])){
			if($this->model->update2()){
				$this->redirect->success('modificate member successfully','?a=user',1);
			}else{
				$this->redirect->error('modificate member unsuccessfully',1);
			};
		}
	}
	public function login(){
		// echo "ddd";
		// var_dump($_POST);
		// echo $_POST;
		if(isset($_POST['send'])){
			// echo "sss";
			if($this->model->login()){
				$longer=$this->model->getLoginer();
				$this->model->setLoginDetails($longer[0]->id);
				$this->redirect->success('Login successfully','?a=index',1);
			}
		}
		$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
		$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
		$this->tpl->display(FRONT_STYLE.'public/login.tpl');
	}
	public function loginOut(){
		$this->model->loginOut() ? $this->redirect->success('','./') : $this->redirect->error('exit unsuccessfuly',1);
	}
	public function mycollect(){
		$this->page(12,$this->collect);
		$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
		$this->tpl->assign('allCollect',$this->collect->getAllCollect());
		$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
		$this->tpl->display(FRONT_STYLE.'public/user_mycollect.tpl');
	}
	public function addCollect(){
		if(isset($_COOKIE['user'])){
			$this->collect->runAdd() ? $this->redirect->success('','?a=user&m=mycollect',1) : $this->redirect->error('collect unsuccessfully',1);
		}else{
			$this->redirect->error('Please  operate after log in again<a href="?a=user&m=login">[Login]</a>',1);
		}	
	}
	public function deleteCollect(){
		if(isset($_GET['id']))$this->collect->delete() ? $this->redirect->success('','?a=user&m=mycollect',1) : $this->redirect->error('operate unsuccessfully',1);
	}
	public function address(){		
		if(isset($_POST['send']) && !isset($_GET['id']))$this->address->add() ? $this->redirect->success('add successfully','?a=user&m=address',1) : $this->redirect->error('add unsuccessfully',1);
		if(isset($_POST['send']) && isset($_GET['id'])) $this->address->update() ? $this->redirect->success('modificate successfully','?a=user&m=address',1) : $this->redirect->error('modificate unsuccessfully',1);
		$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
		$this->tpl->assign('frontUser',$this->address->findOne());
		$this->tpl->assign('allAddress',$this->address->findAll());
		$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
		$this->tpl->display(FRONT_STYLE.'public/user_address.tpl');
	}
	public function selected(){
		if(isset($_GET['id']))$this->address->selected() ? $this->redirect->success('','?a=user&m=address') : $this->redirect->error('operate unsuccessfully',1);
	}
	public function runDelete(){
		if(isset($_GET['id']))$this->address->delete() ? $this->redirect->success('','?a=user&m=address') : $this->redirect->error('operate unsuccessfully',1);
	}
	public function order(){
		$this->page(10,$this->order);
		$this->tpl->assign('allOrder',$this->order->findAllFrontOrder());
		$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
		$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
		$this->tpl->display(FRONT_STYLE.'public/user_order.tpl');
		
	}
	public function paypal(){
		if(isset($_GET['id'])){
			
			$this->tpl->assign('oneOrder',$this->order->findOne());
			$this->tpl->assign('history',$this->goods->getHistory());
			$this->tpl->assign('hotSale',$this->goods->getHotSale());
			$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
			$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
			$this->tpl->display(FRONT_STYLE.'public/user_paypal.tpl');	
		}
	}
	public function transfer(){
		if(isset($_GET['id'])){
			$this->tpl->assign('oneOrder',$this->order->findOne());
			$this->tpl->assign('history',$this->goods->getHistory());
			$this->tpl->assign('hotSale',$this->goods->getHotSale());
			$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
			$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
			$this->tpl->display(FRONT_STYLE.'public/user_transfer.tpl');
		}
	}
	public function cash(){
		if(isset($_GET['id'])){
			$this->tpl->assign('oneOrder',$this->order->findOne());
			$this->tpl->assign('history',$this->goods->getHistory());
			$this->tpl->assign('hotSale',$this->goods->getHotSale());
			$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
			$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
			$this->tpl->display(FRONT_STYLE.'public/user_cash.tpl');
		}
	}
	public function order_details(){
		if(!$this->order->findOne())exit('illegal operation');
		$this->tpl->assign('oneOrder',$this->order->findOne());
		$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
		$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
		$this->tpl->display(FRONT_STYLE.'public/user_order_details.tpl');
	}
	public function commend(){
		if(isset($_POST['send']))$this->commend->add() ? $this->redirect->success('',PREV_URL) : $this->redirect->error('comment unsuccessfully',1);
		if(isset($_GET['goods_id']) && isset($_GET['order_id'])){
			$this->order->isCommendOrder();
			$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
			$this->tpl->assign('oneGoods',$this->order->getCommendGoods());
			$this->tpl->assign('oneCommend',$this->commend->findOne());
			$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
			$this->tpl->display(FRONT_STYLE.'public/user_commend.tpl');
		}
	}
	public function mycommend(){
		$this->page('20',$this->commend);
		$this->tpl->assign('allCommend',$this->commend->getAllUserCommend());
		//var_dump($this->commend->getAllUserCommend());
		$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
		$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
		$this->tpl->display(FRONT_STYLE.'public/user_mycommend.tpl');
	}
	public function cancel(){
		if(isset($_GET['id'])){
			$this->order->cancel() ? $this->redirect->success('','?a=user&m=order') : $this->redirect->error('error executing',1);
		} 
	}
	public function runpaid()
	{
		if(isset($_GET['id'])){
			$this->order->runpaid() ? $this->redirect->success('pay successfully', PREV_URL) : $this->redirect->error('pay unsuccessfully');
		}
	}
	public function refund(){
		if(isset($_GET['id'])){
			$this->order->refund() ? $this->redirect->success('',PREV_URL) : $this->redirect->error('error executing',1);
		}
	}
	public function deleteOrder(){
		if(isset($_GET['id'])){
			$this->order->delete() ? $this->redirect->success('','?a=user&m=order') : $this->redirect->error('Please confirm whether or not the order has been cancelled',1);
		}
	}

	
	public function isExist(){
		echo $this->model->isExist();
	}

	
	public function isUpdateExist(){
		echo $this->model->isUpdateExist();
	}
	
	
	public function ajaxLogin(){
		echo $this->model->isExist()=='true' ? 'false' : 'true';
	}
	
}