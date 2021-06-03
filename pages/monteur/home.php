<?php
require_once('nav.php');
require_once('./init.php'); 

$page = empty($_GET['page']) ? 'dashboard.php': ($_GET['page'] . '.php');
require_once($page);


?>