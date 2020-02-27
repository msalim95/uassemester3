<?php
include('koneksi.php');
$tampil_barang =mysql_query("select * from barang");

?>
<br>
<br>
<br>
    <div class="container">
	<a href = "input_barang.php"/>Tambah Barang</a>
<form method ="post" action=""><!--Form untuk kirim data ke DB-->
<table border="1"><!--name harus sama dengan database-->
	<tr>
		<td>id_barang</td>
		<td>nama</td>
		<td>kategori_id</td>
		<td>satuan_id</td>
	</tr>
<?php
while($data = mysql_fetch_array($tampil_barang)) { ?>
		<tr>
			<td><?php echo $data['id_barang'];?></td>
			<td><?php echo $data['nama'];?></td>
			<td><?php echo $data['kategori_id'];?></td>
			<td><?php echo $data['satuan_id'];?></td>
	
			
		</tr>
		
<?php } ?>
</table>
</form>
</div>
<?php
