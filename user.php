<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


  if ((isset($_POST['email']))) {
    $email = $_POST['email'];
  }

  if (isset($_POST['login'])) {
    $login = $_POST["login"];
  }

  if (isset($_POST['password'])) {
    $password = $_POST["password"];
  }
}

echo 'Ваш email: ' . $email . '<br>';
echo 'Ваш логин: ' . $login . '<br>';
echo 'Ваш пароль: ' . $password . '<br>';
//echo $_POST['login'] . '<br>';
//echo $_POST['password'] . '<br>';


?>