<?php
include("functions/functions.php");
 ?>
<!DOCTYPE html>
<head><title> Lupa Password </title>
	 <link rel="stylesheet" href="css/style2.css">
	 <link rel='shortcut icon' type='image/png' href='img/logo.png'/>

	 <link rel="stylesheet" type="text/css" href="js/jeasyui/themes/default/easyui.css">
	 <link rel="stylesheet" type="text/css" href="js/jeasyui/themes/icon.css">
	 <link rel="stylesheet" type="text/css" href="js/jeasyui/demo.css">
	 <script type="text/javascript" src="js/jeasyui/jquery.min.js"></script>
	 <script type="text/javascript" src="js/jeasyui/jquery.easyui.min.js"></script>
</head>
	<body>
		<div class="kotakkecil">
		Questions & Answers
		</div>
		<img src="img/11.png">
		  <div id="Lupa">
        <h3>Lupa Password</h3>
        <fieldset>
            <form action="" method="post">
							<div style="margin-bottom:20px; margin-top: 20px;">
								<input class="easyui-textbox" type="text" label="Email:" name="to_email" labelPosition="left" data-options="prompt:'Masukkan email aktif anda...',validType:'email'" style="width:50%;" required/>
							</div>
                <input type="submit" name="send" value="send" >
            </form>

				</fieldset>

    </div>

	</body>
	<?php
	if(isset($_POST['send']))
	{
		global $db;
		$email_penerima=$_POST['to_email'];
		$sql_cek_email="select email from user where Email='$email_penerima'";
		$run_sql = mysqli_query($db,$sql_cek_email);
		$cek = mysqli_num_rows($run_sql);

		if ($cek == 0) {
				echo "<script> alert('Email tidak ditemukan') </script>";
		}

else {

	include('phpmailer/class.phpmailer.php');
	include('phpmailer/class.smtp.php');



	$subjek="Reset Password Q&A System org5ITERA";
	$pesan="Ganti password baru anda di <a href='http://localhost/Tugas-Besar/ResetPassword.php?email=".$email_penerima."'>link</a>";

	$mail = new PHPMailer();

	$mail->Host     = "ssl://smtp.gmail.com";
	$mail->Mailer   = "smtp";
	$mail->SMTPAuth = true;

	$mail->Username = "org5itera@gmail.com";
	$mail->Password = "org5itera123123";
	$webmaster_email = "org5itera@gmail.com";
	$email = $email_penerima;
	$name =  $nama_penerima;
	$mail->From = $webmaster_email;
	$mail->FromName = "admin";
	$mail->AddAddress($email,$name);
	$mail->AddReplyTo($webmaster_email,"admin");
	$mail->WordWrap = 50;
	//$mail->AddAttachment("module.txt"); // attachment
	//$mail->AddAttachment("new.jpg"); // attachment
	$mail->IsHTML(true);
	$mail->Subject = $subjek;
	$mail->Body = $pesan;
	$mail->AltBody = "This is the body when user views in plain text format";
	if(!$mail->Send())
	{
	echo "<script> alert('Error!".$mail->ErrorInfo."') </script>";
	}
	else
	{
	echo "<script> alert('Cek email anda!') </script>";
	echo "<script>window.open('index.php','_self')</script>";
	}
}

}
	?>
</html>
