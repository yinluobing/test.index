<!DOCTYPE html>
<html>

<head>
    <title>文章在线编辑器</title>
    <meta charset="utf-8">
    <style type="text/css">
    * {
        padding: 0;
        margin: 0;
        border: 0;
        font-size:12px;
    }

    .file {
        width: 250px;
        height: 100%;
        border: 1px solid #ddd;
        border-top: 0;
        border-bottom: 0;
    }

    .file ul {
        width: 100%;
        list-style: none;
    }

    .file li {
        width: 100%;
        height: 30px;
        line-height: 30px;
        font-size: 14px;
        border-bottom: 1px solid #eaeaee;
    }

    .file li a {
        width:90%;
        color: #000;
        text-decoration: none;
        display:block;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
        float: left;
    }

    .file li img {
        float: left;
        width:8%;
        height:auto;
        margin-bottom: -10px;
        margin-top:5px;
        margin-right: 3px;

    }

    .bd input {
        border-radius: 10px;
        outline: none;
    }

    .bdinp {
        border: 1px solid #000;
        height: 40px;
        width: 80%;
    }

    .bdsub {
        border: 0;
        background: #ccc;
        width: 15%;
        height: 40px;
    }
    .article-path{
        width:100%;
        border:1px solid #ccc;
        padding:20px 0px 40px 0px;
    }
    .article-path .tips,.article-path .input-path,.article-path .button{
        float: left;
    }
    .article-path .input-path{
        width:36%;
    }
    .article-path .input-path input{
        padding:5px;
        width:100%;
        margin:-10px 10px 0 10px;
        border:1px solid #ccc;
    }
    .article-path .button{
        width:50px;
        height:30px;
        line-height:30px;
        margin:-5px 10px 0 30px;
        border-radius:5px;
        text-align: center;
        background:#ccc;
        cursor: pointer;
    }
    .article-path .input-path{
        float: left;
    }
    .openTen{
        float:left;
        width:100px;
        height:30px;
        line-height:30px;
        margin:-5px 10px 0 10px;
        border-radius:5px;
        text-align: center;
        background:#3399ff;
        color:#fff;
        cursor: pointer;
    }
    .clear:before{
        height:0;
        display: block;
        clear: both;;
    }
    </style>
</head>
<body>
<?php
require 'class.dir.php';
if (isset($_GET['path'])) {
    $path = $_GET['path'];
} else {
    $path = $_SERVER['DOCUMENT_ROOT'];
}
?>
<div class="article-path">
    <div class="tips">文章路径:</div>
    <div class="input-path">
        <input type="text" id="path" name="path" value="<?php echo $path ?>">
    </div>
    <div class="button" onclick="window.location.href='index.php?path='+document.getElementById('path').value">打开</div>
    <div class="openTen" onclick="fileopen()">打开10文件</div>
</div>
<div class="clear"></div>
<div class="file">
<ul>
<?php
$dir = new dir();
$dir->odir($path);
?>
</ul>
</div>
</body>
</html>