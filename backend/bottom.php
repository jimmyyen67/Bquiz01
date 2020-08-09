<?php
$table = (!empty($_GET['do'])) ? $_GET['do'] : "title";
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
	<p class="t cent botli">頁尾版權資料管理</p>
	<form method="post" action="api/info.php">
		<table width="40%" style="margin:auto;">
			<tbody>
				<?php
				$db = new DB($table);
				$bottom = $db->find(1);
				?>
				<tr class="yel">
					<td style="text-align:right">頁尾版權資料：</td>
					<td style="background:white;text-align:left"><input type="text" name="bottom" value="<?= $bottom['bottom'] ?>"></td>
				</tr>

			</tbody>
		</table>
		<div class="cent">
			<input type="hidden" name="table" value="<?= $table ?>">
			<input type="submit" value="修改確定"><input type="reset" value="重置">
		</div>
	</form>
</div>