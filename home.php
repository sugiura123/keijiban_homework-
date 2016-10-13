<?php

$type = array(
  1  => "商品について",
  2  => "お支払について",
  3  => "当サイトについて",
  4 => "その他",
);


session_start();
$name = '';
$mail_address = '';
$contact = '';
$name_error= '';
$mail_address_error= '';
$contact_error= '';

if(isset($_SESSION['name'])){
  $name = $_SESSION['name'];
  unset($_SESSION['name']);
}
if(isset($_SESSION['mail_address'])){
  $email = $_SESSION['mail_address'];
  unset($_SESSION['mail_address']);
}
if(isset($_SESSION['contact'])){
  $message = $_SESSION['contact'];
  unset($_SESSION['contact']);
}
if(isset($_SESSION['name_error'])){
  $name_error = $_SESSION['name_error'];
}
if(isset($_SESSION['mail_address_error'])){
  $email_error = $_SESSION['mail_address_error'];
}
if(isset($_SESSION['contact_error'])){
  $message_error = $_SESSION['contact_error'];
}

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
     <th>
     名前 <span style="color:#ff0000;">(必須)</span>
     </th>
   <td>
   <input type="text" name="name">
   <?php if(!empty($name_error)){echo "<span class='red'>{$name_error}</span>";}?>
   </td>
   </tr>

   <tr>
   <th>メールアドレス<span style="color:#ff0000;">(必須)</span> </th>
   <td>
   <input type="text" name="mail_address">
   <?php if(!empty($mail_address_error)){echo "<span class='red'>{$mail_address_error}</span>";}?>
   </td>
   </tr>

   <tr>
   <th>種類<span style="color:#ff0000;">(必須)</span> </th>
   <td>
   <select name="type" class="form-control">
     <?php foreach ($type as $key => $value) :?>
       <option value="<?php echo $value;?>"><?php echo $value;?></option>
     <?php endforeach;?>
   </select>
   </td>
   </tr>

   <tr>
   <th>お問い合わせ<span style="color:#ff0000;">(必須)</span> </th>
   <td>
   <input type="text" name="contact">
   <?php if(!empty($contact_error)){echo "<span class='red'>{$contact_error}</span>";}?>
   </td>
   </tr>

   </table>
<br>
<input type="submit" value="確認画面へ"><br><br>
   </form>
  </body>
</html>