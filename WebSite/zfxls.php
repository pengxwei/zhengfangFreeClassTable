<?php
if (!empty($_GET['tid'])) {
require 'conn.php';
$atid=$_GET['tid'];
$sql="SELECT * from kb where id =".$atid;
$r1=mysqli_query($linkID,$sql);
if ($r1->num_rows>=0) {
      $rs=$r1->fetch_assoc();
    $file_name   = "clsstable-".$rs['user'];
    $file_suffix = "xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=$file_name.$file_suffix");

}
else{
    echo " <script>alert('非法ID'); window.location.href=document.referrer; </script>"; 
       exit();   
}
}
else{

      echo " <script>alert('非法ID'); window.location.href=document.referrer; </script>"; 
       exit();
}
 ?>

<html xmlns:o="urn:schemas-microsoft-com:office:office"
 
xmlns:x="urn:schemas-microsoft-com:office:excel"
 
xmlns="http://www.w3.org/TR/REC-html40">
 
<head>
 
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
 
<meta name=ProgId content=Excel.Sheet>
 
<meta name=Generator content="Microsoft Excel 11">
 
</head>
 
<body>
 
<table style="font-family:微软雅黑" border=1 cellpadding=0 cellspacing=0 width="100%" >
 
<tr>
 
<td colspan="6" align="center">
 
<h2><?php echo $rs['title'] ?>的空课表(双周)</h2>
 
</td>
 
</tr>
 
<tr>
 <td style='width:15pt'></td >
<td style='width:54pt' align="center">星期一</td>
 
<td style='width:54pt' align="center">星期二</td>
 
<td style='width:54pt' align="center">星期三</td>
 
<td style='width:54pt' align="center">星期四</td>
 
<td style='width:54pt' align="center">星期五</td>
 
</tr>
 
<tr height="100">
 
<td align="center">12</td>
 
<td align="center"><?php echo $rs['week0112'] ?></td>
<td  align="center"><?php echo $rs['week0212'] ?></td>
<td  align="center"><?php echo $rs['week0312'] ?></td>
<td  align="center"><?php echo $rs['week0412'] ?></td>
<td  align="center"><?php echo $rs['week0512'] ?></td>
</tr>
 
<tr height="100">
 
<td align="center">34</td>
 
<td align="center"><?php echo $rs['week0134'] ?></td>
<td  align="center"><?php echo $rs['week0234'] ?></td>
<td  align="center"><?php echo $rs['week0334'] ?></td>
<td  align="center"><?php echo $rs['week0434'] ?></td>
<td  align="center"><?php echo $rs['week0534'] ?></td>
</tr>
<tr height="100">
 
<td align="center">56</td>
<td align="center"><?php echo $rs['week0156'] ?></td>
<td  align="center"><?php echo $rs['week0256'] ?></td>
<td  align="center"><?php echo $rs['week0356'] ?></td>
<td  align="center"><?php echo $rs['week0456'] ?></td>
<td  align="center"><?php echo $rs['week0556'] ?></td>
</tr>
 <tr height="100">
 
<td align="center">78</td>
 
<td align="center"><?php echo $rs['week0178'] ?></td>
<td  align="center"><?php echo $rs['week0278'] ?></td>
<td  align="center"><?php echo $rs['week0378'] ?></td>
<td  align="center"><?php echo $rs['week0478'] ?></td>
<td  align="center"><?php echo $rs['week0578'] ?></td>
</tr>
    <tr height="100">

        <td align="center">910</td>

        <td align="center"><?php echo $rs['week01910'] ?></td>
        <td  align="center"><?php echo $rs['week02910'] ?></td>
        <td  align="center"><?php echo $rs['week03910'] ?></td>
        <td  align="center"><?php echo $rs['week04910'] ?></td>
        <td  align="center"><?php echo $rs['week05910'] ?></td>
    </tr>
    <tr height="100">

        <td align="center">1112</td>

        <td align="center"><?php echo $rs['week011112'] ?></td>
        <td  align="center"><?php echo $rs['week021112'] ?></td>
        <td  align="center"><?php echo $rs['week031112'] ?></td>
        <td  align="center"><?php echo $rs['week041112'] ?></td>
        <td  align="center"><?php echo $rs['week051112'] ?></td>
    </tr>
</table><br>
 <table style="font-family:微软雅黑" border=1 cellpadding=0 cellspacing=0 width="100%" >
 
<tr>
 
<td colspan="6" align="center">
 
<h2><?php echo $rs['title'] ?>空课表(单周)</h2>
 
</td>
 
</tr>
 
<tr>
 <td style='width:15pt'></td >
<td style='width:54pt' align="center">星期一</td>
 
<td style='width:54pt' align="center">星期二</td>
 
<td style='width:54pt' align="center">星期三</td>
 
<td style='width:54pt' align="center">星期四</td>
 
<td style='width:54pt' align="center">星期五</td>
 
</tr>
 
<tr height="100">
 
<td align="center">12</td>
 
<td align="center"><?php echo $rs['week1112'] ?></td>
<td  align="center"><?php echo $rs['week1212'] ?></td>
<td  align="center"><?php echo $rs['week1312'] ?></td>
<td  align="center"><?php echo $rs['week1412'] ?></td>
<td  align="center"><?php echo $rs['week1512'] ?></td>
</tr>
 
<tr height="100">
 
<td align="center">34</td>
 
<td align="center"><?php echo $rs['week1134'] ?></td>
<td  align="center"><?php echo $rs['week1234'] ?></td>
<td  align="center"><?php echo $rs['week1334'] ?></td>
<td  align="center"><?php echo $rs['week1434'] ?></td>
<td  align="center"><?php echo $rs['week1534'] ?></td>
</tr>
<tr height="100">
 
<td align="center">56</td>
<td align="center"><?php echo $rs['week1156'] ?></td>
<td  align="center"><?php echo $rs['week1256'] ?></td>
<td  align="center"><?php echo $rs['week1356'] ?></td>
<td  align="center"><?php echo $rs['week1456'] ?></td>
<td  align="center"><?php echo $rs['week1556'] ?></td>
</tr>
 <tr height="100">
 
<td align="center">78</td>
 
<td align="center"><?php echo $rs['week1178'] ?></td>
<td  align="center"><?php echo $rs['week1278'] ?></td>
<td  align="center"><?php echo $rs['week1378'] ?></td>
<td  align="center"><?php echo $rs['week1478'] ?></td>
<td  align="center"><?php echo $rs['week1578'] ?></td>
</tr>
     <tr height="100">

         <td align="center">910</td>

         <td align="center"><?php echo $rs['week11910'] ?></td>
         <td  align="center"><?php echo $rs['week12910'] ?></td>
         <td  align="center"><?php echo $rs['week13910'] ?></td>
         <td  align="center"><?php echo $rs['week14910'] ?></td>
         <td  align="center"><?php echo $rs['week15910'] ?></td>
     </tr>
     <tr height="100">

         <td align="center">1112</td>

         <td align="center"><?php echo $rs['week111112'] ?></td>
         <td  align="center"><?php echo $rs['week121112'] ?></td>
         <td  align="center"><?php echo $rs['week131112'] ?></td>
         <td  align="center"><?php echo $rs['week141112'] ?></td>
         <td  align="center"><?php echo $rs['week151112'] ?></td>
     </tr>
</table>
</body>
 
</html>