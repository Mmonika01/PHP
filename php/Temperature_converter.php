<!DOCTYPE html> 
<html> 
<head> 
<title>Temperature Converter</title> 
</head> 
<body> 
<h1><b><b><b>Temperature Converter</h1><br><br> 
 
<form action="<?php echo $_SERVER['PHP_SELF']?>"  method="post"> 

<label for="temp"><b>Enter the temperature:</b></label>
<input type="number" name="temperature" required> <br><br>

<input type="radio" name="units" value="C">Celcius 
<input type="radio" name="units" value="F">Farenheit <br><br> 
<input type="submit" name="submit" value="CONVERT"><br><br> 

</form> 
<?php 
if(isset($_POST['submit'])) 
{ 
 $temperature=$_POST['temperature']; 
 $units=$_POST['units']; 
if($units=="C") 
{ 
$result=$temperature*9/5+32; 
echo "$temperature degree Celcius = " .$result . " degree Farenheit"; 
}
elseif($units=="F")
{
$result=5/9*($temperature-32);
echo "$temperature degree Farenheit= " .$result . " degree  Celcius"; 
}
}