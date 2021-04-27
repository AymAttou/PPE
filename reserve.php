<?php
class Reservation {
  // (A) PROPERTIES
  private $pdo; // PDO object
  private $stmt; // SQL statement
  public $error; // Error message


  // (B) CONSTRUCTOR - CONNECT TO DATABASE
  function __construct() {
    try {
      $this->pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
        DB_USER, DB_PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
      );
    } catch (Exception $ex) { die($ex->getMessage()); }
  }

  

  // (C) DESTRUCTOR - CLOSE DATABASE CONNECTION
  function __destruct() {
    $this->pdo = null;
    $this->stmt = null;
  }

  // (D) SAVE RESERVATION
  function save ($date, $res_lits, $notes="") {
    // (D1) CHECKS & RESTRICTIONS
    // @TODO - ADD YOUR OWN RULES & REGULATIONS HERE
    // MAX # OF RESERVATIONS ALLOWED?
    // USER CAN ONLY BOOK X DAYS IN ADVANCE?
    // USER CAN ONLY BOOK A MAX OF X SLOTS WITHIN Y DAYS?

    // (D2) DATABASE ENTRY
    try {
      $this->stmt = $this->pdo->prepare(
        "INSERT INTO `reservations` (`res_date`, `res_lits`, `id_bonus`, `id_paiement`, `id_personne`, `res_notes`) VALUES (?,?,0,0,0,?)"
      );
      $this->stmt->execute([$date, $res_lits, $notes]);
    } catch (Exception $ex) {
      $this->error = $ex->getMessage();
      return false;
    }

    // (D3) EMAIL
    // @TODO - REMOVE IF YOU WANT TO MANUALLY CALL TO CONFIRM OR SOMETHING
    // OR EMAIL THIS TO A MANAGER OR SOMETHING
    $subject = "";
    $message = "";
    @mail($email, $subject, $message);
    return true;
  }
  
  // (E) GET RESERVATIONS FOR THE DAY
  function getDay ($day="") {
    // (E1) DEFAULT TO TODAY
    if ($day=="") { $day = date("Y-m-d"); }
    
    
    // (E2) GET ENTRIES
    $this->stmt = $this->pdo->prepare(
      "SELECT * FROM `reservations` WHERE `res_date`=?"
    );
    $this->stmt->execute([$day]);
    return $this->stmt->fetchAll(PDO::FETCH_NAMED);

  
  }
  
}

// (F) DATABASE SETTINGS
// ! CHANGE THESE TO YOUR OWN !
define('DB_HOST', 'mysql-sofyan.alwaysdata.net');
define('DB_NAME', 'sofyan_hotel');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'sofyan');
define('DB_PASSWORD', 'Sofyan-3010');

// (G) NEW RESERVATION OBJECT
$_RSV = new Reservation();