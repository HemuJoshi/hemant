
<?php
include("users.php");
$register=new users;
extract($_POST);
$img_name=$_FILES['img']['name'];
$tmp_name=$_FILES['img']['tmp_name'];
move_uploaded_file($tmp_name,"img/".$img_name);
$query="insert into project values('','$n','$e','$img_name','$p')";
if($register->signup($query))
{
    $register->url("index.php?run=success");
};

?>
