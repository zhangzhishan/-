<?php /* Smarty version Smarty-3.1.17, created on 2015-08-01 09:39:11
         compiled from "F:\www\eesh\view\admin\nav\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61855bb95bb029a18-85856966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ac21d27e29e0cdd02c4413cdae57a622c13226a' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\nav\\add.tpl',
      1 => 1438393149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61855bb95bb029a18-85856966',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55bb95bb090f34_78524243',
  'variables' => 
  array (
    'oneNav' => 0,
    'prev_url' => 0,
    'allBrands' => 0,
    'allPrice' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bb95bb090f34_78524243')) {function content_55bb95bb090f34_78524243($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_checkboxes')) include 'F:\\www\\eesh\\smarty\\plugins\\function.html_checkboxes.php';
?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/nav.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/nav_add.js"></script>
</head>
<body>
<h2><a href="?a=nav">back nav list</a>Goods  -- AddNav</h2>
<form method="post" action="?a=nav&m=runAdd" name="add" id="navForm">
</form>
<form method="post" action="?a=nav&m=runAdd" name="add" id="navForm">
	<?php if ($_smarty_tpl->tpl_vars['oneNav']->value) {?><input type="hidden" name="sid" value="<?php echo $_smarty_tpl->tpl_vars['oneNav']->value[0]->id;?>
"/><?php }?>
	<input type="hidden" name="prev_url" value="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
" />
	<dl class="form">
		<?php if ($_smarty_tpl->tpl_vars['oneNav']->value) {?><dd>Parent Name：<?php echo $_smarty_tpl->tpl_vars['oneNav']->value[0]->name;?>
</dd><?php }?>
		<dd>
		<label for="name"> Nav Name：</label>
		<input type="text" id="name" name="name" class="text"/><span>（*2-40）</span>
		</dd>
		<dd>
		<label for="info"> Nav information：</label>
		<textarea name="info" id="info"></textarea><span>（*smaller than 200）</span>
		</dd>
		<?php if ($_smarty_tpl->tpl_vars['oneNav']->value) {?>
		<dd>
			brand:
			<?php echo smarty_function_html_checkboxes(array('name'=>'brand','options'=>$_smarty_tpl->tpl_vars['allBrands']->value,'selected'=>'1'),$_smarty_tpl);?>

		</dd>
		<?php }?>
		<dd> price ：<?php echo smarty_function_html_checkboxes(array('name'=>'price','options'=>$_smarty_tpl->tpl_vars['allPrice']->value),$_smarty_tpl);?>

		</dd>
		<dd><input type="submit" name="send" value="Add" /></dd>
	</dl>
</form>

</body>
</html><?php }} ?>
