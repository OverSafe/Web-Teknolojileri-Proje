<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Form Bilgileri</title>
</head>
<body>
  <h2>Gönderilen Form Bilgileri</h2>
  <ul>
    <li><strong>Ad Soyad:</strong> <?= htmlspecialchars($_POST["adSoyad"] ?? '') ?></li>
    <li><strong>E-posta:</strong> <?= htmlspecialchars($_POST["email"] ?? '') ?></li>
    <li><strong>Telefon:</strong> <?= htmlspecialchars($_POST["telefon"] ?? '') ?></li>
    <li><strong>Konu:</strong> <?= htmlspecialchars($_POST["konu"] ?? '') ?></li>
    <li><strong>Mesaj:</strong> <?= nl2br(htmlspecialchars($_POST["mesaj"] ?? '')) ?></li>
    <li><strong>Cinsiyet:</strong> <?= htmlspecialchars($_POST["cinsiyet"] ?? '') ?></li>
    <li><strong>Onay:</strong> <?= isset($_POST["kvkk"]) ? "Evet" : "Hayır" ?></li>
  </ul>
</body>
</html>