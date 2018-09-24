<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border width="50%" align="center">
	<tr>
		<td colspan="2" align="center">
		<img src="<?php echo $_SESSION['gambar']; ?>" width=50%>
		</td>
	</tr>
	<tr>
		<th>Hobby</th>
		<th>Action</th>
	</tr>
		<?php
		$data = $_SESSION['hobby'];
		foreach ($data as $value) {
		?>
		 <tr>
		 	<td><?php echo $value; ?></td>
		 	<td>
		 		<form action="" method="POST">
		 			<input type="hidden" name="index" value="<?php echo $value; ?>">
		 			<input type="submit" name="delete" value="hapus">
		 		</form>
		 	</td>
		 </tr>
		 <?php } ?>
</table>
</body>
</html>