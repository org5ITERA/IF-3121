<?php

session_start();
include("functions/functions.php");


if (!isset($_SESSION['username'])) {
  echo "<script>window.open('index.php','_self')</script>";
}
else {
  echo "";
}

?>
<!DOCTYPE html>
<head><title> Questions & Answer </title>
	 <link rel="stylesheet" href="css/stylesAcc.css">
	 <link rel="shortcut icon" type="images/png" href="../img/logo.png"/>
	 <link rel="stylesheet" type="text/css" href="../js/jeasyui/themes/default/easyui.css">
   <link rel="stylesheet" type="text/css" href="../js/jeasyui/themes/icon.css">
   <link rel="stylesheet" type="text/css" href="../js/jeasyui/demo.css">
   <script type="text/javascript" src="../js/jeasyui/jquery.min.js"></script>
   <script type="text/javascript" src="../js/jeasyui/jquery.easyui.min.js"></script>

</head>
	<body>

    <div class="content_wrapper">
			<div id="kotakkecil">
			<a href="../main.php">Questions & Answers</a>
			</div>

    <div id="sidebar">
      <div id="sidebar_title">
        Akun Saya:
      </div>
			<?php
			$username = $_SESSION['username'];

			$get_info = "select * from user where username='$username'";

			$run_info = mysqli_query($db, $get_info);

			$row_info = mysqli_fetch_array($run_info);


			$nama = $row_info['nama'];
			$lastlogin = $row_info['lastlogin'];

			$phpdate = strtotime( $lastlogin );
			$mysqldate = date( 'd-m-Y H:i:s', $phpdate );
			echo "<br><p style='text-align:center;color:#FFF'>Nama: <b>$nama</b><br>Last Login:<br> $mysqldate </p>";


			?>
      <ul id="sb">


        <a href="my_account.php?home">Home</a> <br>
        <a href="my_account.php?question">Pertanyaanku</a> <br>
        <a href="my_account.php?setting">Pengaturan Akun </a><br>
				<a href="my_account.php?password">Ganti Password</a> <br>
        <a href="logout.php">Logout</a>
      </ul>

    </div>
    <div id="content_area">
			<?php $username = $_SESSION['username'];
			$get_u = "select * from user where username='$username'";
			$run_u = mysqli_query($db,$get_u);
			$row_u = mysqli_fetch_array($run_u);
			$u_id = $row_u['id'];
			 ?>

		<?php
		if(!isset($_GET['home'])){
			if(!isset($_GET['question'])){
				if(!isset($_GET['setting'])){
					if(!isset($_GET['password'])){

		echo "
		<center><h2 style='padding:20px;'>Selamat Datang di Question and Answer </h2>
		<h1><b>$nama</b></h1></center>";

		}
		}
		}
		}

		if(isset($_GET['home'])){
		echo "<script> window.open('../main.php','_self') </script>";
		}
		if(isset($_GET['question'])){
		include("question.php");
		}
		if(isset($_GET['setting'])){
		include("setting.php");
		}
		if(isset($_GET['password'])){
		include("password.php");
		}

		?>
    </div>
    <div id="footer">

		<h3 style="text-align:center; padding-top:30px;">&copy; 2017 by <a href="http://github.com/org5ITERA">org5ITERA</a></h3>

		</div>
</div>
	</body>

</html>
