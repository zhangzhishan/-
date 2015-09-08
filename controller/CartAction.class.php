<?php
class CartAction extends Action{
	private $nav=null;
	private $cart=null;
	private $order=null;
	private $address=null;
	private $goods=null;
	private $delivery=null;
	public function __construct(){
		parent::__construct();
		if (!isset($_COOKIE['user'])) $this->redirect->success('Must log in before shopping','?a=user&m=login',1);
		$this->nav=new NavModel();
		$this->cart=new Cart();
		$this->order=new OrderModel();
		$this->address=new AddressModel();
		$this->goods=new GoodsModel();
		$this->delivery=new DeliveryModel();
	}
	public function index(){
		$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
		$this->tpl->assign('frontProduct',$this->cart->getProduct());
		$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
		$this->tpl->display(FRONT_STYLE.'public/cart.tpl');
	}
	
	public function addProduct(){
		if($this->cart->addProduct())$this->redirect->success('','?a=cart');
	}
	public function changeNum(){
		if($this->cart->changeNum())echo true;
	}
	public function deleteProduct(){
		if($this->cart->deleteProduct())$this->redirect->success('','?a=cart');
	}
	public function clearProduct(){
		if($this->cart->clearProduct())$this->redirect->success('','?a=cart');
	}
	
	public function flow(){
		if($this->order->isCart()){
			if($this->goods->isFlow()){
				$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
				$this->tpl->assign('frontProduct',$this->cart->getProduct());
				$this->tpl->assign('frontUser',$this->address->findOne());
				$this->tpl->assign('frontDelivery',$this->delivery->findAllDelivery());
				$this->tpl->display(FRONT_STYLE.'public/flow.tpl');
			}
		}
	}
	
	public function order(){
		$this->order->isCart();	
		if(isset($_POST['send'])){
				$id=$this->order->getNextId();
				if($this->order->order()){
					
					$this->goods->setInventory();
					
					$this->cart->clearProduct();				
					if($_POST['pay']=='Alipay'){
						$this->redirect->success('','?a=user&m=paypal&id='.$id,1);
					}elseif($_POST['pay']=='bank transfer'){
						$this->redirect->success('','?a=user&m=transfer&id='.$id,1);
					}elseif($_POST['pay']=='pay on delivery'){
						$this->redirect->success('','?a=user&m=cash&id='.$id,1);
					}				
				}
			}
		}
}