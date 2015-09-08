<?php /* Smarty version Smarty-3.1.17, created on 2015-08-05 12:48:40
         compiled from "F:\www\eesh\view\default\public\user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:666355c1e39cc9ddd7-34254080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36564045dd436a6806d97595a8a04abb3fbd86c0' => 
    array (
      0 => 'F:\\www\\eesh\\view\\default\\public\\user.tpl',
      1 => 1438771108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '666355c1e39cc9ddd7-34254080',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c1e39cd6fee1_67262307',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1e39cd6fee1_67262307')) {function content_55c1e39cd6fee1_67262307($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sait">
	 Now:<a href="./">Home</a> &gt; Myself
</div>
<div id="shop_main">
	<?php echo $_smarty_tpl->getSubTemplate ('default/public/user_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div id="main">	
		<h2>My information</h2>
		<div class="personal_info">
			<div id="reg">	
			<form action="?a=user&m=update2&id=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" method="post" id="updateForm" name="form">
			</form>
				<form action="?a=user&m=update2&id=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" method="post" id="updateForm" name="form">

				<?php if ($_smarty_tpl->tpl_vars['user']->value->thumb) {?>
				<input type="hidden" name="thumb" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->thumb;?>
"/>
				<?php } else { ?>
				<input type="hidden" name="thumb" value="view/default/images/default_face.jpg"/>
				<?php }?>
				
				<dl>
					<dd><label> Username：</label><input type="text" name="user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user;?>
" class="text"/><span class="red"> *</span></dd>
					<dd><label>Gender：</label><label><input type="radio" name="gender" checked="checked" value="1"/>Man</label><label><input type="radio" name="gender" value="0"/>Woman</label></dd>
					<dd  class="face"><label style="float:left;padding-top:40px;">Picture</label><img name="pic" src="<?php echo $_smarty_tpl->tpl_vars['user']->value->thumb;?>
" style="float:left"/> <input style="margin-top:40px;" type="button" value="Upload" onclick="javascript:centerWindow(500,200)"/><em style="padding-top:40px;">（*Please upload jpg、gif、png pictures below 200KB）</em></dd>
					<dd style="clear:both"><label>E-mail：</label><input type="text" name="email" class="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
"/><span></span></dd>

					<dd><input type="submit" name="send" class="sub" value="Edit information"/></dd>
				</dl>
				</form>
			</div>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
