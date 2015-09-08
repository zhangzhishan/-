<?php /* Smarty version Smarty-3.1.17, created on 2015-08-01 09:49:22
         compiled from "F:\www\eesh\view\admin\brand\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:402255bc10b82a0c83-02825757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '106a423c3beb75decb7aee2836b10a1d5f731bbc' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\brand\\add.tpl',
      1 => 1438393730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '402255bc10b82a0c83-02825757',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55bc10b84cdf91_04313631',
  'variables' => 
  array (
    'prev_url' => 0,
    'allMainNavs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bc10b84cdf91_04313631')) {function content_55bc10b84cdf91_04313631($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'F:\\www\\eesh\\smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/brand.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/brand_add.js"></script>
</head>
<body>
<h2><a href="?a=nav">back brand  list</a>Goods  -- Add brand </h2>

<form method="post" action="?a=brand&m=runAdd" name="add" id="addForm">
</form>
<form method="post" action="?a=brand&m=runAdd" name="add" id="addForm">
	<input type="hidden" name="prev_url" value="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
" />
	<dl class="form">
		
		<dd>
		<label for="name"> brand Name：</label>
			<input type="text" id="name" name="name" class="text"/><span>（*cannot be empty! and smaller than 20）</span>
		</dd>
		<dd>
			<label for="type"> brand Type ：</label>
			<select id="type" name="type"><option value="0">--Please select a Type </option>
				<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['allMainNavs']->value),$_smarty_tpl);?>

			</select><span>（*cannot be empty!）</span>
		</dd>
		<dd>
		<label for="name">Site Address：</label>
			<input type="text" id="url" name="url" class="text"/><span>（*cannot be empty! and smaller than 40）</span>
		</dd>
		<dd>
		<label for="info"> brand  information：</label>
			<textarea name="info" id="info"></textarea><span>（*smaller than 200）</span>
		</dd>
		<dd><input type="submit" name="send" value="Add brand "/></dd>
	</dl>
</form>

</body>
</html><?php }} ?>
