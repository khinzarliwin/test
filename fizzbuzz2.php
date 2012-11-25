<?php
echo '<form method="post" action = fizzbuzz2.php><div><div class="left">First Range</div><input type="text" name="firstrange"></div>
<div class="left">Last Range</div><input type="text" name="lastrange"><div class="right"><input type=submit name="fizzbuzz" value="Click me to get FizzBuzz Bazz"/></div></form><br/>';
if(isset($_POST['fizzbuzz']))
{
$frange = $_POST['firstrange'];
$lrange = $_POST['lastrange'];
$out = ''; 
for ( $i=1; $i <= 100; ++$i ) {
	if ($f = ($i%3 == 0)) {
	$out .= 'Fizz';
	}
	if ($b = ($i%5 == 0)) {
	$out .= 'Buzz';
	}
	//for bazz
	if($bazz1 = (($i%3 == 1)*15) && $bazz1 = (($i%5 == 2)*15))
	$out .='Bazz';
	if($bazz2 = (($i%3 == 2)*15) && $bazz2 = (($i%5 == 1)*15))
	$out .='Bazz';
	//end
	if ($f == 0 && $b == 0 && $bazz1 == 0 && $bazz2 == 0) 
	$out .= $i;
	$out .= ', ';
} 
echo $out;
}
?>
<style>
.left
{
	float: left;
}
.right
{
	float: right;
	margin-right: 1125px;
}
</style>