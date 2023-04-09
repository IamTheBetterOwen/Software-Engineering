  <!-- DATABASE FILE -->
  <?php

  require('db_connect.php');

   function valueDrop($value) // Temporary Function-- To Be Terminated after use
  {
    echo "<pre>", print_r($value, true), "</pre>";
    die();
  }

    function executeQuery($sql, $data)
  {
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
  }

  // function AddTeam($teamName, $teamScore, $teamImage) {

  //   $sql = "INSERT INTO teams (TeamName, TeamScore, teamImage)
  //           VALUES (?, ?, ?, ?)";
  
  //   $stmt = mysqli_stmt_init($conn);
  
  //   if (!mysqli_stmt_prepare($stmt, $sql)) {
  //     die(mysqli_error($conn));
  //   }
  
  //   mysqli_stmt_bind_param($stmt, $teamName, $teamScore, $teamImage);

  // }
