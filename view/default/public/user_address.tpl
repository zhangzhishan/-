<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/list.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/user.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<title>MyShop</title>
</head>
<body>
{include file='default/public/header.tpl'}
<div id="sait">
	 Now:<a href="./">Home</a> &gt; Myself
</div>
<div id="shop_main">
	{include file='default/public/user_sidebar.tpl'}
	<div id="main">	
		<h2><a href="?a=cart">[Go to pay]</a>Address</h2>
		<table>
			<tr><th>Name</th><th>Address</th><th>Telephone</th><th>Postcode</th><th>Email</th><th>Famous palaces around</th><th>Operation</th></tr>
			{foreach from=$allAddress key=key item=value}
			<tr><td>{$value->name}</td><td>{$value->address}</td><td>{$value->tel}</td><td>{$value->code}</td><td>{$value->email}</td><td>{$value->buildings}</td>
			<td class="control">{if $value->selected}Yes{else}<a class="choose" href="?a=user&m=selected&id={$value->id}">First</a>{/if} | <a class="repair" href="?a=user&m=address&id={$value->id}">Edit</a> | <a class="del" href="?a=user&m=RunDelete&id={$value->id}" onclick="return confirm('Are you sure to delete?') ? true : false">delete</a></td></tr>
			{/foreach}
		</table>
		<h2>Edit receivers information</h2>
		<form action="?a=user&m=address&id={$frontUser[0]->id}" method="post">
		<table class="left">
			<tr><td width="15%">Name</td><td><input type="text" class="text" value="{$frontUser[0]->name}" name="name"/></td><td width="15%">EmailAddress：</td><td><input type="text" class="text" value="{$frontUser[0]->email}" name="email"/></td></tr>
			<tr><td>Detailed Address：</td><td><input type="text" class="text" value="{$frontUser[0]->address}" name="address"/></td><td>Post code</td><td><input type="text" class="text" value="{$frontUser[0]->code}" name="code"/></td></tr>
			<tr><td>Telephone:</td><td><input type="text" class="text" name="tel" value="{$frontUser[0]->tel}"/></td><td>Famous palaces around:</td><td><input type="text" class="text" value="{$frontUser[0]->buildings}" name="buildings"/></td></tr>
			<tr><td>IsTowns:</td><td><label><input type="radio" value="1" {if $frontUser[0]->flag}checked="checked"{/if} name="flag"/>Yes</label><label><input type="radio" value="0" {if $frontUser[0]->flag==0}checked="checked"{/if} name="flag"/>No</label></td><td>The best delivery time</td><td><input type="text" name="time" value="{$frontUser[0]->time}"/></td></tr>
			<tr><td colspan="4" class="submit"><input class="submit" name="send" value="Deliver to this address" type="submit"/></td></tr>	
		</table>
		</form>
		<h2>New receive persons </h2>
		<form action="?a=user&m=address" method="post">
		<table class="left">
			<tr><td width="15%">Name</td><td><input type="text" class="text"  name="name"/></td><td width="15%">EmailAddress：</td><td><input type="text" class="text" name="email"/></td></tr>
			<tr><td>Detailed Address：</td><td><input type="text" class="text"  name="address"/></td><td>Post code</td><td><input type="text" class="text" name="code"/></td></tr>
			<tr><td>Telephone:</td><td><input type="text" class="text" name="tel" /></td><td>Famous palaces around:</td><td><input type="text" class="text"name="buildings"/></td></tr>
			<tr><td>IsTowns:</td><td><label><input type="radio" checked="checked" value="1" name="flag"/>Yes</label><label><input type="radio" value="0" name="flag"/>No</label></td><td>The best delivery time</td><td><input type="text" name="time" /></td></tr>
			<tr><td colspan="4" class="submit"><input class="submit" name="send" value="Deliver to this address" type="submit"/></td></tr>	
		</table>
		</form>
	</div>
</div>
{include file='default/public/footer.tpl'}
</body>
</html>