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
      <link rel="stylesheet" href="style.css">
</head>
  <body>
   <h1>お問い合わせ</h1>
   <form action="kakuninn.php" method = "POST">

   <table summary="お問い合わせ">

   <tr>
     <th>名前 <span style="color:#ff0000;">(必須)</span> </th>
   <td><input type="text" name="name"></td>
   </tr>

   <tr>
   <th>メールアドレス<span style="color:#ff0000;">(必須)</span> </th>
   <td><input type="text" name="mail_address"></td>
   </tr>

   <tr>
   <th>種類<span style="color:#ff0000;">(必須)</span> </th>
   <td>
   <select name="type" class="form-control">
     <?php foreach ($type as $key => $value) :?>
       <option value="<?php echo $key;?>"><?php echo $value;?></option>
     <?php endforeach;?>
   </select>
   </td>
   </tr>

   <tr>
   <th>お問い合わせ<span style="color:#ff0000;">(必須)</span> </th>
   <td><input type="text" name="contact"></td>
   </tr>

   </table>
<br>
<input type="submit" value="確認画面へ"><br><br>
   </form>
  </body>
</html>