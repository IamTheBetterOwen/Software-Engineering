  <?php

  // Servername Username and Password of database, actual database name
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db_name = 'swen_test';

  $conn = mysqli_connect($host, $user, $pass, $db_name);

  if ($conn->connect_error) {
      die('Database connection error: '. $conn->connect_error);
  } else {
   echo "Successful";
  }