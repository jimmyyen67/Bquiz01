<?php
include_once "../base.php";
$table = $_POST['table'];
$db = new DB($table);
if (!empty($_FILES['file']['tmp_name'])) {
    $filename = $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], "../image/$filename");
    $data['file'] = $filename;
}

switch ($table) {

    case "title":
        if (!empty($_POST['text'])) {
            $data['text'] = $_POST['text'];
        }
        break;

    case "ad":
        if (!empty($_POST['text'])) {
            $data['text'] = $_POST['text'];
        }
        break;

    case "menu":
        if (!empty($_POST['name'])) {
            $data['name'] = $_POST['name'];
        }
        if (!empty($_POST['href'])) {
            $data['href'] = $_POST['href'];
        }
        break;

    case "news":
        if (!empty($_POST['text'])) {
            $data['text'] = $_POST['text'];
        }
        break;

    case "admin":
        if (!empty($_POST['acc'])) {
            $data['acc'] = $_POST['acc'];
        }
        if (!empty($_POST['pwd'])) {
            $data['pwd'] = $_POST['pwd'];
        }
        break;
}


$db->save($data);
to("../admin.php?do=$table");
