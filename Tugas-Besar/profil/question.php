<?php
$sql= "select * from user where username='$username'";
$run_sql = mysqli_query($db,$sql);
$info = mysqli_fetch_array($run_sql);
$uid = $info['id'];

$tarik = "select * from question where id_user='$uid'";
$run_tarik = mysqli_query($db,$tarik);

while ($row_tarik=mysqli_fetch_array($run_tarik)){

  $id = $row_tarik['id'];
  $question = $row_tarik['question'];
  $judul = $row_tarik['judul'];
  $waktu = $row_tarik['waktu'];
  $phpdate = strtotime( $waktu );
  $date = date( 'd-m-Y H:i', $phpdate );
 ?>
<div class="pertanyaan_recent">
    <fieldset>
    <?php
    $countanswer = "select * from answer where id_question='$id' ";
    $run_count = mysqli_query($db,$countanswer);
    $count = mysqli_num_rows($run_count);
    ?>
      <h2><a href="../pertanyaan.php?id=<?php echo "$id" ?>"><?php echo"$judul" ?></a></h2>
      <br>
      <h4><?php echo" $count Komentar | $date"?></h4>
      <hr class="garis"></hr>
    </fieldset>
</div>
<?php } ?>
