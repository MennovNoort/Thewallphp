<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="main3.css" type="text/css">
</head>

<body>
    <?php session_start(); if (!$_SESSION['username']){
    header ("location: index.php");
    echo "U moet ingelogd zijn om deze pagina te bezoeken !";
}
    else {?><div class="header"> <?php echo "Welkom ".$_SESSION['username'];}?></div>
    <form method="POST" action="uploadfile.php" enctype="multipart/form-data" id="formpje"> 
        <input type="file" name="uploadedfile"><br><br>
        <input type="submit" value="Upload image !">
    </form><br><br>
    <a href="bekijk.php">Bekijk de foto's</a><br>
     <a href="index.php">Home</a><br>
            <p><a href="logout.php">Logout</a></p>

</body>
</html>