<?php
$table = (!empty($_GET['do'])) ? $_GET['do'] : "title";
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
	<p class="t cent botli">管理者帳號管理管理</p>
	<form method="post" action="api/edit.php">
		<table width="100%">
			<tbody>
				<tr class="yel">
					<td width="45%">帳號</td>
					<td width="45%">密碼</td>
					<td width="10%">刪除</td>
				</tr>
				<?php
				$db = new DB($table);
				$rows = $db->all();
				foreach ($rows as $key => $row) {
				?>
					<tr class="cent">
						<td><input type="text" name="acc[]" value="<?= $row['acc'] ?>" style="width:95%;"></td>
						<td><input type="password" name="pwd[]" value="<?= $row['pwd'] ?>" style="width:95%;"></td>
						<td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
						<input type="hidden" name="id[]" value="<?= $row['id'] ?>">
					</tr>
				<?php
				}
				?>

			</tbody>
		</table>
		<table style="margin-top:40px; width:70%;">
			<tbody>
				<tr>
					<input type="hidden" name="table" value="<?= $table ?>">
					<td width="200px"><input type="button" onclick="op('#cover','#cvr','modal/<?= $table ?>.php?table=<?= $table ?>')" value="新增管理者帳號"></td>
					<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
				</tr>
			</tbody>
		</table>

	</form>
</div>