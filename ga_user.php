<?php
require './ga-core/main-core.php';
try {
  $connection = new mysqli(GA_DB_HOST, GA_DB_USER, GA_DB_PASS, GA_DB_NAME);
  $user_info = $connection->query('SELECT * FROM uzytkownicy WHERE user=$_GET["id"]');
  //$user = $user_info->num_rows;
  if($user_info<1)
  {
	 // header('Location: ./index.php');
	  //exit();
  }
  else
  {
	  $user_infos = $user_info->fetch_assoc();
	  
	  echo '
	  <!DOCTYPE html>
	  <html>
	  <head>
		<title>$connection->query("SELECT title FROM metas"); </title>
	  </head>
	  </html>
	  ';
	  
  }
} catch (Exception $e) {
  echo 'Wystąpił błąd z serwerem w lini'. __LINE__ .' pliku '. __FILE__ .'!';
}

?>
