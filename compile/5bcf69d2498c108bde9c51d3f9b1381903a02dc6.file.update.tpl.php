<?php /* Smarty version Smarty-3.1.17, created on 2015-08-06 06:23:47
         compiled from "F:\www\eesh\view\admin\brand\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1752855c2e1535426d0-97949729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bcf69d2498c108bde9c51d3f9b1381903a02dc6' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\brand\\update.tpl',
      1 => 1438075011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1752855c2e1535426d0-97949729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oneBrand' => 0,
    'prev_url' => 0,
    'allMainNavs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c2e1535bf732_18328166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c2e1535bf732_18328166')) {function content_55c2e1535bf732_18328166($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'F:\\www\\eesh\\smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/brand.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/brand_update.js"></script>
</head>
<body>
<h2><a href="?a=brand">back brand  list</a>Goods  -- Edit brand </h2>
<form method="post" action="?a=brand&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['oneBrand']->value->id;?>
" name="add" id="updateForm">
	<input type="hidden" name="prev_url" value="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
" />
	<dl class="form">
		<dd> brand Name： <?php echo $_smarty_tpl->tpl_vars['oneBrand']->value->name;?>
</dd>
		<dd>
			<label for="type"> brand Type ：</label>
			<select id="type" name="type"><option value="0">--Please select a Type </option>
				<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['allMainNavs']->value,'selected'=>$_smarty_tpl->tpl_vars['oneBrand']->value->type),$_smarty_tpl);?>

			</select><span>（*cannot be empty!）</span>
		</dd>
		<dd>
		<label for="name">Site Address：</label>
			<input type="text" id="url" name="url" value="<?php echo $_smarty_tpl->tpl_vars['oneBrand']->value->url;?>
" class="text"/><span>（*cannot be empty! and smaller than 40）</span>
		</dd>
		<dd>
		<label for="info"> brand  information：</label>
			<textarea name="info" id="info"><?php echo $_smarty_tpl->tpl_vars['oneBrand']->value->info;?>
</textarea><span>（*smaller than 200）</span>
		</dd>
		<dd><input type="submit" name="send" value="Edit brand "/></dd>
	</dl>
</form>

</body>
</html><?php }} ?>
