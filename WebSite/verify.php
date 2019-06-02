<?php 
header('Content-Type: text/html; charset=utf-8');

if (!empty($_POST)) {
      session_start();
$name=$_POST['username'];
$phone=$_POST['phone'];
$pwd1=$_POST['password'];
$contact=$_POST['qq'];
$verified=$_POST['verified'];
$code=$_SESSION['CODE'];
$ipadd=getIP();
if ($code!=$verified || $code=="") {
      echo " <script>alert('验证码错误'); window.location.href=document.referrer; </script>"; 
}
else
{
      require 'conn.php';
      $sql="insert into user (`regtime`,`qq`,`phone`,`password`,`name`,`ip`,`lastTime`) values (now(),'$contact','$phone','$pwd1','$name','$ipadd',now())";
      $r1=mysqli_query($linkID,$sql) or die($linkID->error);
      if ($r1) {
                  echo " <script>alert('注册成功，请登录'); window.location.href='/'; </script>"; 
      }else{      echo " <script>alert('注册失败'); window.location.href=document.referrer; </script>";}
}
}
else
{
      echo "<p style='text-align:center;font-size:1.5em;'>No Right To Access</p>";
}

function getIP() { 
if (getenv('HTTP_CLIENT_IP')) { 
$ip = getenv('HTTP_CLIENT_IP'); 
} 
elseif (getenv('HTTP_X_FORWARDED_FOR')) { 
$ip = getenv('HTTP_X_FORWARDED_FOR'); 
} 
elseif (getenv('HTTP_X_FORWARDED')) { 
$ip = getenv('HTTP_X_FORWARDED'); 
} 
elseif (getenv('HTTP_FORWARDED_FOR')) { 
$ip = getenv('HTTP_FORWARDED_FOR'); 

} 
elseif (getenv('HTTP_FORWARDED')) { 
$ip = getenv('HTTP_FORWARDED'); 
} 
else { 
$ip = $_SERVER['REMOTE_ADDR']; 
} 
return $ip; 
} 
?>