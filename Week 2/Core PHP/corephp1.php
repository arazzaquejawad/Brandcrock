<?php
echo "<br><hr><p style = 'color:blue;'>For loop to show the result 1 to 10<p><hr>";
for($i=1; $i <= 10; $i++){
	echo $i. "<br>"; 
}

echo "<br><hr><p style = 'color:blue;'>Table of 2 using for loop<p><hr>";
for($i=0; $i <= 15; $i++){
	echo "2 * ".$i." = ".($i * 2). "<br>"; 
}

echo "<br><hr><p style = 'color:blue;'>Factorial of 5<p><hr>";
$fact = 5;
echo "5! = 5";
for($i=4; $i >= 1; $i--){
	echo "*".$i;
	$fact *= $i;
}
echo " = ".$fact;

echo "<br><hr><p style = 'color:blue;'>Variable input is a string 1,2,3,4,5,6,7<p><hr>";
$input = "1,2,3,4,5,6,7";
$separated = explode(',', $input);
$total = 0;
foreach ($separated as $num){ 
    $total += (int)$num;
}
echo "Calculated Sum: ".$total;


echo "<br><hr><p style = 'color:blue;'>a = 10, b= 10 and display the result in c variable<p><hr>";
$a = $b = 10;
$c = $a + $b;
echo "a + b = ".$c."<br>";
$c = $a * $b;
echo "a * b = ".$c."<br>";
$c = $a - $b;
echo "a - b = ".$c."<br>";
$c = $a / $b;
echo "a / b = ".(float)$c."<br>";



?>