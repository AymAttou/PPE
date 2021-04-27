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
<center>

        <?php
            echo 'Liste des utilisateurs';
            $connect = new PDO('mysql:host=mysql-sofyan.alwaysdata.net;dbname=sofyan_hotel', 'sofyan', 'Sofyan-3010');
            $utilisateur = $connect->query('SELECT * FROM Personne;');
            echo"<table>";
            while ($donnee_u = $utilisateur->fetch()){
                
                echo"<tr>";

                echo"<td>";
                echo ' '.$donnee_u['id_personne'];
                echo"</td>";
              
                echo"<td>";
                echo ' '.$donnee_u['nom_personne'];
                echo"</td>";

                echo"<td>";
                echo ' '.$donnee_u['prenom_personne'];
                echo"</td>";

                echo"<td>";
                echo ' '.$donnee_u['nom_utilisateur'];
                echo"</td>";

                echo"</tr><br>";
            }
            echo"</table>";

            echo '</br></br>';

            echo 'Liste des réservations';
            $reservation = $connect->query('SELECT * FROM reservations;');
            echo"<table>";
            while ($donnee_r = $reservation->fetch()){

                echo"<tr>";

                echo"<td>";
          
                echo "id " . $donnee_r['res_id'];
                echo"</td>";

                echo"<td>";
                echo "date " . $donnee_r['res_date'];
                echo"</td>";
                echo"<td>";
                echo "lits " . $donnee_r['res_lits'];
                echo"</td>";
                echo"<td>";
                echo "notes " . $donnee_r['res_note'];
                echo"</td>";

                echo"</tr><br>";

            }
            echo"</table>";

        ?>
        </center>
    </body>
</html>