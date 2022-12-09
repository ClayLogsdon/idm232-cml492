<?php
if(!isset($_GET['id']) || !is_numeric($_GET['id']))
{
	header('Location: ' . DOMAIN . '/index.php');
	exit;
}

$id = $_GET['id'];