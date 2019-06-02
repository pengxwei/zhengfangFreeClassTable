<?php 
header('Content-Type: text/html; charset=utf-8');

$title="完成提交";
    

?>
<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <link rel="icon" type="image/png" href="favicon.png">
  <link rel="stylesheet" href="../css/amazeui.min.css">
</head>

<header data-am-widget="header" class="am-header am-header-default">
  <h1 class="am-header-title">
    <a href="/"><i class="am-icon-check"></i>&nbsp;<?php echo $title ?></a>
  </h1>
</header>

 
<?php 
  if (!empty($_GET['tid'])) {
    session_start();
               require 'pluginzf.php';
               if ($_SESSION['token']==$_POST['token']) {
                  $_SESSION['token']= mt_rand(0,1000000); 
                     gtable($_POST['scn'],$_POST['pwd'],$_POST['verified']);

}else{echo "<script>alert('请勿重复提交'); window.location.href=document.referrer; </script>";}

}
?>
<p style="text-align: center;"><a href="/">我的工具箱</a> Powered By <a href="about.php">校团委组织部</a></p>
  </body>
</html>