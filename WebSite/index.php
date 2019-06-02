<?php
header('Content-Type: text/html; charset=utf-8');
ini_set('date.timezone','Asia/Shanghai');
$title="我的小工具箱";
session_start();
if(!empty($_SESSION['username']))
{
$title="欢迎，".$_SESSION['username'];
}
require 'head.php';

?>

<style type="text/css">
.padding-none{
    padding: 0px;
}

.news .am-list-news-bd .am-list li{
    padding: 10px 0;font-size: 1.5em;

}
.face{
    border-radius: 500px;
}
.right-bg{
    padding:20px;
    background-color: #f5f5f5;
    margin-top: 0px;
}
.right-bg .am-list > li {
    background-color: #f5f5f5;
    border: 0px;
}
.right-bg .am-list-item-text{
    font-size: 1em
}

.right-bg .am-list .am-list-item-desced {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}
.am-titlebar .am-titlebar-title{
    color: #222222;
}

.am-titlebar .am-titlebar-nav  a{
    color: #dddddd;
}
.am-titlebar .am-titlebar-nav  a:hover{
    color: #222;
}
.right-bg img {
}

body{
      background-color: #f5f5f5;

}
.am-list-item-hd{font-size: 1.4em;}
</style>

</head>
<body>
<!-- Header -->
<?php 
require 'navbar.php';
$bll=empty($_SESSION['login']);
$uc=empty($_GET['uc']);
if($bll)
{
require 'login.php';
}elseif (!$bll&&!$uc) {
    require 'center.php';
}else{
  require 'console.php';
}
require 'footer.php';
?>