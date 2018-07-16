<?php

session_start();
$link = mysqli_connect('localhost','root','','database');
$query = 'SELECT * FROM acchajid';
$hasil = mysqli_query($link,$query);
$user = $_SESSION['nama_user'];


if ( isset($_SESSION["nama_user"] )) {
  echo "<h5 class = 'center'> Selamat datang ".$user.'</h5>';

}else {
header('Location: index.php');
}













mysqli_close($link)


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/Main.css">
    <title></title>
  </head>
  <body>
    <br>
    <a href="tambah.php" class="waves-effect waves-light btn">Create</a>
    <br>
    <br>
<div class="container">


    <table border="1" cellpadding="10" cellspacing="0">



    <tr>

      <th>username / Email</th>
      <th>password</th>
      <th>website</th>
      <th>Action</th>
    </tr>

    <?php while ($data = mysqli_fetch_assoc($hasil)) : ?>

      <tr>

      <td><?= $data["username"]; ?></td>
      <td><?= $data["password"]; ?></td>
      <td><?= $data["website"] ?></td>
       <td> <a href="edit.php"  class="waves-effect waves-light btn">EDIT</a> <a href=<?='hapus.php?id='.$data["id"];?> class="btn">delete</a> </td>


        </td>
      </tr>

      <?php endwhile; ?>
    </table>
</div>

    <a href="keluar.php" class="btn " style="margin-left:1250px; margin-top:100px;">Keluar</a>
      </body>

  <script src="js/Main.js"></script>
</html>
