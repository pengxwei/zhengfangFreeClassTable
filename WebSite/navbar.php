<header data-am-widget="header" class="am-header am-header-default">
  <h1 class="am-header-title">
    <a href="/"><i class="am-icon-dropbox"></i><?php echo $title ?></a>
  </h1>
</header>

<!-- Menu -->
<nav data-am-widget="menu" class="am-menu  am-menu-offcanvas1" data-am-menu-offcanvas>
  <a href="javascript: void(0)" class="am-menu-toggle">
    <i class="am-menu-toggle-icon am-icon-bars"></i>
  </a>
  <div class="am-offcanvas">
    <div class="am-offcanvas-bar">
      <ul class="am-menu-nav sm-block-grid-1">
              <li class="">
          <a href="/">&nbsp;组织部欢迎你</a>
        </li>
        <li class="">
          <a href="guestbook.php"><i class="am-icon-edit"></i>我要留言</a>
        </li>
 <li class="am-parent">
          <a href="##">工具中心</a>
          <ul class="am-menu-sub am-collapse  sm-block-grid-2 ">
            <li class="">
              <a href="##">空课表统计</a>
            </li>
            <li class="">
              <a href="##">信息收集系统</a>
            </li>
          </ul>
        </li>
        <?php if(!empty($_SESSION['username'])){
 ?>
<li class="">
          <a href="outlogin.php"></i>退出登录</a>
        </li>
<?php } else{
?>
<li class="">
          <a href="/"></i>登录</a>
        </li>
<li class="">
          <a href="reg.php"></i>注册</a>
        </li>

<?php } ?>
      </ul>
    </div>
  </div>
</nav>




<!-- Navbar -->
<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default "
     id="">
  <ul class="am-navbar-nav am-cf am-avg-sm-4">
  
    <li>
      <a href="/">
        <span class="am-icon-delicious"></span>
        <span class="am-navbar-label">资源</span>
      </a>
    </li>
    <li>
      <a href="guestbook.php">
        <span class="am-icon-edit"></span>
        <span class="am-navbar-label">留言板</span>
      </a>
    </li>
    <li>
      <a href="about.php">
        <span class="am-icon-at"></span>
        <span class="am-navbar-label">关于组织部</span>
      </a>
    </li>
  </ul>
</div>