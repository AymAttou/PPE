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

    </div>



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
    
<p> <center> <U>Sachant que nous sommes basés principalement dans le Jura au centre Paul émile Victor (Les Rousses), notre CVVEN dispose de 4 villages dans la France :  </p></center> </U>
<center ><a class="les_rousses"><img src="images/LesRousses.jpg" width=300px alt="logo du site" /></a> </center >
<center> <U><p>Les Rousses</p></center></U>
 

     <div> <center>
    <img class="villefort" src="images/villefort.jpg" alt="Villefort">  
     <img class="la_rochelle" src="images/la rochelle.jpg" alt="LesRousses"> 
     <img class="Saint-Antheme" src="images/Saint-Anthème.jpg" alt="Saint-Anthème">
 </div> </center>

 <br><br><br><br>



<!-- login -->


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="verification.php" method="POST" style="text-align: center;">
    
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        
      </div>
  
      <div class="container2">
  
      <label id="input1" for="fname"><b>Nom d'utilisateur</b></label><br>
                  <input id="champ1" type="text" placeholder="Entrer le nom d'utilisateur" name="username" required><br><br><br>
  
                  <label id="input2" for="lname"><b>Mot de passe</b></label><br>
                  <input id="champ2" type="password" placeholder="Entrer le mot de passe" name="password" required><br><br><br>
        
                  <input id="champ6" type="submit" value="Connexion">
                  <h4 id="p1">Vous êtes nouveau ? <span><a href="inscription.php" style="color: #de7200;">Crée un compte</a></span></h4>
                  <?php
                  if(isset($_GET['erreur'])){
                      $err = $_GET['erreur'];
                      if($err==1 || $err==2)
                          echo "<p style='color:black'>Utilisateur ou mot de passe incorrect</p>";
                  }
                  ?>
        
        <label>
          <input type="checkbox" checked="checked" name="remember"> Se souvenir de moi
        </label>
      </div>
      </div>
    </form>
  </div>
  
  <script>
  // Get the modal
  var modal = document.getElementById('id01');
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
  </script>


<!-- fin-login -->



    </body>
