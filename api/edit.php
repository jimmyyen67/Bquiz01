<?php
include_once "../base.php";

$table = $_POST['table'];
$db = new DB($table);

foreach ($_POST['id'] as $k => $id) {
    if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {
        $db->del($id);
    } else {
        switch ($table) {

            case "title":
                $data = $db->find($id);
                print_r($data);
                $data['text'] = $_POST['text'][$k];
                $data['sh'] = ($_POST['sh'] == $id) ? 1 : 0;
                $db->save($data);
                break;

            case "ad":
                $data = $db->find($id);
                print_r($data);
                $data['text'] = $_POST['text'][$k];
                $data['sh'] = (!empty($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                $db->save($data);
                break;

            case "admin":
                $data = $db->find($id);
                $data['acc'] = $_POST['acc'][$k];
                $data['pwd'] = $_POST['pwd'][$k];
                $db->save($data);
                break;

            case "news":
                $data = $db->find($id);
                print_r($data);
                $data['text'] = $_POST['text'][$k];
                $data['sh'] = (!empty($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                $db->save($data);
                break;

            case "mvim":
                $data = $db->find($id);
                $data['sh'] = (!empty($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                $db->save($data);
                break;

            case "image":
                $data = $db->find($id);
                $data['sh'] = (!empty($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                $db->save($data);
                break;
        }
    }
}


to("../admin.php?do=$table");
