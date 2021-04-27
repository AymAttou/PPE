<!DOCTYPE html>
<html>

    <head>
      
        <meta charset="utf-8">
        <title>Accueil</title>
    
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="login.css">
    
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


        <br>
        <br>
        <br>
        <br>
    
    
        <h1 style="color: #FFFFFF;; text-align: center; font-size:300%;">Réservation</h1>

        <br>
        <br>

        <h5 style="color: #FFFFFF;; text-align: center; font-size:200%;">Vous devez vous connecter pour pouvoir réserver</h5>
            
        <br>
        <br>
        <br>

        <center>


    <!-- (B) RESERVATION FORM -->
    
    <form id="resForm" method="post" target="_self">
<tr>
<td>
<label for="res_notes">Notes (si besoin)</label>
      <input type="text" name="notes" value=""/>
      <br><br><br>
</td>
</tr>

<tr>
<td>
<label>Date de réservation</label>

<input type="date" min="<?=date("Y-m-d")?>" required id="res_date" name="date" value="<?=date("Y-m-d")?>">
    <br><br><br>
    </td>
</tr>
<tr>
<td>
<label>Nombres de lits</label>
      <select name="res_lits">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select>
</td>
</tr>

     <input type="submit" value="Envoyer" /> 
     
    </form>



        </center>


    
    </form>
   
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
