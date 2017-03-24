<?php session_start();
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];

$query=mysql_query("SELECT * from regiter where username='$username' and password='$password'");
$cek=mysql_num_rows($query);
$ambil= mysql_fetch_array($query);
if($cek){
$_SESSION['username']=$username;
$_SESSION['password']=$password;
if($ambil['privilage']=="1"){
	
	header("location:home_admin.php");
}
if($ambil['privilage']=="0"){
	header("location:home_user.php");
}

}else{
 ?>Anda gagal login. silahkan <a href="login.php">Login kembali</a><?php
 echo mysql_error();
}




?>