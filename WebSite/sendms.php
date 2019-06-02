<?php
header("Content-Type: text/html; charset=utf-8");
if ($_GET['id']!="") {
      session_start();
srand((double)microtime()*1000000);//create a random number feed.

$authnum=rand('1000','9999');

$_SESSION['CODE']= $authnum;
$target = "http://sms.106jiekou.com/utf8/sms.aspx";
//替换成自己的测试账号,参数顺序和wenservice对应
$post_data = "account=qq1030417862&password=pw123456789.&mobile=".$_GET['id']."&content=".rawurlencode("您的验证码是：【".$authnum."】。请不要把验证码泄露给其他人。如非本人操作，可不用理会！");
$gets = Postms($post_data, $target);
if ($gets!='100') {
echo "error".$gets;}
else{echo 'success';
}
}
function Postms($curlPost,$url){
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_NOBODY, true);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
            $return_str = curl_exec($curl);
            curl_close($curl);
            return $return_str;
}



//采用UTF-8编码,要将文件另存为UTF-8格式
//请自己解析$gets字符串并实现自己的逻辑
//100 表示成功,其它的参考文档

?>