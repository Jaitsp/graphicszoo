<?php 

function divisible_sum_pairs($given_array,$n,$k) {


		$count = 0;
		
        for ($i = 0; $i < $n; $i++) {
		
            for ($j = $i + 1; $j < $n; $j++) {
			
                if ((($given_array[$i] + $given_array[$j]) %$k == 0)  && ($i < $j) ){
					 $count++;
					 
				}
            }
        }
   	
		return $count;
     
}
  
$n =  6; 
$k =  3;
 
$given_array = array(1,3,2,6,1,2);

$result = divisible_sum_pairs($given_array,$n,$k);
echo($result);



?>