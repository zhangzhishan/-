<?php
class PriceCheck extends Check{
	public function checkAdd(&$model,Array $param){
		if(!Validate::isNumeric($_POST['price_left'])){
			$this->message[]='The left interval of price should be numeric';
			$this->flag=false;
		}
		if(!Validate::isNumeric($_POST['price_right'])){
			$this->message[]='The right interval of price should be numeric';
			$this->flag=false;
		}
		if($_POST['price_right'] < $_POST['price_left']){
			$this->message[]='The right interval of price should be larger than the left';
			$this->flag=false;
		}
		if($_POST['price_right'] == $_POST['price_left']){
			$this->message[]='The right interval of price should not be same with the left';
			$this->flag=false;
		}
		if($model->isOne($param)){
			$this->message[]='The interval of price is used!';
			$this->flag=false;
		}
		return $this->flag;
	}
	public function checkUpdate(& $model ,Array $param){
		return $this->checkAdd($model, $param);
	}

	public function isExist(& $model ,Array $param){
		return $model->isOne($param) ? 'false' : 'true';
	}
}