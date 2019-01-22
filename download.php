<html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
	$id=$_GET['id'];
} else {
	die('Invalid request');
}
?>
<head>
<meta http-equiv="refresh" content="0; url=https://downloads.sourceforge.net/project/resurrectionremix-pie/<?php echo base64_decode($id);?>">
</head>
</html>
