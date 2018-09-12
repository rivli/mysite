<?php



 $CONNECT = mysqli_connect(HOST, USER, PASS, DB) or die("Ошибка MySQL 11: " . mysqli_error());
// //Подключение к основной базе
// $MESSAGEBD = mysqli_connect(HOST, "zakilven_message", PASS, "zakilven_message") or die("Ошибка MySQL: ".mysql_error());
// //Подключение к базе данных сообщений
// $COMMENTBD = mysqli_connect(HOST, "zakilven_comment", PASS, "zakilven_comment") or die("Ошибка MySQL: ".mysql_error());
// //Подключение к базе данных комментариев
// $COMMUNITYBD = mysqli_connect(HOST, "zakilven_com", PASS, "zakilven_com") or die("Ошибка MySQL: ".mysql_error());
// //Подключение к базе данных комментариев
 $FFUSERS = mysqli_connect(HOST, USER, PASS, "host1700007_users") or die("Ошибка MySQL: ".mysql_error());
 //Подключение к базе данных комментариев
 $ADDITIONALBD = mysqli_connect(HOST, USER_AD, PASS, DB_AD) or die("Ошибка MySQL: ".mysql_error());
// //Подключение к базе данных комментариев


//
// function GenPass ($p1, $p2) {
// return md5('dobro'.md5('665'.$p1.'456').md5('32'.$p2.'645'));
// }
//
// function FormChars ($p1) {
// return nl2br(htmlspecialchars(trim($p1), ENT_QUOTES), false);
// }
//
// function MessageSend($p1, $p2, $p3) {
// if ($p1 == 1) { $p1 = 'Ошибка'; $c = '#b31c1c';}
// else if ($p1 == 2) { $p1 = 'Подсказка'; $c = '#198f21';}
// else if ($p1 == 3) { $p1 = 'Информация'; $c = '#114f96';}
// $_SESSION['message'] = '
// <script type="text/javascript">
// 	setTimeout(function(){$(\'.messageshow\').fadeOut(\'swing\')},5000);  //10000 = 10 секунд
// </script>
// <div class="messageshow" style="background:'.$c.'" ><b>'.$p1.'</b>: '.$p2.'</div>';
// if ($p3) exit(header('Location: '.$p3));
// }
//
// function MessageShow() {
// if ($_SESSION['message']) {$Message = $_SESSION['message'];
// echo $Message;}
// $_SESSION['message'] = array();
// }
//
// function UCLASS($classes) {
// 	if	(!in_array($_SESSION['position'],$classes)) {
// 		MessageSend(1,"Вы не можете просматривать эту страницу","/");
// 	}
// }
//
// function REKLAMMA() {
// 	/*echo '
// 	<div class="sb_block_name">
// 	 Рекламма
// 	</div>
// 	<div class="sb_block">
// 		<img src="http://www.houses.ru/upload/rk/657/6-230-335.jpg" width="100%" >
// 	</div>
// 	';*/
// }
//
// function USERLOGGIN() {
// 	if ($_SESSION['status'] != 'login') {MessageSend(1,"Эта страница доступна только авторизованным пользователям",'/');}
// }

?>
