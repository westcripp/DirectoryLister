<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
	$id=$_GET['id'];
} else {
    die('Invalid request');
}
$file=base64_decode($id);
$file=str_replace("\n", '', $file);
$url='https://downloads.sourceforge.net/project/resurrectionremix-pie/' . $file;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'HEAD');
curl_setopt($ch, CURLOPT_NOBODY, true);
$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

$url = curl_getinfo($ch, CURLINFO_REDIRECT_URL) . '?r=&ts='. time();
print($url . "\n");
curl_close ($ch);
header('Content-Description: '.basename($file));
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.basename($file).'"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Content-Length: ' . filesize($file));
header('Pragma: public');
readfile($url);
?>
