<?php
// $insertId = '';
// var_dump(isset($insertId));
// var_dump(empty($insertId));
// die;
class people {
    private $name;
    private $age;
    private $sex;
    public function __construct() {
        //var_dump($this);
        $this->name = '尹罗冰';
        $this->age = 18;
        $this->sex = '男';
        print_r($this);
        print_r('姓名:' . $this->name . '年龄:' . $this->age . '性别:' . $this->sex);
        print_r($_SERVER);
    }
    /**
     * __set
     */
    public function __set($setName, $setValue) {
        return $this->$setName = $setValue;
    }
    /**
     * __get
     */
    public function __get($getName) {
        return $this->$getName;
    }
}
// $people = new people();
// BubbleOrder
/**
 * 冒泡排序
 * @param array $array 排序的数组
 */
function BubbleOrder($array) {
    $count = count($array);
    for ($i = 0; $i < $count; $i++) {
        for ($j = 0; $j < $count - $i; $j++) {
            if (isset($array[$j + 1])) {
                if ($array[$j] > $array[$j + 1]) {
                    $temp = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $temp;
                }
            }
        }
    }
    return $array;
}
$a = 3;
$b = false;
$c = $a or $b;
// var_dump($c);
// $d = $a || $b;
// var_dump($d);
// var_dump((bool) 1);
$a = array(1, 2, 3);
print_r($a);
// $a = array(0, 5, 2, 3, 8, 10);
// print_r(BubbleOrder($a));
// echo "<pre/>";
// print_r(get_loaded_extensions());die;
//面试题
// $string='string';
// var_dump((bool)empty($string)); //false
// var_dump((bool)isset($string)); //true
// var_dump((bool)$string); //ture
// echo "<br/>";

// $empty="";
// var_dump((bool)empty($empty)); //true
// var_dump((bool)isset($empty)); //true
// var_dump((bool)$empty); //false
// echo "<br/>";

// $NULL;
// var_dump((bool)empty($NULL)); //true
// var_dump((bool)isset($NULL)); //false
// var_dump((bool)$NULL); //false
//

class a {
    protected static $db;
    public function __get($name) {
        if (isset($name)) {
            self::$db = 124;
            return self::$db;
        } else {
            return null;
        }
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }
}
/**
 * 测试继承静态变量
 * @version v1.0 [<description>]
 * @param [type] $[name] [<description>]
 */
class b extends a {
    function __construct() {
        print_r(self::$db);
    }
}
new b();
/**
 * 加密解密
 * @param  string  $string    明文 或 密文
 * @param  string  $operation DECODE表示解密,其它表示加密
 * @param  string  $key       密匙
 * @param  integer $expiry    密文有效期
 * @return string             返回加密解密结果
 */
function crypto($string, $operation = 'DECODE', $key = '', $expiry = 0) {
    $ckey_length = 4;
    $key = md5($key ? $key : 'fdfDFa2342vsdsD');

    $keya = md5(substr($key, 0, 16));
    $keyb = md5(substr($key, 16, 16));
    $keyc = $ckey_length ? ($operation == 'DECODE' ? substr($string, 0, $ckey_length) :
        substr(md5(microtime()), -$ckey_length)) : '';
    $cryptkey = $keya . md5($keya . $keyc);
    $key_length = strlen($cryptkey);
    $string = $operation == 'DECODE' ? base64_decode(substr($string, $ckey_length)) :
    sprintf('%010d', $expiry ? $expiry + time() : 0) . substr(md5($string . $keyb), 0, 16) . $string;
    $string_length = strlen($string);
    $result = '';
    $box = range(0, 255);
    $rndkey = array();
    for ($i = 0; $i <= 255; $i++) {
        $rndkey[$i] = ord($cryptkey[$i % $key_length]);
    }
    for ($j = $i = 0; $i < 256; $i++) {
        $j = ($j + $box[$i] + $rndkey[$i]) % 256;
        $tmp = $box[$i];
        $box[$i] = $box[$j];
        $box[$j] = $tmp;
    }
    for ($a = $j = $i = 0; $i < $string_length; $i++) {
        $a = ($a + 1) % 256;
        $j = ($j + $box[$a]) % 256;
        $tmp = $box[$a];
        $box[$a] = $box[$j];
        $box[$j] = $tmp;
        $result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
    }
    if ($operation == 'DECODE') {
        if ((substr($result, 0, 10) == 0 || substr($result, 0, 10) - time() > 0) &&
            substr($result, 10, 16) == substr(md5(substr($result, 26) . $keyb), 0, 16)) {
            return substr($result, 26);
        } else {
            return '';
        }
    } else {
        return $keyc . str_replace('=', '', base64_encode($result));
    }
}
echo crypto('123456', 'encode');
echo "string";

function getDeliveryTime() {
    $getDate = date('Y-m-d');
    $week = ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'];
    for ($i = 0; $i < 30; $i++) {

    }
}
getDeliveryTime();
echo '<br/>';
$arr = [0 => 'a', 1 => 'b', 3 => 'c'];
echo json_encode($arr);

var_dump((bool) []);

$s['a'] = 1;
$b['a'] = 2;
var_dump($s['a'] = $b['a']);
echo $s['a'];
if ($s['a'] = $b['a']) {

}
echo "<br/>";
$data['remark'] = '';
$data[] = ['remark' => ''];

/**
 * 加密字符串
 * @param string $str 需要加密的字符串
 * @return string
 */
function encrypt($str) {
    if (1) {
        //$seed = rand(0,9) + 2;
        $seed = 2;
        $len = strlen($str);
        $result = '';
        for ($i = 0; $i < $len; $i++) {
            $o = ord(substr($str, $i, 1));
            $b = $o ^ $seed << 2;
            $result .= chr($b);
        }
        $result .= chr(($seed + 64) ^ 35);
        return base64_encode($result);
    } else {
        if (empty($str)) {
            return '';
        }

        return addslashes(my_encrypt($str));
    }
}
echo encrypt('上海市普陀区同普路530弄 5号楼 上海法卡电子商务') . '<br/>';
echo encrypt('13781783525') . '<br/>';
echo encrypt('尹罗冰') . '<br/>';

$attributes = [
    'appid' => '1dadad', //小程序id
    'mch_id' => '1dadad', //商户id
    'spbill_create_ip' => '127.0.0.1', //终端ip
    'notify_url' => 'http://www.baidu.com', //通知地址
    'nonce_str' => '12addasad', //随机字符串
    'out_trade_no' => '1278137813', //商户订单编号
    'total_fee' => 80, //总金额
    'open_id' => '123', //用户openid
    'trade_type' => 'JSAPI', //交易类型
    'body' => '购买心跳券', //商品信息
    'detail' => '购买心跳券', //商品详情
];

ksort($attributes);

foreach ($attributes as $key => $value) {
    echo $key . '-----' . $value . '<br/>';
}
print_r($attributes);
die;
/**
 * 解密字符串
 * @param string $str 需要解密的字符串
 * @return string
 */
function decrypt($str) {
    if (config('app_env') == 'local') {
        $str_d = base64_decode($str);
        $seed = (ord(substr($str_d, -1)) - 64) ^ 35;
        $len = strlen($str_d) - 1;
        $result = '';
        for ($i = 0; $i < $len; $i++) {
            $o = ord(substr($str_d, $i, 1));
            $b = $o ^ $seed << 2;
            $result .= chr($b);
        }
        return $result;
    } else {
        if (empty($str)) {
            return '';
        }

        return my_decrypt(stripslashes($str));
    }
}