<?php
try {
    $pdo = new pdo('mysql:host=localhost;dbname=thinkphp_test02', 'root', 'root');
    $row = $pdo->query('select * from article');
    for ($i = 0; $i < 1000; $i++) {
        $query = "insert into article(title,content,userid) values('title{$i}','content{$i}','{$i}')";
        $pdo->query($query);
    }

} catch (Exception $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>