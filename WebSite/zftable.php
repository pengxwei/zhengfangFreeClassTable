<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
$title='空课表收集';
if (empty($_SESSION['username'])) {
    echo "请登录后访问";  
    
}
else{
      if (!empty($_POST)) {
            $title1=$_POST['title'];
            $desc=$_POST['desc'];
                        $user1=$_SESSION['login'];
            if ($title!=''&&$desc!='') {
                 require 'conn.php';
                 $sql="insert into kb (`title`,`desc`,`time`,`user`) values ('$title1','$desc',now(),'$user1')";
                 $r1=mysqli_query($linkID,$sql) or die($linkID->error);

                 if ($r1) {
                        $Id=$linkID->insert_id;
                                 echo "<script>alert('建立成功 id为：".$Id."');window.location.href='/index.php?uc=center.php'</script>";
                 }else{
                                 
                                   echo "<script>alert('建立课表失败')</script>";
                 }

                 if ($samer='on') {
                         
                 }

                              }
      }
require 'head.php';
require 'navbar.php';
?>



<section class="am-panel am-panel-primary">
  <div class="am-panel-hd"><i class="am-icon-user"></i>空课表收集<small>简单、快捷</small></div>
  <main class="am-panel-bd">
    <form action="" method="post" class="am-form am-form-horizontal">
    <label for="tel">标题(<font style="color: red;">*</font>)：</label>

<div class="am-input-group">
  <span class="am-input-group-label"><i class="am-icon-table am-icon-fw"></i></span >
  <input type="text" id="title" name="title" class="am-form-field" placeholder="收集课表标题"  required/>
</div>

 <label for="desc">描述：</label>
<div class="am-input-group">
  <span class="am-input-group-label"><i class="am-icon-edit am-icon-fw"></i></span>
  <input type="text"  id="desc" name="desc" class="am-form-field" placeholder="简单的描述~"   />
</div>
<hr>
  <div class="am-cf">
        <button type="submit" class="am-btn  am-btn-primary am-btn-xl am-btn-block"><i class="am-icon-pencil"></i>&nbsp;发布</button>
      </div> 
</form>
  </main>
</section>

<?php 
require 'footer.php';
}
?>