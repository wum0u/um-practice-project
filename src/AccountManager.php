<?php

class AccountManager
{
  private $pdo;

  public function __construct(Connector $connector)
  {
    $this->pdo = $connector->getPdo();
  }

  public function getAllUsers()
  {
    $stmt = $this->pdo->query("SELECT * FROM users");
    $usersData = $stmt->fetchAll(\PDO::FETCH_ASSOC);

    $users = [];
    foreach ($usersData as $userData) {
      $users[] = new Account($userData['id'], $userData['username'], $userData['password']);
    }
    return $users;
  }
}
