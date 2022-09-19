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

  public function create(array $sql)
  {
    $sql = "INSERT INTO `devices`(`assetTag`, `assignedTo`, `dateBought`, `dateDecommissioned`, `deviceType`, `operatingSystem`) 
            VALUES (:assetTag, :assignedTo, :dateBought', :dateDecommissioned', :deviceType, :operatingSystem)";
    $stmt = $this->pdo->prepare($sql);
    return $stmt->execute(
      [
        'assetTag' => $sql[`assetTag`],
        'assignedTo' => $sql[`assignedTo`],
        'dateBought' => $sql[`dateBought`],
        'dateDecommissioned' => $sql[`dateDecommissioned`],
        'deviceType' => $sql[`deviceType`],
        'operatingSystem' => $sql[`operatingSystem`],
      ]
    );
  //   $data = [
  //     'assetTag' => $assetTag,
  //     'surname' => $surname,
  //     'sex' => $sex,
  // ];
  // $sql = "INSERT INTO users (assetTag, surname, sex) VALUES (:assetTag, :surname, :sex)";
  // $stmt= $pdo->prepare($sql);
  // $stmt->execute($data);
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
