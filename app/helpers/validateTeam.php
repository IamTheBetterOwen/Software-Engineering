  <?php

  function validateTeam($team)
  {
    $errors = array();

    if (empty($team['teamName'])) {
      array_push($errors, 'Team Name Required!');
    }

    if (empty($team['teamScore'])) {
      array_push($errors, 'Email Required!');
    }

    $existingTeam = selectOne('teams', ['teamName' => $team['teamName']]);
    if ($existingTeam) {
      if (isset($team['update-team']) && $existingTeam['id'] != $team['id']) {
        array_push($errors, 'Email Already Exists!');
      }

      if (isset($team['create-admin'])) {
        array_push($errors, 'Email Already Exists!');
      }
    }

    return $errors;
  }

