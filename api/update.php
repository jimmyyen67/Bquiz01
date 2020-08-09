<?php
include_once "../base.php";
$table = $_POST['table'];
$id = $_POST['id'];
$db = new DB($table);
$data = $db->find($id);
if (!empty($_FILES['file']['tmp_name'])) {
    $filename = $_FILES['file']['name'];
    $data['file'] = $filename;
    move_uploaded_file($_FILES['file']['tmp_name'], "../image/$filename");
    $db->save($data);
}
to("../admin.php?do=$table");
