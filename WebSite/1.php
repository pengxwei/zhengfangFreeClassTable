<?php  
function array_remove_empty(&$arr, $trim = true)   
{   
  foreach ($arr as $key => $value) {   
    if (is_array($value)) {   
      array_remove_empty($arr[$key]);   
    } else {   
      $value = trim($value);   
      if ($value == '') {   
        unset($arr[$key]);   
      } elseif ($trim) {   
        $arr[$key] = $value;   
      }  
    }   
  }   
}  
?>