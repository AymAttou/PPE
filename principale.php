<!DOCTYPE html>
<html>

    <head>
      
        <meta charset="utf-8">
        <title>Accueil</title>
    
        <link rel="stylesheet" type="text/css" href="style.css">
    
    </head>
    
    <body style="background-image: url('images/back.jpg');">
    
        <!-- header -->

        <div id="content">
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:index1.php");
                   }
                }
                else if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    
                }

                }
            ?>
            

            <div id="content">
            
            
            
            <!-- tester si l'utilisateur est connecté -->
            
            
        </div>
    
       
        <header class="header">
            <div class="container">
            <a href="index1.php" class="logo"><h1><span id="span_1">LIB   </span><span id="span_2">   HÔTEL</spanid="span_1"></h1></a> 
            
                <nav class="menu">
                    <a href="index2.php"> Accueil </a>
                    <a href="reservation2.php"> Réservation </a>
                    <a href="informations2.php"> Informations </a>
                   
                    <nav class="menu">
                <ul>
                    <li><a href="#">Profil</a>
                        <!-- Début du menu déroulant -->
                        <ul>
                            
                            <li><a href="principale.php"> <?php echo " $user "; ?> </a></li>
                            <li><a href='principale.php?deconnexion=true'><span>Déconnexion</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>


            </div>
        </header>

        <h1 style="color: #b3b3b3; text-align: center; font-size:300%;"> <?php echo "Bonjour $user, vous êtes connecté"; ?> </h1>

        <h1 style="color: #b3b3b3; text-align: center; font-size:300%;">Votre profil</h1>

        
            
            
        </div>
    </body>
</html>
