<?php 
session_start();

$username = $_POST['username'];
$password = hash ("sha512", $_POST['password']);

if ($username && $password) {
    include 'datebase.php';
    
    $queryusername = "SELECT * FROM users WHERE username = '$username'";
    $resultsusername = $connect->query($queryusername);
    
    if ($resultsusername->num_rows > 0){
        while($row = $resultsusername->fetch_assoc()){
            $dbusername = $row['username'];
            $dbpassword = $row['password'];
        }
        if ($username == $dbusername && ($password) == $dbpassword)
        {
            $_SESSION['username']=$dbusername;
            header ("location: ingelogd.php");
        }
        else 
        {
            echo "Wachtwoord klopt niet !";
        }
    }
    else 
    {
        echo "Gebruikersnaam bestaat niet !";
    }
}
else 
{
    echo "Beide velden moeten ingevuld zijn !";
}

?>