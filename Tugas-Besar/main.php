
<?php
session_start();
include("functions/functions.php");
$username = $_SESSION['username'];
if (!isset($_SESSION['username'])) {
  echo "<script>window.open('index.php','_self')</script>";
}
else {
  echo "";
}
 ?>
<!DOCTYPE html>
<head><title> Questions & Answer </title>
	 <link rel="stylesheet" href="css/StyleHome.css">
      <link rel= 'shortcut icon' type='images/png' href='img/logo.png'/>
</head>
	<body>
		<div class="kotakkecil">
		Questions & Answers
        </div>

        <div class="menu">
        <ul>
            <li><a href="profil/my_account.php">PROFIL</a></li>
            <li><a href="logout.php">KELUAR</a></li>
        </ul>
        </div>

        <div class ="home">
        <h3>KIRIM PERTANYAAN</h3>
        <fieldset>
            <form method="POST" action="">
            <input type="text" placeholder="Judul..." name="judul"></input>
            <textarea placeholder="Tulis Pertanyaan..." name="pert_txt"></textarea>
            <input name="KIRIM" type="submit" value="KIRIM" />
            </form>
            <?php
            question();
            ?>
        </fieldset>
        </div>
        
        <div class="pertanyaan_pop">
          <h3>PERTANYAAN POPULER</h3>
          <div class="scroll">  
        <?php

        $tanya = "select * from question"; 
        $run_tanya = mysqli_query($db,$tanya);

        while ($row_tanya=mysqli_fetch_array($run_tanya)){
          $id = $row_tanya['id'];
          $judul = $row_tanya['judul'];
          $waktu = $row_tanya['waktu'];
          $phpdate = strtotime( $waktu );
          $date = date( 'd-m-Y H:i', $phpdate );
          $info_question_id_user = $row_tanya['id_user'];
          $sql= "select * from user where id = '$info_question_id_user'";
          $run_sql = mysqli_query($db,$sql);
          $info = mysqli_fetch_array($run_sql);
          $info_question_username = $info['username'];
        ?>
        <fieldset>
        <?php 
        $countanswer = "select * from answer where id_question='$id' ";
        $run_count = mysqli_query($db,$countanswer);
        $count = mysqli_num_rows($run_count); 
        ?>
              <h5><?php echo "$info_question_username"?></h5>
              <a href="pertanyaan-populer.php?id=<?php echo "$id" ?>"><?php echo"$judul" ?></a>
              <br>
              <h4><?php echo" $count Komentar | $date"?></h4>
              <hr class="garis"></hr>
            
          </fieldset>
       
      <?php } ?>
      </div>
       </div>
        <div id="footer">

        <h3>&copy; 2017 by <a href="http://github.com/org5ITERA">org5ITERA</a></h3>

        </div>

	</body>

</html>
