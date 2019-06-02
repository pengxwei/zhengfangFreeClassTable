<?php 
if (empty($_SESSION['login'])) {
echo " <script>alert('非法'); window.location.href=document.referrer; </script>"; 
       exit();}
?>
<section class="am-panel am-panel-primary">
  <div class="am-panel-hd"><i class="am-icon-user"></i>空课表收集<small>简单、快捷</small></div>
  <main class="am-panel-bd">
          <table class="am-table am-table-bd am-table-striped admin-content-table">
            <thead>
            <tr>
             <th>id</th><th>标题</th><th>已填</th><th>时间</th><th>管理</th>
            </tr></thead><tbody>
            <?php
                @require 'conn.php';
             

      $sql="SELECT id,tn,title,time from kb where user ='".$_SESSION['login']."'";
      $r1=mysqli_query($linkID,$sql);
      while($rs = $r1->fetch_assoc()){
 $btn="<li><a style='color: blue;' target='_blank' href='see.php?tid=".$rs['id']."'><span class='am-icon-search'></span>&nbsp;查看</a></li><li> <a  style='color: blue;' data-am-popover=\"{content: '请复制: ".$_SERVER['HTTP_HOST']."/rectable.php?tid=".$rs['id']."'}\"><span class='am-icon-share'></span>分享链接</a></li>";
      echo ("<tr><td>".$rs['id']."</td><td><a id='my-popover' href='rectable.php?tid=".$rs["id"]."'>".$rs['title']."</a></td><td><span class='am-badge am-badge-success'>".$rs['tn']."人</span></td><td>".$rs["time"]."</td>");
     echo ("<td> <div class='am-dropdown' data-am-dropdown><button class='am-btn am-btn-default am-btn-xs am-dropdown-toggle' data-am-dropdown-toggle><span class='am-icon-cog'></span> <span class='am-icon-caret-down'></span></button> <ul class='am-dropdown-content'><li><a style='color: blue;' href='zfxls.php?tid=".$rs['id']."'><span class='am-icon-file-excel-o'></span>&nbsp;导出XLS</a></li>$btn<li><a style='color: red;' onclick='disp_confirm(".$rs['id'].")'><span class='am-icon-close'></span>&nbsp;删除</a></li></ul></div></td></tr>");
}
             ?>

            

            </tbody>
          </table>
            </main>
</section>
<script type="text/javascript">
function disp_confirm(obj)
  {
  var r=confirm("确认删除吗？")
  if (r==true)
    {
      window.location.href='/deltable.php?tid='+obj; 

  }}
</script>