<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
  ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>   
        <title>Ayos!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
      <nav class="navbar" style="background-color: #0517b0;">
        <div class="navbar-brand">
          <h1>LOGO</h1>
        </div>
        <ul class="nav-links">
          <li><a href="Ayos_About.php">About</a></li>
          <li><a href="Ayos_Service.php">Service</a></li>
          <li><a href="Ayos_Login.php">Login</a></li>

        </ul>
      </nav>
        <h1>This is index :D</h1>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
    </html>
    <?php
}
else {  
  header("Location: Ayos_Home.php");
  exit();
}
