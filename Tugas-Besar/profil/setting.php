<?php

$sql_user = "select * from user where username='$username'";
$run_sql_user = mysqli_query($db,$sql_user);

while ($row_user=mysqli_fetch_array($run_sql_user)){

  $id = $row_user['id'];
  $nama = $row_user['nama'];
  $email= $row_user['Email'];
  $tanggallahir = $row_user['TanggalLahir'];
  $jk = $row_user['jk'];


 ?>
 
 <form action="" method="post">

     <div style="margin-bottom:20px; margin-top: 0px;">
       <input class="easyui-textbox" type="text" label="Nama Lengkap:" name="nama" value="<?php echo $nama; ?>" labelPosition="top" style="width:50%;" required/>
     </div>
     <div style="margin-bottom:20px; margin-top: 0px;">
       <input class="easyui-textbox" type="text" label="Username:" name="username" value="<?php echo $username; ?>" labelPosition="top" style="width:50%;" required/>
     </div>
     <div style="margin-bottom:20px; margin-top: 20px;">
       <input class="easyui-textbox" type="text" label="Email:" name="email" value="<?php echo $email; ?>" labelPosition="top" data-options="prompt:'Masukkan email aktif anda...',validType:'email'" style="width:50%;" required/>
     </div>
     <div style="margin-bottom:20px; margin-top: 20px;">
       <input class="easyui-datebox" label="Tanggal Lahir:" name="tanggallahir" value="<?php echo $tanggallahir; ?>" labelPosition="top" data-options="formatter:myformatter,parser:myparser" style="width:50%;">
     </div>
     <h4>Jenis Kelamin </h4>
     <?php if ($jk=='Laki-laki') {
       echo "<input type='radio' name='jk' value='Laki-laki' checked/>Laki-laki<br/>
              <input type='radio' name='jk' value='Perempuan' />Perempuan<br/>";
     }elseif ($jk=='Perempuan') {

       echo "<input type='radio' name='jk' value='Laki-laki' />Laki-laki<br/>
       <input type='radio' name='jk' value='Perempuan' checked/>Perempuan<br/>";
     }

      ?>
     <br>
     <?php } ?>
     <table style="width:50%;">
       <tr>
         <td ><a href="my_account.php"><button type="button" name="button" style="float:left;width:45%;">Back</button></a></td>
         <td><input type="submit" name="update" value="Update" style="float:right;width:45%;" ></td>
       </tr>
     </table>


 </form>
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
 </script>
<?php update(); ?>
