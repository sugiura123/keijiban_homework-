<?php
//var_dump($_SERVER['REQUEST_METHOD']);
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
    //☓ボタンを押してsubmitされたデータと'POST'されたデータが同じであった場合という理解
    //◎この画面にきたリクエストメソッドがPOSTメソッドなら

    $name = $_POST['name'];
    $mail_address = $_POST['mail_address'];
    $type = $_POST['type'];
    $contact = $_POST['contact'];

    $success = true;
    $name_error= '';
    $email_error= '';
    $message_error= '';

    if(empty($name)){
    $name_error = '名前が入力されていません';
    $success = false;
    }
    if(empty($mail_address)){
    $mail_address_error = 'メールアドレスが入力されていません';
    $success = false;
    }
    if(empty($contact)){
    $contact_error = 'お問い合わせ内容が入力されていません';
    $success = false;
    }

    $_SESSION['name'] = $name;
    $_SESSION['mail_address'] = $mail_address;
    $_SESSION['type'] = $type;
    $_SESSION['contact'] = $contact;


    }
else {echo  '<a href="home.php">お問い合わせ画面より入力してください</a>'; exit;}

// $key = $_POST["type"];

// $type = array(
//   1  => "商品について",
//   2  => "お支払について",
//   3  => "当サイトについて",
//   4 => "その他",
//   );


function h($s)
{return htmlspecialchars($s, ENT_QUOTES, "UTF-8");}



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
   <form action="kannryou.php" method = "POST">
   <table summary="お問い合わせ">

   <tr>
     <th>名前</th>
     <td><?php echo h($name); echo h($name_error) ;?></td>
   </tr>

   <tr>
     <th>メールアドレス</th>
     <td><?php echo h($mail_address); echo h($mail_address_error) ;?></td>
   </tr>

   <tr>
     <th>種類</th>
     <td><?php echo h($type) ;?></td>
<!--       <?php foreach ($type as $form_key => $form_value) : ?>
        <?php if($key == $form_key) : ?>
          <?php echo $form_value;?>
         <?php else: echo $form_value;?>
        <?php endif;?>
      <?php endforeach;?> -->
   </tr>

   <tr>
     <th>お問い合わせ</th>
     <td><?php echo h($contact); echo h($contact_error) ;?></td>
   </tr>
   </table>
<br>

   <button type="submit" name="submit">送信する</button>
   <input type="button" value="内容を修正する" onclick="history.back(-1)">

   </form>


  </body>
</html>