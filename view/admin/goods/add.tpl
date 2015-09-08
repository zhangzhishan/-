<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/goods.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/goods_add.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
<h2><a href="?a=goods">backGoods list</a>Goods  -- AddGoods </h2>
<form method="post" action="?a=goods&m=runAdd" name="form" id="addForm">
	<dl class="form">
		<dd>Goods Type ：<select name="nav" class="type">
					<option value="0" selected="selected">--Please selectGoods  Type --</option>
					{foreach from=$goodsNav key=key item=value}
									<optgroup label="{$value->name}">
									{html_options options=$value->child}
									</optgroup>
									{/foreach}
				</select> <span class="red">[must]</span>
		</dd>
		


		<dd><label for="name">Goods Name：</label><input type="text" id="name" name="name" class="text"/><span class="red"> [cannot be empty! and smaller than 20]</span></dd>
		
		<dd class="mark"><label for="sn">Goods sn:</label><input type="text" id="sn" name="sn" class="text"/><span class="red"> [cannot be empty! and 2-50charecters]</span></dd>		
		
		<dd><label for="price_sale">Selling price</label><input type="text" id="price_sale" value="0" name="price_sale" class="text small"/>
			<label for="price_market">Market price</label><input type="text" id="price_market" value="0" name="price_market" class="text small"/>
			<label for="price_cost">Incoming price</label><input type="text" id="price_cost" value="0" name="price_cost" class="text small"/>（* Incoming price is not on show in front）
		</dd>
		
		<dd><label for="keyword">Keyword:</label><input type="text" id="keyword" name="keyword" class="text"/><span>（*Every keyword should be separated by '|', eg keyword1|keyword2|keyword3）</span></dd>
		
		<dd><label for="unit">unit:</label><input type="text" id="unit" name="unit" class="text small"/>
			<label for="weight">weight:</label><input type="text" id="weight" value="0" name="weight" class="text small"/>（*kg）
		</dd>
		
		<dd>Upload picture ：<input type="text" class="text" name="thumb" readonly="readonly"/>　<input type="button" value="select" onclick="centerWindow(500,200)"/><img name="pic" alt="Goods picture " style="display:none"/>  (*size：300 * 300  jpg,gif,png，below 200k)</dd>
		
		<dd><textarea class="ckeditor" id="TextArea1" name="content"></textarea></dd>
		
		<dd>IsSelling：<label><input type="radio" value="1" name="is_up" id="is_up"/>Yes</label></label><label><input type="radio" name="is_up" value="0" id="is_up"/>No</label>　
			IsFreeShiping:<label><input type="radio" value="1" name="is_freight" id="is_freight"/>Yes</label><label><input type="radio" name="is_freight" value="0" id="is_freight"/>No</label>	　
			IsPrompte<label><input type="radio" value="1" name="is_promote" id="is_promote"/>Yes</label><label><input type="radio" name="is_promote" value="0" id="is_promote"/>No</label>　		
			IsRecommending:<label><input type="radio" value="1" name="is_recommend" id="is_recommend"/>Yes</label><label><input type="radio" name="is_recommend" value="0" id="is_recommend"/>No</label>		
		</dd>
		<dd><label for="inventory">Quntity of Stock:</label><input type="text" id="inventory" value="0" name="inventory" class="text small"/>
			<label for="warn_inventory	">Warn inventory</label><input type="text" id="warn_inventory" value="0" name="warn_inventory" class="text small"/> (*There is a warning quantity of stock at a amount)
		</dd>
		<dd><input type="submit" name="send" value="Add"/></dd>
	</dl>
</form>

</body>
</html>