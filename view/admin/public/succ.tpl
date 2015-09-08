<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="refresh" content="1;url={$url}" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/succ.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
	<h2>Success -- Peompt</h2>
<div id="list" class="succ">	
	{foreach from=$message key=key item=value}
		<p>{$key+1}.{$value}</p>
	{/foreach}
	<p><a href="{$url}">[Clik me]</a></p>
</div>
</body>
</html>