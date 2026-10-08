<?php

class SuperUser extends User implements ISuperUser, IAuthorizeUser
{
  public $role;
  public static $count = 0;

  public function __construct($name, $login, $password, $role)
  {
    parent::__construct($name, $login, $password);
    $this->role = $role;
  }

  public function showInfo()
  {
    parent::showInfo();
    echo "<p>Роль: {$this->role}</p>";
  }

  public function getInfo()
  {
    return [
      'name' => $this->name,
      'login' => $this->login,
      'password' => $this->password,
      'role' => $this->role,
    ];
  }

  public function auth($login, $password)
  {
    return $this->login === $login && $this->password === $password;
  }
}