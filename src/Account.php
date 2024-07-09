<?php

class Account
{
  private $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function readAll()
  {
    $stmt = $this->pdo->query("SELECT * FROM members");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
