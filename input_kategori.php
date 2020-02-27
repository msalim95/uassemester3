<?php
include ("koneksi.php");//fungsi untuk gabung file
if(isset($_POST['simpan'])){
	$query_input_kategori="insert into kategori(id_kategori,nama)
	values('".$_POST['id_kategori']."',
		   '".$_POST['nama']."')"; 
	$proses_data=mysql_query($query_input_kategori);
    if($proses_data){
		echo 'Input Data Berhasil';
	} else {
		echo mysql_error ();
		
}

}
	
?>

<form method ="post" action=""><!--Form untuk kirim data ke DB-->
<table border="1"><!--name harus sama dengan database-->
	<tr>
		<td>id_kategori</td>
		<td><input name="id_kategori" type="number"></td>
	</tr>
	<tr>
		<td>nama</td>
		<td><input name="nama" type="teks"></td>
	</tr>
	<tr>
		<td><input name="simpan" type="submit"></td>
	</tr>
</table>
</form>