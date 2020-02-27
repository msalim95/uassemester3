<?php
include('koneksi.php');
$tampil_satuan =mysql_query("select * from satuan");

?>
<br>
<br>
<br>
    <div class="container">
	<a href = "input_satuan.php"/>satuan</a>
<form method ="post" action=""><!--Form untuk kirim data ke DB-->
<table border="1"><!--name harus sama dengan database-->
	<tr>
		<td>id_satuan</td>
		<td>nama</td>
	</tr>
<?php
while($data = mysql_fetch_array($tampil_satuan)) { ?>
		<tr>
			<td><?php echo $data['id_satuan'];?></td>
			<td><?php echo $data['nama'];?></td>
	
			
		</tr>
		
<?php } ?>
</table>
</form>
</div>
<?php