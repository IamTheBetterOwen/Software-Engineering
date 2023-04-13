  <?php

  // Servername Username and Password of database, actual database name, local host
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db_name = 'swen_test';

  // Servername Username and Password of database, actual database name, deployed host
  // $host = 'localhost';
  // $user = 'admin';
  // $pass = 'ql[Y{Oo%u(5*O\]F';
  // $db_name = 'swen_test';

  $conn = mysqli_connect($host, $user, $pass, $db_name);

  if ($conn->connect_error) {
      die('Database connection error: '. $conn->connect_error);
  } 
