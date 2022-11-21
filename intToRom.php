<?php

function intToRoman($number) {
	
    $n = intval($number);
    $result = ''; 
  
	//pendeklarasian array dri roman ke integer
    $lookup = array(
        'M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 
        'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 
        'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1
    ); 
 
    foreach ($lookup as $roman => $value) {
        
        $matches = intval($n / $value); 
 
        $result .= str_repeat($roman, $matches); 
 
        $n = $n % $value; 
    } 

    return $result; 
} 

//memanggil fungsi

echo "Romawi dari integer 58 adalah: ".intToRoman(58);
echo "<br> <br>";
echo "Romawi dari integer 1994 adalah: ".intToRoman(1994);

?>