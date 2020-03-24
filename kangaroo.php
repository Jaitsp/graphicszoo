<?php 

function kangaroo($x1, $v1, $x2, $v2) {



	if($v1 <= $v2){  // if Speed of Second Kangaroo is equal or greater then  Furst Kangaroo They will never meet in any number of jump
		
		return 'NO';
		
	 }
    else { 
	
		@$x = ($x2-$x1)%($v1-$v2) ;  // There is Only a single possible case of meet both after some number of jump when $v1 > $v2
		
		return ($x == 0 )? "YES" : "NO"; 


    } 
   
     
}
     
$result = kangaroo(0,3,4,2);
print($result);
echo "<br>";
$result = kangaroo(0,2,5,3);
print($result);
echo "<br>";
$result = kangaroo(0,1,1,1);
print($result);



?>