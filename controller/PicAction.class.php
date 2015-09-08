<?php

class PicAction extends Action {
	
	public function __construct() {
		parent::__construct();
		$this->goods = new GoodsModel();
		$this->rotator=new RotatorModel();
		$this->user=new UserModel();
	}
	
	public function index() {
		if(isset($_SESSION['admin'])){
			$dirPath = opendir(dirname(dirname(__FILE__)).'/upload/');
		$dirName = '';
		$dirArr = array();
		while (!!$dirName = readdir($dirPath)) {
			if ($dirName != '.' && $dirName != '..') {
				$dirArr[$dirName.' together '.(count(scandir(dirname(dirname(__FILE__)).'/upload/'.$dirName.'/')) - 2).' sheets'] = $dirName;
			}				
		}
		$this->tpl->assign('dir', $dirArr);
		$this->tpl->display(ADMIN_STYLE.'pic/show.tpl');
		}else{
			
			$this->redirect->success('','?a=admin&m=runLogin');
		}
		
	}
	
	public function runDelete(){
		if (isset($_GET['dir']) && isset($_GET['name'])) {
			unlink(dirname(dirname(__FILE__)).'/upload/'.$_GET['dir'].'/'.$_GET['name']);
			$this->redirect->success('delete file successfully',PREV_URL);
		}
	}
	
	public function file() {
		if (isset($_GET['file'])) {
			$file = scandir(dirname(dirname(__FILE__)).'/upload/'.$_GET['file'].'/');
			 $fileObj=$this->rotator->fileRotator($this->goods->fileGoods($file));
			 $fileObj=$this->user->fileUser($fileObj);

			$this->tpl->assign('file', $fileObj);
			
			$this->tpl->display(ADMIN_STYLE.'pic/file.tpl');
		}
	}

	
	public function delDir(){
		if (isset($_GET['file'])) {
			$dirPath = dirname(__DIR__).'/upload/'.$_GET['file'];
			rmdir($dirPath);
			$this->redirect->success('delete directory successfully',PREV_URL);
		}
	}
	
	
}
?>
