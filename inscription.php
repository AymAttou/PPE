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
        
    
    
        <h1 style="color: #FFFFFF;; text-align: center; font-size:300%;">S'inscrire</h1>
            
        <br>
        <br>
        <br>

<?php

$BDD = array();
$BDD['host'] = "mysql-sofyan.alwaysdata.net";
$BDD['user'] = "sofyan";
$BDD['pass'] = "Sofyan-3010";
$BDD['db'] = "sofyan_hotel";
$mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);
if(!$mysqli) {
    echo "Connexion non établie.";
    exit;
}

$AfficherFormulaire=1;

if(isset($_POST['pseudo'],$_POST['mdp'])){
    if(empty($_POST['pseudo'])){
        ?>
        <p style="color: #FFFFFF; text-align: center; font-size:300%;"><?php echo "Le champ Pseudo est vide."; ?> </p>
        <?php
    } elseif(!preg_match("#^[a-z0-9A-Z]+$#",$_POST['pseudo'])){
        ?>
        <p style="color: #FFFFFF; text-align: center; font-size:300%;"><?php echo "Le Pseudo doit être renseigné en lettres minuscules sans accents, sans caractères spéciaux."; ?> </p>
        <?php
    } elseif(strlen($_POST['pseudo'])>25){
        ?>
        <p style="color: #FFFFFF; text-align: center; font-size:300%;"><?php echo "Le pseudo est trop long, il dépasse 25 caractères."; ?> </p>
        <?php
    } elseif(empty($_POST['mdp'])){
        ?>
        <p style="color: #FFFFFF; text-align: center; font-size:300%;"><?php echo "Le champ Mot de passe est vide."; ?> </p>
        <?php
    } elseif(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM Personne WHERE nom_utilisateur='".$_POST['pseudo']."'"))==1){
        ?>
        <p style="color: #FFFFFF; text-align: center; font-size:300%;"><?php echo "Ce pseudo est déjà utilisé."; ?> </p>
        <?php
    } else {
        if(!mysqli_query($mysqli,"INSERT INTO Personne SET nom_utilisateur='".$_POST['pseudo']."', mot_de_passe='".$_POST['mdp']."', type_personne='".$_POST['type_personne']."', mail_personne='".$_POST['mail']."', nom_personne='".$_POST['nom']."', prenom_personne='".$_POST['prenom']."', adresse_personne='".$_POST['adresse']."', code_postal_personne='".$_POST['postal']."', ville_personne='".$_POST['ville']."', telephone_personne='".$_POST['tel']."'")){    
        ?>
        <p style="color: #FFFFFF;; text-align: center; font-size:300%;"><?php echo "Une erreur s'est produite: ".mysqli_error($mysqli);?> </p>
        <?php
        } else {
?>
             <p style="color: #FFFFFF; text-align: center; font-size:300%;"><?php echo "Vous êtes inscrit avec succès!"; ?> </p>
             
<?php

            $AfficherFormulaire=0;
        }
    }
}
if($AfficherFormulaire==1){

    ?>

    
    <form method="post" action="inscription.php" style="text-align: center;" >
    
    <center>
    <table id="table_1">

<tr>

<td>

    <label id="input1"><b>Nom d'utilisateur</b></label><br>
    <input id="champ1" type="text" placeholder="Entrer le nom d'utilisateur" name="pseudo"><br><br><br>

</td>
<td>

    <label id="input1"><b>Mot de passe</b></label><br> 
    <input id="champ1" type="password" placeholder="Entrer le mot de passe" name="mdp"><br><br><br>

</td>

</tr>

<tr>

<td>
    
    <label id="input1" for="fname">Type de personne</label><br>
    <input id="champ1" type="text" placeholder="Entrer le type de personne" name="type_personne"><br><br><br><br>

</td>
<td>

    <label id="input1" for="fname">Adresse Mail</label><br>
    <input id="champ1" type="text" name="mail" placeholder="Entrer l'Adresse Mail"><br><br><br><br>

</td>

</tr>

<tr>

<td>

    <label id="input1" for="fname">Nom</label><br>
    <input id="champ1" type="text" name="nom" placeholder="Entrer votre nom"><br><br><br><br>

</td>
<td>

    <label id="input1" for="fname">Prenom </label><br>
    <input id="champ1" type="text" name="prenom" placeholder="Entrer votre prénom"><br><br><br><br><br>

</td>

</tr>

<td>

    <label id="input1" for="fname">Adresse</label><br>
    <input id="champ1" type="text" name="adresse" placeholder="Entrer votre adresse"><br><br><br><br><br>

</td>
<td>

    <label id="input1" for="fname">Code Postal</label><br>
    <input id="champ1" type="text" name="postal" placeholder="Entrer votre code postal"><br><br><br><br><br>

</td>

<tr>

<td>

    <label id="input1" for="fname">Ville</label><br>
    <input id="champ1" type="text" name="ville" placeholder="Entrer le nom de votre ville"><br><br><br><br><br>

</td>
<td>

    <label id="input1" for="fname">Telephone</label><br>
    <input id="champ1" type="text" name="tel" placeholder="Entrer votre numéro de téléphone"><br><br><br><br><br>

</td>


</tr>
            

  


<tr>

    <br>
    <br>
    
    </div>

    </center>
    
</td>

</tr>    


<tr>

<td colspan="2">

<input id="champ1" type="submit" value="S'inscrire">

</td>

</tr>

</table>
    </center>
    </form>
    <?php
}


?>

<br>
        <br>
    

            <!-- zone de connexion -->
            
            
        </div>
    
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
</html>
