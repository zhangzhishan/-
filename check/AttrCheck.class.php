<?php
class AttrCheck extends Check{
	public function checkAdd(&$model,Array $param){
		if(Validate::checkStrLength($_POST['name'], 2, 'min')){
			$this->message[]='The name of attribute should be longer than 2 characrters';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['name'])){
			$this->message[]='The name of attribute should not be empty';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['name'], 4, 'max')){
			$this->message[]='The name of attribute should be shorter than 4 characrters';
			$this->flag=false;
		}
		if($model->isOne($param)){
			$this->message[]='The name of attribute is used';
			$this->flag=false;
		}
		return $this->flag;
	}
	public function checkUpdate(&$model,Array $param){
		return $this->checkAdd($model, $param);
	}
	//ajax detect data
	public function isExist(& $model ,Array $param){
		return $model->isOne($param) ? 'false' : 'true';
	}
}