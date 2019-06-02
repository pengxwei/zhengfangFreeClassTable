<?php 



function login_post($url,$cookie,$post){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);  //不自动输出数据，要echo才行
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);  //重要，抓取跳转后数据

        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie); 
        curl_setopt($ch, CURLOPT_REFERER, 'http://jwweb.scujcc.cn/');  //重要，302跳转需要referer，可以在Request Headers找到 
        curl_setopt($ch, CURLOPT_POSTFIELDS,$post);  //post提交数据
        $result=curl_exec($ch);
        curl_close($ch);
        return $result;
    }
function gtable($xh='',$pwd='',$code='')
{
  $u=$xh.'['.$pwd.']';
             $kbid=$_GET['tid'];
      $cookie = dirname(__FILE__) . '/cookie/'.$_SESSION['id'].'.txt';
    $url="http://jwweb.scujcc.cn/default2.aspx";  //教务处地址
    $con1=login_post($url,$cookie,'');
    preg_match_all('/<input type="hidden" name="__VIEWSTATE" value="([^<>]+)" \/>/', $con1, $view); //获取__VIEWSTATE字段并存到$view数组中
    $post=array(
        '__VIEWSTATE'=>$view[1][0],
        'txtUserName'=>$xh,
        'TextBox2'=>$pwd,
        'txtSecretCode'=>$code,
        'RadioButtonList1'=>'%D1%A7%C9%FA',  //“学生”的gbk编码
        'Button1'=>'',
        'lbLanguage'=>'',
        'hidPdrs'=>'',
        'hidsc'=>''
    );
    $con2=login_post($url,$cookie,http_build_query($post)); //将数组连接成字符串
	
    $con2=iconv("gb2312","utf-8",$con2);
     if (strpos($con2,'密码错误')|| strpos($con2,'验证码不正确')) {
       echo " <script>alert('验证码或者密码错误'); window.location.href=document.referrer; </script>"; 
       exit();
 }
       require 'conn.php';

 $sql="select * from kb where id = $kbid and locate('$xh',been)>0 ";
 $r1=mysqli_query($linkID,$sql);
 $t=$r1->fetch_assoc;

if ($r1->num_rows>=1) {
 echo " <script>alert('已经储存过'); window.location.href=document.referrer; </script>"; 
       exit();
}
       preg_match_all('/<span id="xhxm">([^<>]+)/', $con2, $xm);   //正则出的数据存到$xm数组中
   $username=iconv("gb2312","utf-8",substr(iconv("utf-8","gb2312",$xm[1][0]),0,-4));
   //字符串截取，获得姓名
  $content=login_post( "http://jwweb.scujcc.cn/xskbcx.aspx?xh=".$xh."&xm=".$username,$cookie,"");
 $content= mb_convert_encoding($content,'UTF-8','GBK');

 ?>
<section class="am-panel am-panel-primary">
  <div class="am-panel-hd"><i class="am-icon-user"></i>个人信息</div>
  <main class="am-panel-bd">
 <?php
  echo "姓名：".$username;
  
  echo "<br>学号：".$xh;
   preg_match_all('/<span id="Label7">学院：([^<>]+)/', $content, $xm);   
  echo "<br>学院：".$xm[1][0];
  preg_match_all('/<span id="Label8">专业：([^<>]+)/', $content, $xm);   
  echo "<br>专业：".$xm[1][0];
  preg_match_all('/<span id="Label9">行政班：([^<>]+)/', $content, $xm);   
  echo "<br>班级：".$xm[1][0];?>
</main></section>

  <?php
  
preg_match_all('/<table id="Table1"[\w\W]*?>([\w\W]*?)<\/table>/',$content,$out);
      $table = $out[0][0]; //获取整个课表

    $tmp="/<tr.*>(.*)<\/tr>/iUs"; 
preg_match_all($tmp,$table,$macthes); 
$arr1 = array('上午','下午','第1节','第2节','第3节','第4节','第5节','第6节','第7节','第8节','第9节','第10节','第11节','第12节');
$tmp="/<td [\w\W]*?>([\w\W]*?)<\/td>/"; 
$reg = "/{(.*)}/";
$list = array(array(),
      array(),
      array(),
      array(),
	  array(),
	  array()
	  );
	  

for ($i=2; $i < count($macthes[1]) ; $i++) { 
  preg_match_all($tmp,$macthes[1][$i],$reuslt); 

for ($y=0; $y < count($reuslt[1])-2; $y++) { 
       $isin = in_array($reuslt[1][$y],$arr1);
       if (!$isin) {
          $list[$i-2][$y]=$reuslt[1][$y];
       }
}


}

$y=array_no_empty($list);
unset($list);

if (!empty($y)) {
$weks=array('12','34','56','78','910','1112');
?>
<section class="am-panel am-panel-primary">
  <div class="am-panel-hd"><i class="am-icon-table"></i>我的课表</div>
  <main class="am-panel-bd">
<?php
$i=0;
$sql="UPDATE kb SET tn=tn+1 where id = $kbid";
mysqli_query($linkID,$sql);
echo "<table class='am-table am-table-bordered'>";
 echo  "<thead><tr><th></th><th>周一</th><th>周二</th><th>周三</th> <th>周四</th><th>周五</th></thead>";
foreach ($y as $key => $value) {
      if (!empty($value)) {
		  if($i>=6)
			  break;
            $j=1;echo "<tr><td>$weks[$i]</td>";
                foreach ($value as $k => $v) {
                              $sql="";
                              $c="";
							  if($v=="晚上")
								  continue;
								  
                              $g=explode("<br>", $v);                       
                              if (count($g)<5) {
                                    unset($g);
                                if (strpos($v,'节')) {
                        if (strpos($v,'单')) {
                                    preg_match_all('/{(.*)}/', $v, $uu);
                                    if (count($uu)<1) {
                                    $c="warning'>空课(双周)";
                                    $sql="UPDATE kb SET week0$j$weks[$i] = concat_ws(' ',week0$j$weks[$i],'$username') where id = $kbid";
                                    }
                                    else{
                                      $c="warning'>空课(双周有空)".$uu[0][0];
                                      $c1=$username.$uu[0][0];
                                    $sql="UPDATE kb SET week0$j$weks[$i] = concat_ws(' ',week0$j$weks[$i],'$c1') where id = $kbid";
                                    }
                                }elseif(strpos($v,'双')){

                                  if (count($uu)<1) {
                                    $c="warning'>空课(单周)";
                                    $sql="UPDATE kb SET week1$j$weks[$i] = concat_ws(' ',week1$j$weks[$i],'$username') where id = $kbid";
                                    }
                                    else{
                                      $c="warning'>空课(单周有空)".$uu[0][0];
                                      $c1=$username;
                                    $sql="UPDATE kb SET week1$j$weks[$i] = concat_ws(' ',week1$j$weks[$i],'$c1') where id = $kbid";
                                    }
                                }       
                  }else {
                        $sql="UPDATE kb SET week0$j$weks[$i] = concat_ws(' ',week0$j$weks[$i],'$username'),week1$j$weks[$i] = concat_ws(' ',week1$j$weks[$i],'$username') where id = $kbid";
                        $c="danger'>空课";
                  } 
                              }
                  
                  if ($sql!="") {
                                          $r1=mysqli_query($linkID,$sql);
                                          echo "<td class='am-$c</td>";
                                             $sql="";
                              $c="";

                  }else{ echo "<td></td>";
}
                                    $j++;

                                                }
                                                $i++;echo "</tr>";

      }

}
$sql="UPDATE kb SET been = concat_ws(',',been,'$u') where id = $kbid";
                                          $r1=mysqli_query($linkID,$sql);
echo "</table><hr>";

echo "<a class='am-btn am-btn-success am-btn-block ' href='javascript:window.opener=null;window.close();'>谢谢，您的课表保存完成</a>";

echo "</main>";
echo "</section>";
}
}

function array_no_empty($arr) {
    if (is_array($arr)) {
        foreach ( $arr as $k => $v ) {
            if (empty($v) || count($arr)<5) unset($arr[$k]);
            elseif (is_array($v)) {
                $arr[$k] = array_no_empty($v);
            }
        }
    }
    return $arr;
}



?>