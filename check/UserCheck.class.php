<?php
class UserCheck extends Check{
	public function checkAdd(&$model,Array $param){
		if(Validate::checkStrLength($_POST['user'], 2, 'min')){
			$this->message[]='The name of user should be longer than 2 characrters';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['user'], 20, 'max')){
			$this->message[]='The name of user should be shorter than 20 characrters';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['pwd'], 6, 'min')){
			$this->message[]='The password should be longer than 6 characrters';
			$this->flag=false;
		}
		if(!Validate::checkStrEquals($_POST['pwd'], $_POST['notpwd'])){
			$this->message[]='The password and confirmation code should be compatible';
			$this->flag=false;
		}
		if(!Validate::checkEmail($_POST['email'])){
			$this->message[]='The format of email is incorrect';
			$this->flag=false;
		}
		if($model->isOne($param)){
			$this->message[]='the user is used!';
			$this->flag=false;
		}
		return $this->flag;
	}

	public function checkUpdate(&$model){
		if(Validate::checkStrLength($_POST['user'], 2, 'min')){
			$this->message[]='The name of user should be longer than 2 characrters';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['user'], 20, 'max')){
			$this->message[]='The name of user should be shorter than 20 characrters';
			$this->flag=false;
		}
		return $this->flag;	
	} 


	public function checkLogin(&$model,Array $param){
	if(Validate::checkStrLength($_POST['user'], 2, 'min')){
			$this->message[]='The name of user should be longer than 2 characrters';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['user'], 20, 'max')){
			$this->message[]='The name of user should be shorter than 20 characrters';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['pwd'], 6, 'min')){
			$this->message[]='The password should be longer than 6 characrters';
			$this->flag=false;
		}
		if(!$model->isOne($param)){
			$this->message[]='The user name or password is incorrect!';
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