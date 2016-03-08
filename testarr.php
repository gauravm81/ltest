<?php 




 $Arr = array(15=>1,18=>1,20=>1,22=>1,25=>1,30=>1,35=>1);

 $res = abc($Arr,22);
 echo "<pre>"; print_r($res); exit;
 function abc($arr, $val) { 
 	$p = array();
 	$r = array();
 	$re = array();
 	$i=0;
   if (array_key_exists($val,$arr)) { 
      $k = array_search($val, array_keys($arr));
     	foreach($arr as $key=>$value) {
		
	  		if($i < $k) {
	      		$p[$key] = $value;
	      	} else {
	      		$r[$key] = $value;
	      	}
	      	$i++;
		}
      
      $re[] = $p;
      $re[] = $r;
      return $re;
   }
 }
?>