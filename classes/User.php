<?php

class User extends UserAbstract
{
  public $name;
  public $login;
  public $password;
  public static $count = 0;

  public function __construct($name, $login, $password)
  {
    $this->name = $name;
    $this->login = $login;
    $this->password = $password;
    static::$count++;
  }

  public function __destruct()
  {
    echo "<p>Пользователь {$this->login} удален</p>";
  }

  public function showInfo()
  {
    echo "<p>Имя: {$this->name}, логин: {$this->login}, пароль: {$this->password}</p>";
  }
}