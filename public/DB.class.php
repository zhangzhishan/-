<?php
class DB{
	private $pdo;
	static private $instance=null;
	private $limit;
	static protected  function getInstance() {
		if (! (self::$instance instanceof self)) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	private function __clone(){}
	private function __construct(){
		
		try {
			$this->pdo=new PDO(DB_DSN,DB_USER,DB_PWD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>DB_CHARESET));
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			exit($e->getMessage());
		}
	}
	
	protected function add($addData,$tables){
		$addFields=array();
		$addValues=array();
		foreach ($addData as $key=>$value){
			$addFields[]=$key;
			$addValues[]=$value;
		}	
		$addFields=implode(',', $addFields);
		$addValues=implode("','", $addValues);
		$sql="INSERT INTO $tables[0] ($addFields)VALUES('$addValues')";
		return $this->execute($sql)->rowCount();		
	}
	
	protected function delete(Array $deleteData,$tables){
		$where='';
		foreach ($deleteData as $key=>$value){
			$where .="$value AND ";
		}
		$where=substr($where, 0,-4);
		$sql="DELETE FROM $tables[0] WHERE $where LIMIT 1";	
		return $this->execute($sql)->rowCount();
		
	}
	
	protected function update($where,$updateData,$tables){
		$isWhere=$setData='';
		foreach ($updateData as $key=>$value){
			if(Validate::isArray($value)){
				$setData .="$key=$value[0],";
			}else{
				$setData .="$key='$value',";
			}
			
		} 
		foreach ($where as $key=>$value){
			$isWhere .=$value.' AND ';
		}
		$isWhere=substr($isWhere, 0,-4);
		$setData=substr($setData, 0,-1);		
		$sql="UPDATE $tables[0] SET $setData WHERE $isWhere";
		return $this->execute($sql)->rowCount();
	}
	
	protected function select(Array $selectFields,Array $param,$tables){
		$limit=$order=$where=$fromTables=$like='';
		$fields=implode(',', $selectFields);
					
		if(!Validate::isNullArray($param)){
			$limit=isset($param['limit']) ? ' LIMIT  '.$param['limit'] : '';
			$order=isset($param['order']) ? ' ORDER BY '.$param['order'] : '';
			
			if(isset($param['where'])){
				$isAnd='';
				foreach ($param['where'] as $value){
					$isAnd .=$value.' AND ';
				}
				$where=' WHERE '.substr($isAnd, 0,-4);
			}
			if(isset($param['like'])){
				foreach($param['like'] as $key=>$value){
					$like= " WHERE $key LIKE '%$value%'";
				}
			}
		}
		
		foreach($tables as $value){
			$fromTables .=$value.' ,';
		}
		$fromTables=substr($fromTables,0,-1);
		$sql="SELECT $fields FROM $fromTables $where $like $order $limit ";
		$stmt=$this->execute($sql);
		$result=array();
		while(!!$obj=$stmt->fetchObject()){
			$result[]=$obj;
		};		
		return Tool::setHtmlString($result);
	}
	
	protected function total($tables,$param){
		$where = '';
		if (isset($param['where'])) {
			foreach ($param['where'] as $key=>$value) {
				$where .= $value.' AND ';
			}
			$where = 'WHERE '.substr($where, 0, -4);
		}
		$sql="SELECT COUNT(*) AS count FROM $tables[0] $where";
		$stmt=$this->execute($sql);
		return $stmt->fetchObject()->count;
	}
	
	protected function setLimit($limit){
		$this->limit=$limit;
	}
	
	protected function isOne(Array $where,$tables){
		$isAnd='';
		foreach ($where as $key=>$value){
			$isAnd .="$value AND ";
		}
		$isAnd=substr($isAnd, 0,-4);
		$sql="SELECT id FROM $tables[0] WHERE $isAnd LIMIT 1";
		return $this->execute($sql)->rowCount();
	}
	 
	protected function nextId($tables){
		$sql="SHOW TABLE STATUS LIKE '$tables[0]'";
		$stmt=$this->execute($sql);
		return $stmt->fetchObject()->Auto_increment;
	}
	private function execute($sql){
		try{
			$stmt=$this->pdo->prepare($sql);
			$stmt->execute();
		}catch (PDOException $e){
			exit('SQL：'.$sql.'<br/>error information：'.$e->getMessage());
		}
		return $stmt;
	}
}