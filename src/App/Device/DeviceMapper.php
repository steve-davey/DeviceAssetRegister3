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

    if (!$result) {
      return false;
    }

    return $result->fetchAll();
  }

  public function create(array $data)
  {
    $sql = "INSERT INTO devices(assetTag, assignedTo, dateBought, dateDecommissioned, deviceType, operatingSystem) 
            VALUES (:assetTag, :assignedTo, :dateBought', :dateDecommissioned', :deviceType, :operatingSystem)";
    $stmt = $this->pdo->prepare($sql);
    return $stmt->execute(
      [
        'assetTag' => $data['assetTag'],
        'assignedTo' => $data['assignedTo'],
        'dateBought' => $data['dateBought'],
        'dateDecommissioned' => $data['dateDecommissioned'],
        'deviceType' => $data['deviceType'],
        'operatingSystem' => $data['operatingSystem'],
      ]
    );
  }

  public function update(int $assetTag, array $sql)
  {
    // $sql = "UPDATE devices SET assignedTo = ? WHERE assetTag = ?";
    // $pdo->prepare($sql)->execute([$assignedTo, $assetTag]);
  }

  public function delete(int $assetTag)
  {
  }
}
