<?php
  $host="localhost";
  $user="homestead";
  $pwd="secret";
  $db="tb";
  $linkID =mysqli_connect($host,$user,$pwd,$db); 
  if (!$linkID) {
            echo "数据库连接错误";
  }

  ?>
