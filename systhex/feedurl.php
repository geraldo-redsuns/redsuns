<?php session_start(); ?>
<?php include_once("config/defines.php") ?>

<?php

//RETURN PREV OR NEXT FEED URL BASED ON SESSION_ID

$connect = mysql_connect($config["DB_HOST"], $config["DB_USER"], $config["DB_PASS"]);
mysql_select_db($config["DB_NAME"]);


$question = $_GET['q'];

if($question == 'next'){

	$sql = "select feed_id, feed_url, feed_title from feed where feed_id > ".$_SESSION['search_id']."  order by feed_id limit 1";

} elseif($question == 'prev') {

	$sql = "select feed_id, feed_url, feed_title from feed where feed_id < ".$_SESSION['search_id']." order by feed_id desc limit 1";

} else {
	die();
}

//echo $_SESSION['feed_id'];

$query = mysql_query($sql) or die(mysql_error());

$row = mysql_fetch_assoc($query);

if($row['feed_id'] == ""){
	echo $_SESSION['feed_title'];
} else {
	$_SESSION['search_id'] = $row['feed_id'];
	$_SESSION['feed_title'] = "<a target='_parent'  class='campo-pesquisa' href='links.php?noticia=".$row['feed_id']."' >".$row['feed_title']."</a>";
	
	echo "<a target='_parent' class='campo-pesquisa' href='links.php?noticia=".$row['feed_id']."' >".$row['feed_title']."</a>";
}


?>

<?php mysql_close($connect); ?>