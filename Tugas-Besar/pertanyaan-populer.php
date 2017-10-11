<?php
session_start();
include("functions/functions.php");
$username = $_SESSION['username'];
$id_tanya = $_GET['id'];
$_SESSION['id_tanyaa'] = $id_tanya;
$tarik = "select * from question where id=$id_tanya";
$run_tarik = mysqli_query($db,$tarik);
$info = mysqli_fetch_array($run_tarik);
$judul = $info['judul'];
$rincian = $info['question'];
?>

 <!DOCTYPE html>
<head><title> Questions & Answer </title>
	 <link rel="stylesheet" href="css/StyleQuestion.css">
      <link rel= 'shortcut icon' type='images/png' href='img/logo.png'/>
</head>
	<body>
		<div class="kotakkecil">
		Questions & Answers
        </div>

        <div class="menu">
        <ul>
        	<li><a href="main.php">BERANDA</a></li>
            <li><a href="profil/my_account.php">PROFIL</a></li>
            <li><a href="logout.php">KELUAR</a></li>
        </ul>
        </div>

        <div class ="home">
        <h3><?php echo "$judul" ?></h3>
        <h4><?php echo "$rincian" ?></h4>
        <h6>JAWABAN</h6>
        <?php
            $jawab = "select * from answer where id_question = '$id_tanya'";
            $run_jawab = mysqli_query($db,$jawab);

            while ($row_jawab=mysqli_fetch_array($run_jawab)){
              $waktu = $row_jawab['waktu'];
              $phpdate = strtotime( $waktu );
              $date = date( 'd-m-Y H:i', $phpdate );
              $info_jawab_id_user = $row_jawab['id_user'];
              $sql= "select * from user where id = '$info_jawab_id_user'";
              $run_sql = mysqli_query($db,$sql);
              $info = mysqli_fetch_array($run_sql);
              $info_jawab_username = $info['username'];
              $rincian_jawab = $row_jawab['answer'];
        ?>
        <div class="kotakkomentar">

        	<h5><?php echo "$info_jawab_username" ?></h5>
            <h1><?php echo "$rincian_jawab" ?></h1>
            <h2><?php echo "$waktu" ?></h2>
        </div>
        <?php } ?>
        <fieldset>
            <form method="POST" action="">
                <textarea placeholder="Tambah Jawaban" name="jawab_txt"></textarea>
                <input name="JAWAB" type="submit" value="JAWAB" />
            </form>
            <?php answer() ?>
        </fieldset>
        </div>

        <!-- <div id="footer">

        <h3>&copy; 2017 by <a href="http://github.com/org5ITERA">org5ITERA</a></h3>

        </div> -->

	</body>

</html>
