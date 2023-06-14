document.getElementById('complaint-form').addEventListener('submit', function(e) {
    e.preventDefault(); // منع إعادة تحميل الصفحة بعد الإرسال
  
    const name = document.getElementById('name').value;
    const phone = document.getElementById('phone').value;
    const email = document.getElementById('email').value;
    const area = document.getElementById('area').value;
    const complaint = document.getElementById('complaint').value;
    const image = document.getElementById('image').files[0];
    const nationality = document.getElementById('nationality').value;
  
    // قم بإنشاء كائن FormData وأضف البيانات المرسلة
    const formData = new FormData();
    formData.append('name', name);
    formData.append('phone', phone);
    formData.append('email', email);
    formData.append('area', area);
    formData.append('complaint', complaint);
    formData.append('image', image);
    formData.append('nationality', nationality);
  
    // أرسل البيانات باستخدام XMLHttpRequest أو استخدم fetch API لإرسالها إلى ملف "submit.php"
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'index.php', true);
    xhr.onload = function() {
      if (xhr.status === 200) {
        alert(xhr.responseText); // عرض رسالة النجاح
        document.getElementById('complaint-form').reset(); // إعادة تعيين النموذج
      } else {
        alert('حدث خطأ أثناء إرسال الشكوى');
      }
    };
    xhr.send(formData);
  });
  