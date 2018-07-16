<?php
session_start();


$link = mysqli_connect('localhost','root','','database');
$query = 'SELECT * FROM admin';
$hasil = mysqli_query($link,$query);
$data = mysqli_fetch_assoc($hasil);








if (isset($_POST['submit'])) {
  if ($_POST['user'] == $data['username'] && $_POST['password'] == $data['password']) {

    header("Location: data.php");


      $_SESSION["nama_user"] = $_POST["user"];

  }else {

echo "<p style='margin-top:230px; margin-left:550px; color:red; position:absolute'>password salah</p>";

  }


  }

mysqli_close($link)






 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link rel="stylesheet" href="css/Main.css">
 <link rel="stylesheet" href="css/style.css">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

     <div class="row">
       <div class="container">




         <form class="" action="" method="post" style="margin-top:250px; margin-left:350px; position:absolute">
           <input placeholder="Username" id="first_name" type="text" class="validate" name="user"style="width:260px;"> <br>
           <input id="password" type="password" class="validate" placeholder="password" name="password" style="width:260px;">
           <br>
           <br>
           <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
                <i class="material-icons right">arrow_forward</i>
                </button>


         </form>


</div>


     </div>











   </body>
   <script type="text/javascript" src="Main.js"></script>
   <script type="text/javascript">

   </script>
 </html>
