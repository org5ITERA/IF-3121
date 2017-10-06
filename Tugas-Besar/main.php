
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
            <fieldset>
                <a href="">Apakah saya bisa.........</a>
                <br>
                <h4>Komentar Dilihat</h4>
                <hr class="garis"></hr>
                <a href="">Apakah saya bisa.........</a>
                <br>
                <h4>Komentar Dilihat</h4>
                <hr class="garis"></hr>
                <a href="">Apakah saya bisa.........</a>
                <br>
                <h4>Komentar Dilihat</h4>
                <hr class="garis"></hr>
            </fieldset>
        </div>

        <div class="pertanyaan_recent">
            <h3>PERTANYAAN SAYA</h3>
            <fieldset>
                <a href="">Apakah saya bisa.........</a>
                <br>
                <h4>Komentar Dilihat</h4>
                <hr class="garis"></hr>
                <a href="">Apakah saya bisa.........</a>
                <br>
                <h4>Komentar Dilihat</h4>
                <hr class="garis"></hr>
                <a href="">Apakah saya bisa.........</a>
                <br>
                <h4>Komentar Dilihat</h4>
                <hr class="garis"></hr>
                <a href="">Apakah saya bisa.........</a>
                <br>
                <h4>Komentar Dilihat</h4>
                <hr class="garis"></hr>
                <a href="">Apakah saya bisa.........</a>
                <br>
                <h4>Komentar Dilihat</h4>
                <hr class="garis"></hr>
                <a href="">Apakah saya bisa.........</a>
                <br>
                <h4>Komentar Dilihat</h4>
                <hr class="garis"></hr>
                <a href="">Apakah saya bisa.........</a>
                <br>
                <h4>Komentar Dilihat</h4>
            </fieldset>
        </div>

	</body>

</html>
