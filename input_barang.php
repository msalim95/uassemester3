<?php
include ("koneksi.php");//fungsi untuk gabung file
if(isset($_POST['simpan'])){
	$query_input_barang="insert into barang(id_barang,nama,kategori_id,satuan_id)
	values('".$_POST['id_barang']."',
		   '".$_POST['nama']."',
		   '".$_POST['kategori_id']."',
		   '".$_POST['satuan_id']."')"; 
	$proses_data=mysql_query($query_input_barang);
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
		<td>id_barang</td>
		<td><input name="id_barang" type="number"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input name="nama" type="teks"></td>
	</tr>
	<tr>
		<td>kategori_id</td>
		<td><input name="kategori_id" type="number"></td>
	</tr>
	<tr>
		<td>satuan_id</td>
		<td><input name="satuan_id" type="number"></td>
	</tr>
	<tr>
		<td><input name="simpan" type="submit"></td>
	</tr>
</table>
</form>