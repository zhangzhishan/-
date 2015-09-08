<?php
class TPL extends Smarty {
	
	private static $instance;
	
	static public function getInstance() {
		if (! (self::$instance instanceof self)) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	
	public function __clone () {
	}
	
	public function __construct(){
		parent::__construct();
		$this->setConfigs();
	}
	
	private function setConfigs(){
		$this->setCacheDir(SMARTY_SETCACHEDIR);
		$this->setTemplateDir(SMARTY_SETTEMPLATEDIR);
		$this->setCompileDir(SMARTY_SETCOMPILEDIR);
		$this->setConfigDir(SMARTY_SETCONFIGDIR);
		$this->caching=SMARTY_CACHING;
		
		$this->cache_lifetime=SMARTY_CACHE_LIFETIME;
	}
	
}




?>