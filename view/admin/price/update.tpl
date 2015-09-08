<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/price.css'/>
</head>
<body>
<h2><a href="?a=price">back price  list</a>Goods  -- Edit price </h2>
<form method="post" action="?a=price&m=runUpdate&id={$onePrice[0]->id}" name="update" id="priceForm">
	<input type="hidden" name="prev_url" value="{$prev_url}"/>
	<dl class="form">
		<dd>
		<label for="price_left"> price ：</label>
			<input type="text" id="price_left" name="price_left" value="{$onePrice[0]->price_left}" class="text"/> - <input type="text" id="price_right" name="price_right" value="{$onePrice[0]->price_right}" class="text"/><span>（*Number required!）</span>
		</dd>
		<dd><input type="submit" name="send" value="Edit price "/></dd>
	</dl>
</form>

</body>
</html>