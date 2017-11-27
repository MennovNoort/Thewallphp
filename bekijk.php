
                      <!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="main2.css" type="text/css">
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="src.js"></script>
</head>

<body>
    <header></header>
    <div id="all">
    <?php 
        include 'datebase.php';
        $sql = "SELECT * FROM posts";
        $query = $connect->query($sql);
        if($query){
            while($row = $query->fetch_assoc()){
            ?>
            
        <div class="posts">
            <a href="#openModal">
                <p><?php echo $row['poster'];?></p>
                <img src="photo/<?php echo $row['name']; ?>">
            </a>
            <div id="openModal" class="modalDialog">
                <div id="okok">
                    <a href="#close" title="Close" class="close">X</a>
                    <h2>Foto</h2>
                </div>
            </div>
        </div>
            
        <?php   
                }
            } 
     ?>
    </div>    
    <br>
    <br>
    <a href="index.php">Home</a>
    <a href="upload.php">Upload hier !</a>
    <p><a href="logout.php">Logout</a></p>

       
</body>
</html>

    