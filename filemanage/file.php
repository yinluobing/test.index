<!DOCTYPE html>
<html>
<head>
    <title>php文件管理器</title>
    <meta charset="utf-8">
    <style type="text/css">
        * {
            padding: 0;
            margin: 0;
            border: 0;
        }

        .file {
            margin: 0 auto;
            width: 800px;
            height: auto;
            padding: 15px;
            border: 1px solid #ddd;
        }

        .file ul {
            width: 100%;
            list-style: none;
        }

        .file li {
            width: 100%;
            height: 50px;
            line-height: 50px;
            font-size: 16px;
            border-bottom: 1px solid #eaeaee;
        }

        .file li a {
            color: #000;
            text-decoration: none;
        }

        .file li img {
            margin-bottom: -10px;
            margin-right: 5px;
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
    </style>
</head>
<body>
<?php

class dir
{
    public $path; //路径
    public $opendirr; //打开路径
    public $readdirr; //读取路径
    public $filee; //文件数组
    public $doc_root; //站点根目录
    public $zsPath; //用于拼接目录
    public $fileStar; //文件属性
    public $strip; //字符最后一次出现的位置
    public $strlen; //字符总长度
    public $sub; //截取的文件后缀名
    public $fileEvenImg; //每个不同的文件属性的图标
    public $alert = "文件暂时不能读取，新功能开发中！";
    public $fileOutChar; //原编码
    public $pathChar; //路径字符编码
    public $pathGbk; //路径gbk编码

    public function __construct()
    {
        $this->doc_root = $_SERVER['DOCUMENT_ROOT'];
    }

//析构函数打开文件
    public function odir($path)
    {
        $this->path = $path;
        if (!$path) {
            die("error 没有定义路径请定义路径！");
        }
//开始获取路径编码并强行转为gbk
        //然后用gbk的方式来获取文件后强行转为utf-8显示
        $this->pathChar = mb_detect_encoding($this->path, array('UTF-8', 'GBK', 'LATIN1', 'BIG5'));
        $this->pathChar = strtolower($this->pathChar);
        if ($this->pathChar != 'gbk') {
            $this->pathGbk = iconv($this->pathChar, 'gbk', $this->path);
        }
        if (!is_dir($this->pathGbk)) {
            die("error 不是一个正确的路径！");
        }
        $this->opendirr = opendir($this->pathGbk);
        if (!$this->opendirr) {
            die('error 打开文件夹失败！');
        }
        while ($this->filee = readdir($this->opendirr)) {
            /*获取编码值不是则转换为utf-8 */
            $charset = mb_detect_encoding($this->filee, array('UTF-8', 'GBK', 'LATIN1', 'BIG5'));
            $charset = strtolower($charset);
            /* 转换为utf-8 */
            if ($charset != 'utf-8' || $charset != 'utf8') {
//$char = iconv($charset, 'cp960', $this->filee);
                $this->filee = iconv($charset, 'utf-8', $this->filee);
            }
            /*附一个值为原编码 * 方便浏览访问+判断 */
            $this->fileOutChar = iconv('utf-8', 'gbk', $this->filee);
            $this->pathGbk = iconv('utf-8', 'gbk', $this->path);
            /* 开始switch判断把默认的 . 与 ..改成返回上一页与反回首页 */
            switch ($this->filee) {
                case '.':
                    echo "<li><a href='javascrip::valid(0)' onclick='window.history.back(-1);return false;'><img src='data:image/png;base64,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' width='25' height='25'>返回上级</a></li>";
                    break;
                case '..':
                    echo "<li><a href='index.php?url={$this->doc_root}'><img src='data:image/png;base64,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' width='25' height='25'>站点首页</a></li>";
                    break;
                default:
                    /* $this->zsPath  拼接的gbk路径  用于判断是否为文件夹 */
                    $this->zsPath = $this->pathGbk . '/' . $this->fileOutChar;
                    if (is_dir($this->zsPath)) {
                        echo "<li><img src='data:image/png;base64,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' width='30' height='30'><a href='index.php?path={$this->path}/{$this->filee}'>" . $this->filee . "</a></li>";
                    } else {
                        /* 开始获取文件后缀名 */
                        $this->strip = strripos($this->filee, '.');
                        $this->strlen = strlen($this->filee);
                        $this->sub = substr($this->filee, $this->strip + 1, $this->strlen - $this->strip);
//截取完毕开始判断 * 如果没有后缀名则使用no.png
                        if (!$this->strip) {
                            $this->sub = 'no';
                        }
//如果后缀名数字多余两位 使用nums.png
                        if (preg_match('/[0-9]{2,}/', $this->sub)) {
                            $this->sub = 'nums';
                        }
//如果后缀名大于等于6位则使用no.png
                        if (strlen($this->sub) >= 6) {
                            $this->sub = 'no';
                        }
//否则使用img目录对于的后缀名
                        echo "<li><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpDQkIxRDhEM0ZCODBFMjExQTEyRjlCRjc5QkE2Q0QxQyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDozMDI0MTQ2NDhCQjYxMUUyOURDNUY0RTZFMjczQjdFOSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDozMDI0MTQ2MzhCQjYxMUUyOURDNUY0RTZFMjczQjdFOSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjk3MjA5RDE5QjI4QkUyMTFBNzMxRDFGQkQ4NjY0MzEyIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkNCQjFEOEQzRkI4MEUyMTFBMTJGOUJGNzlCQTZDRDFDIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+n611MQAAAxhJREFUeNrsmM2O2jAQx53UfIfvHrrqWyxP0VfqpeG677Cn7Ztsr3QPSBy4cIQWIQSIbwL138pUrjfhIyQpSLE0suM4yfzsmfE4xuFwYPdcTHbnhVPDcRxZ/3x7+yKqZyEPYX1ks9mw9XrNlsslWywWbDab2Yv5vJlKpWRfKAAohmGgem48Pj6EOUswUyg+mUzYeDxm/X7fHgwGTAA0cf8aCK5/iGY+TN/AuzKZDCsUCmy327HpdMrS6bRdLpdx+yqIWH0AEPl8nuVyOcw+azQadqVS+VYqlWTf1SsQttmobboGBJQlmGq1arvDAq0Ej0LhU2OE+TDOuYQQAOgKDMGjVPjYswCACBOi7kAQPGqF9efUa0Q92L9SLobgUczwOVD0fg/nvQiCR60wZnm/3/+jtF6ugeBRRyA/qLAgeFwRSFXcNE0ZicKA4HFHIEBgE7Msi41GI1av199BZLNZVqvVZP4kUhC71Wr5QvCoFdaVJwCEz16vx9rttkz29ILkcrvdShH3bYwRuVQT4Or4WKKQHjqxgaEABBsZObkOC0VXq5VMBLESw+EQK9fENfoji0Je76LZh/1jA0MNU9FTDt3Joeh8PpfS6XSQOzXxLN3jcUUdjCEAquk5Lwh6DhksxmK1UJDB0mT4mtAphYKsFn2QYLyU1wtMixybohZ8R12h2J2YlFKBvL6njlP9hlYgNif2cs5jY0lxfSyBFIvFaFOJIO8hkzqWbhAMHN8TAOTHZieKlVLD5yXvUSHe/ZXQs0Ud6tpzwLkOfC6EbxTC4Vu1Pd0ez02X/UJkGAUQ/NxZS/7MJQAJwB0BBNkPoi5+OiUmlAAkAAlAApAAJBvZf10B/bBy1yZkWdbNk0BHEjpSAgIdshanr4GoP+mn/1soQrdfosIfLhwRD0LnA3c7IPhzlP7+8vL1x+vrk2maH29Jecdxfne7XVs0PwvZkGAZsiqA1sa9lHud0sakFOGKfFDEcGupgztzO7ftuO2tW2/cNtVrRdG1Uq90ANP9ENVefX73mNJvaGN8LeGE7LU2/arbK/J3/B8BBgBmHOVUL70pmQAAAABJRU5ErkJggg==' width='30' height='30'><a href='index.php?a=edit&f={$this->path}/{$this->filee}'>" . $this->filee . "</a></li>";
                    }
                    break;
            }
        }
        closedir($this->opendirr);
    }
}

/**  读取文件类  **/
class edit
{
    public $file;
    public $filename; //文件名字
    public $filetype; //文件类型
    public $filesize; //文件大小
    public $fileopen; //打开文件
    public $fileread; //读取文件
    //写入变量
    public $filepath;
    public $filecontent; //保存文件用到的文件内容
    public $fileput; //文件写入

    public function edits($files)
    {
        $this->file = $files;
        if (!file_exists($this->file)) {
            die("文件不存在！");
        }
        $this->fileopen = fopen($this->file, 'r');
        if (!$this->fileopen) {
            die("文件读取失败");
        }
        $this->filesize = filesize($this->file);
        $this->fileread = fread($this->fileopen, $this->filesize);
        $this->fileread = htmlspecialchars($this->fileread);
//开始获取文件的后缀名
        $filestr = strlen($this->file);
        $filepoint = strrpos($this->file, '.');
        $filesub = substr($this->file, $filepoint + 1);
        $this->filetype = $filesub;
        $this->filename = basename($this->file);
//以数组形式返回：文件类型 文件名称 文件内容 文件路径
        return array(
            'filetype' => $this->filetype,
            'filename' => $this->filename,
            'filecontent' => $this->fileread,
            'filepath' => $this->file,
        );
//关闭文件
        fclose($this->file);
    }

    /* 修改文件函数 */
    public function bc($filepath, $filecontent)
    {
        $this->filepath = $filepath;
//访问文件
        $this->fileopen = file_get_contents($this->filepath);
        if (!$this->fileopen) {
            die('文件打开失败');
        }
//获取传进来的文件内容
        $this->filecontent = $filecontent;
//反转义html
        $this->filecontent = htmlspecialchars_decode($this->filecontent);
//写入文件
        $this->fileput = file_put_contents($this->filepath, $this->filecontent);
//如果成功返回true 否则返回false
        if ($this->fileput) {
            return true;
        } else {
            return false;
        }
    }
}

?>
<?php
$action = isset($_GET['a']) ? $_GET['a'] : 'index';
if ('index' == $action) {
    ?>
    <div class="file">
        <ul>
            <?php
            if (isset($_GET['path'])) {
                $path = $_GET['path'];
            } else {
                $path = $_SERVER['DOCUMENT_ROOT'];
            }
            $dir = new dir();
            $dir->odir($path);
            ?>
        </ul>
    </div>
    <!-- 编辑文件 -->
    <?php
}
if (!isset($_GET['f'])) {
    die();
}
$edit = new edit();
$edits = $edit->edits($_GET['f']);
if ('edit' != $action) {
    die();
}
?>
<style type="text/css">
    * {
        padding: 0;
        margin: 0;
        border: 0;
    }

    .box {
        width: 800px;
        margin: 0 auto;
        border: 1px solid #eee;
    }

    .title {
        text-align: center;
        height: 80px;
        line-height: 80px;
    }

    .bjcontent {
        min-height: 500px;
    }

    textarea {
        width: 100%;
        margin: 0 auto;
        min-height: 500px;
        border: 1px solid #000;
        padding: 5px;
        outline: none;
    }

    .but {
        text-align: center;
    }

    .but button {
        margin-top: 10px;
        width: 60px;
        height: 30px;
        text-align: center;
        line-height: 30px;
        border: 0;
        background: blue;
        color: #fff;
        outline: none;
    }

    .marleft {
        margin-left: 10px;
    }
</style>
</head>
<body>
<div class="box">
    <div class="title"><?php echo $edits['filename']; ?>-编辑</div>
    <div class="bjcontent">
        <form action='' method="post">
<textarea name='filenr'>
<?php echo $edits['filecontent']; ?>
</textarea>
    </div>
    <div class='but'>
        <button name='bc'>保存</button>
        <button name='out' class="marleft" onclick="window.history.back(-1);return false;">取消</button>
    </div>
</div>
<?php
if (isset($_POST['bc'])) {
//把总路径减去文件名得到上级目录
    $tzPath = str_replace($edits['filename'], '', $edits['filepath']);
//得到url
    $tzUrl = "index.php?path=" . $tzPath;
    $filecontent = $_POST['filenr'];
    $xieru = $edit->bc($edits['filepath'], $filecontent);
    if (!$xieru) {
        echo "<script>alert('保存失败')</script>";
        echo "<script>location.href='{$tzUrl}'</script>";
    } else {
        echo "<script>alert('保存成功')</script>";
        echo "<script>location.href='{$tzUrl}'</script>";
    }
}
?>
</body>
</html>