<?php
// قم بتعديل المعلومات التالية وفقًا لمعلومات قاعدة البيانات الخاصة بك
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "new";

// الاتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);
// التحقق من نجاح الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

?>

