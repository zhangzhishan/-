<?php
class Check extends Validate{
	//to check the validation
	protected $flag=true;
	//to save the error information
	protected $message=array();
	//to save the samrty object
	private $tpl=null;
	public function __construct(){
		$this->tpl=new TPL();
	}
	//show error page
	public function showError($url='',$type=0){
		if(empty($url)){
			$this->tpl->assign('message',$this->message);
			$this->tpl->assign('prev_url',PREV_URL);
			if($type==0){
				$this->tpl->display(ADMIN_STYLE.'public/error.tpl');
			}else{
				$this->tpl->display(ADMIN_STYLE.'public/error_index.tpl');
			}
			
			exit();
		}else{
			Redirect::getInstance()->success('','./');
		}
		
	}
	//set the error information manually
	public function setMessage($_message) {
		$this->message[] = $_message;
	}
	//check the data when modify data
	public function checkOne(Model &$model,Array $requestData){
		if(!$model->isOne($requestData)){
			$this->message='Cannot find the specified data';
			$this->flag=false;
		}
		return $this->flag;
	}
	
	
}