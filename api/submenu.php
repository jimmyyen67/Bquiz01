<?php
include_once "../base.php";
$parent = $_POST['parent'];
$table = $_POST['table'];
$db = new DB($table);

foreach ($_POST['id'] as $k => $id) {
    if (!empty($_POST['del']) && in_array($id, $_POST['id'])) {
        $db->del($id);
    } else {
        $data = $db->find($id);
        if (!empty($_POST['name'])) {
            $data['name'] = $_POST['name'][$k];
            $data['href'] = $_POST['href'][$k];
            $db->save($data);
        }
    }
}

if (!empty($_POST['name2'])) {
    foreach ($_POST['name2'] as $k => $name2) {
        $data['name'] = $name2;
        $data['href'] = $_POST['href2'][$k];
        $data['parent'] = $parent;
        $db->save($data);
    }
}

to("../admin.php?do=$table");
