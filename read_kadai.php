<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>データの表示</title>
</head>
<body>
  <?php
  // ファイルを開いてデータを読み込む
  $data = file_get_contents('data/data.txt');

  // テーブルを表示する
  echo "<table border='1'>";
  echo "<tr><th>日時</th><th>名前</th><th>メール</th></tr>";

  // ファイルのデータを行ごとに分割し、各行を処理
  $lines = explode("\n", $data);
  foreach ($lines as $line) {
      if (!empty($line)) {
          // 各行をカンマ（または他の区切り文字）で分割
          $parts = explode(",", $line);

          // テーブルの行として出力
          echo "<tr>";
          foreach ($parts as $part) {
              echo "<td>" . htmlspecialchars($part, ENT_QUOTES, 'UTF-8') . "</td>";
          }
          echo "</tr>";
      }
  }

  echo "</table>";
  ?>
</body>
</html>

