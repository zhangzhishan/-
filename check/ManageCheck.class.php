<?php
class ManageCheck extends Check{
	public function checkAdd(&$model,Array $param){
		if(Validate::checkStrLength($_POST['user'], 2, 'min')){
			$this->message[]='The name of administrator should be longer than 2 characrters';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['user'], 20, 'max')){
			$this->message[]='The name of administrator should be shorter than 2 characrters';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['pwd'], 6, 'min')){
			$this->message[]='The password should be longer than 6 characrters';
			$this->flag=false;
		}
		if(!Validate::checkStrEquals($_POST['pwd'], $_POST['notpwd'])){
			$this->message[]='The password and confirmation should be compatible';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['level'])){
			$this->message[]='The level of administrator should not be empty';
			$this->flag=false;
		}
		if($model->isOne($param)){
			$this->message[]='The user is uesd!';
			$this->flag=false;
		}
		return $this->flag;
	}
	public function checkUpdate(&$model){
		if(Validate::checkStrLength($_POST['pwd'], 6, 'min')){
			$this->message[]='The password should be longer than 6 characrters';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['pwd'])){
			$this->message[]='The password should not be empty';
			$this->flag=false;
		}
		if(!Validate::checkStrEquals($_POST['pwd'], $_POST['notpwd'])){
			$this->message[]='The password and confirmation should be compatible';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['level'])){
			$this->message[]='The level of administrator should not be empty';
			$this->flag=false;
		}
		return $this->flag;	
	}
	//检查Login数据
	public function checkLogin(&$model,Array $param){
		if(Validate::checkStrLength($_POST['user'], 2, 'min')){
			$this->message[]='The name of administrator should be longer than 2 characrters';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['user'], 20, 'max')){
			$this->message[]='The name of administrator should be shorter than 20 characrters';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['pwd'], 6, 'min')){
			$this->message[]='The password should be longer than 6 characrters';
			$this->flag=false;
		}
		if(!$model->isOne($param)){
			$this->message[]='the user or passward is error';
			$this->flag=false;
		}
		return $this->flag;
	}
	
	public function isExist(& $model ,Array $param){
		 return $model->isOne($param) ? 'false' : 'true';		 
	}

	public function checkPwd(& $model,Array $param){
		return $model->isOne($param) ? 'true' : 'false';
	}
}









