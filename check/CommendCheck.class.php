<?php
class CommendCheck extends Check{
	public function checkAdd(&$model,Array $param){
		if(Validate::isNullStr($_POST['content'])){
			$this->message[]='The comment should not be empty';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['content'], 200, 'max')){
			$this->message[]='The comment should shorter than 200 characrters';
			$this->flag=false;
		}
		if($model->isOne($param)){
			$this->message[]='One order can only commented once';
			$this->flag=false;
		}		
		return $this->flag;
	}
	public function checkUpdate(){
		if(Validate::checkStrLength($_POST['re_content'], 200, 'max')){
			$this->message[]='Response to comment should shorter than 200 characrters';
			$this->flag=false;
		}
		return $this->flag;
	}
}