<?php 
header('Content-Type: text/html; charset=utf-8');

session_start();
session_destroy();
 echo " <script>alert('注销成功，即将体转到首页'); window.location.href='/'; </script>"; 
?>