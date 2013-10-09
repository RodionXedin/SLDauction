<?php
/*`id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `income_date` datetime NOT NULL,
  `period` int(11) NOT NULL,
  `description` longtext,
  `manufacturer` text NOT NULL,
  `name` text NOT NULL,
  `conditionofitem` varchar(255) DEFAULT NULL,
  `last_bid_id` int(11) NOT NULL,
  `last_bid` int(11) DEFAULT NULL,*/
function GetItemInfo($id)
{
	mysql_connect("localhost","root","") OR DIE("Не могу создать соединение "); 
	mysql_select_db("SLDauct") or die(mysql_error());
	$query = "SELECT * from items WHERE id='".mysql_escape_string($id)."'";
	$item = mysql_query($query);
	$assoc_array_item =  mysql_fetch_assoc($item);
	//left_seconds contains seconds left to the end of an auction
	$assoc_array_item["left_seconds"] = strtotime($assoc_array_item["income_date"]) + 
										$assoc_array_item["period"] - 
										time();
	$query = "SELECT * from users WHERE id='".mysql_escape_string($assoc_array_item["owner_id"])."'";
	$owner = mysql_query($query);
	$owner = mysql_fetch_assoc($owner);
	$assoc_array_item["owner_name"] = $owner["username"];
	return $assoc_array_item;
}



function UpdateBid($new_bid, $id, $user_id)
{
	mysql_connect("localhost","root","") OR DIE("Не могу создать соединение "); 
	mysql_select_db("SLDauct") or die(mysql_error());
	$query = "UPDATE items SET last_bid=".mysql_escape_string($new_bid)." AND last_bid_id=".mysql_escape_string($user_id)."WHERE id=".mysql_escape_string($id);
}

$cur_item = GetItemInfo($_GET["id"]);

if ($_POST["bid"]) != NULL)
{
	$new_bid = $_POST["bid"];
	if (cur_item["last_bid"] == NULL)
	{
		if (new_bid > $cur_item["last_bid"])
			UpdateBid($new_bid, _GET["id"],..);
	}
	else
	{
		if (new_bid > $cur_item["price"])
			UpdateBid($new_bid, _GET["id"],..);	
	}
}

$cur_item = GetItemInfo($_GET["id"]);
?>

<html>
<head>
	<script type="text/javascript">
	var timer;
	var time_left = <?php echo $cur_item["left_seconds"]; ?>;
	function left_timer()
	{
		var obj=document.getElementById('time_left');
		obj.innerHTML = time_left;
		
		if(time_left>0)
		{
			time_left -= 1;
			clearInterval(timer);
			timer = setInterval(left_timer,1000);
		}
	}
	function run_timer()
	{
		timer = setInterval(left_timer, 1000);
	}
	</script>
</head>
<body onload="run_timer();">
	Разместил: <?php echo $cur_item["owner_name"]; ?><br>
	Имя:<?php echo $cur_item["name"]; ?><br>
	Время размещения:<?php echo $cur_item["income_date"]; ?><br>
	Описание: <?php echo $cur_item["description"]; ?><br>
	Текущая ставка: 
	<?php 
	if ($cur_item["last_bid"] == NULL)
		echo $cur_item["price"];
	else
		echo $cur_item["last_bid"];	?><br>

	Осталось до конца: <div id="time_left"><?php echo $cur_item["left_seconds"]; ?></div><br>
	<form action= <?php echo "items.php?id=".$_GET[id];?> method="POST">
		<input type="text" name="bid">
		<input type="submit" value="Сделать ставку">
	</form>
</body>
</html>