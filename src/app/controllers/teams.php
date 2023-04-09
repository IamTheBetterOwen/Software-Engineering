<?php

include (ROOT_PATH . "/src/app/database/db.php");
include (ROOT_PATH . "/src/app/helpers/validateTeams.php");


$table = 'teams';

$allTeams = selectAll($table);

$errors = array();
$teamID = '';
$teamName = '';
$teamImage = '';
$teamScore = '';
$teamRank = '';



if (isset($_POST['add-team'])) {
  $errors = validateTeam($_POST);

  if (count($errors) === 0) {
    unset($_POST['teamName'], $_POST['teamScore'], $_POST['teamImage']);
    $teamId = create($table, $_POST);
  }
}

  // Select All records that follow conditions outlined dynamically
  function selectAll($table)
  {
    global $conn;
    $sql = "SELECT * FROM $table";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;

    }
