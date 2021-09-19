<?php
header('Content-Type: text/html; charset=utf-8');
$polsovatel = $_POST["polsovatel"];
$message = $_POST["message"];
$phone = $_POST["phone"];
$mail = $_POST["mail"];
$polsovatel = htmlspecialchars($polsovatel);
$message = htmlspecialchars($message);
$phone = htmlspecialchars($phone);
$mail = htmlspecialchars($mail);
 $mysqli = new mysqli('localhost', 'root', '', 'db1');
 $mysqli->query("INSERT INTO `tablica`(`id`,`user`,`phone`,`email`,`user_message`) VALUES (NULL,'$polsovatel','$phone','$mail','$message')");
$email = "admin@mail.com";
$pagetitle = "Новое сообщение с сайта";
$text = "Имя: ".$polsovatel."\n Текст: ".$message." \n Телефон: ".$phone." Почта: ".$mail;
if (mail($email, $pagetitle, $text, "Content-type: text/plain; charset=utf-8"))
{
 echo '<script> alert("Сообщение успешно отправлено"); </script>';
 }
else{
echo '<script>alert("Сообщение нe отправлено"); </script>';
}
?>