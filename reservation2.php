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
    
           
        </div>
        </header>
        <!-- fin header -->

        <br>
        <br>
        <br>
        <br>
    
    
        <h1 style="color: #FFFFFF;; text-align: center; font-size:300%;">Réservation</h1>
            
        <br>
        <br>
        <br>

        <center>

        <?php
    // (A) PROCESS RESERVATION
    if (isset($_POST['date'])) {
      require "reserve.php";
      if ($_RSV->save(
        $_POST['date'], $_POST['res_lits'], $_POST['notes'])) {
        echo "<div class='ok'>Réservation acceptée.</div>";
      } else { echo "<div class='err'>".$_RSV->error."</div>"; }
    }
    ?>

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
      <input type="date" required id="res_date" name="date" min="2021-04-17" step="7">
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

      <input type="submit" value="Envoyer"/>
    </form>



        </center>


    
    </form>
   
        </div>
    </body>
</html>
