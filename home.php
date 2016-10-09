<?php
$type = array(
  1  => "商品について",
  2  => "お支払について",
  3  => "当サイトについて",
  4 => "その他",

);




?>

<!DOCTYPE html>
<html>
<head>
      <meta charset="UTF-8">
      <title>お問い合わせ</title>
</head>

  <body>
   <h1>お問い合わせ</h1>
   <form action="kakuninn.php" method = "POST">
   名前 <input type="text" name="name"><br><br>
   メールアドレス <input type="text" name=mail_adress><br><br>


   種類
   <select name="type" class="form-control">
   <?php  foreach ($type as $key => $value) :
   echo '<option value="$key">' .$value. '</option>';
   endforeach;
   ?>

   </select>
   <br>
   <br>



   お問い合わせ <input type="text" name="contact"><br><br>
   <input type="submit" value="確認画面へ"><br><br>
   </form>

  </body>
</html>