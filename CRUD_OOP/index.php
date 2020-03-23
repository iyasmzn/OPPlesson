<?php 
require __DIR__. '/config/Database.php';

use CRUD_OOP\Database;

// include 'Database.php';

$db 	= new Database();
$data 	= $db->show_data();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <a href="add.php">Add User</a>
 <table border="1">
 	<tr>
 		<th>No</th>
 		<th>Name</th>
 		<th>Email</th>
 		<th>Action</th>
 	</tr>

 	<?php 
 	$no 	= 1;
 	foreach($data as $data_user) {
 	?>
 	<tr>
 		<td><?= $no++; ?></td>
 		<td><?= $data_user['name']; ?></td>
 		<td><?= $data_user['email']; ?></td>
 		<td>
 			<a href="edit.php?id=<?= $data_user['id']; ?>">Edit</a>
 			<a href="config/Process.php?id=<?= $data_user['id']; ?>&action=delete" onclick="javascript:return confirm('Are you sure want to delete this user?')">Delete</a>
 		</td>
 	</tr>
 	<?php 
 	}
 	?>
 </table>

</body>
</html>