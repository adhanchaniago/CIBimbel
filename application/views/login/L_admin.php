<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
</head>
<body>
        <section class="login">
        <h1>Login Page</h1>
    
                  <?php
                  // Cetak session
                 if($this->session->flashdata('sukses')) {
                     echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
                 }
                 // Cetak error
                 echo validation_errors('<p class="warning" style="margin: 10px 20px;">','</p>');
                 ?>

                 <form action="<?php ('login') ?>" method="post">
                   <p>
                     <label for="username">Username</label>
                     <input type="text" name="id_admin" id="id_admin" placeholder="Username">

                   </p>
                   <p>
                     <label for="password">Password</label>
                     <input type="password" name="pass" id="id_admin" placeholder="Password">
                   </p>
                   <p>
                     <input type="submit" name="submit" id="submit" value="Login" class="full">
                   </p>
                 </form>

        </section>
</body>
</html>