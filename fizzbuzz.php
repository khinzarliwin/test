<?php
echo '<form method="post" action = fizzbuzz.php><div><div class="left">First Range</div><input type="text" name="firstrange"></div>
<div class="left">Last Range</div><input type="text" name="lastrange"><div class="right"><input type=submit name="fizzbuzz" value="Click me to get FizzBuzz"/></div></form><br/>';
if(isset($_POST['fizzbuzz']))
{
$frange = $_POST['firstrange'];
$lrange = $_POST['lastrange'];
$out = ''; 
for ( $i=$frange; $i <= $lrange; ++$i ) {
	if ($f = ($i%3 == 0)) 
	$out .= 'Fizz';
	if ($b = ($i%5 == 0)) 
	$out .= 'Buzz';
	if ($f == 0 && $b == 0) 
	$out .= $i;
	$out .= ', ';
} echo $out;

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