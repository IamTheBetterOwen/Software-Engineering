  <!-- DATABASE FILE -->
  <?php

  require('db_connect.php');


    //Prepares data entered from keys to be used in functions
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


    // Terminates search after finding 1 record that matches conditions outlined dynamically
  function selectOne($table, $conditions)
  {
    global $conn;
    $sql = "SELECT * FROM $table";

      // RETURN RECORDS THAT MATCH CONDITIONS SET BY TEAM NAME
      // $sql = "SELECT * FROM $table WHERE team='Group 8'LIMIT 1";

      $i = 0;
      foreach ($conditions as $key => $value) {
        if ($i === 0) {
          $sql = $sql . " WHERE $key=?";
        }
        $i++;
      }
      $sql = $sql . " LIMIT 1";
      $stmt = executeQuery($sql, $conditions);
      $records = $stmt->get_result()->fetch_assoc();
      return $records;

    }

      // Insert new team into database dynamically
    function create($table, $data)
    {
      global $conn;
      // $sql = "INSERT INTO teams SET teamName=?, teamScore=?
      $sql = "INSERT INTO $table SET ";

      $i = 0;
      foreach ($data as $key => $value) {
        if ($i === 0) {
          $sql = $sql . " $key=?";
        } else {
          $sql = $sql . ", $key=?";
        }
        $i++;
      }
      $stmt = executeQuery($sql, $data);
      $id = $stmt->insert_id;
      return $id;
    }

        //Update/Replace information outlined dynamically
    function update($table, $id, $data)
    {
      global $conn;
      // $sql = "UPDATE teams SET teamName=?, teamScore=?, teamRank=? WHERE id=?"
      $sql = "UPDATE $table SET ";

      $i = 0;
      foreach ($data as $key => $value) {
        if ($i === 0) {
          $sql = $sql . " $key=?";
        } else {
          $sql = $sql . ", $key=?";
        }
        $i++;
      }

      $sql = $sql . " WHERE id=?";
      $data['id'] = $id;
      $stmt = executeQuery($sql, $data);
      return $stmt->affected_rows;

    }

    //Delete/Remove id of record
    function delete($table, $id)
    {
      global $conn;
      // $sql = "DELETE FROM $table WHERE id=?"
      $sql = "DELETE FROM $table WHERE id=?";

      $stmt = executeQuery($sql, ['id'=> $id]);
      return $stmt->affected_rows;

    }


    function searchUsers($term)
    {
      $match = '%' . $term . '%';
      global $conn;
      // SELECT ALL COLUMS FROM POSTS TABLE WHERE PUBLISHED = 1 (BELOW)
      // SELECT ALL FROM teams
      $sql = "SELECT * FROM teams";

      $stmt = executeQuery($sql, ['teamId' =>1]);
      $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
      return $records;
    }
