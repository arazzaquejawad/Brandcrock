<?php

$toppers = array("Abc", "Xyz", "Bzu", "Nky", "Hos");
array_push($toppers,"kar123","o1ac");
$toppers[1] = "ABC";

echo "<hr>List of toppers so far: (Indexed Array) <hr>";

foreach ($toppers as $person){ 
    echo $person. "<br>"; 
}


$marks = array("Jawad"=>91, "Karan"=>94, "Anand"=>12);
$marks['Krishan'] = 100;


echo "<hr>List of Marks for some students: (Associative Array) <hr>";

foreach($marks as $student => $mark) {
    echo "Student: " . $student . " has got marks = " . $mark ." out of 100";
    echo "<br>";
}

?>