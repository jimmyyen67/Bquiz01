<div class="di" style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
	<?php include "frontend/marquee.php" ?>
	<div style="height:32px; display:block;"></div>
	<!--正中央-->
	<div style="text-align:center;">
		<?php
		$db = new DB("news");
		$per = 5;
		$total = $db->count();
		$pages = ceil($total / $per);
		$now = (!empty($_GET['p'])) ? $_GET['p'] : "1";
		$start = ($now - 1) * $per;
		$news = $db->all([], "limit $start, $per");
		?>
		<ol class="ssaa" style="list-style-type:decimal;" start="<?= $start + 1 ?>">
			<?php
			foreach ($news as $k => $n) {
			?>
				<li style="padding:.2rem 0;text-align:left;" class="sswww">
					<?= mb_substr($n['text'], 0, 20) ?>.....
					<div class="all" style="display:none;"><pre><?= $n['text'] ?></pre></div>
				</li>
			<?php
			}
			?>
		</ol>
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
	</div>
</div>
<div id="alt" style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
<script>
	$(".sswww").hover(
		function() {
			$("#alt").html("" + $(this).children(".all").html() + "").css({
				"top": $(this).offset().top - 50
			})
			$("#alt").show()
		}
	)
	$(".sswww").mouseout(
		function() {
			$("#alt").hide()
		}
	)
</script>