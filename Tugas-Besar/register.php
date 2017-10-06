<?php
include("functions/functions.php");
?>
<!DOCTYPE html>
<head>
		<title> Daftar Akun </title>
	 	<link rel="stylesheet" href="css/style.css">
	 	<link rel='shortcut icon' type='image/png' href='img/logo.png'/>
  	<link rel="stylesheet" type="text/css" href="js/jeasyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="js/jeasyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="js/jeasyui/demo.css">
    <script type="text/javascript" src="js/jeasyui/jquery.min.js"></script>
    <script type="text/javascript" src="js/jeasyui/jquery.easyui.min.js"></script>
		<script type="text/javascript">
		function myformatter(date){
				var y = date.getFullYear();
				var m = date.getMonth()+1;
				var d = date.getDate();
				return (d<10?('0'+d):d)+'/'+(m<10?('0'+m):m)+'/'+y;
		}
		function myparser(s){
				if (!s) return new Date();
				var ss = (s.split('-'));
				var y = parseInt(ss[0],10);
				var m = parseInt(ss[1],10);
				var d = parseInt(ss[2],10);
				if (!isNaN(y) && !isNaN(m) && !isNaN(d)){
						return new Date(d,m-1,y);
				}
		}
</script>
</head>
	<body>
		<div class="kotakkecil">
		Questions & Answers
		</div>
		<img src="img/11.png">
		  <div id="Akun">
        <h3>Buat Akun</h3>
        <fieldset>
            <form action="" method="post">

								<div style="margin-bottom:20px; margin-top: 0px;">
            			<input class="easyui-textbox" type="text" label="Nama Lengkap:" name="nama" labelPosition="top" style="width:50%;" required/>
        				</div>
								<div style="margin-bottom:20px; margin-top: 0px;">
            			<input class="easyui-textbox" type="text" label="Username:" name="username" labelPosition="top" style="width:50%;" required/>
        				</div>
								<div style="margin-bottom:20px; margin-top: 20px;">
            			<input class="easyui-textbox" type="text" label="Email:" name="email" labelPosition="top" data-options="prompt:'Masukkan email aktif anda...',validType:'email'" style="width:50%;" required/>
        				</div>
                <div style="margin-bottom:20px; margin-top: 20px;">
            			<input class="easyui-datebox" label="Tanggal Lahir:" name="tanggallahir" labelPosition="top" data-options="formatter:myformatter,parser:myparser" style="width:50%;">
        				</div>
                <h4>Jenis Kelamin </h4>
                <input type="radio" name="jk" value="Laki-laki"/>Laki-laki<br/>
                <input type="radio" name="jk" value="Perempuan"/>Perempuan<br/>
								<div style="margin-bottom:20px; margin-top: 20px;">
            			<input class="easyui-passwordbox" label="Password:" name="password" labelPosition="top" style="width:50%;" required/>
        				</div>
                <input type="submit" name="register" value="register" >
            </form>

        </fieldset>
    </div>
    <?php
    register();
     ?>
	</body>

</html>
