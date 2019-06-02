<?php 

if (!empty($_GET['new'])) {



  session_start();

 $id=session_id();
    $_SESSION['id']=$id;

     $cookie = dirname(__FILE__) . '/cookie/'.$_SESSION['id'].'.txt'; //cookie路径  
    $verify_code_url = "http://jwweb.scujcc.cn/CheckCode.aspx"; //验证码地址
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $verify_code_url);
    curl_setopt($curl, CURLOPT_COOKIEJAR, $cookie);  //保存cookie
     
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $img = curl_exec($curl);  //执行curl
    curl_close($curl);
    $jpg=dirname(__FILE__).'/code_T/'.$id.".jpg";
    header('Content-type: image/gif');
echo $img;}
?>