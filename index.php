
<?php
include './submit.php';
?>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $area = $_POST['area'];
    $complaint = $_POST['complaint'];
    $nationality = $_POST['nationality'];

    // تخزين معلومات الصورة
    $targetDir = "images/";
    $imageName = basename($_FILES["image"]["name"]);
    $targetFilePath = $targetDir . $imageName;
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);

    // إجراء استعلام SQL لإدخال البيانات في جدول "new"
    $sql = "INSERT INTO new (name, phone, email, area, complaint, nationality, image) 
            VALUES ('$name', '$phone', '$email', '$area', '$complaint', '$nationality', '$targetFilePath')";

    if ($conn->query($sql) === TRUE) {
        echo "تم إرسال الشكوى بنجاح!";
    } else {
        echo "حدث خطأ أثناء إرسال الشكوى: " . $conn->error;
    }
}

// إغلاق اتصال قاعدة البيانات

?>


<!DOCTYPE html>
<html dir="rtl" lang="ar" class="no-js">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
  <link rel="stylesheet" href="cdn.jsdelivr.net_npm_bootstrap@5.0.2_dist_css_bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-PJsj/BTMqILvmcej7ulplguok8ag4xFTPryRq8xevL7eBYSmpXKcbNVuy+P0RMgq" crossorigin="anonymous">
  <script src="cdn.jsdelivr.net_npm_bootstrap@5.0.2_dist_js_bootstrap.bundle.min.js"></script>
  <title>موقع البلدية</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<img src="imge\شعار يلدبة.jpg" alt="وصف الصورة"style="height: 5rem; width:10rem";> 

<div class="container-fluid"> <br><br>


  <h1>منصة شكاوى بلدية الامير الحسين بن عبدالله</h1><br><br>

  <form id="complaint-form" action="index.php" method="post" enctype="multipart/form-data" dir="rtl">
   
  

    
  </div>
</div>
<h3> شكاوى و اقتراحات </h3>
<p> اهلا و سهلا بكم في منصة الشكاوى...يمكنكم تعبئة النموذج في الاسفل و سيقوم الفريق المختص بالمتابعة <p>
  <h2>تنويه</h2><br>
        <p> اخي المواطن اختي المواطنه :- سيتم الغاء الشكاوى التي لاتحتوي على كافة المعلومات و بشكل صحيح<br> ملاحظة:-سيتم التعامل مع الشكاوى بكل سرية.</p>
  <br>
  
  
  <div class="form-floating">
  <label for="floatingInputGrid">الاسم:</label><br><br>
    <input type="text" id="name" required>


</div>
    
    <label for="phone">رقم الهاتف:</label>
    <input type="tel" id="phone" required>
    
    <label for="email">البريد الإلكتروني:</label>
    <input type="email" id="email" >
    
    <label for="area">المنطقة:</label>
    <select id="area">
      <option value="الباعج">الباعج</option>
      <option value="النهضة">النهضة</option>
      <option value="أم السرب">أم السرب</option>
      <option value="الزبيدية">الزبيدية</option>
      <option value="حويجة">حويجة</option>
    </select>
    
    <label for="complaint">نص الشكوى:</label>
    <textarea id="complaint" required></textarea>
    
    <label for="image">صورة:</label>
    <input type="file" id="image">
    
    <label for="nationality">الجنسية:</label>
    <select id="nationality">
      <option value="أردني">أردني</option>
      <option value="غير أردني">غير أردني</option>
    </select>
    
    <button type="submit">إرسال</button>
  </form>

  <script src="script.js"></script>


</div>

</body>
</html>


