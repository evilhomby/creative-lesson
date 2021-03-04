<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<form  method="post">
	<label>Username: <input type="text" name="username"></label><br>
	<label>Password: <input type="password" name="password"></label><br>
	<input type="submit" value="Login">
</form>

<?
echo '<pre>'; var_dump($_POST); echo '</pre>';
if(!empty($_POST)) {
	if($_POST['username'] == 'test' && $_POST['password'] == '0000') {
		echo '<div>登入成功</div>';
	}else{
		echo '<div>' . '登入失敗' . '</div>';
	}
}
?>
</body>
</html>