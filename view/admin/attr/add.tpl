<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/attr.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/attr.js"></script>
<title>Myshop Admin</title>
</head>
<body>
	<h2><a href="?a=attr">back attribute list</a>Goods  -- Add Attribute</h2>
<form method="post" action="?a=attr&m=runAdd" name="add" id="addForm">
	<input type="hidden" name="prev_url" value="{$prev_url}" />
	<dl class="form">
		<dd>
			<label for="name">AttributeName：</label><input type="text" id="name" name="name" class="text"/><span> <b class="red">[must]</b>（*2-40 charecter）</span>
		</dd>
		<dd>Select: {html_radios name="way" options=$way selected=0}</dd>
		<dd>Attribute item：<textarea name="item"></textarea> （*every item is divided by “|”，e.g., red|blue|green）</dd>
		<dd>Please select the related item</dd>
		{foreach from=$allNav key=key item=value}
			<dd>{$value->name}</dd>
			{if $value->child}
			{html_checkboxes options=$value->child name="nav"}
			{/if}
		{/foreach}
		<dd>It is not exist，Please<a class="red" href="?a=nav&m=runAdd">add</a>first</dd>
		<dd><input type="submit" name="send" value="add_Attribute"/></dd>
	</dl>
</form>

</body>
</html>