<?php
session_start();
include("functions/functions.php");
?>
<!DOCTYPE html>
<head><title> Questions & Answer </title>
	 <link rel="stylesheet" href="css/StyleLogin.css">
     <link rel='shortcut icon' type='image/png' href='img/logo.png'/>
</head>
	<body>
		<div class="kotakkecil">
		Questions & Answers
		</div>
		<img src="img/11.png">
		  <div id="login">
        <h3>Masuk</h3>
        <fieldset>
            <form action="" method="post">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Kata Sandi">
                <input type="submit" name="login" value="login">
						</form>
						<a href="ForgotPassword.php"><button>Lupa Password</button></a>
            <div class="border-p"></div>
            <p>Belum Punya Akun? </p>
            <a href="register.php"><button>Buat Akun</button></a>

        </fieldset>
    </div>
    <?php
    login();
    ?>
	</body>

</html>
