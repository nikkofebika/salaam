<?php
function getItemImage($image) {
	$image = json_decode($image, true);
	return $image[0];
}

function getColorList() {
	return ["abu-abu","biru","coklat","emas","hijau","hitam","Kuning","Merah","Perak","Putih","Ungu"];
}
?>