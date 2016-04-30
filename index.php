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
	$title =  $connection->query('SELECT * FROM ga_head_table WHERE ga_id="index"'); 
	foreach($title as $item)
	{
		$tit = $item['ga_title'];
		echo $tit;
	}
	?></title>
	<?php echo '<link rel="stylesheet" href="./ga-theme/Default/ga_style.css?' . GA_VERSION . '" />';
	?>
  </head>
  <body>
		<?php
			ga_header_menu();
		?>
	</div>
	<div class="ga_question_menu">
		<?php
	$titles =  $connection->query('SELECT * FROM ga_question'); 
		foreach($titles as $item)
		{
			echo '<div class="clear"></div>';
			echo '<div class="ga_questions_index">';
			echo '<h3><a href="./topic/' . $item['ga_id'] . '" >' . $item['ga_topic'] . '</a></h3><br />';
			echo 'Pytanie zadane ' . $item['ga_date'] . ' przez użytkownika ' . $item['ga_author'] . '.';
			echo '</div>';
		}
		
		?>
	</div>  
  </body>
</html>
