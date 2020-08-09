<h2 class="cent">新增最新消息資料</h2>
<hr>
<form action="api/add.php" method="post" enctype="multipart/form-data">
    <table style="margin:auto;">
        <tr>
            <td style="text-align:right">最新消息資料：</td>
            <td><textarea name="text" style="height:300px;width:500px;"></textarea></td>
        </tr>
    </table>
    <input type="hidden" name="table" value="<?= $_GET['table'] ?>">
    <div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>