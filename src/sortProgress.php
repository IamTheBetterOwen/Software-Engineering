<?php

 $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db_name = 'swen_test';

  $conn = mysqli_connect($host, $user, $pass, $db_name);

    $output = '';
    $dataOrder = $_POST['dataOrder'];
    if($dataOrder == 'desc') {
        $dataOrder = "asc";
    } else {
        $dataOrder = "desc";
    }
    $sql = "SELECT m.*, t.TeamName, t.TeamRating FROM milestones AS m JOIN teams AS t ON m.TeamID = t.TeamID ORDER BY " . $_POST['columnName'] . " " . $_POST['dataOrder'] . "";
    $result = mysqli_query($conn, $sql);
    $output .='
    <table class="milestones-table" id="milestones-table">
          <tr>
            <th><a href="#" class="sort_column" id="MilestoneID" data-order="'.$dataOrder.'">ID</a></th>
            <th><a href="#" class="sort_column" id="MilestoneTitle" data-order="'.$dataOrder.'">Title</a></th>
            <th><a href="#" class="sort_column" id="MilestoneDescription" data-order="'.$dataOrder.'">Description</a></th>
            <th><a href="#" class="sort_column" id="TeamName" data-order="'.$dataOrder.'">Team</a></th>
          </tr>
          ';
          
          
          while($row = mysqli_fetch_array($result)) {
              $output .='
              <tr>
              <td>' . $row["MilestoneID"] . '</td>
              <td>' . $row["MilestoneTitle"] . '</td>
              <td>' . $row["MilestoneDescription"] . '</td>
            <td>' . $row["TeamName"] . '</td>
            </tr>
            ';
        }

        $output .= '</table>';
        
        echo $output;
