<?php

spl_autoload_register(function ($class) {
  $file = __DIR__ . '/classes/' . $class . '.php';
  if (file_exists($file)) {
    require_once $file;
  }
});

$user1 = new User('Иван Иванов', 'ivanov', '12345');
$user2 = new User('Мария Петрова', 'petrova', 'qwerty');
$user3 = new User('Алексей Сидоров', 'sidorov', 'pass123');

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();

$user = new SuperUser('Админ Админов', 'admin', 'root', 'administrator');
$user->showInfo();

echo '<pre>';
print_r($user->getInfo());
echo '</pre>';

echo '<p>Авторизация (верные данные): ';
var_dump($user->auth('admin', 'root'));
echo '</p>';
echo '<p>Авторизация (неверные данные): ';
var_dump($user->auth('admin', 'wrong'));
echo '</p>';

echo '<p>Всего обычных пользователей: ' . User::$count . '</p>';
echo '<p>Всего супер-пользователей: ' . SuperUser::$count . '</p>';