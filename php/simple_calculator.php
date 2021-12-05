<!DOCTYPE html> 
<html> 
<head> 
<title>Archimetic Calculator</title> 
</head> 
<body> 
<h1><b><b><b>Archimetic Calculator</h1><br><br> 
 
<form action="<?php echo $_SERVER['PHP_SELF']?>"  method="post"> 

<label for="temp"><b>Enter the number1:</b></label>
<input type="number" name="num1" required> <br><br>
<label for="temp"><b>Enter the number2:</b></label>
<input type="number" name="num2" required> <br><br>

<input type="radio" name="units" value="Add">Add
<input type="radio" name="units" value="Subtract">subtraction <br>
<input type="radio" name="units" value="multiply">multiplication <br>
 <input type="radio" name="units" value="divide">division <br> 
<input type="submit" name="submit" value="Calculate"><br><br> 

</body>
</form>
<?php
if(isset($_Post['submit']))
{
	$num1=$_Post['num1'];
	$num2=$_Post['num2'];
	$calculate=$_Post['calculate'];
if ($calculate="Add")
   {
      $c = $num1+$num2;
	  echo"The sum of two numbers is$c";
   }
   elseif($calculate="Subtract")
   {
      $c = $num1-$num2;
	  echo"The subtraction of two numbers is $d";
   }
   elseif($calculate="multiply")
   {
      $c = $num1*$num2;
	  echo"The multiplication of two numbers is$e ";
   }
   elseif($calculate="division")
   {
      $c = $num1/$num2;
	  echo"The division of two numbers is  $d";
   }
}
?>
 
</html>