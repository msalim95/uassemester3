<?php
include ("koneksi.php");//fungsi untuk gabung file
if(isset($_POST['simpan'])){
	$query_input_transaksi="insert into transaksi(id_transaksi,nama_transaksi,tgl_transaksi,harga,qty,id_barang)
	values('".$_POST['id_transaksi']."',
		   '".$_POST['nama_transaksi']."',
		   '".$_POST['tgl_transaksi']."',
		   '".$_POST['harga']."',
		   '".$_POST['qty']."',
		   '".$_POST['id_barang']."')"; 
	$proses_data=mysql_query($query_input_transaksi);
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
		<td>id_transaksi</td>
		<td><input name="id_transaksi" type="number"></td>
	</tr>
	<tr>
		<td>nama_transaksi</td>
		<td><input name="nama_transaksi" type="teks"></td>
	</tr>
	<tr>
		<td>tgl_transaksi</td>
		<td><input name="tgl_transaksi" type="date"></td>
	</tr>
	<tr>
		<td>harga</td>
		<td><input name="harga" type="number"></td>
	</tr>
	<tr>
		<td>qty</td>
		<td><input name="qty" type="number"></td>
	</tr>
	<tr>
		<td>id_barang</td>
		<td><input name="id_barang" type="number"></td>
	</tr>
	<tr>
		<td><input name="simpan" type="submit"></td>
	</tr>
</table>
</form>