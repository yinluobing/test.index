<?php
if($_POST){
	$link = mysql_connect("localhost", "root", "root");
	mysql_select_db('testweb', $link);
	$username = empty($_POST['username']) ? '' : $_POST['username'];
	$password = empty($_POST['password']) ? '' : $_POST['password'];
	$md5password = md5($password);
	$sql = "SELECT uid,username FROM user WHERE username='{$username}' AND password='{$md5password}'";
	echo $sql;
	$query = mysql_query($sql, $link);
	$userinfo = mysql_fetch_array($query, MYSQL_ASSOC);
	if(!empty($userinfo)){
		//登录成功，打印出会员信息
		echo '<pre>',print_r($userinfo, 1),'</pre>';
	} else {
		echo "用户名不存在或密码错误！";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Web登录系统SQL注入实例</title>
</head>
<body>
	<form name="LOGIN_FORM" method="post" action="">
	登录帐号: <input type="text" name="username" value="" size=30 /><br /><br />
	登录密码: <input type="text" name="password" value="" size=30 /><br /><br />
	<input type="submit" value="登录" />
	</form>
</body>
</html>

<!-- 
	php7已经移除了mysql_connect
	测试代码
	登录 1：账号 admin 密码 123456
	登录 2：账号 admin ' and 1=1-- hack 密码 123456
 -->