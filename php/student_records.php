<?php
echo<<<_END
<form action="" method="post">
<H3><B>Choose a file to view </B></H3>
<br><br>
<select name="files">
<option value=1>select</option>
<option value=2>student profile</option>
</select>
<br><br>
<input type ="submit" name="submit" value="VIEW">
</form>
_END;
if(isset($_POST['submit']))
{
$files=$_POST['files'];
if($files==2)
{
$document=fopen("text4.txt","r");
if($document==null)
{
echo"Cannot open the file";
exit();
}
else
{
$file=file_get_contents("text4.txt");
$line=explode("\n",$file);
}
foreach($line as $newline)
{
echo $newline."<br>";
}
fclose($document);
}
}
?>

