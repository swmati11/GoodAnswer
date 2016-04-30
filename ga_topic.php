<?php
  session_start();
  require './ga-core/main-core.php';
  //return_as();
  try
  {
	  $connection = new mysqli(GA_DB_HOST, GA_DB_USER, GA_DB_PASS, GA_DB_NAME);
  }
  catch(Exception $e)
  {
	  echo 'Error at line' . __LINE__ . ' file ' . __FILE__ . '!';
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
	<!-- Powered by GoodAnswer http://www.github.com/swmati11/GoodAnswer -->
	<meta charset="UTF-8" />
    <title><?php
	$title =  $connection->query('SELECT * FROM ga_head_table WHERE ga_id="topic"'); 
	foreach($title as $item)
	{
		$tit = $item['ga_title'];
		echo $tit;
	}
	?></title>
	<?php echo '<link rel="stylesheet" href="./ga-theme/Default/ga_style.css?' . GA_VERSION . '" />'; ?>
  </head>
  <body>
  <?php ga_header_menu(); ?>
  
  </body>
  </html>