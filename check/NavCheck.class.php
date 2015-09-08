<?php
class NavCheck extends Check{
	public function checkAdd(&$model,Array $param){
		if(Validate::checkStrLength($_POST['name'], 2, 'min')){
			$this->message[]='The name of navigation should be longer than 2 characrters';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['name'], 40, 'max')){
			$this->message[]='The name of navigation should be shorter than 40 characrters';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['info'], 200, 'max')){
			$this->message[]='The information of navigation should be shorter than 200 characrters';
			$this->flag=false;
		}
		
		if($model->isOne($param)){
			$this->message[]='The navigation is used!';
			$this->flag=false;
		}
		return $this->flag;
	}
	public function checkUpdate(){
		if(Validate::checkStrLength($_POST['info'], 200, 'max')){
			$this->message[]='The information of navigation should be shorter than 200 characrters';
			$this->flag=false;
		}
		return $this->flag;
	}

	public function isExist(& $model ,Array $param){
		return $model->isOne($param) ? 'false' : 'true';
	}
}