<?php /* Smarty version Smarty-3.1.17, created on 2015-08-05 17:53:51
         compiled from "F:\www\eesh\view\admin\manage\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1560455c1dd2fdf7916-72912169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99f93dc879d7669331c63efd7633c52297bbb39b' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\manage\\update.tpl',
      1 => 1438074823,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1560455c1dd2fdf7916-72912169',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oneManage' => 0,
    'prev_url' => 0,
    'allLevel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c1dd3008fa18_34722733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1dd3008fa18_34722733')) {function content_55c1dd3008fa18_34722733($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'F:\\www\\eesh\\smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>

<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/manage.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.form.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/channel.js"></script>
<script type="text/javascript" src="view/admin/js/manage_update.js"></script>
</head>
<body>
<h2><a href="?a=manage">back nav list</a>System -- Edit nav</h2>
<form method="post" action="?a=manage&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['oneManage']->value->id;?>
" name="update" id="updateForm">
	<input type="hidden" name="url" value="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
"/>
	<dl class="form">
		<dd>
			User Name: <?php echo $_smarty_tpl->tpl_vars['oneManage']->value->user;?>

		</dd>
		<dd>
		<label for="pwd">Password：</label>
		<input type="password" id="pwd" name="pwd" class="text"/><span>（*larger than 6）</span>
		</dd>
		<dd>
		<label for="notpwd">Confirm password:</label>
		<input type="password" id="notpwd" name="notpwd" class="text"/><span>（*Password should be the same）</span>
		</dd>
		<dd>
		<label for="level">Level:</label>
		<select name="level" id="level">
							<option value="0">--Please select a level--</option>
							<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['allLevel']->value,'selected'=>$_smarty_tpl->tpl_vars['oneManage']->value->level),$_smarty_tpl);?>

					</select><span>（*must choose a level）</span>
		</dd>
		<dd><input type="submit" name="send" value="EditAdmin "/></dd>
	</dl>
</form>

</body>
</html><?php }} ?>
