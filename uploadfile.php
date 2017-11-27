
<?php 
include 'datebase.php';
session_start();
    $name = $_FILES['uploadedfile']['name'];
    $tmp = $_FILES['uploadedfile']['tmp_name'];
    $size = $_FILES['uploadedfile']['size'];
    $type = $_FILES['uploadedfile']['type'];
    $error = $_FILES['uploadedfile']['error'];
    $poster = $_SESSION['username'];
        
    if ($error > 0){
        die ("Error!");
    }
    else{
        if($size > 5000000){
            die("Image is to big !");
        }
        else{
            if(strpos($name, 'jpg') == false) {
                die ("Het moet een JPG bestand zijn !");
            }
            else {
                if (file_exists($name)) {
                    $random = rand(5,500);
                    move_uploaded_file($tmp, "photo/".$random.$name);
                    $randomname = $random + $name;
                    $sql = "INSERT INTO posts (name, poster) VALUES('$randomname', '$poster')";
                    $query = $connect->query($sql);
                    header ("location: bekijk.php");
                    echo $name." is geupload !";
                } 
                else{
                    move_uploaded_file($tmp, "photo/".$name);
                   
                    $sql = "INSERT INTO posts (name, poster) VALUES('$name', '$poster')";
                    $query = $connect->query($sql);
                    header ("location: bekijk.php");
                     echo $name." is geupload !";
                }
            }
        }
    }

?>