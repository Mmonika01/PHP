<html>
<head>
<title>upload file</title></head>
<body align="cener" bgcolor="Violet">
<font size="50px">
<?php
session_start();
$message = '';
if(isset($_POST['uploadBtn'])&&$_POST['uploadBtn']=='upload')
{
	if(isset($_FILES['uploadedFile'])&&$_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
{
$fileTmpPath= $_FILES['uploadedFile']['tmp_name'];
$fileName= $_FILES['uploadedFile']['name'];
$fileSize= $_FILES['uploadedFile']['size'];
$fileType= $_FILES['uploadedFile']['type'];
$fileNameCmps= explode(".",$fileName);
$fileExtentsion= strtolower(end($fileNameCmps));
$newFileName= ($fileName).'.'.$fileExtentsion;
$allowedfileExtensions= array('jpg','gif','zip','txt','xls','doc','rar','pptx','docx','pptx','pdf');
$foldername= './uploaded_files';
$filen= $foldername.$newFileName;
if(!file_exists($filen))
{
$uploadFileDir='uploadfile';
$dest_path=$uploadFileDir.$newFileName;
if(move_uploaded_file($fileTmpPath,$dest_path))
{
$message='<r>file is succesfully uploaded.';
}
else
{
$message='ERROR-there was some error in uploading file to directory...<br>
please make sure the setting is correct..!';
}
}
else
{
$message='upload Failed..<br>NOTE:check file extension.implode('.'$allowedfileExtensions)';
}
}
else
{
	$fileName='';
echo "file ($fileName)already exists";
}
}
else
{
$message='There is some error in file upload..Please check the following error...'
.$message.='Error'.$_FILES['uploadFile']['error'];
}

$_SESSION['message']=$message;
printf('<b>%s</b>',$_SESSION['message']);
unset($_SESSION['message']);
?>
<input type=button onClick="location.href='file_upload.php'" value="<<BACK">
</body>
</html>
