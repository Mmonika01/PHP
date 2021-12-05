<!DOCTYPE html>
<html>
<head>
 <title>Biggest Number</title>
</head>
<body>
<h2>Biggest of three numbers</h2>
<form method="post" action=<"?php echo $_SERVER['PHP_SELF']">

 Enter the first number:
 <input type="number" name="num1"><br><br>
 Enter the second number:
 <input type="number" name="num2"><br><br>
 Enter the third number:
 <input type="number" name="num3"> 
 <br><br>
 <input type="submit" name="submit" value= FIND <br><br><br>
</form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $num3=$_POST["num3"];
    echo "The given numbers are:."."<br>";
    echo $num1."<br>";
    echo $num2."<br>";
    echo $num3."<br>";

    if($num1>$num2 && $num1>$num3)
        {
     echo "<br>The Biggest number is:\t".$num1;
    }
    elseif($num2>$num1 && $num2>$num3)
        {
      echo "<br>The Biggest number is:\t".$num2;
     }
     else
      echo "<br>The Biggest number is:\t".$num3;
    }
?>