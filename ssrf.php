<?php

if(isset($_GET['img'])){
	$img = $_GET['img'];
	$image = fopen($img, 'rb');
	fpassthru($image);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CAT</title>
</head>
<body>
	<img src="/?img=cat.gif" />
</body>
</html>

