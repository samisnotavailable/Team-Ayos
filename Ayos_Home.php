<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['userName'])) {
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>HOME</title>
        </head>
        <body>
            <h2>Hello, <?php echo $_SESSIO['userName']; ?></h2>
            <a href="Ayos_Logout.php">Logout</a>
        </body>
    </html>

    <?php
}
else {
    header("Location: Ayos_Index.php");
    exit();
    
}
?>