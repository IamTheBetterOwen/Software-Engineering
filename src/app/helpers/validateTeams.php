  <?php

  function validateTeam($team)
  {
    $errors = array();

    if (empty($team['teamName'])) {
      array_push($errors, 'Team Name Required!');
    }


    if (!empty($_FILES['image'] ['name'])) {
        $image_name = time() . '_' . $_FILES['image'] ['name'];
        $destination = ROOT_PATH . "/assets/img/" . $image_name;

        $result = move_uploaded_file($_FILES['image'] ['tmp_name'], $destination);

        if ($result) {
          $_POST['image'] = $image_name;
        } else {
          array_push($errors, 'Failed To Upload Image!');
        }
      }

    if (empty($team['teamScore'])) {
      array_push($errors, 'Team Score Required!');
    }

    if (empty($team['teamImage'])) {
      array_push($errors, 'Team Image Required!');
    }

    $existingTeam = selectOne('teams', ['teamName' => $team['teamName']]);
    if ($existingTeam) {
      if (isset($team['update-team']) && $existingTeam['id'] != $team['id']) {
        array_push($errors, 'Email Already Exists!');
      }
    }

    return $errors;
  }

