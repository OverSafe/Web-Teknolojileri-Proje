<?php
echo "Merhaba";
// Kullanıcıdan gelen verileri al
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// E-posta kontrolü (basit)
function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Kullanıcı adı boş mu, şifre boş mu?
if (empty($username) || empty($password)) {
    // Boş alan varsa tekrar login sayfasına yönlendir
    header("Location: login.html");
    exit();
}

// Kullanıcı adı mail mi kontrol et
if (!is_valid_email($username)) {
    // Geçersiz e-posta formatıysa geri yönlendir
    header("Location: login.html");
    exit();
}

// Kullanıcı adından öğrenci numarasını çıkar (örnek: b1812100001@sakarya.edu.tr -> b1812100001)


// Şifre doğru mu kontrol et
if ($password === "b241210008"||$username==="b241210008@sakarya.edu.tr") {
    // Başarılı giriş
    echo "Hoşgeldiniz, $password!";
} else {
    // Başarısız giriş, login sayfasına yönlendir
    header("Location: login.html");
    exit();
}
?>