<?php
$table = (!empty($_GET['do'])) ? $_GET['do'] : "title";
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
	<p class="t cent botli">網站標題管理</p>
	<form method="post" action="api/edit.php">
		<table width="100%">
			<tbody>
				<tr class="yel">
					<td width="60%">動畫圖片</td>
					<td width="10%">顯示</td>
					<td width="10%">刪除</td>
					<td width="20%"></td>
					<td></td>
				</tr>
				<?php
				$db = new DB($table);
				$rows = $db->all();
				foreach ($rows as $key => $row) {
				?>
					<tr class="cent">
						<td><img src="image/<?= $row['file'] ?>" alt="" style="height:65px;width:65px;"></td>
						<td><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>" <?= ($row['sh'] == 1) ? "checked" : "" ?>></td>
						<td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
						<input type="hidden" name="id[]" value="<?= $row['id'] ?>">
						<td><input type="button" onclick="op('#cover','#cvr','modal/update_<?= $table ?>.php?table=<?= $_GET['do'] ?>&id=<?= $row['id'] ?>')" value="更換動畫"></td>
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
					<td width="200px"><input type="button" onclick="op('#cover','#cvr','modal/<?= $table ?>.php?table=<?= $table ?>')" value="新增動畫圖片"></td>
					<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
				</tr>
			</tbody>
		</table>

	</form>
</div>