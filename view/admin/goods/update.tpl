<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<form method="post" action="?a=goods&m=runUpdate&id={$oneGoods->id}" name="form" id="updateForm">
	<input type="hidden" name="prev_url" value="{$prev_url}" />
	<dl class="form">
		<dd>Goods Type ：<select name="nav" class="type">
					<option value="0" selected="selected">--Please selectGoods  Type --</option>
					{foreach from=$goodsNav key=key item=value}
									<optgroup label="{$value->name}">
									{html_options options=$value->child selected=$oneGoods->nav}
									</optgroup>
									{/foreach}
				</select> <span class="red">[must]</span>
		</dd>
		
		
		<dd><label for="name">Goods Name：</label><input type="text" attr="{$oneGoods->attr}" attrid="{$oneGoods->nav}" id="name" name="name" value="{$oneGoods->name}" class="text"/><span class="red"> [cannot be empty! and smaller than 20]</span></dd>
		
		<dd class="mark"><label for="sn">Goods Number：</label><input update_id="{$oneGoods->id}" type="text" id="sn" name="sn" value="{$oneGoods->sn}" class="text"/><span class="red"> [cannot be empty! and 2-50charecters]</span></dd>		
		
		<dd><label for="price_sale">Selling price</label><input type="text" id="price_sale" value="{$oneGoods->price_sale}" name="price_sale" class="text small"/>
			<label for="price_market">Market price</label><input type="text" id="price_market" value="{$oneGoods->price_market}"  name="price_market" class="text small"/>
			<label for="price_cost">Incoming price</label><input type="text" id="price_cost" name="price_cost" value="{$oneGoods->price_cost}"  class="text small"/>（*it is not on show in front）
		</dd>
		
		<dd><label for="keyword">Keyword:</label><input type="text" id="keyword" value="{$oneGoods->keyword}"  name="keyword" class="text"/><span>（*Every keyword should be separated by '|', eg keyword1|keyword2|keyword3）</span></dd>
		
		<dd><label for="unit">unit:</label><input type="text" id="unit" name="unit" value="{$oneGoods->unit}"  class="text small"/>
			<label for="weight">weight:</label><input type="text" id="weight" name="weight" value="{$oneGoods->weight}"  class="text small"/>（*kg）
		</dd>
		
		<dd>Upload picture ：<input type="text" class="text" name="thumb"  value="{$oneGoods->thumb}" readonly="readonly"/>　<input type="button" value="select" onclick="centerWindow(500,200)"/><img name="pic" alt="Goods picture " src="{$oneGoods->thumb}" style="display:block"/> (*size：300 * 300  jpg,gif,png，below 200k)</dd>
		
		<dd><textarea class="ckeditor" id="TextArea1" name="content">{$oneGoods->content}</textarea></dd>
		
		<dd>IsSelling：{html_radios options=$bool selected=$oneGoods->is_up name="is_up"}　　
			IsFreeShiping:{html_radios options=$bool selected=$oneGoods->is_freight name="is_freight"}　　
			IsPrompte{html_radios options=$bool selected=$oneGoods->is_promote name="is_promote"}	　
			IsRecommending:{html_radios options=$bool selected=$oneGoods->is_recommend name="is_recommend"}	　
		</dd>
		<dd><label for="inventory">Quntity of Stock:</label><input type="text"  id="inventory" name="inventory" value="{$oneGoods->inventory}"  class="text small"/>
			<label for="warn_inventory">Warn inventory</label><input type="text" id="warn_inventory" name="warn_inventory" value="{$oneGoods->warn_inventory}"  class="text small"/> （*There is a warning quantity of stock at a amount） 
		</dd>
		<dd><input type="submit" name="send" value="Save "/></dd>
	</dl>
</form>

</body>
</html>