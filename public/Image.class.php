<?php
class Image{
	private $width;		
	private $height;		
	private $file;			
	private $img;		
	private $type;		
	private $thumb;	
	public function __construct($file){
		$this->file=ROOT_PATH.'/'.$file;
		list($this->width,$this->height,$this->type)=getimagesize($this->file);
		$this->img=$this->getImageFrom($this->file,$this->type);
	}
//	 1= GIF，2 = JPG，3 = PNG
	private function getImageFrom($file,$type){
		switch($type){
			case 1:
				$img=imagecreatefromgif($file);
				break;
			case 2:
				$img=imagecreatefromjpeg($file);
				break;
			case 3:
				$img=imagecreatefrompng($file);
				break;
			default:
				Tool::alertBack('Sorry, the file format is not supported');
				break;
		}
		return $img;
	}
	
	public function thumbCkeditor($new_width=0,$new_height=0){
		if(empty($new_height) && empty($new_width)){
			$new_height=$this->height;
			$new_width=$this->width;
		}elseif( !is_numeric($new_width) || !is_numeric($new_width)){
			$new_height=$this->height;
			$new_width=$this->width;
		}
		
		if($this->width>$new_width){
			$new_height=$new_width/$this->width*$this->height;
		}else{
			$new_width=$this->width;
			$new_height=$this->height;
		}
		if($this->height>$new_height){
			$new_width=$new_height/$this->height*$this->width;
		}else{
			$new_width=$this->width;
			$new_height=$this->height;
		}
		
		$this->thumb=imagecreatetruecolor($new_width, $new_height);
		imagecopyresampled($this->thumb, $this->img, 0, 0,0,0, $new_width, $new_height, $this->width, $this->height);
	}

	public function thumb($new_width=0,$new_height=0){
		if(empty($new_height) || empty($new_width)){
			$new_height=$this->height;
			$new_width=$this->width;
		}elseif( !is_numeric($new_width) || !is_numeric($new_width)){
			$new_height=$this->height;
			$new_width=$this->width;
		}
		
		$n_w=$new_width;
		$n_h=$new_height;
		
		$cut_width=0;
		$cut_height=0;
		if($this->width<$this->height){
			$new_width=$new_height/$this->height*$this->width;
		}else{
			$new_height=$new_width/$this->width*$this->height;
		}

		if($n_w>$new_width){
			$per=$n_w/$new_width;			
			$new_width *=$per;
			$new_height *=$per;
			$cut_height=($new_height-$n_h)/2;
		}
		if($n_h>$new_height){
			$per=$n_h/$new_height;			
			$new_width *=$per;
			$new_height *=$per;
			$cut_width=($new_width-$n_w)/2;
		}

		
		$this->thumb=imagecreatetruecolor($n_w,$n_h);
		imagecopyresampled($this->thumb, $this->img, 0, 0, $cut_width, $cut_height, $new_width, $new_height, $this->width, $this->height);
	}
	
	public function outImage($param=''){
		$end=strrchr($this->file, '.');
		$start=substr($this->file,0,-strlen($end));
		$this->file=$start.$param.'.png';
		imagepng($this->thumb,$this->file);
		imagedestroy($this->thumb);
		imagedestroy($this->img);
	}
	public function getPath(){
		return  strrchr($this->file,'upload/');
	}


}




?>