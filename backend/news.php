<?php
$table = (!empty($_GET['do'])) ? $_GET['do'] : "title";
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
	<p class="t cent botli">最新消息資料管理</p>
	<form method="post" action="api/edit.php">
		<table width="100%">
			<tbody>
				<tr class="yel">
					<td width="80%">最新消息資料內容</td>
					<td width="10%">顯示</td>
					<td width="10%">刪除</td>
				</tr>
				<?php
				$db = new DB($table);
				$per = 5;
				$total = $db->count();
				$pages = ceil($total / $per);
				$now = (!empty($_GET['p'])) ? $_GET['p'] : "1";
				$start = ($now - 1) * $per;
				$rows = $db->all([], "limit $start, $per");
				foreach ($rows as $key => $row) {
				?>
					<tr class="cent">
						<td><textarea name="text[]" style="width:95%;height:50px;"><?= $row['text'] ?></textarea></td>
						<td><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>" <?= ($row['sh'] == 1) ? "checked" : "" ?>></td>
						<td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></tdwidth=>
							<input type="hidden" name="id[]" value="<?= $row['id'] ?>">
					</tr>
				<?php
				}
				?>

			</tbody>
		</table>
		<style>
			.divpage a {
				text-decoration: none;
				padding: .3rem;
				border: 1px solid #111;
				border-radius: 5px;
			}
		</style>
		<div class="cent divpage">
			<?php
			if ($now - 1 > 0) {
			?>
				<a href="?do=news&p=<?= $now - 1 ?>">　＜　</a>
			<?php
			}
			for ($i = 1; $i <= $pages; $i++) {
				$now = (!empty($_GET['p'])) ? $_GET['p'] : 1;
				$size = ($now == $i) ? "26px" : "20px";
			?>
				<a href="?do=news&p=<?= $i ?>" style="font-size:<?= $size ?>;"><?= $i ?></a>
			<?php
			}
			if ($now + 1 <= $pages) {
			?>
				<a href="?do=news&p=<?= $now + 1 ?>">　＞　</a>
			<?php
			}
			?>
		</div>
		<table style="margin-top:40px; width:70%;">
			<tbody>
				<tr>
					<input type="hidden" name="table" value="<?= $table ?>">
					<td width="200px"><input type="button" onclick="op('#cover','#cvr','modal/<?= $table ?>.php?table=<?= $table ?>')" value="新增最新消息資料"></td>
					<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
				</tr>
			</tbody>
		</table>

	</form>
</div>