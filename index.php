<?php
///all variables
$hdr1 = "Patrick Mathew L. Abiog";	
$hdr2 = "SIMPLE GRADING SYSTEM";
$hdr3 = "Course Grade: BSIT 1";
	
	///all output
	echo $hdr1;
	echo "<br/>";
	echo $hdr2;
	echo "<br/>";
	echo $hdr3;
	echo "<br/>";
	
	$grades=74; 
//    101 Above = Wrong Input!
//    100-98 = 1.00 Excellent!
//    97-95 = 1.25 Superior!
//    94-92 = 1.50 Very Good!
//    91-89 = 1.75 Good!
//    88-86 = 2.00 Very Satisfactory!
//    85-83 = 2.25 Satisfactory!
//    82-80 = 2.50 Average!
//    79-77 = 2.75 Fair! 
//    76-75 = 3.00 Passed!   
//    75 Below = Failed!

switch ($grades){
    case $grades == 101;
    echo "Wrong Input!";
    break;
	case $grades <= 100 && $grades >= 98;
		echo "Excellent!";
	break;
	case $grades <= 97 && $grades >= 95;
		echo "Superior!";
	break;
	case $grades <= 94 && $grades >= 92;
		echo "Very Good!";
	break;
	case $grades <= 91 && $grades >= 89;
		echo "Good!";
	break;
	case $grades <= 88 && $grades >= 86;
		echo "Very Satisfactory!";
	break;
	case $grades <= 85 && $grades >= 83;
		echo "Satisfactory!";
	break;
	case $grades <= 82 && $grades >= 80;
		echo "Average!";
	break;
	case $grades <= 79 && $grades >= 77;
		echo "Fair!";
	break;
	case $grades <= 76 && $grades >= 75;
		echo "Passed!";
	break;
	case $grades >= 74;
		echo "Failed!";
	break;
}
?>