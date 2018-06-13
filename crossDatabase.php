<?php
$conn1 = new pdo('mysql:host=localhost;dbname=thinkphp_test01', 'root', 'root');
mysql_select_db("db1", $conn1);
$conn2 = new pdo('mysql:host=localhost;dbname=thinkphp_test02', 'root', 'root');
mysql_select_db("db2", $conn2);

$sql = "SELECT * FROM db1.users AS A INNER JOIN db2.article AS B ON
A.id=B.uid LIMIT 0,10";
mysql_query('SET NAMES utf8');
// 执行查询
$result = mysql_query($sql);
// 下面显示了实际发送给 MySQL 的查询，以及出现的错误。这对调试很有帮助。
if (!$result) {
    $message = 'Invalid query: ' . mysql_error() . "<br>";
    $message .= 'SQL query: ' . $sql;
    die($message);
}
// 结果的使用
while ($row = mysql_fetch_array($result)) {
    echo $row['user_id'] . "：" . $row['user_name'] . " " . $row['email'] . "
" . $row['phone'] . "<br>";
}

?>