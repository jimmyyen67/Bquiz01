<h2 class="cent">新增動畫圖片</h2>
<hr>
<form action="api/add.php" method="post" enctype="multipart/form-data">
    <table style="margin:auto;">
        <tr>
            <td style="text-align:right">動畫圖片：</td>
            <td><input type="file" name="file"></td>
        </tr>
    </table>
    <input type="hidden" name="table" value="<?= $_GET['table'] ?>">
    <div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>