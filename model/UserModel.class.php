<?php
class UserModel extends Model{
	public function __construct(){
		parent::__construct();
		$this->fields=array('id','user','pwd','thumb','question','answer','email','reg_time','login_time');
		$this->tables=array(DB_FREFIX.'user');
		$this->check=new UserCheck();
				
		list(
				$this->R['id'],
				$this->R['user'],
				$this->R['pwd'],
		)=$this->getRequest()->getParam(array(
				isset($_GET['id']) ? $_GET['id']: $_COOKIE['userid'],
				isset($_POST['user']) ? $_POST['user'] : null,
				isset($_POST['pwd']) ? $_POST['pwd'] : null,
		));
	}
	public function add(){
		$where=array("user='{$this->R['user']}'");
		if(!$this->check->checkAdd($this,$where))$this->check->showError();
		$addData=$this->getRequest()->filter($this->fields);
		$addData['pwd']=sha1($addData['pwd']);
		$addData['login_time']=Tool::getDate();
		$addData['reg_time']=Tool::getDate();
		
		return parent::add($addData);
	}
	
	public function delete(){
		$where=array("id='{$this->R['id']}'");
		return parent::delete($where);
	}
	
	public function update(){
		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkOne($this,$where))$this->check->showError();
		if(!$this->check->checkUpdate($this))$this->check->showError();
		$updateData=$this->getRequest()->filter($this->fields);
		$updateData['pwd']=sha1($updateData['pwd']);
		return parent::update($where,$updateData);
	}

	
	public function update2(){
		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkOne($this,$where))$this->check->showError();
		if(!$this->check->checkUpdate($this))$this->check->showError();
		$updateData=$this->getRequest()->filter($this->fields);
		return parent::update($where,$updateData);
	}
	
	public function findAll(){
		$this->tables=array(DB_FREFIX.'manage a',DB_FREFIX.'level b');
		return parent::select(array('a.id','a.user','a.level','a.login_count','a.last_time','a.last_ip','b.level_name'),
				array('where'=>array('a.level=b.id'),'order'=>' a.reg_time DESC','limit'=>$this->limit));
	}
	
	public function findOne(){

		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkOne($this,$where))$this->check->showError();
		return parent::select(array('id','user','reg_time','login_time','thumb','email'),array('where'=>$where,'limit'=>'1'));
	}
	
	public function login(){
		$where=array("user='{$this->R['user']}'","pwd='".sha1($this->R['pwd'])."'");
		if(!$this->check->checkLogin($this, $where)){
			$this->check->showError('',1);
		}else{
			return true;
		};
	}
	
	public function getLoginer(){
		$where=array("user='{$this->R['user']}'");
		return parent::select(array('id','user','thumb'),
								array('where'=>$where,'limit'=>'1'));
	}
	
	public function loginOut(){
		setcookie('user','');
		setcookie('userid','');
		return true;
	}
	
	public function setLoginDetails($userid) {
		$where = array("user='{$this->R['user']}'");
		if(isset($_POST['keep'])){
			setcookie('user',$this->R['user'],time()+604800);
			setcookie('userid',$userid,time()+604800);
		}else{
			setcookie('user',$this->R['user']);
			setcookie('userid',$userid);
		}
		$updateData['last_ip'] = Tool::getIP();
		$updateData['login_time'] = Tool::getDate();
		parent::update($where, $updateData);
	}
	
	public function isExist(){
		$where=array("user='{$this->R['user']}'");
		return $this->check->isExist($this,$where);
	}

	
	public function isUpdateExist(){
		$where=array("user='{$this->R['user']}'","id<>'{$_COOKIE['userid']}'");
		return $this->check->isExist($this,$where);
	}


	
	public function ajaxPwd(){
		$where=array("user='{$this->R['user']}'","pwd='".sha1($this->R['pwd'])."'");
		return $this->check->checkPwd($this,$where);
	}

	
	public function total(){
		return parent::total();
	}


	
	public function fileUser($file) {
		foreach ($file as $key=>$value) {

			if(!is_object($value)){
				$user = parent::select(array('id,user,thumb'),
						array('where'=>array("thumb='upload/{$_GET['file']}/$value'")));
			
				if (!Validate::isNullArray($user)) {
					$user[0]->pic = $value;
					$user[0]->link='user';
					$user[0]->name=$user[0]->user.'[<strong style="color:green;font-size:12px;">Picture</strong>]';
					$file[$key] = $user[0];
				}
			}						
		}
		return $file;
	}
}