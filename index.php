<?php 
require_once(dirname(__FILE__).'/config/main.php');
echo "<input type='hidden' value=".$config['path_to_home_page']." id ='path_to_home_page' />";
require_once(dirname(__FILE__).'/layouts/main.php');

?>