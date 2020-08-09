<h2 class="cent">新增管理者帳號</h2>
<hr>
<form action="api/add.php" method="post" enctype="multipart/form-data">
    <table style="margin:auto;">
        <tr>
            <td style="text-align:right;">帳號：</td>
            <td><input type="text" name="acc"></td>
        </tr>
        <tr>
            <td style="text-align:right;">密碼：</td>
            <td><input type="password" name="pwd"></td>
        </tr>
        <tr>
            <td style="text-align:right;">確認密碼：</td>
            <td><input type="password" name="pwd2"></td>
        </tr>
    </table>
    <input type="hidden" name="table" value="<?= $_GET['table'] ?>">
    <div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>