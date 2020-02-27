<?php
include('koneksi.php');
$tampil_transaksi =mysql_query("select * from transakasi");

?>
<br>
<br>
<br>
    <div class="container">
	<a href = "input_transaksi.php"/>transakasi</a>
<form method ="post" action=""><!--Form untuk kirim data ke DB-->
<table border="1"><!--name harus sama dengan database-->
	<tr>
		<td>id_transaksi</td>
		<td>nama_transaksi</td>
		<td>tgl_transaksi</td>
		<td>harga</td>
		<td>qty</td>
		<td>id_barang</td>
	</tr>
<?php
while($data = mysql_fetch_array($tampil_transaksi)) { ?>
		<tr>
			<td><?php echo $data['id_transaksi'];?></td>
			<td><?php echo $data['nama_transaksi'];?></td>
			<td><?php echo $data['tgl_transaksi'];?></td>
			<td><?php echo $data['harga'];?></td>
			<td><?php echo $data['qty'];?></td>
			<td><?php echo $data['id_barang'];?></td>
	
			
		</tr>
		
<?php } ?>
</table>
</form>
</div>
<?php
