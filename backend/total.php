<?php
$table = (!empty($_GET['do'])) ? $_GET['do'] : "title";
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
	<p class="t cent botli">進站總人數管理</p>
	<form method="post" action="api/info.php">
		<table width="40%" style="margin:auto;">
			<tbody>
				<?php
				$db = new DB($table);
				$total = $db->find(1);
				?>
				<tr class="yel">
					<td style="text-align:right">進站總人數：</td>
					<td style="background:white;text-align:left"><input type="text" name="total" value="<?= $total['total'] ?>"></td>
				</tr>

			</tbody>
		</table>
		<div class="cent">
			<input type="hidden" name="table" value="<?=$table?>">
			<input type="submit" value="修改確定"><input type="reset" value="重置">
		</div>
	</form>
</div>