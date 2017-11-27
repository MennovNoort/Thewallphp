<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="main.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500italic' rel='stylesheet' type='text/css'>
</head>

<body>  
    <!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thewall</title>
    <link rel="stylesheet" href="main.css" type="text/css">
    <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="toggle.js"></script>
</head>

<body>
    <header>
        <div id="header">
            <div id="menu">
                <ol>
                    <a href="upload.php"><li>UPLOAD</li></a>
                    <a href="bekijk.php"><li>BEKIJK</li></a>
                    <a href="over.php"><li>OVER</li></a>
                </ol>
               
            </div>
            <div id="hoi1"> 
                 <div id="hoi">THE WALL</div>
            </div>
            <img src="images/banner.png" id="bannerimg" alt="Banner">
            
        </div>
         
    </header> 
    <div id="buttonfull"><div id="button"><p>Login/Register</p></div></div>
    <?php 
        if (isset($_GET['succes'])){
            $succes = "Succesvol geregistreerd!";
            echo $succes;
        }
        session_start();
        if(empty($_SESSION[ 'username']))
        {}
        else {echo "Welkom ". $_SESSION['username']."<p><a href='logout.php'>Logout</a></p>"; }
        ?>
    <div class="middentext">
        
        Dit is het project: "The Wall". Op deze website kan je foto's bekijken van andere en/of zelf foto's uploaden. Deze worden weegegeven op de bekijk pagina, ook is hier een modaalvenster aanwezig om de foto's beter te laten zien.
    </div>
        
            
            <div id="formomtrek">
                
                
                    <form method="POST" action="login.php" class="forms" id="login">
                        <h2>Login</h2><br><br><br>
                        Username:<br>
                        <input type="text" name="username" autofocus required><br>
                        Password:<br>
                        <input type="password" name="password" required> <br>
                        <input type="submit" value="login">
                    </form>
              
                
                
                <form method="POST" action="register.php" class="forms" id="register">
                    <h2>Register</h2><br><br><br>
                    Naam:<br><input type="text" name="naam" required autofocus><br>
                    Achternaam:<br><input type="text" name="achternaam" required ><br>
                    Gebruikersnaam:<br><input type="text" name="username" required ><br>
                    Password:<br><input type="password" name="password" required ><br>
                    Repassword:<br><input type="password" name="repassword" required ><br>
                    Email:<br><input type="email" name="email" required ><br>
                    Date:<br><input type="date" name="date" required ><br>
                    <input type="submit" value="register"> 
                    </form> 
                </div>  
            
    
    <div id="content">
        <div class="inhoud" id="1">
            <h4>UPLOAD FOTO</h4>
            <a href="upload.php"><img src="images/foto1.png" class="inhoudimg" alt="img1"></a>
        </div>
        <div class="inhoud" id="2">
            <h4>BEKIJK FOTO'S</h4>
            <a href="bekijk.php"><img src="images/foto2.png" class="inhoudimg" alt="img1"></a>
        </div>
        <div class="inhoud" id="3">
            <h4>OVER</h4>
            <a href="over.php"><img src="images/foto3.png" class="inhoudimg" alt="img1"></a>
        </div>
    </div>
    <footer>
        <div id="footer">
        
        </div>
    </footer>
    
</body>
</html>
          
</body>
</html>
