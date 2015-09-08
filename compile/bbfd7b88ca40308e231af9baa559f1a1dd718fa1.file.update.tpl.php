<?php /* Smarty version Smarty-3.1.17, created on 2015-08-06 06:31:43
         compiled from "F:\www\eesh\view\admin\goods\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1668655c1d4348a4002-29359232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbfd7b88ca40308e231af9baa559f1a1dd718fa1' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\goods\\update.tpl',
      1 => 1438835486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1668655c1d4348a4002-29359232',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c1d434a61e60_76105568',
  'variables' => 
  array (
    'oneGoods' => 0,
    'prev_url' => 0,
    'goodsNav' => 0,
    'value' => 0,
    'bool' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1d434a61e60_76105568')) {function content_55c1d434a61e60_76105568($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'F:\\www\\eesh\\smarty\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_html_radios')) include 'F:\\www\\eesh\\smarty\\plugins\\function.html_radios.php';
?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/goods.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/goods_update.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
<h2><a href="?a=goods">back Goods list</a>Goods  -- EditGoods </h2>
<form method="post" action="?a=goods&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->id;?>
" name="form" id="updateForm">
	<input type="hidden" name="prev_url" value="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
" />
	<dl class="form">
		<dd>Goods Type ：<select name="nav" class="type">
					<option value="0" selected="selected">--Please selectGoods  Type --</option>
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goodsNav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
									<optgroup label="<?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
">
									<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['value']->value->child,'selected'=>$_smarty_tpl->tpl_vars['oneGoods']->value->nav),$_smarty_tpl);?>

									</optgroup>
									<?php } ?>
				</select> <span class="red">[must]</span>
		</dd>
		
		
		<dd><label for="name">Goods Name：</label><input type="text" attr="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->attr;?>
" attrid="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->nav;?>
" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->name;?>
" class="text"/><span class="red"> [cannot be empty! and smaller than 20]</span></dd>
		
		<dd class="mark"><label for="sn">Goods Number：</label><input update_id="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->id;?>
" type="text" id="sn" name="sn" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->sn;?>
" class="text"/><span class="red"> [cannot be empty! and 2-50charecters]</span></dd>		
		
		<dd><label for="price_sale">Selling price</label><input type="text" id="price_sale" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->price_sale;?>
" name="price_sale" class="text small"/>
			<label for="price_market">Market price</label><input type="text" id="price_market" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->price_market;?>
"  name="price_market" class="text small"/>
			<label for="price_cost">Incoming price</label><input type="text" id="price_cost" name="price_cost" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->price_cost;?>
"  class="text small"/>（*it is not on show in front）
		</dd>
		
		<dd><label for="keyword">Keyword:</label><input type="text" id="keyword" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->keyword;?>
"  name="keyword" class="text"/><span>（*Every keyword should be separated by '|', eg keyword1|keyword2|keyword3）</span></dd>
		
		<dd><label for="unit">unit:</label><input type="text" id="unit" name="unit" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->unit;?>
"  class="text small"/>
			<label for="weight">weight:</label><input type="text" id="weight" name="weight" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->weight;?>
"  class="text small"/>（*kg）
		</dd>
		
		<dd>Upload picture ：<input type="text" class="text" name="thumb"  value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->thumb;?>
" readonly="readonly"/>　<input type="button" value="select" onclick="centerWindow(500,200)"/><img name="pic" alt="Goods picture " src="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->thumb;?>
" style="display:block"/> (*size：300 * 300  jpg,gif,png，below 200k)</dd>
		
		<dd><textarea class="ckeditor" id="TextArea1" name="content"><?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->content;?>
</textarea></dd>
		
		<dd>IsSelling：<?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['bool']->value,'selected'=>$_smarty_tpl->tpl_vars['oneGoods']->value->is_up,'name'=>"is_up"),$_smarty_tpl);?>
　　
			IsFreeShiping:<?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['bool']->value,'selected'=>$_smarty_tpl->tpl_vars['oneGoods']->value->is_freight,'name'=>"is_freight"),$_smarty_tpl);?>
　　
			IsPrompte<?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['bool']->value,'selected'=>$_smarty_tpl->tpl_vars['oneGoods']->value->is_promote,'name'=>"is_promote"),$_smarty_tpl);?>
	　
			IsRecommending:<?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['bool']->value,'selected'=>$_smarty_tpl->tpl_vars['oneGoods']->value->is_recommend,'name'=>"is_recommend"),$_smarty_tpl);?>
	　
		</dd>
		<dd><label for="inventory">Quntity of Stock:</label><input type="text"  id="inventory" name="inventory" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->inventory;?>
"  class="text small"/>
			<label for="warn_inventory">Warn inventory</label><input type="text" id="warn_inventory" name="warn_inventory" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->warn_inventory;?>
"  class="text small"/> （*There is a warning quantity of stock at a amount） 
		</dd>
		<dd><input type="submit" name="send" value="Save "/></dd>
	</dl>
</form>

</body>
</html><?php }} ?>
