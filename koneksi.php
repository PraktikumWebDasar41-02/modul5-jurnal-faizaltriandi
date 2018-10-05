<?php 

	if (isset($_POST['submit']))

	$conn = new mysqli_connect ('localhost','root', '', 'd_modul5');

	if($conn->connect_error){
		die("Your Connection Failed : ".$conn->connect_error) 
	}

	$query = new mysqli_query($conn,"INSERT INTO 't_jurnal1'() VALUES ('NIM','Nama','Email','Komentar')" )
 ?>