<?php

class UploadFile{
	private $tmp;
	private $error;
	private $date;
	private $maxSize;
	private $typeArr=array('image/jpeg','image/pjpeg','image/png','image/x-png','image/gif');
	private $type;
	private $path;
	private $today;
	private $linkToday;
	private $linkpath;
	private $fileName;
	private $linkPath;
	public function __construct($_file,$_maxSize){
		$this->error=$_FILES[$_file]['error'];
		$this->type=$_FILES[$_file]['type'];
		$this->tmp=$_FILES[$_file]['tmp_name'];
		$this->path=ROOT_PATH.'/'.UPLOAD_DIR;
		$this->linkToday=date('Ymd').'/';
		$this->today=$this->path.$this->linkToday;  		
		$this->maxSize=$_maxSize/1024;
		$this->fileName=$_FILES[$_file]['name'];
		$this->checkError();
		$this->checkType();
		$this->checkDir();
		$this->moveFile();
	}
	
	public function moveFile(){
		if(is_uploaded_file($this->tmp)){
			if(!move_uploaded_file($this->tmp, $this->setNewName())){
				exit('Upload error');
			}
		}else{
			exit('The temp file does not exist.');
		}
	}
	
	public function getPath(){
		return $this->linkpath;
	}
	
	public function setNewName(){
		$nameArr=explode('.', $this->fileName);
		$type=$nameArr[count($nameArr)-1];
		$newFileName=date('YmdHis').mt_rand(100, 1000).'.'.$type;
		$this->linkpath=UPLOAD_DIR.$this->linkToday.$newFileName;
		return $this->today.$newFileName;
	}

	
	public function checkDir(){
		if(!is_dir($this->path) || !is_writeable($this->path)){
			if(!mkdir($this->path)){
				exit('Home directory failed!');
			}
		}
		if(!is_dir($this->today) || !is_writeable($this->today)){
			if(!mkdir($this->today)){
				exit('Children directory failed!');
			}
		}
	}
	public function checkError(){
		if(!empty($this->error)){
			switch($this->error){
				case 1:
					exit('Error: upload is larger than the demand.');
					break;
				case 2:
					exit('Error: upload is larger than'.$this->maxSize.'KB');
					break;
				case 3:
					exit('Error: file is uploaded partly');
					break;
				case 4:
					exit('Error: file is not uploaded');
					break;
				default:
					exit('Unknown error');
			}
		}
	}
	public function checkType(){
		if(!in_array($this->type,$this->typeArr)){
			exit('Sorry, this format is not allowed!');
		}
	}
	
	public function alertThumbClose($_info,$_path){

		$end=strrchr($_path, '.');
		$start=substr($_path,0,-strlen($end));
		$_path=$start.'.png';
		echo "<script>alert('$_info')</script>";
		echo "<script>opener.document.form.thumb.value='$_path'</script>";
		echo "<script>opener.document.form.pic.style.display='block'</script>";
		echo "<script>opener.document.form.pic.src='$_path'</script>";
		echo "<script>opener.document.pic.src='$_path'</script>";
		echo  "<script>window.close();</script>";
	}

}




?>