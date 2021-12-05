<html>
<head>
<title>String functions</title>
</head>
<body>
<h2> String Function </h2>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
Enter a Sentence or a word:
<input type="text" name="str"value="str"><br><br>
<input type="radio" name="string" value=1>String Length<br><br>
<input type="radio" name="string" value=2>Word count<br><br>
<input type="radio" name="string" value=3>String reverse<br><br>
<input type="radio" name="string" value=4>String position<br><br>
<input type="radio" name="string" value=5>String replace<br><br>
<input type="radio" name="string" value=6>Capitalize each word<br><br>
<input type="radio" name="string" value=7>Upper Case<br><br>
<input type="radio" name="string" value=8>Lower Case<br><br>
<input type="radio" name="string" value=9>Repeat String <br><br>
<input type="radio" name="string" value=10>String Compare<br><br>
<input type="radio" name="string" value=11>Sub String<br><br>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
if(!empty($_POST['string']))
{

$string=$_POST['str'];
$func=$_POST['string'];
if($func == 1)
{
echo "The length of the string '$string' is"."<br><br>".strlen($string);
}
elseif($func==2)
{
	echo "The no.of word in $string is".str_word_count($string);
}
elseif($func==3)
{
	echo "The reverse of the string $string".strrev($string);
}
elseif($func==4)
{
	echo"The position of Monika in Welcome Monika ".strpos("Welcome Monika","Monika");
}
elseif($func==5)
{
	 echo "The string Monika is replaced with Namitha in Welcome Monika".str_replace("Monika","Namitha","Welcome Monika");
}
elseif($func==6)
{
	echo "Capitalize first alphabet of every word in $string".ucwords($string);
}
elseif($func==7)
{
	echo "The upper case of the $string".strtoupper($string);
}
elseif($func==8)
{
	echo "The lower case of the $string".Strtolower($string);
}
elseif($func==9)
{
	echo "Repeating the string '$string' 10 times".str_repeat($string,10);
}
elseif($func==10)
{
	echo "THe given strings are 'Monika' and 'Namitha',Now the strings are compared".strcmp("Monika","Namitha");
}
elseif($func==11)
{
	 echo "Return 10 character of the string $string".substr($string,0,10);
}
else
{ 
echo " The choice is invalid";
}
}
}
?>