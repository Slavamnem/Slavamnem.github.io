<?

$file_name = trim($_POST['file_name']);
$format = trim($_POST['format']);
$text = $_POST['input_buffer'];
$file = fopen($file_name.".".$format, "w");
fwrite($file, $text);

$path = $file_name.".".$format;
$size=filesize($path);
header('Content_Type: aplication/msword');
header('Content_Length:' .$size);
header('Content-Disposition: attachment; filename='.$path.'');
readfile($path);
?>