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
DEFINE('GA_DB_PASS', '');//DB PASS
DEFINE('GA_DB_NAME', 'GoodAnswer'); //DB NAME

try {
  $connection = new mysqli(GA_DB_HOST, GA_DB_USER, GA_DB_PASS, GA_DB_NAME);
} catch (Exception $e) {

}

public function ga_head_all()
{
  ga_head_metas();
  ga_head_css();
}

public function ga_head_metas()
{
  $ga_head_metas =
  '
    <meta charset="UTF-8" />
    <title>' echo $connection->query('SELECT title FROM head_table');'</title>
  ';
}

?>
