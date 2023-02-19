<?php
echo '<pre>';
echo "REQUEST: \n";
var_dump($_REQUEST);
echo 'GET REQUEST: ' . PHP_EOL;
var_dump($_GET);
echo 'POST REQUEST: ' . PHP_EOL;
var_dump($_POST);

echo 'Привет, пользователь ' . $_POST['login'] . '!';