<div style="font-size: 70px; text-align: center;">
<?php
if (isset($_POST['add']))
{
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$num3 = $_POST['num3'];
	$num4 = $_POST['num4'];
	$total1 = $num1+$num2+$num3+$num4;
	
	echo "The answer is: ", $total1;
}

else if (isset($_POST['sub']))
{
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$num3 = $_POST['num3'];
	$num4 = $_POST['num4'];
	$total2 = $num1-$num2-$num3-$num4;
	
	echo "The answer is: ", $total2;
}

else if (isset($_POST['mul']))
{
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$num3 = $_POST['num3'];
	$num4 = $_POST['num4'];
	$total3 = $num1*$num2*$num3*$num4;
	
	echo "The answer is: ", $total3;
}

else if (isset($_POST['div']))
{
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$num3 = $_POST['num3'];
	$num4 = $_POST['num4'];
	$total4 = $num1/$num2/$num3/$num4;

	echo "The answer is: ", $total4;
	
}
?>