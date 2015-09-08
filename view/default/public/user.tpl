<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/reg.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/list.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/default/js/user.js"></script>
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
		<h2>My information</h2>
		<div class="personal_info">
			<div id="reg">	
			<form action="?a=user&m=update2&id={$user->id}" method="post" id="updateForm" name="form">
			</form>
				<form action="?a=user&m=update2&id={$user->id}" method="post" id="updateForm" name="form">

				{if $user->thumb }
				<input type="hidden" name="thumb" value="{$user->thumb}"/>
				{else}
				<input type="hidden" name="thumb" value="view/default/images/default_face.jpg"/>
				{/if}
				
				<dl>
					<dd><label> Username：</label><input type="text" name="user" value="{$user->user}" class="text"/><span class="red"> *</span></dd>
					<dd><label>Gender：</label><label><input type="radio" name="gender" checked="checked" value="1"/>Man</label><label><input type="radio" name="gender" value="0"/>Woman</label></dd>
					<dd  class="face"><label style="float:left;padding-top:40px;">Picture</label><img name="pic" src="{$user->thumb}" style="float:left"/> <input style="margin-top:40px;" type="button" value="Upload" onclick="javascript:centerWindow(500,200)"/><em style="padding-top:40px;">（*Please upload jpg、gif、png pictures below 200KB）</em></dd>
					<dd style="clear:both"><label>E-mail：</label><input type="text" name="email" class="text" value="{$user->email}"/><span></span></dd>

					<dd><input type="submit" name="send" class="sub" value="Edit information"/></dd>
				</dl>
				</form>
			</div>
		</div>
	</div>
</div>
{include file='default/public/footer.tpl'}
</body>
</html>