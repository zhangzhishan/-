<?php
class GoodsCheck extends Check{
	public function checkAdd(&$model,Array $param){
		if(Validate::isNullStr($_POST['name'])){
			$this->message[]='The name of good should not be empty';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['nav'])){
			$this->message[]='The type of good should not be empty';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['sn'])){
			$this->message[]='The serial number of good should not be empty';
			$this->flag=false;
		}
		if(!Validate::isNumeric($_POST['weight'])){
			$this->message[]='The weight of good should be numeric';
			$this->flag=false;
		}
		if(!Validate::isNumeric($_POST['price_sale'])){
			$this->message[]='The sale price of good should be numeric';
			$this->flag=false;
		}
		if(!Validate::isNumeric($_POST['price_market'])){
			$this->message[]='The market price of good should be numeric';
			$this->flag=false;
		}
		if(!Validate::isNumeric($_POST['price_cost'])){
			$this->message[]='The cost price of good should be numeric';
			$this->flag=false;
		}
		if(!Validate::isNumeric($_POST['inventory'])){
			$this->message[]='The inventory should be numeric';
			$this->flag=false;
		}
		if(!Validate::isNumeric($_POST['warn_inventory'])){
			$this->message[]='The warn inventory should be numeric';
			$this->flag=false;
		}
		
		if(Validate::checkStrLength($_POST['name'], 20, 'max')){
			$this->message[]='The name of good should be shorter than 20 characrters';
			$this->flag=false;
		}
		
		if($model->isOne($param)){		
			$this->message[]='The good is used!';
			$this->flag=false;
		}
		return $this->flag;
	}
	//set error information
	public function setMessage($info){
		$this->message[]=$info;
	}
	public function checkUpdate($model,Array $param){
		if(Validate::isNullStr($_POST['name'])){
			$this->message[]='The name of good should not be empty';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['nav'])){
			$this->message[]='The type of good should not be empty';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['sn'])){
			$this->message[]='The serial number of good should not be empty';
			$this->flag=false;
		}
		if(!Validate::isNumeric($_POST['weight'])){
			$this->message[]='The weight of good should be numeric';
			$this->flag=false;
		}
		if(!Validate::isNumeric($_POST['price_sale'])){
			$this->message[]='The sale price of good should be numeric';
			$this->flag=false;
		}
		if(!Validate::isNumeric($_POST['price_market'])){
			$this->message[]='The market price of good should be numeric';
			$this->flag=false;
		}
		if(!Validate::isNumeric($_POST['price_cost'])){
			$this->message[]='The cost price of good should be numeric';
			$this->flag=false;
		}
		if(!Validate::isNumeric($_POST['inventory'])){
			$this->message[]='The inventory should be numeric';
			$this->flag=false;
		}
		if(!Validate::isNumeric($_POST['warn_inventory'])){
			$this->message[]='The warn inventory should be numeric';
			$this->flag=false;
		}
		
		if(Validate::checkStrLength($_POST['name'], 20, 'max')){
			$this->message[]='The name of good should be shorter than 20 characrters';
			$this->flag=false;
		}
		
		return $this->flag;
		
	}
	public function checkDelete(&$model,$requestData){
		if(!$model->isOne($requestData)){
			$this->message='Can not find the administrator to be deleted';
			$this->flag=false;
		}
		return $this->flag;
	}
	
	public function isExist(& $model ,Array $param){
		return $model->isOne($param) ? 'false' : 'true';
	}
}