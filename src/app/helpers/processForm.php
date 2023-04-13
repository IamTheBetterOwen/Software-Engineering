<?php

require("../../../path.php");
include ROOT_PATH . "/src/app/database/db.php";

print_r($_POST);
$teamID = "";
$teamName = "";
$teamScore = "";
$teamRank = "";
$milestoneID = "";
$teamMilestone = "";
$teamMilestoneDescription = "";


if (isset($_POST['add-team'])) {
$teamName = $_POST['TeamName'];
$teamImage = $_FILES['TeamImage'];
$teamScore = $_POST['TeamScore'];


    // Define the path where the uploaded image will be stored
    $target_dir = "../../../assets/img/";
    $target_file = $target_dir . basename($_FILES['TeamImage']['name']);
    
    // Check if the file is an actual image or a fake image
    $check = getimagesize($_FILES['TeamImage']['tmp_name']);
    if ($check !== false) {
        
        // Upload the file to the server
        if (move_uploaded_file($_FILES['TeamImage']['tmp_name'], $target_file)) {
            
            // Connect to the database
                $host = 'localhost';
                $user = 'root';
                $pass = '';
                $db_name = 'swen_test';
            $conn = new mysqli($host, $user, $pass, $db_name);
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // Check connection
            if ($teamName == NULL ) {
                die("Error: All fields must be filled");
            }
            
            // Insert the image file path into the database
            $sql = "INSERT INTO teams (TeamName, TeamScore, teamImage) VALUES ('$teamName', '$teamScore','$target_file')";
            if ($conn->query($sql) === true) {
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            header('Location: ../../../index.php?uploadsuccess=1');
            // Close the database connection
            $conn->close();
            
        } else {
        header("Location: ../../../index.php?uploadfail=1&TeamName=" . $teamName . "&TeamScore=" . $teamScore);
        
        echo "Sorry, there was an error uploading your file.";
    }
    
} else {
        header("Location: ../../../index.php?uploadfail=1");
        echo "File is not an image.";
    }

}






if (isset($_POST['edit-team'])) {
    $teamID = $_POST['TeamID'];
    $teamName = $_POST['TeamName'];
    $teamScore = $_POST['TeamScore'];
    
    if(isset($_FILES['TeamImage'])) {
        // Define the path where the uploaded image will be stored
        $target_dir = "../../../assets/img/";
        $target_file = $target_dir . basename($_FILES['TeamImage']['name']);
        
        $teamImage = $target_file;
        move_uploaded_file($_FILES['TeamImage']['tmp_name'], $target_file);
        
    } else {
        $teamImage = -1;
        }
        
        echo "teamImage = " . $teamImage;


    $newData = array(
        "TeamName" => "$teamName",
        "TeamScore" => $teamScore,
        "teamImage" => "$teamImage",
    );


    
    // Connect to the database
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db_name = 'swen_test';
    $conn = new mysqli($host, $user, $pass, $db_name);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Construct the UPDATE statement
    $updateStmt = "UPDATE teams SET ";

    foreach ($newData as $field => $value) {
        // Only update non-empty values
        if (!empty($value)) {

            // Add the field/value pair to the UPDATE statement
             $updateStmt .= "$field='$value', ";
        }
    }

    // Remove the trailing comma and space from the statement
    $updateStmt = rtrim($updateStmt, ", ");

    // Add the WHERE clause to the UPDATE statement
    $updateStmt .= " WHERE TeamID='$teamID'";

    // Execute the UPDATE statement
    if ($conn->query($updateStmt) === TRUE) {
        header('Location: ../../../index.php?uploadsuccess=1');
    } else {
        header("Location: ../../../index.php?uploadfail=1&TeamName=" . $teamName . "&TeamScore=" . $teamScore);
    }

    // Close the database connection
    $conn->close();
}






if (isset($_POST['add-milestone'])) {
    $teamMilestone = $_POST['TeamMilestone'];
    $teamMilestoneDescription = $_POST['TeamMilestoneDescription'];
    $teamID = $_POST['TeamID'];

    // Connect to the database
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db_name = 'swen_test';
    $conn = new mysqli($host, $user, $pass, $db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        header('Location: ../../../index.php?uploadfail=1');
    }

    // Insert the image file path into the database
    $sql = "INSERT INTO milestones (MilestoneTitle, MilestoneDescription, TeamID) VALUES ('$teamMilestone', '$teamMilestoneDescription','$teamID')";
    if ($conn->query($sql) === true) {
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header('Location: ../../../index.php?uploadsuccess=1');
    // Close the database connection
    $conn->close();

}

if (isset($_POST['edit-milestone'])) {
    $teamMilestone = $_POST['TeamMilestone'];
    $teamMilestoneDescription = $_POST['TeamMilestoneDescription'];
    $milestoneID = $_POST['MilestoneID'];

    $newData = array(
        "MilestoneTitle" => "$teamMilestone",
        "MilestoneDescription" => $teamMilestoneDescription,
    );


    
    // Connect to the database
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db_name = 'swen_test';
    $conn = new mysqli($host, $user, $pass, $db_name);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Construct the UPDATE statement
    $updateStmt = "UPDATE milestones SET ";

    foreach ($newData as $field => $value) {
        // Only update non-empty values
        if (!empty($value)) {

            // Add the field/value pair to the UPDATE statement
             $updateStmt .= "$field='$value', ";
        }
    }

    // Remove the trailing comma and space from the statement
    $updateStmt = rtrim($updateStmt, ", ");

    // Add the WHERE clause to the UPDATE statement
    $updateStmt .= " WHERE MilestoneID='$milestoneID'";

    // Execute the UPDATE statement
    if ($conn->query($updateStmt) === TRUE) {
        header('Location: ../../../index.php?uploadsuccess=1');
    } else {
        header("Location: ../../../index.php?uploadfail=1&MilestoneID=" . $milestoneID . "&TeamMilestone=" . $teamMilestone . "&TeamMilestoneDescription=" . $teamMilestoneDescription);
    }

    // Close the database connection
    $conn->close();
}