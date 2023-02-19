<?php
var_dump($_FILES);
if (isset($_FILES['files']) && UPLOAD_ERR_OK === $_FILES['files']['error']) {
    echo "\n Файл " . $_FILES['files']['name'] . ' успешно загружен на сервер!';
}
$tmp_name = $_FILES['files']['tmp_name'];
// echo $tmp_name;
$savePath = 'files/'.$_FILES['files']['name'];
echo $savePath;
// $check = copy($tmp_name, $savePath);
if (!copy($tmp_name, $savePath)) {
    echo "\n не удалось скопировать $tmp_name \n";
}