<?php
$target_dir="uploads/";
$target_file=$target_dir . basename($_FILES["file"]["name"]);
$upload0k=1;
$imagefiletype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($_FILES["file"]["size"]>500){
	echo "Sorry, The file is too large";
	$upload0k=0;
}
if($upload0k==0){
	echo "The file was not uploaded";
}else if(move_uploaded_file($_FILES["file"]["tmp_name"],$target_file)){
	echo"The file"." ".basename($_FILES["file"]["name"]). " "."has been uploaded";
}else{
	echo "There was an error while uploading";
}

if($upload0k==1){
	$pname=$_POST['piname'];
	$conne= new mysqli("localhost","root","","connect");
	$que="insert into dir values('$pname','$target_file')";
	$res=mysqli_query($conne,$que);
	
	if($res){
		echo "successful!!!";
	}

if(mysqli_num_rows($res)>0){
	$m=mysqli_fetch_row($res);
	
	echo $m[0]."<img src='$m[1]'>";
}
}

?>