<?php
$im=imagecreatefrompng("./resource/bg.png");
$fontfile="./resource/bankgothic.ttf";
$text=date('H:i.s\, j F Y')."    IP: ".$_SERVER['REMOTE_ADDR'];
$bbox=imagettfbbox(15,0,$fontfile,$text);
$new_height=($bbox[5] * -1) + 20;
$new_width=$bbox[4] + 100;
$width=imagesx($im);
$height=imagesy($im);
$image = imagecreatetruecolor($new_width, $new_height);
imagecopyresampled($image, $im, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
$blue=imagecolorallocate($image,0,167,255);
imagedestroy($im);
$position_center = ceil(($new_width-$bbox[4]) / 2);
imagealphablending($image, true);
imagettftext($image,15,0,$position_center,20,$blue,$fontfile,$text);
header("Content-type: image/jpeg");
imagejpeg($image,NULL,100);
imagedestroy($image);
?>