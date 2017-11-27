<?php 
session_start();

echo "Welkom " . $_SESSION['username'];
?>
<html>
    <head>
        <title>hoi</title>
        <link rel="stylesheet" href="main3.css" type="text/css">
    </head>
    <body>
        
        <header></header>
        <form method="POST" action="uploadfile.php" enctype="multipart/form-data"> 
        <input type="file" name="uploadedfile">
        <input type="submit" value="Upload image !">
    </form>
        <p><a href="index.php">Home</a></p>
        <p><a href="logout.php">Logout</a></p>
    </body>
</html>

    