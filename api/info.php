<?php
include_once "../base.php";
$table = $_POST['table'];
$db = new DB($table);
$data = $db->find(1);
switch ($table) {

    case "total":
        $data['total'] = $_POST['total'];
        $db->save($data);
        break;

    case "bottom":
        $data['bottom'] = $_POST['bottom'];
        $db->save($data);
        break;
}

to("../admin.php?do=$table");
