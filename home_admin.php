<!DOCTYPE html>
<html>
<head>
		<title>Tugas Form</title>
</head>
<body>
 <center>
<h2>Data Pengunjung dan Data Sekolah</h2>
<table border="1">
<tr>
		<th>ID</th>
		<th>Username</th>
		<th>Password</th>
		<th>Nama</th>
		
		<th>Email</th>
		<th>Jenis Kelamin</th>
		<th>Usia</th>
		<th>Alamat</th>
		<th>Regional</th>
		<th>Privilage</th>
		 <th>Aksi</th>
</tr>
		<?php
				require 'koneksi.php';
				$no = 1;
				$query = mysql_query("SELECT * FROM regiter");
				while ($hasil = mysql_fetch_array($query)) { ?>
				<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $hasil[1]?></td>
				<td><?php echo $hasil[2]?></td>
				<td><?php echo $hasil[3]?></td>
				<td><?php echo $hasil[4]?></td>
				<td><?php echo $hasil[5]?></td>
				<td><?php echo $hasil[6]?></td>
				<td><?php echo $hasil[7]?></td>
				<td><?php echo $hasil[8]?></td>
				<td>
				<?php 
				if($hasil[9]==1)
				{
					echo "Admin";
				}
				else
				{
					echo "User";
				}
				?>
				</td>


				<td> 
				
				<a href="delete.php?id=<?php echo $hasil[0]?>"><input type= "submit" name="submit" value ="Delete"></a>
				</td>
				</tr>
<?php }?>
		</table>
		<td><a href="create.php"><input type= "submit" name="submit" value ="Create new account"></td>
		<td><a href="login.php"><input type= "submit" name="submit" value ="Keluar"></td>
		<ul align="left">
                                    <li><a href="dapodik.php">Lihat semua data sekolah</a></li>
                                    <li><a href="sekolahnegeri.php">Lihat data sekolah negeri</a></li>
                                    <li><a href="sekolahswasta.php">Lihat data sekolah swasta</a></li>
                                     <li><a href="datasmp.php">Lihat data SMP</a></li>
                                     <li><a href="datasma.php">Lihat data SMA</a></li>
                                     </ul>
</body>
</html>