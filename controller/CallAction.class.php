<?php
class CallAction extends Action{
	public function __construct(){
		parent::__construct();
	}
	
	public function showUpTpl(){
		$this->tpl->assign('type',$_GET['type']);
		$this->tpl->display(ADMIN_STYLE.'public/uploadfile.tpl');
	}
	
	public function upload(){
		if(isset($_FILES['userfile']['tmp_name'])){
			switch($_POST['type']){
				case 'face':
					$width=99;
					$height=100;
					$info='head portrait upload successfully';
					break;
				case 'ok':
					$width=300;
					$height=300;
					$info='picture upload successfully';
					break;
				case 'rotator':
					$width=1200;
					$height=530;
					$info='rotator pictures upload successfully';
					break;
				default :
					exit('illegal operation');
			}
			$upload= new UploadFile('userfile',$_POST['MAX_FILE_SIZE']);
			$path=$upload->getPath();		
			$thumb=new Image($path);
			$thumb->thumb($width, $height);
			$thumb->outImage();
			$upload->alertThumbClose($info,$path);
		}else{
			Tool::alertBack('Warning: unknown error');
		}
		
	}
	public function ckeditor(){
		if(isset($_FILES['upload']['tmp_name'])){
			$upload= new UploadFile('upload',$_POST['MAX_FILE_SIZE']);
			$ckefn = $_GET['CKEditorFuncNum'];
			$path = $upload->getPath();
			$thumb=new Image($path);
			$thumb->thumbCkeditor(650,0);
			$thumb->outImage();
			
			echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($ckefn,\"$path\",'picture upload successfully!');</script>";
			exit();
		}else{
			exit('Warning: unknown error');
		}
	}
}