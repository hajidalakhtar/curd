<?php
$link = mysqli_connect('localhost','root','','database');

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $query = "DELETE FROM acchajid WHERE id=$id";
  $hasil = mysqli_query($link,$query);
  if ($hasil) {
  header('Location: data.php');
}else {
  echo 'gagal';
}
}else {
  header('Location: data.php');
}

 ?>
