<?php
$adminEmail = "SMIRNOV@gmail.com";
$adminSubject = "Создан новый заказ";
$adminMailText = "<p>На сайте SMIRNOV - Jewelry был оформлен заказ.</p>";
$adminMailText .= "<p>Id продукта: ". $_POST['productId']." <br>
                      Продукт: ". $_POST['productTitle']." <br>
                      Стоимость: ". $_POST['productPrice'] ."
                   </p>";
$adminMailText .= "<h2>Данные покупателя.</h2>
                    <p>
                        Имя: ". $_POST['name'] ." <br>
                        Email: ". $_POST['email'] ." <br>
                        Телефон: ". $_POST['phone'] ." <br>
                        Адрес: ". $_POST['adress'] ."
                    </p>";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

mail($adminEmail, $adminSubject, $adminMailText, $headers);

$userEmail = $_POST['email'];
$userSubject = 'Ваш заказ на сайте SMIRNOV - Jewelry успешно оформлен.';
$userMailText = "<h2>Спасибо за заказ! Скоро мы свяжемся с Вами.</h2>";

mail($userEmail, $userSubject, $userMailText, $headers);

header('Location: order-success.php');
?>