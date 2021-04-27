<!DOCTYPE html>
<html>

    <head>
      
        <meta charset="utf-8">
        <title>Accueil</title>
    
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    
    <body style="background-image: url('images/back.jpg');">
    
        <!-- header -->
    
       
        <header class="header">
            <div class="container">
                <a href="index1.php" class="logo"><h1><span id="span_1">LIB   </span><span id="span_2">   HÔTEL</spanid="span_1"></h1></a> 

                
                
                <nav class="menu">
                    <a href="index1.php"> Accueil </a>
                    <a href="reservation1.php"> Réservation </a>
                    <a href="informations1.php"> Informations </a>
                    <a href="inscription.php"> S'inscrire </a>
                    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Se connecter</button>
                </nav>

            </div>
        </header>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    
    
            
        <br>
        <br>
        <br>
    
    
       <H1></H1>
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<center><p style='color:black'><H1>Utilisateur ou mot de passe incorrect</H1></p></center>";
                }
                ?>
     
    
        <br>
        <br>
    
        <h4 id="p1">Vous êtes nouveau ? <span><a href="inscription.php" style="color: #de7200;">Créer un compte</a></span></h4>
    
    
        <br>
        <br>
        <br>


            <!-- zone de connexion -->
            
            
        </div>
    </body>
</html>




