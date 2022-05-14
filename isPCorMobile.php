<?php
   $mobileArray = array("iphone", "lgtelecom", "skt", "mobile", "samsung", "nokia", "blackberry", "android", "sony", "phone");
   $dev_checkCount = 0;
   for($num = 0; $num < sizeof($mobileArray); $num++){
      if(preg_match("/$mobileArray[$num]/", strtolower($_SERVER['HTTP_USER_AGENT']))){
          $dev_checkCount++;
          break;
  	  }
   }
?>

<!DOCTYPE html>
<html>
<?php
   if($dev_checkCount == 0){?>
      <body>
      ... (중략_PC웹 코딩내용) ...
      </body><?php
   }
   else{?>
      <body>
      ... (중략_모바일웹 코딩내용) ...
      </body><?php
   }
?>
</html>