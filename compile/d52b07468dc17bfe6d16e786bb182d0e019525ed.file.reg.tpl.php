<?php /* Smarty version Smarty-3.1.17, created on 2015-08-01 08:54:16
         compiled from "F:\www\eesh\view\default\public\reg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:306855bc18b8029b30-70332956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd52b07468dc17bfe6d16e786bb182d0e019525ed' => 
    array (
      0 => 'F:\\www\\eesh\\view\\default\\public\\reg.tpl',
      1 => 1438009378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '306855bc18b8029b30-70332956',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55bc18b80b88a6_18679843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bc18b80b88a6_18679843')) {function content_55bc18b80b88a6_18679843($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/reg.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/default/js/reg.js"></script>
<title>MyShop</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sait">
	 Now:<a href="./">Home</a> &gt; Register 
</div>
<div id="reg">	
	<form action="?a=user&m=reg" method="post" id="regForm" name="form">
		<input type="hidden" name="thumb" value="view/default/images/default_face.jpg"/>
		<dl>
			<dt><h2>Register</h2><p class="short_line"></p></dt>
			<dd><label> Username：</label><input type="text" name="user" class="text"/><span class="red">*</span></dd>
			<dd><label>Gender：</label><label><input type="radio" name="gender" checked="checked" value="1"/>Man</label><label><input type="radio" name="gender" value="0"/>Woman</label></dd>
			<dd><label>Password：</label><input type="password" id="pwd" name="pwd" class="text"/><span class="red"> *</span></dd>
			<dd><label>Confirm password:</label><input type="password"  name="notpwd" class="text"/><span class="red"> *</span></dd>
			<dd  class="face"><label style="float:left;padding-top:40px;">Picture</label><img name="pic" src="view/default/images/default_face.jpg" style="float:left"/> <input style="margin-top:40px;" type="button" value="Upload" onclick="javascript:centerWindow(500,200)"/><em style="padding-top:40px;">（*jpg、gif、png below 200KB）</em></dd>
			<dd style="clear:both;"><label>Safe question:</label><select name="question" class="text">
										<option value="">--Please choose one</option>
										<option value="Your fathes's name">Your fathes's name	</option>
										<option value="Your mothes's ages	">Your mothes's ages	</option>
										<option value="Your wife's name	">Your wife's name	</option>
										<option value="Your wife's birthday	">Your wife's birthday	</option>
									</select><span> *</span>
			</dd>
			<dd><label>Answer</label><input type="text" name="answer" class="text"/><span class="red"> *</span></dd>
			<dd><label>Email</label><input type="text" name="email" class="text"/><span></span></dd>
			<dd><input type="submit" name="send" class="sub" value="Register"/></dd>
		</dl>
	</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
