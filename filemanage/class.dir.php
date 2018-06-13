<?php
/*
 **文件管理类
 */
error_reporting(0);
class dir {
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
    public function __construct() {
        $this->doc_root = $_SERVER['DOCUMENT_ROOT'];
    }
//析构函数打开文件
    public function odir($path) {
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
        $files = array();
        $i = 0;
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
                echo "<li><a href='javascrip::valid(0)' onclick='window.history.back(-1);return false;'><img src='img/back.png' width='25' height='25'>返回上级</a></li>";
                break;
            case '..':
                // echo "<li><a href='index.php?url={$this->doc_root}'><img src='img/home.png' width='25' height='25'>站点首页</a></li>";
                break;
            default:
/* $this->zsPath  拼接的gbk路径  用于判断是否为文件夹 */
                $this->zsPath = $this->pathGbk . '/' . $this->fileOutChar;
                if (is_dir($this->zsPath)) {
                    echo "<li><img src='img/Folder.png' width='25' height='25'><a href='index.php?path={$this->path}/{$this->filee}'>" . $this->filee . "</a></li>";
                } else {
                    $filetime[] = filemtime($this->zsPath);
                    $files[] = "<li data-id='{$i}'><img src='img/document.png' width='25' height='25'><a href='edit.php?&f=" . urlencode($this->path) . '/' . urlencode($this->filee) . "'>" . $this->filee . "</a></li>";
                    ++$i;
                }
                break;
            }
        }
        closedir($this->opendirr);
        arsort($filetime);
        foreach ($filetime as $k => $v) {
            echo $files[$k];
        }
    }
}
/**  读取文件类  **/
class edit {
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
    public function edits($files) {
        $this->file = str_replace("\\", "/", $files);
        if (!file_exists(iconv('UTF-8', 'GBK', $this->file))) {
            die("文件不存在！");
        }
        $this->fileopen = fopen(iconv('UTF-8', 'GBK', $this->file), 'r');
        if (!$this->fileopen) {
            die("文件读取失败");
        }
        $this->filesize = filesize(iconv('UTF-8', 'GBK', $this->file));
//        echo $this->filesize;
        $this->fileread = iconv('gbk', 'utf-8', fread($this->fileopen, $this->filesize));
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
            'filepath' => iconv('UTF-8', 'GB2312', $this->file),
        );
//关闭文件
        fclose(iconv('UTF-8', 'GB2312', $this->file));
    }
/* 修改文件函数 */
    public function bc($filepath, $filecontent) {
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
        $this->filecontent = iconv('utf-8', 'GBK'
            , $this->filecontent);
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