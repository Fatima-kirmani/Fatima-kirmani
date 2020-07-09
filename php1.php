<?php
echo "<h1>Asisignment no.1 </h1>";
echo "</br>";
echo "<h2>Part one</h2>";
echo "</br>";
$std1 = array('name'=> "fatima", "roll no." => "110", 'maths' => "94", 'english' => "78", 'urdu' => "82");
echo "</br>";
print_r ($std1);
echo "</br>";
$std2 = array('name1'=> "sukaina", "roll no.1" => "111", 'maths1' => "89", 'english1' => "71", 'urdu1' => "80");
echo "</br>";
print_r ($std2);
echo "</br>";
$std = array_merge($std1,$std2);
echo "</br>";
print_r ($std);
echo "</br>";
echo "</br>";
echo "</br>";
echo "<h2>Part two</h2>";
echo "</br>";
$students = array(
    array(
      "name" => 'fatima' ,
      "roll no." => '110',
      'maths' => "94", 
      'english' => "78", 
      'urdu' => "82"
    ),
    array(
        "name" => 'sukaina' ,
        "roll no." => '111',
        'maths' => "90", 
        'english' => "70", 
        'urdu' => "80"
    ),
    array(
        "name" => 'kiran' ,
        "roll no." => '112',
        'maths' => "97", 
        'english' => "74", 
        'urdu' => "78"
    ),
    array(
        "name" => 'zainab' ,
        "roll no." => '110',
        'maths' => "94", 
        'english' => "78", 
        'urdu' => "82"
      )
    );
print_r ($students);
?>