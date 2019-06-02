 <?php
if (!empty($_POST)) {
require 'conn.php';
$sql="select * from user where phone ='".$_POST['phone']."' and password ='".$_POST['pwd']."'";
$r1=mysqli_query($linkID,$sql) or die($linkID->error);
if ($r1->num_rows > 0) {

$_SESSION['login']=$_POST['phone'];
$result=mysqli_fetch_row($r1);
$_SESSION['username']=$result[3];
  echo " <script>window.location.href='index.php'; </script>";

}else{  echo " <script>alert('密码不匹配'); window.location.href=document.referrer; </script>";
}
}
  ?>
 <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
<hr>

<section class="am-panel am-panel-primary">
  <div class="am-panel-hd"><i class="am-icon-user"></i>登录<small>无需会员解锁所有功能</small></div>
  <main class="am-panel-bd">
    <form action="" method="post" class="am-form am-form-horizontal">
    <label for="tel">手机号码：</label>

<div class="am-input-group">
  <span class="am-input-group-label"><i class="am-icon-phone am-icon-fw"></i></span >
  <input type="text" id="phone" name="phone" class="am-form-field" placeholder="Phone Number"  required/>
</div>
<hr>
 <label for="pwd">登录密码：</label>
<div class="am-input-group">
  <span class="am-input-group-label"><i class="am-icon-lock am-icon-fw"></i></span>
  <input type="Password"  id="pwd" name="pwd" class="am-form-field" placeholder="Password"  required="required" />
</div>
<p><input type="checkbox" disabled="disabled" name="logintype"><b style="color: gray">使用教务网账号登录</b></p>
 <hr>
  <div class="am-cf">
        <button type="submit" class="am-btn  am-btn-primary am-btn-xl am-fr"><i class="am-icon-send"></i>&nbsp;登录</button>
        <a href="reg.php" class="am-btn  am-btn-danger am-btn-xl am-fl"><i class="am-icon-user"></i>&nbsp;注册</a>
      </div> 
</form>
  </main>
</section>
</div>