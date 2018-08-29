<?php

//php syntax  
$a= 20; //global scope!
$b= "hi";
$c= "bye $a times...:D";
echo $a;  //echo will print the value
echo "<br>";
echo $b."<br>".$c;
echo "<br>";
/*<?php
$x = 5;
$y = 4;
echo $x + $y;
?>*/
//if-else
if($a==20){
	echo "hi";
}
else{
    echo "bye";
}
echo "<br>";
//for loop
for($x=0;$x<6;$x++)
	echo $x." ";
echo "<br>";
//array and for each
$b=array("PUR","GER","RED");
	foreach ($b as $val) {
		echo $val;
	}
	echo "<br>";
	// functions
	function foo($a){
        $d=2; //LOCAL VARIABLE!!
		echo $a;
	}
	foo(3);
	echo "<br>";
	//find date and time
	//to show date and time of respective timezones..!
	date_default_timezone_set('Asia/Kolkata');
	echo "Today is--".date("d/m/Y")."--time is--".date("h:i:s");
	//M=month name,m=month number-------same is for date
	echo "<br>";
?>