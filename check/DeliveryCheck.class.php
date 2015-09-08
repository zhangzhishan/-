<?php
class DeliveryCheck extends Check{
	public function checkAdd(&$model,Array $param){
		if(Validate::isNullStr($_POST['name'])){
			$this->message[]='The name of logistics company should not be empty';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['url'])){
			$this->message[]='The URL of logistics company should not be empty';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['url'], 40, 'max')){
			$this->message[]='The URL of brand should be shorter than 40 characrters';
			$this->flag=false;
		}
		if(!Validate::isNumeric($_POST['price_in'])){
			$this->message[]='The start-up cost intra-province should be numeric';
			$this->flag=false;
		}
		
		if(!Validate::isNumeric($_POST['price_out'])){
			$this->message[]='The start-up cost outside the province should be numeric';
			$this->flag=false;
		}
	
		if(!Validate::isNumeric($_POST['price_add'])){
			$this->message[]='Additional cost should be numeric';
			$this->flag=false;
		}
		if($model->isOne($param)){
			$this->message[]='The logistics company is used!';
			$this->flag=false;
		}
		return $this->flag;
	}
	public function checkUpdate(& $model ,Array $param){
		return $this->checkAdd($model, $param);
	}
	//ajax detect data
	public function isExist(& $model ,Array $param){
		return $model->isOne($param) ? 'false' : 'true';
	}
}