<?php
if (!empty($_POST)) {
	$db = new DB("admin");
	$user = $db->find(['acc' => $_POST['acc'], 'pwd' => $_POST['pwd']]);
	if (empty($user)) {
?>
		<script>
			alert("帳號或密碼輸入錯誤");
			location.href = "index.php?do=login";
		</script>
<?php
	} else {
		$_SESSION['login'] = 1;
		to("admin.php");
	}
}
?>
<div class="di" style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
	<?php include "frontend/marquee.php" ?>
	<div style="height:32px; display:block;"></div>
	<!--正中央-->
	<form method="post" action="?do=login">
		<p class="t botli">管理員登入區</p>
		<p class="cent">帳號 ： <input name="acc" autofocus="true" type="text"></p>
		<p class="cent">密碼 ： <input name="pwd" type="password"></p>
		<p class="cent"><input value="送出" type="submit"><input type="reset" value="清除"></p>
	</form>
</div>