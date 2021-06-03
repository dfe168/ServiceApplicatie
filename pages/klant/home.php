<?php
require_once('nav.php');

$page = empty($_GET['page']) ? 'dashboard.php': ($_GET['page'] . '.php');
require_once($page);

?>





