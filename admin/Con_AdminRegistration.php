<?php
	require_once'classes/Admin.php';
    $objadmin = new admin();
    $result = $objadmin->insert($_POST);
    header("LOCATION: page-login.html");
?>