<h2 class="cent">更新校園映像圖片</h2>
<hr>
<form action="api/update.php" method="post" enctype="multipart/form-data">
    <table style="margin:auto;">
        <tr>
            <td style="text-align:right">校園映像圖片：</td>
            <td><input type="file" name="file"></td>
        </tr>
    </table>
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <input type="hidden" name="table" value="<?= $_GET['table'] ?>">
    <div class="cent"><input type="submit" value="更新"><input type="reset" value="重置"></div>
</form>