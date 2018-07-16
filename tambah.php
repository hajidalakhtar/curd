
 <!DOCTYPE html>
 <html>
 <head>
     <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
 </head>

 <body>
     <header>
         <h3>Tambah account</h3>
     </header>

     <form action="proses.php" method="POST">

         <fieldset>

         <p>
             <label for="username">Username: </label>
             <input type="text" name="username" placeholder="Username / Email" />
         </p>
         <p>
             <label for="password">password: </label>
             <input type="password" name="password" placeholder="password" />
         </p>
         <p>
             <label for="web">website: </label>
             <input type="text" name="web" placeholder="website" />
         </p>


         <p>
             <input type="submit" value="Daftar" name="daftar" />
         </p>

         </fieldset>

     </form>

     

     </body>
 </html>
