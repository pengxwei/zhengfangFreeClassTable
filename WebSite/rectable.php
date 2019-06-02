<?php 
header('Content-Type: text/html; charset=utf-8');
if (!empty($_GET)) {
  if (!empty($_GET['tid'])) {
      session_start();
    require 'conn.php';
    $sql="SELECT * FROM kb where id =".$_GET['tid']."";
    $r1=mysqli_query($linkID,$sql) or die($linkID->error);
   if ($r1->num_rows<=0) {
         echo " <script>alert('ERROR DATA ID'); window.location.href='/'; </script>"; 
       exit();
   }
   else{
      $result1=$r1->fetch_assoc();
      $title=$result1['title'];
      $desc=$result1['desc'];
      $token= mt_rand(0,1000000); 
$_SESSION['token'] = $token;
   }
    }
}
else{$title='错误的数据ID' ;}


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
  <style type="text/css">
      font-size:1.1em;
  </style>
</head>

<header data-am-widget="header" class="am-header am-header-default">
  <h1 class="am-header-title">
    <a href="/"><i class="am-icon-edit"></i>&nbsp;<?php echo $title ?></a>
  </h1>
</header>
<section class="am-panel am-panel-secondary">
  <div class="am-panel-hd"><i class="am-icon-edit"></i>登陆课表<small style="color: red;">(本系统暂时只适用于锦城学院)</small></div>
  <main class="am-panel-bd">
  <p><?php echo $desc ?></p>
<hr>
    <form action="zftable_save.php?tid=<?php echo $_GET['tid'] ?>" method="post" class="am-form am-form-horizontal">
    <input type="hidden" name="token" value="<?php echo $token; ?>" />

    <label for="tel">学号：</label>

<div class="am-input-group">
  <span class="am-input-group-label"><i class="am-icon-user am-icon-fw"></i></span >
  <input type="text" id="scn" name="scn" value="163020011" class="am-form-field" placeholder="学号"  required/>
</div>
<hr>
 <label for="pwd">密码：</label>
<div class="am-input-group">
  <span class="am-input-group-label"><i class="am-icon-lock am-icon-fw"></i></span>
  <input type="Password"  id="pwd" name="pwd" value="jwweb123456789." class="am-form-field" placeholder="密码"  required="required" />
</div><hr>
 <label for="code">验证码：</label>
 <div class="am-input-group">
   <span class="am-input-group-label"><i class="am-icon-image am-icon-fw"></i></span>
      <input type="text" name="verified" class="am-form-field" required="required" />
      <span class="am-input-group-btn"><img id="code" src="code.php?new=111" onclick="getcode()">
      </span></div>
      <hr>
  <div class="am-cf">
        <button type="submit" class="am-btn  am-btn-primary am-btn-block am-btn-xl"><i class="am-icon-table"></i>&nbsp;获取课表</button>

      </div> 
</form>
  </main>
</section>
</main>
</section>

<script>
  
          //该时候检查输入用户名数据库中是否已经存在。  
          function getcode() {  
 
                  var image=document.getElementById('code');
                  image.src="code.php?new="+ Math.random();
              }  
          
</script>

</body>
</html>