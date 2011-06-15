<?php session_start(); ?>
<?php include_once("config/defines.php") ?>

<?php

$connect = mysql_connect($config["DB_HOST"], $config["DB_USER"], $config["DB_PASS"]);
mysql_select_db($config["DB_NAME"]);

$feed_id = $_GET["noticia"];
$_SESSION['feed_id'] = $feed_id;
$_SESSION['search_id'] = $feed_id;

$sql = "update feed
		set
		  feed_click = feed_click + 1
		where feed_id = '".$feed_id."'";
$query = mysql_query($sql);

$sql = "select feed_url from feed where feed_id = '".$feed_id."'";
$query = mysql_query($sql);

$row = mysql_fetch_assoc($query);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Noticias de Boca Juniors</title>
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
		<meta http-equiv="content-language" content="pt-br" />
		<meta name="description" content="" /> 
		<meta name="keywords" content="" />
		<link rel="shortcut icon" href="/img/ico/favicon.png" type="image/x-icon"/>        
		<link href="img/favicon.ico" type="image/png" rel="icon">
		<link type="text/css" rel="stylesheet" href="css/barra-noticias.css"/>
		<script type="text/javascript" src="js/ajax.js"></script>
		<meta name="keywords" content="Futebol, noticias, flamengo, noticias do flamengo, flamengo em destaque, proximo jogo flamengo," />
		<meta name="description" content="Todas as notícias do Flamengo em um só lugar." />
		<meta name="robots" content="index,follow" />

	</head>

	<frameset rows="80,*" frameborder="NO" border="0" framespacing="0"> 
	  <frame name="topFrame" scrolling="NO" noresize src="barra-noticias.php">
	  <frame name="mainFrame" src="<?=$row['feed_url']?>">
	</frameset><noframes></noframes>

</html>
<?php mysql_close($connect); ?>