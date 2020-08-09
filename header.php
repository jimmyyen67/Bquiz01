<?php
$db = new DB("title");
$title = $db->find(['sh' => 1]);
?>
<div class="ti" style="background:url('use/'); background-size:cover;">
    <a href="index.php"><img src="image/<?= $title['file'] ?>" alt="<?= $title['text'] ?>" title="<?= $title['text'] ?>"></a>
</div>