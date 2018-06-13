<?php
$data[md5(123)] = 123;
foreach ($data as $key => $value) {
    # code...
    echo gettype($key);
}
print_r($data);