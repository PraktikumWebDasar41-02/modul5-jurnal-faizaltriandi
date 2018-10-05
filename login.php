<?php 
	
		
 ?>
<form method="POST" action="#">
	<table border="1">
		<tr>
			<td> NIM </td>
			<td> <input type="number" name="nim"> </td>
		</tr>
		<tr>
			<td> Nama </td>
			<td> <input type="text" name="nama"> </td>
		</tr>
		<tr>
			<td> Email </td>
			<td> <input type="Email" name="email"> </td>
		</tr>
		<tr>
			<td colspan="2" align="center"> <input type="submit" name="submit"> </td>
			
		</tr>
	</table>
</form>

<?php 
	if (isset($_POST['submit'])){
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		// $Komentar = $_POST['komentar'];

		$conn = mysqli_connect ('localhost','root','','d_modul5');
		$inp = mysqli_query($conn,"INSERT INTO t_jurnal1 VALUES ('$nim','$nama','$email','')" );

		if ($inp) {
			header("Location: komentar.php");
		
	
		}
			}

?>