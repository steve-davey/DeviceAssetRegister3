<?php 

include "../config/settings.php";
require '../config/dependencies.php';

if (isset($_POST['submit'])) {
    $assetTag = $_POST['assetTag'];
    $assignedTo = $_POST['assignedTo'];
    $dateBought = $_POST['dateBought'];
    $dateDecommissioned = $_POST['dateDecommissioned'];
    $deviceType = $_POST['deviceType'];
    $operatingSystem = $_POST['operatingSystem'];

    $sql = "INSERT INTO `devices`(`assetTag`, `assignedTo`, `dateBought`, `dateDecommissioned`, `deviceType`, `operatingSystem`) 
    VALUES ('$assetTag','$assignedTo','$dateBought','$dateDecommissioned','$deviceType','$operatingSystem')";

    $result = $pdo->query($sql);

    if ($result == TRUE) {
      echo "New record created successfully.";
    }else{
    //   echo "Error:". $sql . "<br>". $pdo->error;
    echo "Error";
    } 

    // $pdo->close; 
    $this->pdo = null;

  }

?>

<!DOCTYPE html>

<html>
<body>

<h2>Add new device:</h2>

<form action="" method="POST">

  <fieldset>
    <legend>Device:</legend>
    assetTag:<br>
    <input type="text" name="assetTag"><br>
    assignedTo:<br>
    <input type="text" name="assignedTo"><br>
    dateBought:<br>
    <input type="date" name="dateBought"><br>
    dateDecommisioned:<br>
    <input type="date" name="dateDecommissioned"><br>
    deviceType:<br>
    <input type="text" name="deviceType"><br>
    operatingSystem:<br>
    <input type="text" name="operatingSystem"><br><br>
    <input type="submit" name="submit" value="submit">
  </fieldset>
</form>
</body>
</html>