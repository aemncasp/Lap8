<?php
$pdo = new PDO("mysql:host=localhost; dbname=blueshop; charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);?>
<html><head><meta charset="utf-8"></head>
<body>
<div style="display:flex">
<?php
$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();
?>
<?php while ($row = $stmt->fetch()) : ?>
<div style="padding: 15px; text-align: center">
<a href="lap5.1_8.php?username=<?=$row["username"]?>">
<img src='member_photo/<?=$row["username"]?>.jpg' width='100'>
</a><br>
ชื่อสมาชิก: <?=$row ["name"]?><br>
ที่อยู่: <?=$row ["address"]?><br>
อีเมลล์: <?=$row ["email"]?><br>
</div>
<?php endwhile; ?>
</div></body></html>