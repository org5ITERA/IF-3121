<?php
$db = mysqli_connect("localhost", "root","1234567890","Tugas-Besar");

function login(){

	if (isset($_POST['login'])){

		global $db;
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "select * from user where username='$username' AND password='$password'";
		$run_sql=mysqli_query($db,$sql);
		$cek_user= mysqli_num_rows($run_sql);
		if ($cek_user==0) {
			echo "<script> alert('Username atau password SALAH') </script>";
			exit();
		} else {
			$_SESSION['username']=$username;
			echo "<script> window.open('my_account.php','_self') </script>";
		}
	}
}

function update(){

	if (isset($_POST['update'])) {
		global $db;

		$username = $_SESSION['username'];
		$sql= "select * from user where username='$username'";
		$run_sql = mysqli_query($db,$sql);
		$info = mysqli_fetch_array($run_sql);
		$id = $info['id'];

		$cnama = $_POST['nama'];
		$cusername = $_POST['username'];
		$cemail = $_POST['email'];
		$ctanggallahir = $_POST['tanggallahir'];
		$cjk = $_POST['jk'];

		$sql_cek_username = "select username from user where username='$cusername'";
		$run_cek = mysqli_query($db,$sql_cek_username);
		$cek = mysqli_num_rows($run_cek);

		if ($username==$cusername) {
			$sql_update = "update user set nama='$cnama',Email='$cemail',TanggalLahir='$ctanggallahir',jk='$cjk' where id='$id'";
			$run_update = mysqli_query($db,$sql_update);
			echo "<script>alert('Data anda sudah di perbarui')</script>";
			echo "<script> window.open('my_account.php','_self') </script>";
		}
		else {
			if ($cek==1) {
				echo "<script>alert('Username sudah di pakai!')</script>";
			}else {
				$sql_update = "update user set nama='$cnama',username='$cusername',Email='$cemail',TanggalLahir='$ctanggallahir',jk='$cjk' where id='$id'";
				$run_update = mysqli_query($db,$sql_update);
				echo "<script>alert('Data anda sudah di perbarui')</script>";
				echo "<script> window.open('my_account.php','_self') </script>";
			}
		}
	}
}

function changepasswd(){
	if (isset($_POST['change_passwd'])) {
		global $db;
		$username = $_SESSION['username'];
		$passwdlama = $_POST['lama'];
		$passwdbaru = $_POST['baru'];
		$sql_cekpass = "select id,password from user where username='$username' and password='$passwdlama'";
		$run_cekpass = mysqli_query($db,$sql_cekpass);
		$info = mysqli_fetch_array($run_cekpass);
		$id = $info['id'];
		$cekpasswd = mysqli_num_rows($run_cekpass);
		if ($cekpasswd==1) {
			$sql_newpass = "update user set password='$passwdbaru' where id='$id'";
			$run_newpass = mysqli_query($db,$sql_newpass);
			echo "<script>alert('Password anda sudah di perbarui')</script>";
			echo "<script> window.open('my_account.php','_self') </script>";
		}else {
			echo "<script>alert('Password lama anda salah')</script>";
		}
	}
}
