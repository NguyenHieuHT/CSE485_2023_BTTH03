<?php

require_once 'Utils/MyEmailServer.php';
require_once 'Utils/EmailSender.php';

// Tạo một đối tượng EmailSender
$emailSender = new EmailSender(new MyEmailServer());

// Gửi email
$emailSender->send('hieua2k43ty02@gmail.com', 'ĐIỂM DANH THỰC HÀNH BUỔI 3', 'Nguyễn Quang Hiếu_1951060705 xin phép điểm danh thực hành buổi 3');
?>
