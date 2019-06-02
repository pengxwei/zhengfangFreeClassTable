<?php 
header('Content-Type: text/html; charset=utf-8');
session_start();
if (empty($_SESSION['login'])) {
echo " <script>alert('非法'); window.location.href=document.referrer; </script>"; 
       exit();}


if (!empty($_GET)) {
require 'conn.php';
$sql="DELETE FROM  kb where id = ".$_GET['tid'];
$r1=mysqli_query($linkID,$sql);
if ($r1) {
echo "<script>alert('删除成功');window.location.href=document.referrer;</script>";
}else{
  echo "<script>alert('删除失败');window.location.href=document.referrer;</script>";

}
       }       
?>
