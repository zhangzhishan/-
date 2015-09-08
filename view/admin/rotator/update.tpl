<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<!-- <link rel="stylesheet" type="text/css" href='view/admin/style/goods.css'/> -->
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>

<script type="text/javascript" src="view/admin/js/rotator.js"></script>
</head>
<body>
<h2><a href="?a=rotator">back rotator list</a>Edit rotator --  rotator</h2>
<form method="post" action="?a=rotator&m=runUpdate&id={$one->id}" name="form" id="addForm">
<input type="hidden" name="prev_url" value="{$prev_url}"/>
	<dl class="form">
		
		<dd><label for="name">picture Name：</label><input type="text" id="name" name="name" value="{$one->name}" class="text"/><span class="red"> (*)</span></dd>
		
		<dd><label for="link">links Address：</label><input type="text" id="link" value="{$one->link}" name="link" class="text"/><span class="red"> (*)</span></dd>

		{if $one->state eq 1}
		<dd><label>Home on show：</label><label><input type="radio" checked="checked" name="state" value="1"/>Yes </label><label><input type="radio" name="state" value="0"/>No</label></dd>
		{else}
		<dd><label>Home on show：</label><label><input type="radio" name="state" value="1"/>Yes </label><label><input type="radio" name="state"  checked="checked" value="0"/>No</label></dd>
		{/if}
		

		<dd>Upload picture ：<input type="text" class="text" name="thumb" style="width:350px" value="{$one->thumb}" readonly="readonly"/>　<input type="button" value="select" onclick="centerWindow(500,200)"/><img name="pic" alt=" rotatorpicture " src="{$one->thumb}" style="display:block;"/> (*size：300 * 300  jpg,gif,png，below 200k)</dd>
		
		<dd><input type="submit" name="send" value="Save"/></dd>
	</dl>
</form>

</body>
</html>