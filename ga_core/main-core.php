<?php
/*
FILE: ./core/main-core.php
AUTHOR: MatPa
LICENSE: GNU GPL 2.0
*/

//DEFINE DB QUERY

//  $pdo = new PDO('mysql:host=localhost;dbname=GoodAnswer', 'root', '');
//  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
DEFINE('GA_DB_HOST', 'localhost'); //DB HOST
DEFINE('GA_DB_USER', 'root');//DB USER
DEFINE('GA_DB_PASS', 'admin');//DB PASS
DEFINE('GA_DB_NAME', 'GoodAnswer'); //DB NAME;

DEFINE('GA_VERSION', '1.0');

function attributes()
{
	$attributes = 
	'
		<!DOCTYPE html>
		<html>
		<!-- POWERED BY GOOD ANSWER -->
		
	';
	return $attributes;
}

function ga_head_all()
{
  ga_head_metas();
  ga_head_css();
}

function ga_head_metas()
{
  $ga_head_metas =
  '
    <meta charset="UTF-8" />
    <title> echo $connection->query("SELECT title FROM head_table")</title>
	<link rel="stylesheet" href="./ga-theme/Default/ga_style.css?'.GA_VERSION.'" />
	
	
  ';
  return $ga_head_metas;
  //echo $ga_head_metas;
}

function ga_head_css()
{
	$ga_head_css = 
	'
		<link rel="stylesheet" href="./ga-theme/Default/ga_style.css?'. GA_VERSION .'" />
	';
	return $ga_head_css;
}

function ga_header_menu()
{
	echo '<div class="ga_top_bar">
		<a href="./index.php"><dfn data-info="Najnowsze pytania"><img src="http://www.forum.matpa.cba.pl/qa-theme/SnowFlat/icons/nav1.png"></dfn></a></div>
		';
		if((isset($_SESSION['logged'])) && ($_SESSION['logged']==true))
		{
			echo '<a href="./user"><dfn data-info="Twój profil"><img src="http://www.forum.matpa.cba.pl/qa-theme/SnowFlat/icons/nav2.png"></dfn></a>
			';
		}
}


?>
