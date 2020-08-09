<?php include_once "../base.php" ?>
<h2 class="cent">編輯次選單</h2>
<hr>
<form action="api/submenu.php" method="post" enctype="multipart/form-data">
    <table style="margin:auto;">
        <tr class="cent">
            <td>次選單名稱</td>
            <td>次選單連結網址</td>
            <td>刪除</td>
        </tr>
        <?php
        $db = new DB("menu");
        $subs = $db->all(['parent' => $_GET['main']]);
        foreach ($subs as $k => $s) {
        ?>
            <tr>
                <td><input type="text" name="name[]" value="<?= $s['name'] ?>"></td>
                <td><input type="text" name="href[]" value="<?= $s['href'] ?>"></td>
                <td><input type="checkbox" name="del[]" value="<?= $s['id'] ?>"></td>
                <input type="hidden" name="id[]" value="<?= $s['id'] ?>">
            </tr>
        <?php
        }
        ?>
    </table>
    <input type="hidden" name="parent" value="<?= $_GET['main'] ?>">
    <input type="hidden" name="table" value="<?= $_GET['table'] ?>">
    <div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"><input type="button" value="更多次選單" onclick="more()"></div>
</form>

<script>
    function more() {
        let sub2 = `
        <tr>
            <td><input type="text" name="name2[]"></td>
            <td><input type="text" name="href2[]"></td>
        </tr>
        `
        $("table").append(sub2);
    }
</script>