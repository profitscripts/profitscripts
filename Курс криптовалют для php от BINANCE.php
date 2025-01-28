<?PHP
$mysqli = new mysqli('localhost', 'u1611420_default', '8OB94XYajNpP5ty6', 'u1611420_default');
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}



$res = file_get_contents('https://api.binance.com/api/v3/ticker/price?symbol=XMRRUB'); 
$btc = json_decode($res, TRUE); 
$string .= round ($btc["price"]) . ""; 



$mysqli->Query("UPDATE `kvgu_directions` SET `course_get` = $string WHERE id = '24'");

?>

<!---Вывести на экран так <?php print $string; ?> --->