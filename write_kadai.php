<?php
  // ファイルに書き込み
  // 文字作成
$name = $_POST['name']."\n";
$email = $_POST['email']."\n";
$time = date('Y-m-d H:i:s')."\n";
file_put_contents('data/data.txt', $time . $name . $email , FILE_APPEND);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File書き込み</title>
</head>
<body>
  


</body>
</html>