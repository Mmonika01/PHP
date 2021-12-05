<?php
session_start();
?>
<html>
 <head>
 <title>FILE upload</title>
 </head>
 <body align="center" bgcolor="Violet">
 <form action="uploadfile.php" method="Post" enctype="multipart/form-data">
 <h2 style="background-color:tomato;">UPLOAD EMPLOYEES SALARY FILE</h2>
 <br><br>
 <h4>supported file types: doc,docx,pdf,ppt,rar</h4></font>
 <br><br>
 <input type="file" name="uploadedfile" ><br><br> 
<a herf="#">
<button type="submit" name="uploadBtn" value="upload" > 
<span>upload</span>
<div CLASS ="liquid"></div>
</a>
</form>
</body>
</html>
 
 










