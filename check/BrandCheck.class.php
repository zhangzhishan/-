<?php
class BrandCheck extends Check{
	public function checkAdd(&$model,Array $param){
		if(Validate::isNullStr($_POST['name'])){
			$this->message[]='The name of brand should not be empty';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['type'])){
			$this->message[]='The type of brand should not be empty';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['url'])){
			$this->message[]='The URL of brand should not be empty';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['name'], 20, 'max')){
			$this->message[]='The name of brand should be shorter than 20 characrters';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['info'], 200, 'max')){
			$this->message[]='The brief introduction of brand should be shorter than 20 characrters';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['url'], 40, 'max')){
			$this->message[]='The URL of brand should be shorter than 40 characrters';
			$this->flag=false;
		}
		if($model->isOne($param)){
			$this->message[]='The brand is used!';
			$this->flag=false;
		}
		return $this->flag;
	}
	public function checkUpdate(&$model){
		if(Validate::isNullStr($_POST['url'])){
			$this->message[]='The URL of brand should not be empty';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['type'])){
			$this->message[]='The type of brand should not be empty';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['info'], 200, 'max')){
			$this->message[]='The brief introduction of brand should be shorter than 20 characrters';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['url'], 40, 'max')){
			$this->message[]='The URL of brand should be shorter than 40 characrters';
			$this->flag=false;
		}
		return $this->flag;
	}
	//ajax detect data
	public function isExist(& $model ,Array $param){
		return $model->isOne($param) ? 'false' : 'true';
	}
}