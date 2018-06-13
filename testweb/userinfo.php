<?php
header('Content-type:text/html; charset=UTF-8');
$username = isset($_GET['username']) ? $_GET['username'] : '';
$uid = isset($_GET['id']) ? $_GET['id'] : '';
$userinfo = array();
if(count($_GET)>0){
	//使用mysqli驱动连接demo数据库
	$mysqli = new mysqli("localhost", "root", "root", 'testweb');
	if(!empty($username)){
		$sql = "SELECT uid,username FROM user WHERE username='{$username}'";
	}elseif(!empty($uid)){
		$sql = "SELECT uid,username FROM user WHERE uid='{$uid}'";
	}
	echo $sql;
	//mysqli multi_query 支持执行多条MySQL语句
	$query = $mysqli->multi_query($sql);
	if($query){
		do {
			$result = $mysqli->store_result();
			while($row = $result->fetch_assoc()){
				$userinfo[] = $row;
			}
			if(!$mysqli->more_results()){
				break;
			}
		} while ($mysqli->next_result());
	}
}
echo '<pre>',print_r($userinfo, 1),'</pre>';