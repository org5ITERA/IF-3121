<?php
include("functions/functions.php");
?>
<!DOCTYPE html>
<head>
	<title> Reset Password </title>
	<link rel="stylesheet" href="css/stylereset.css">
  <link rel='shortcut icon' type='image/png' href='img/logo.png'/>
	<link rel="stylesheet" type="text/css" href="js/jeasyui/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="js/jeasyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="js/jeasyui/demo.css">
	<script type="text/javascript" src="js/jeasyui/jquery.min.js"></script>
	<script type="text/javascript" src="js/jeasyui/jquery.easyui.min.js"></script>
	<script type="text/javascript">
	        $.extend($.fn.validatebox.defaults.rules, {
	            confirmPass: {
	                validator: function(value, param){
	                    var pass = $(param[0]).passwordbox('getValue');
	                    return value == pass;
	                },
	                message: 'Password tidak sama.'
	            }
	        })
	    </script>

</head>
	<body>
        <div class="kotakkecil">
        Questions & Answers
        </div>
		<img src="img/11.png">
		  <div id="ResetPassword">
        <h3>Reset Password</h3>
        <fieldset>
            <form action="" method="post">
							<div style="margin-bottom:20px">
									<input id="pass" class="easyui-passwordbox" name="baru" prompt="Password baru" iconWidth="28" style="width:80%;height:34px;padding:10px">
							</div>
							<div style="margin-bottom:20px">
									<input class="easyui-passwordbox" name="baru1" prompt="Konfirmasi password baru" iconWidth="28" validType="confirmPass['#pass']" style="width:80%;height:34px;padding:10px">
							</div>
							<input type="submit" name="reset" value="reset">

            </form>

        </fieldset>
    </div>
		<?php resetpassword(); ?>
	</body>

</html>
