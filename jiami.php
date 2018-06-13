<?php
/**
 * 加密字符串
 * @param string $str 需要加密的字符串
 * @return string
 */
function encrypt($str) {
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
}

if (0) {
    echo "string";
}

echo encrypt('1804180187074') . '<br/>';
echo encrypt('1804180187075') . '<br/>';
echo encrypt('1804180187076') . '<br/>';
echo encrypt('1804180187077') . '<br/>';
echo encrypt('1804180187078') . '<br/>';
echo encrypt('1804180187079') . '<br/>';
echo encrypt('1804180187080') . '<br/>';
echo encrypt('1804180187081') . '<br/>';
echo encrypt('1804180187082') . '<br/>';
echo encrypt('1804180187083') . '<br/>';
echo encrypt('1804180187084') . '<br/>';
echo encrypt('1804180187085') . '<br/>';
echo encrypt('1804180187086') . '<br/>';
echo encrypt('1804180187087') . '<br/>';
echo encrypt('1804180187088') . '<br/>';
echo encrypt('1804180187089') . '<br/>';
echo encrypt('1804180187090') . '<br/>';
echo encrypt('1804180187091') . '<br/>';
echo encrypt('1804180187092') . '<br/>';
echo encrypt('1804180187094') . '<br/>';