<?PHP
$mysqli = new mysqli('localhost', 'u1611420_default', '8OB94XYajNpP5ty6', 'u1611420_default');
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}



$res = file_get_contents('https://api.binance.com/api/v3/ticker/price?symbol=XMRRUB');  #По данному примеру меняете на любую другую пару, что бы посмотреть пары перейдите по данному ссылке чтобы проверить и ввести другую монету
$btc = json_decode($res, TRUE); 
$string .= round ($btc["price"]) . ""; 



$mysqli->Query("UPDATE `kvgu_directions` SET `course_get` = $string WHERE id = '24'"); #Где kvgu_directions это название вашей ячейки в базе данных где нужно вставить курс

?>

<!---Вывести на экран так <?php print $string; ?> --->
