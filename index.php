<html>
<head>
<meta charset="utf-8">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<body>
<?php 
	$usernamecook = $_COOKIE['ChatUSER'];
?>
<center>
<form method="POST">
<input placeholder="Username" value="<?php echo $usernamecook; ?>" type="text" name="username">
<input type="submit" value="Войти в чат!">
</form>
</center>
<?php
	if($_POST){
	SetCookie("ChatUSER", $_POST['username']);
	Header("Location: ./chat.php");
	}
?>
</body>
</html>