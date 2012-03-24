<html>
<head>
</head>
<body>
<pre>
<?php
$glob = "yellow ";

$home = range(20,1000,37);

function find_3_prime() {
 Global $home;
 $counter = 0;
 foreach($home as $value) {
  $prime = true;
 if($counter == 3)
    break;
for($i = 2; $i <= sqrt($value); $i++) {
if($value % $i == 0) {
	$prime = false;
	break; 
	}	
}
if($prime) {
echo "$value ";
$counter++;
}
}
echo "\n";
}

function check_exist() {
Global $home;
$check = array(146,284,871);
foreach($check as $value) {
if(in_array($value,$home))
 echo "The number ".$value." exist in the array<br/>";
 else
	echo "The number ".$value." does not exist in the array<br/>";
	}
}



find_3_prime();
check_exist();

?>

</pre>
</body>
</html>