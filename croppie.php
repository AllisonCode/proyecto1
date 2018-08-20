<?php
$baseFromJavascript = $_POST['image'];
$name = $_POST['nombre'];
if($baseFromJavascript=='unnameduser'){
	copy('uploads/default.jpg', 'uploads/avatar_'.$name.'.jpg');
}else
{
// remove the part that we don't need from the provided image and decode it
$data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $baseFromJavascript));

$filepath = "uploads/avatar_".$name.".jpg"; // or image.jpg

// Save the image in a defined path
file_put_contents($filepath,$data);
}
?>