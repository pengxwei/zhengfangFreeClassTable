
<?php
header('Content-Type: text/html; charset=utf-8');
 
if (!empty($_POST)) {
      $username=$_POST['username'];
      $qq=$_POST['qq'];  
      $guestbook=$_POST['guestbook'];    
      if ($username!='' && $guestbook!='') {
                require 'conn.php';
                 $sql="insert into guestbook (`username`,`qq`,`info`,`time`) values ('$username','$qq','$guestbook',now())";
      $r1=mysqli_query($linkID,$sql) or die($linkID->error);
      if ($r1) {
                  echo " <script>alert('留言成功'); window.location.href=document.referrer; </script>"; 
                  exit();
      }else{      echo " <script>alert('留言失败'); window.location.href=document.referrer; </script>";exit();}
          }    
}
 ?>

<?php
ini_set('date.timezone','Asia/Shanghai');
$title="留言板";
session_start();
if(!empty($_SESSION['username']))
{
$title="欢迎，".$_SESSION['username']."留言板";
}
require 'head.php';
require 'navbar.php';
?>
<div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
<hr>

<section class="am-panel am-panel-primary">
  <div class="am-panel-hd"><i class="am-icon-user"></i>留言板<small>我们需要你宝贵的建议</small></div>
  <main class="am-panel-bd">
    <form action="" method="post" class="am-form am-form-horizontal">
    <label for="tel">昵称/姓名(<font style="color: red;">*</font>)：</label>

<div class="am-input-group">
  <span class="am-input-group-label"><i class="am-icon-user am-icon-fw"></i></span >
  <input type="text" id="username" value="<?php if(!empty($_SESSION['username'])){echo $_SESSION['username'];} ?>" name="username" class="am-form-field" placeholder="可以匿名发表"  required/>
</div>

 <label for="qq">QQ：</label>
<div class="am-input-group">
  <span class="am-input-group-label"><i class="am-icon-qq am-icon-fw"></i></span>
  <input type="text"  id="qq" name="qq" class="am-form-field" placeholder="方便我们及时联系你~"   />
</div>

  <label for="guestbook">留言(<font style="color: red;">*</font>)：</label>
<div class="am-input-group">
  <span class="am-input-group-label"><i class="am-icon-edit am-icon-fw"></i></span>
  <input type="text"  id="guestbook" name="guestbook" class="am-form-field" placeholder="留言"   />
</div>
<hr>
  <div class="am-cf">
        <button type="submit" class="am-btn  am-btn-primary am-btn-xl am-btn-block"><i class="am-icon-pencil"></i>&nbsp;留言</button>
      </div> 
</form>
  </main>
</section>

<section class="am-panel am-panel-primary">
  <div class="am-panel-hd"><i class="am-icon-edit"></i>他们说</div>
  <main class="am-panel-bd">
 <ul class="am-comments-list">
  <?php 
require 'conn.php';
             $sql= "SELECT * FROM guestbook  order by id desc limit 5";
               $result = mysqli_query($linkID,$sql) or die(mysql_errno());
             while($row = $result->fetch_assoc()){


   ?>
 
                <li class="am-comment">
                  <a href="#"><img src="./images/head<?php echo mt_rand(1,6); ?>.jpg" alt="" class="am-comment-avatar" width="48" height="48"></a>
                  <div class="am-comment-main am-panel-primary">
                    <header class="am-comment-hd ">
                      <div class="am-comment-meta"><a href="#" class="am-comment-author"><?php echo $row['username'] ?></a> 评论于 <time><?php echo date("Y-m-d H:i",strtotime($row['time']))  ?></time></div>
                    </header>
                    <div class="am-comment-bd"><?php echo $row['info'] ?>
                    </div>
                  </div>
                </li>

              


<?php 
}
?>
</ul>              
</section>
</div>
<?php
require 'footer.php';

 ?>