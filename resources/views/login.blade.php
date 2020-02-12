<?php
session_start();

$error_message = "";

if(isset($_POST["login"])) {

	if($_POST["profile_mailaddress"] == "profile_mailaddress" && $_POST["password"] == "profile_password") {
		$_SESSION["user_name"] = $_POST["user_name"];
		$login_success_url = "login_success.php";
		header("Location: {$login_success_url}");
		exit;
	}
$error_message = "※ID、もしくはパスワードが間違っています。<br>　もう一度入力して下さい。";
}
?>

if($error_message) {
	echo $error_message;
}
?>

<form action="index.php" method="POST">
	<p>ログインID：<input type="text" name="profile_mailaddress"></p>
	<p>パスワード：<input type="password" name="password"></p>
	<input type="submit" name="login" value="ログイン">
</form>