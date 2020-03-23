<?php 
require __DIR__. '/Database.php';

use CRUD_OOP\Database;

// include 'Database.php';

$db 	= new Database();

$action = $_GET['action'];
if($action == "add")
{
	$db->insert_data($_POST['name'], $_POST['password'], $_POST['email']);
	header('location:../index.php');
} 
elseif($action == "edit")
{
	$db->update_data($_POST['name'], $_POST['password'], $_POST['email'], $_POST['id']);
	header('location:../index.php');
}
elseif ($action == "delete") 
{
	$db->delete($_GET['id']);
	header('location:../index.php');
}




 ?>