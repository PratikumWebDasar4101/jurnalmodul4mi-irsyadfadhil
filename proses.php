<?php
session_start();
if (isset($_POST['submit'])) {
		$nama_gambar = $_FILES['gambar']['name'];
		$tmp_gambar = $_FILES['gambar']['tmp_name'];
		$dir = "gambar/";
		$tempat_gambar = $dir.$nama_gambar;
		$uploadGambar = move_uploaded_file($tmp_gambar, $tempat_gambar);
		
		if ($uploadGambar){
			$data = $_POST['hobby'];
			$_SESSION['hobby'] = $data;
			$_SESSION['gambar'] = 'gambar/'.$nama_gambar;
			header("Location: halaman_akhir.php");
		}
}
?>