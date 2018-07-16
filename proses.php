<?php
$link = mysqli_connect('localhost','root','','database');


if (isset($_POST['daftar'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $web = $_POST['web'];
  $query = "INSERT INTO acchajid (username , password, website) VALUE ('$username','$password','$web')";
  $hasil = mysqli_query($link,$query);

if ($hasil) {
  header('Location: data.php');
}else {
echo "gagal";
}

}else {
  header('Location: data.php');
}


 ?>
