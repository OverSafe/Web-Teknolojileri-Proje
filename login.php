<?php
echo "Merhaba";

$username = $_POST['numara'] ?? '';
$password = $_POST['ii'] ?? '';


function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}


if (empty($username) && empty($password)) {
    
    header("Location: login.html");
    exit();
}


if (!is_valid_email($username)) {
    
    header("Location: login.html");
    exit();
}





if ($password === "b241210008"||$username==="b241210008@sakarya.edu.tr") {
    // Başarılı giriş
    echo "Hoşgeldiniz, $password!";
} else {
    
    header("Location: login.html");
    exit();
}
?>