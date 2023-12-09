<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <form action="write_kadai.php" method="post">
      お名前: <input type="text" name="name"><br>
      Email: <input type="text" name="email"><br>
      <input type="submit" value="送信">
   </form> 
</body>
</html>




<!-- ?php

// session_start();

// $_SESSION["name"] ="やまざき";
// $_SESSION["num"] =1000;

// echo $_SESSION["name"];
// echo $_SESSION["num"];

// $num = 1;
// if($num == 1){
//   echo $num."は1と等しい";
//   }else if($num == 2){

// }

// $name = "あいうえお<br>";
// $num =100;
// $a = 1;
// $b = 2;
// $c = 3;
// echo $name;
// echo $num;
// echo $a;
// echo $b;
// echo $c;

// ?>