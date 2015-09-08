<?php
class AddressCheck extends Check{
	public function checkAdd(&$model,Array $param){
		if(Validate::isNullStr($_POST['name'])){
			$this->message[]='The name of receiver should be longer than 2 characrters';
			$this->flag=false;
		}
		if(!Validate::isLength($_POST['code'], 6)){
			$this->message[]='The zip code should be 6 characrters';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['name'], 20, 'max')){
			$this->message[]='The name of receiver should be shorter than 20 characrters';
			$this->flag=false;
		}
		if(!Validate::checkEmail($_POST['email'])){
			$this->message[]='The email format is wrong!';
			$this->flag=false;
		}
		if($model->isOne($param)){
			$this->message[]='The name of receiver is used!';
			$this->flag=false;
		}
		return $this->flag;
	}
	public function checkUpdate(&$model,Array $param){
		return $this->checkAdd($model, $param);
	}
	public function isExist(& $model ,Array $param){
		 return $model->isOne($param) ? 'false' : 'true';		 
	}
}