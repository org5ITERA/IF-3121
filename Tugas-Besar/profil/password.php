<center>
<br>
<h1>Ganti Password</h1>
<br>
<form action="" method="post">


<div style="margin-bottom:20px">
    <input class="easyui-passwordbox" name="lama" prompt="Password lama" iconWidth="28" style="width:50%;height:34px;padding:10px;">
</div>
<div style="margin-bottom:20px">
    <input id="pass" class="easyui-passwordbox" name="baru" prompt="Password baru" iconWidth="28" style="width:50%;height:34px;padding:10px">
</div>
<div style="margin-bottom:20px">
    <input class="easyui-passwordbox" name="baru1" prompt="Konfirmasi password baru" iconWidth="28" validType="confirmPass['#pass']" style="width:50%;height:34px;padding:10px">
</div>
<table style="width:50%;">
  <tr>
    <td ><a href="my_account.php"><button type="button" name="button" style="float:left;width:45%;">Back</button></a></td>
    <td><input type="submit" name="change_passwd" value="Update" style="float:right;width:45%;" ></td>
  </tr>
</table>
</form>
</center>
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
<?php changepasswd(); ?>
