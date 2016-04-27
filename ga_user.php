<?php
require './core/main-core.php';
try {
  $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  $user_info = $connection->query('SELECT * FROM uzytkownicy WHERE id=$_GET["id"]');
  echo $user_info['nick'];
} catch (Exception $e) {
  echo 'Error at line'.__LINE__.' file '.__FILE__.'!';
}

?>
