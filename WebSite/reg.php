<?php
$title="欢迎来到校团委组织部";
require 'head.php';
?>

<style type="text/css">
body{
      background-color: #f5f5f5;

}
</style>
组织部内部专用，暂不开放
<!-- <script type="text/javascript">
var xmlHttp = false;  
  
          //该时候检查输入用户名数据库中是否已经存在。  
          function sendmess() {  
                
              // 检查输入的用户名是否为空。  
              var tbUserName = document.getElementById('phone');  
              if (tbUserName.value == "")  
                  return;  
  
              // 创建 XMLHttpRequest 对象  
              try {  
                    //使用较新版本的IE浏览器。  
                  xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");  
                   
              }  
              catch (e) {  
                  try {  
                        //如果为低版本的浏览器。  
                      xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");  
                  }  
                  catch (e2) {  
                       //XMLHttpRequest对象创建失败，保证Request的值仍为false。  
                      xmlHttp = false;  
                  }  
              }  
              //验证创建是否成功，不为ie，则为除了ie之外的谷歌 360 火狐等浏览器。  
              if (!xmlHttp && typeof XMLHttpRequest != 'undefined') {  
                  xmlHttp = new XMLHttpRequest();  
              }  
  
  
              // 转到的链接地址。  
              var url = "sendms.php?id=" + tbUserName.value;  
  
              // 规定请求的类型、URL 以及是否异步处理请求。Get类型，true为异步执行。  
              xmlHttp.open("GET", url, true);  
  
              //onreadystatechange.也就是XMLHttRequest对象的readyState属性改变时。当请求被发送时执行的一些响应任务。  
              xmlHttp.onreadystatechange = callBack_CheckUserName;  
  
              // Send the request  
              xmlHttp.send(null);  
  
          }  
          //以参数形式传递到另一个函数的函数。  
          function callBack_CheckUserName() {  
              //readyState方法是存有XMLHttpRequest状态，从0到4。  
              //0是请求未初始化，1服务器连接已经建立 2 请求已经接受 3 请求处理中 4 请求已完成，且响应已就绪。  
              if (xmlHttp.readyState == 4) {  
                //  如果服务器的响应并非是XML使用responseText否则使用responseXML。responsText返回服务器字符串形式的响应。  
                  var isValid = xmlHttp.responseText;  

                  if (isValid=="success") {alert("发送成功");}else{alert("发送失败,错误ID："+isValid);}
              }  
          }  
</script>
</head>
<body>
<?php 
require 'navbar.php';
?>
<div class="am-g">
<hr>
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
  <section class="am-panel am-panel-primary">
  <div class="am-panel-hd"><i class="am-icon-user"></i>注册<small>手机注册简单方便</small></div>
  <main class="am-panel-bd">
<form action="verify.php" method="post" class="am-form am-form-horizontal">
     <label for="username">你的名字：</label>

<div class="am-input-group">
  <span class="am-input-group-label"><i class="am-icon-user am-icon-fw"></i></span >
  <input type="text" id="username" name="username" class="am-form-field" placeholder="Your Name"  required/>
</div>
<hr>
    <label for="tel">手机号码：</label>

<div class="am-input-group">
  <span class="am-input-group-label"><i class="am-icon-phone am-icon-fw"></i></span >
  <input type="text" id="phone" name="phone" class="am-form-field" placeholder="Phone Number"  required/>
</div>
<hr>
 <label for="pwd">登录密码：</label>
<div class="am-input-group">
  <span class="am-input-group-label"><i class="am-icon-lock am-icon-fw"></i></span>
  <input type="Password"  id="password" name="password" class="am-form-field" placeholder="Password"  required="required" />
</div>
<hr>
 <label for="pwd2">重复密码：<span id="right" style="background-color: green;color: white;" ></span></label>
<div class="am-input-group">
  <span class="am-input-group-label"><i class="am-icon-lock am-icon-fw"></i></span>
  <input type="Password"  id="pwd2" name="pwd2" class="am-form-field" onchange="checkrepeat(this)" placeholder="Repeat Password"  required="required" />
</div>
<hr>
    <label for="qq">社交账号：</label>

<div class="am-input-group">
  <span class="am-input-group-label"><i class="am-icon-qq am-icon-fw"></i></span >
  <input type="text" id="qq" name="qq" class="am-form-field" placeholder="QQ/微信/微博"  required="required" />
</div>
<hr>
 <label for="verified">验证码：</label>
 <div class="am-input-group">
   <span class="am-input-group-label"><i class="am-icon-image am-icon-fw"></i></span>
      <input type="text" name="verified" class="am-form-field" required="required" />
      <span class="am-input-group-btn">
      <input type="button" class="am-btn am-btn-success"  id="btn" value="获取验证码" onclick="sendmess();settime(this);"   >

        <script type="text/javascript"> 
var countdown=60; 
function settime(val) { 
if (countdown == 0) { 
val.removeAttribute("disabled"); 
val.value="获取验证码"; 
countdown = 60; 
} else { 
val.setAttribute("disabled", true); 
val.value="重新发送(" + countdown + ")"; 
countdown--; 
} 
if (countdown!=60) {
      setTimeout(function() { 
settime(val) 
},1000) 
}
} 


 
function checkrepeat(obj) {
if (obj.value!=document.getElementById('password').value) {
      document.getElementById('right').innerHTML="密码不匹配";
      document.getElementById('right').style="background-color:red;color:white;";
      document.getElementById('reg').setAttribute("disabled", true);

}else
{
         document.getElementById('right').innerHTML="密码匹配";
      document.getElementById('right').style="background-color:green;color:white;"; 
            document.getElementById('reg').removeAttribute("disabled");

}
}


</script> 

      </span>
    </div>

<br>
  <div class="am-cf">
        <input type="submit" id="reg" value="注册" class="am-btn am-btn-block am-btn-primary am-btn-xl">
      </div> 
</form>

  </main>
</section>
</div></div> -->
<?php 
require 'footer.php';
?>