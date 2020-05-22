header("X-XSS-Protection: 0");
$ara = htmlspecialchars($_GET['arama-kutusu'], ENT_QUOTES, 'UTF-8');

echo " ".$ara;
