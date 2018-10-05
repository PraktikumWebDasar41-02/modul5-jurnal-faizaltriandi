<?php 
	session_start();
	$conn = mysqli_connect ('localhost','root', '', 'd_modul5');
	$pk = $_SESSION['pk'];
		$sql = "SELECT nama FROM t_jurnal WHERE nim = 'pk'";
		$query = mysqli_query($conn, $sql);
		$hasil = mysql_fetch_array($query);

		echo $hasil ['nama']

 ?>

 <form>
 	<table>
 		<tr>
 			<td>Nama</td>
 			<td><?php echo $nama  ?></td>
 		</tr>
 		<tr>
 			<td>Komentar</td>
 			<td><input type="text" name="komentar"></td>
 		</tr>
 			<td><input type="submit" name="submit"></td>
 	</table>
 </form>