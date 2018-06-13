<?php
$key = 1;
$value["id"]=2;
$videosrc='';
if (empty($videosrc)) {
    goto siNxf;
    siNxf:
    goto qQ2N3;
    qQ2N3:
    $newslist[$key]["url"] = "../content/content?id=" . $value["id"];
    goto J3nLS;
    J3nLS:
    n4yxi:
    goto hcFtI;
    hcFtI:
    uMr0I:
    goto nNIH1;
    
}
goto XHb28;
XHb28:
$newslist[$key]["url"] = "../video/video?id=" . $value["id"];
goto tlFlW;
tlFlW:
goto n4yxi;
goto F0ST1;
F0ST1:
nNIH1:
print_r($newslist);