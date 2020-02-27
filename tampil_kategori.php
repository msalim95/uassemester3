<?php
include('koneksi.php');
$tampil_kategori =mysql_query("select * from kategori");

?>
<br>
<br>
<br>
    <div class="container">
	<a href = "input_kategori.php"/>kategori</a>
<form method ="post" action=""><!--Form untuk kirim data ke DB-->
<table border="1"><!--name harus sama dengan database-->
	<tr>
		<td>id_kategori</td>
		<td>nama</td>
	</tr>
<?php
while($data = mysql_fetch_array($tampil_kategori)) { ?>
		<tr>
			<td><?php echo $data['id_kategori'];?></td>
			<td><?php echo $data['nama'];?></td>
	
			
		</tr>
		
<?php } ?>
</table>
</form>
</div>
<?php