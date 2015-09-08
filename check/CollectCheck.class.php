<?php
class CollectCheck extends Check{
	public function checkAdd(&$model,Array $param){
		if($model->isOne($param)){
			$this->message[]='You have already collected the goods';
			$this->flag=false;
		}
		return $this->flag;
	}
}









