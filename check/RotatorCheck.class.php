<?php
class RotatorCheck extends Check{
	public function checkAdd(&$model,Array $param){
		if(Validate::isNullStr($_POST['name'])){
			$this->message[]='The name of rotator should not be empty';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['thumb'])){
			$this->message[]='The address of pictures should not be empty';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['name'], 20, 'max')){
			$this->message[]='The name of rotator should be shorter than 20 characrters';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['link'], 50, 'max')){
			$this->message[]='The link of website should be shorter than 50 characrters';
			$this->flag=false;
		}
		if($model->isOne($param)){
			$this->message[]='The name of rotator is used!';
			$this->flag=false;
		}
		return $this->flag;
	}
	public function checkUpdate(&$model){
		if(Validate::isNullStr($_POST['link'])){
			$this->message[]='The link of website should not be empty';
			$this->flag=false;
		}

		if(Validate::isNullStr($_POST['thumb'])){
			$this->message[]='The address of pictures should not be empty';
			$this->flag=false;
		}

		if(Validate::checkStrLength($_POST['link'], 40, 'max')){
			$this->message[]='The link of website should be shorter than 50 characrters';
			$this->flag=false;
		}

		return $this->flag;
	}
}