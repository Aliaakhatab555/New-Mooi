<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // الحصول على بيانات النموذج
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // إعداد بريد المستلم (تغيير هذا إلى بريدك الإلكتروني)
    $to = "aliaakhattab12@gmail.com";
    $subject = "رسالة جديدة من الموقع";

    // إعداد محتوى البريد
    $email_content = "الاسم $name\n";
    $email_content .= "البريد الإلكتروني $email\n\n";
    $email_content .= "الرسالة\n$message\n";

    // إعداد رؤوس البريد
    $headers = "From: $email";

    // إرسال البريد
    if (mail($to, $subject, $email_content, $headers)) {
        echo "تم إرسال الرسالة بنجاح!";
    } else {
        echo "حدث خطأ أثناء إرسال الرسالة. حاول مرة أخرى لاحقًا.";
    }
} else {
    echo "يجب إرسال البيانات عبر النموذج.";
}
?>
