<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/main.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<h2>First -- Admin</h2>

<div id="list">
	<table class="public">
		<tr><th colspan="4">Order number information</th></tr>
		<tr><td>Undelivery Order：</td><td>{$count1}</td><td>unconfirmedOrder：</td><td>{$count2}</td></tr>
		<tr><td>Unpaid Order：</td><td>{$count3}</td><td>apply for refundingOrder：</td><td>{$count4}</td></tr>
	</table>
	
	<table class="public">
		<tr><th colspan="4">Goods  number information</th></tr>
		<tr><td>Goods Amount：</td><td>{$allGoodsCount}</td><td>Warning amount</td><td>{$warnInventoryCount}</td></tr>
		<tr><td>Goods down：</td><td>{$downGoodsCount}</td><td>Goods on sale：</td><td>{$promoteGoodsCount}</td></tr>
	</table>
	
	<table class="public">
		<tr><th colspan="4">System information</th></tr>
		<tr><td>Server OS:</td><td>{$os}</td><td>Server software</td><td>{$server.SERVER_SOFTWARE}</td></tr>
		<tr><td>Browser:</td><td>{$server.HTTP_USER_AGENT}</td><td>IP address：</td><td>{$server.HTTP_HOST}</td></tr>
	</table>
</div>
</html>