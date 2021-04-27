<!DOCTYPE html>
<html>

    <head>
      
        <meta charset="utf-8">
        <title>Accueil</title>
    
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="login.css">
        <link rel="stylesheet" type="text/css" href="informations.css">
    
    </head>
    
    <body style="background-image: url('images/back.jpg');">
    
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
                      header("location:login.php");
                   }
                }
                else if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    
                }

                }
            ?>

    </div>



        <!-- header -->
    
       
        <header class="header">
            <div class="container">
                <a href="index1.php" class="logo"><h1><span id="span_1">LIB   </span><span id="span_2">   HÔTEL</spanid="span_1"></h1></a> 


                
                <nav class="menu">
                <ul>
                    <li><a href="principale.php">Profil</a>
                        <!-- Début du menu déroulant -->
                        <ul>
                        <li><a href="principale.php"> <?php echo " $user "; ?> </a></li>
                            <li><a href='principale.php?deconnexion=true'><span>Déconnexion</span></a></li>
                        </ul>
                    </li>
                </ul>
                </nav>
                <nav class="menu">
                    <a href="index2.php"> Accueil </a>
                    <a href="reservation2.php"> Réservation </a>
                    <a href="informations2.php"> Informations </a>
                   
                    
 
                </nav>

            </div>
        </header>
    
<p> <center> <U>Sachant que nous sommes basés principalement dans le Jura au centre Paul émile Victor (Les Rousses), notre CVVEN dispose de 4 villages dans la France :  </p></center> </U>
<center ><a class="les_rousses"><img src="images/LesRousses.jpg" width=300px alt="logo du site" /></a> </center >
<center> <U><p>Les Rousses</p></center></U>
 

     <div> <center>
    <img class="villefort" src="images/villefort.jpg" alt="Villefort">  
     <img class="la_rochelle" src="images/la rochelle.jpg" alt="LesRousses"> 
     <img class="Saint-Antheme" src="images/Saint-Anthème.jpg" alt="Saint-Anthème">
 </div> </center>
    </body>
