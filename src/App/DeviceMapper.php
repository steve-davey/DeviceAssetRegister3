<?php

namespace App;

class DeviceMapper
{
    public function __construct( # PHP 8 construct
        private \PDO $pdo,
    ) {
    }

    public function getById(int $assetTag)
    {

    }

    public function getAll()
    {
        $sql = 'SELECT * FROM devices';
        $result = $this->pdo->query($sql);

        if (! $result) {
            return false;
        }

        return $result->fetchAll();
    }

    public function create(array $sql)
    {
        if (isset($_POST['submit'])) {
            $assetTag = $_POST['assetTag'];
            $assignedTo = $_POST['assignedTo'];
            $dateBought = $_POST['dateBought'];
            $dateDecommissioned = $_POST['dateDecommissioned'];
            $deviceType = $_POST['deviceType'];
            $operatingSystem = $_POST['operatingSystem'];
        
            $sql = "INSERT INTO `devices`(`assetTag`, `assignedTo`, `dateBought`, `dateDecommissioned`, `deviceType`, `operatingSystem`) 
            VALUES ('$assetTag','$assignedTo','$dateBought','$dateDecommissioned','$deviceType','$operatingSystem')";
        
            $result = $this->pdo->query($sql);
        
            if ($result == TRUE) {
              echo "New record created successfully.";
            }else{
              echo "Error:". $sql . "<br>". $this->pdo->error;
            } 
        
            // $this->pdo->close; 
            $this->pdo = null;
        
          }
    }

    public function update(int $assetTag, array $sql)
    {

    }

    public function delete(int $assetTag)
    {

    }
}