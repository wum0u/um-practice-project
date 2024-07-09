<?php

class Connector
{
  private $pdo;

  public function __construct($dbFile)
  {
    $this->pdo = new PDO("sqlite:" . $dbFile);
  }

  public function getPDO()
  {
    return $this->pdo;
  }
}
