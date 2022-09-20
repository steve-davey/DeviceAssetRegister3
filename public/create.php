<?php 

include "../config/settings.php";
require '../config/dependencies.php';

// $result = $DeviceMapper->create;

//     if ($result == TRUE) {
//       echo "New record created successfully.";
//     }else{
//     echo "Error";
//     } 

$pdo = require_once '../config/router.php';
$statement = $pdo->prepare($sql);

$statement->execute([
	':assetTag' => $assetTag
]);

$assetTag = $pdo->lastInsertId();
echo 'The asset Tag ' . $assetTag . ' was inserted';

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