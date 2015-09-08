<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Upload</title>
</head>
<body >
<div style="margin:30px auto;width:400px;text-align:center" >
	<form method="post" action="?a=call&m=upload" enctype="multipart/form-data" >
		<input type="hidden" value="{$type}" name="type"/>	
		<input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>
		<input type="file" name="userfile" id="userfile"/>
		<input type="submit" name="send"  value="confirm"/>
	</form>
</div>

</body>
</html>