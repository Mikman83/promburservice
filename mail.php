<?php

$phone = $_POST['phone'];



mail("ivlev_michael@mail.ru", "Заявка с сайта", "телефон:".$phone.",  From: example2@mail.ru \r\n")
?>