<?php 
	session_start();
	$conn = mysqli_connect ('localhost','root', '', 'd_modul5');
	$pk = $_SESSION['pk'];
		$sql = "SELECT nama FROM t_jurnal WHERE nim = 'pk'";
		$query = mysqli_query($conn, $sql);
		$hasil = mysql_fetch_array($query);

		echo "Nama : ". $hasil ['nama']."<br>";

 ?>