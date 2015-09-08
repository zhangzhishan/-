<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/error.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
	<h2>Error -- Peompt</h2>
<div id="list" class="error">	
	{foreach from=$message key=key item=value}
		<p>{$key+1}.{$value}</p>
	{/foreach}
	<p><a href="{$prev_url}">[back]</a></p>
</div>
</body>
</html>