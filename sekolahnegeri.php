<?php
include "conn.php";?>
<?php
	$query = "SELECT *FROM datasekolah WHERE status='Negeri'";
	$sql = mysql_query($query, $conn);
	$jml_baris = mysql_num_rows($sql);
	echo"Jumlah Data Sekolah Negeri = ";
				  		echo $jml_baris;
	
?>
<!-- daftar pesan -->
<h1 align="center"> Data Sekolah Negeri</h1>
<table border=1 cellspacing=0 width="80%">
	<tr>
		<td>NAMA</td>
		<td>BP</td>
		<td>STATUS</td>
	</tr>
	<?php if($jml_baris==0): ?>
	<tr><td colspan=3>Tidak ada Pesan</td></tr>
	<?php else: ?>
	
	<tr>
		<?php while($data = mysql_fetch_object($sql)): ?>
		<td><?php echo $data->NAMA;?></td>
		<td><?php echo $data->BP;?></td>
		<td><?php echo $data->STATUS;?></td>

	</tr>
		<?php endwhile;?>
		<?php endif; ?>
</table>
<br/>