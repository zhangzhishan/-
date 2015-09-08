<?php
class CompareAction extends Action{
	private $nav=null;
	private $goods=null;
	public function __construct(){
		parent::__construct();
		$this->nav=new NavModel();
		$this->goods=new GoodsModel();
		$this->cart=new cart();
	}
	public function index(){
		$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
		$this->tpl->assign('history',$this->goods->getHistory());
		$this->tpl->assign('url', Tool::getUrl(true));
		$this->tpl->assign('GoodsCompare',$this->goods->getGoodsCompare());
		$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
		$this->tpl->display(FRONT_STYLE.'public/compare.tpl');
	}
	
	public function deleteCompare(){
		$this->goods->deleteCompare();
		$this->redirect->success('','?a=compare',1);
	}
	
	public function clearAll(){
		$this->goods->clearAll();
		$this->redirect->success('','?a=compare',1);
	}
	
	public function ajaxClearAll(){
		if($this->goods->clearAll()){
			echo 'true';
		}else{
			echo 'false';
		}
		
	}
	
	public function setCompare(){
		$this->goods->setCompare();
		$this->redirect->success('','?a=compare',1);
	}
	
	public function clearHistory(){
		$this->goods->clearHistory();
		$this->redirect->success('',PREV_URL,1);
	}	
}