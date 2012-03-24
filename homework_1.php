<html>
<head>
</head>
<body>
<style type="text/css">
p.one {color:red;}
p.two {color:blue;}
p.three {color:black;}
</style> 
<?php
$num = htmlspecialchars( $_GET["number"]);
if(!is_numeric($num))
{ 
?>
<p class ="one">The parameter is not a number</p><br/>
 <?php
 }
 elseif($num < 0 || $num > 19999) {
 ?>
 <p class="one">The parameter is not within the range [0,19999]</p><br/>
 <?php
 }
 if(is_numeric($num)) {
$prime = true;
for($i = 2; $i <= sqrt($num); $i++) {
if($num % $i == 0) {
	$prime = false;
	break; 
	}	
}
if($prime == true) {
?>
<p class="three">The number <?php echo "$num"; ?> is prime !</p><br/>
<?php
}
else {
?>
<p class="two">The number <?php echo "$num"; ?> is NOT prime !</p><br/>
<?php
}
}
 ?>

</body>
</html>