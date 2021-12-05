<?php 
$countVisit=0;
if(isset($_COOKIE['countVisit']))
{
$countVisit=$_COOKIE['countVisit'];
$countVisit+1;
}
if(isset($_COOKIE['lastVisit']))
{
	$lastVisit=$_COOKIE['lastVisit'];
}
setcookie('countVisit',$countVisit+1,time()+3600);
setcookie('lastVisit',date("d-m-Y H:i:s"),time()+3600);
if($countVisit ==0){
echo"Welcome";
}
else
{
echo"This is your visit number:".$countVisit;
echo'<br>';

echo"Last time, you were on :".$lastVisit;
}
?>