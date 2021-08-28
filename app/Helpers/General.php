<?php
function getItemImage($image) {
	$image = json_decode($image, true);
	return $image[0];
}

function getColorList() {
	return ["abu-abu","biru","coklat","emas","hijau","hitam","Kuning","Merah","Perak","Putih","Ungu"];
}

function textToSlug($text='') {
	$text = trim($text);
	if (empty($text)) return '';
	$text = preg_replace("/[^a-zA-Z0-9\-\s]+/", "", $text);
	$text = strtolower(trim($text));
	$text = str_replace(' ', '-', $text);
	$text = $text_ori = preg_replace('/\-{2,}/', '-', $text);
	return $text;
}
?>