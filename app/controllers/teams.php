<?php

include (ROOT_PATH . "/app/database/db.php");
include (ROOT_PATH . "/app/helpers/validateTeam.php");


$table = 'teams';

$allTeams = selectAll($table);

$errors = array();
$teamId = '';
$teamName = '';
$teamScore = '';
$teamRank = '';



if (isset($_POST['add-team'])) {
  $errors = validateTeam($_POST);

  if (count($errors) === 0) {
    unset($_POST['userName'], $_POST['userScore']);
    $teamId = create($table, $_POST);
  }
}