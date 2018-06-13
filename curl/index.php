<?php
$startTime = microtime();
include __DIR__.'/boot.php';
use Noodlehaus\Config;
use QL\QueryList;
use think\Db;

$dir = __DIR__.'/ini/';
$log = new Log();
$files = [];
$handle = opendir($dir);
if (!$handle) {
	$log->error('error in open: '.$dir);
	die;
}

while (false !== ($file = readdir($handle))) {
	if ($file != "." && $file != ".." && strpos($file, '.ini') !== false) {
		array_push($files, $dir.$file);
	}
}

closedir($handle);
if (empty($files)) {
	$log->info('no config need to execute so exit');
}
foreach ($files as $file) {
	$config = Config::load($file);
	$dbconfig = [
	    // 数据库类型
	    'type'        => 'mysql',
	    // 服务器地址
	    'hostname'    => $config->get('DB_HOST'),
	    // 数据库名
	    'database'    => $config->get('DB_NAME'),
	    // 数据库用户名
	    'username'    => $config->get('DB_USER'),
	    // 数据库密码
	    'password'    => $config->get('DB_PWD'),
	    // 数据库连接端口
	    'hostport'    => '3306',
	    // 数据库连接参数
	    'params'      => [],
	    // 数据库编码默认采用utf8
	    'charset'     => 'utf8',
	    // 数据库表前缀
	    'prefix'      => '',
	    // 数据库调试模式
	    'debug'       => false,
	];
	$TABLE_NAME = $config->get('TABLE_NAME');
	for ($i=1; $i <175; $i++) { 
		Db::setConfig($dbconfig);
		$url ='http://www.sis001.us/forum/forumdisplay.php?fid=25&filter=type&typeid=172&page='.$i;
		$titles= QueryList::get($url)->find('.lock > span > a')->texts()->all();
		$links = QueryList::get($url)->find('.lock > span > a')->attrs('href')->all();
		$type  = QueryList::get($url)->find('.lock em a')->texts()->all();
		$date  = QueryList::get($url)->find('.author em')->texts()->all();
		$data =[];
		foreach ($titles as $key => $title) {
			if (!is_numeric($title) && !Db::table($TABLE_NAME)->where('title',$title)->find()) {
				try {
					Db::table($TABLE_NAME)->insert(['title'=>$title,'link'=>$links[$key],'type'=>$type[count($data)],'date'=>$date[count($data)]]);
				} catch (Exception $e) {
					$log->error('mysql error: '.$e);
				}
			}
		}
	}
}
$endTime = microtime();
echo "执行完成,总共耗时:".$endTime-$startTime;
exit;