<?php

$fileName="contact.csv";

if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
    //ボタンを押してsubmitされたデータと'POST'されたデータが同じであった場合という理解
    //var_dump($_POST);
    $name = $_POST['name'];
    $mail_adress = $_POST['mail_adress'];
    $type = $_POST['type'];
    $contact = $_POST['contact'];

    $data = $name . "\t" . $mail_adress . "\t" . $type . "\t". $contact . "\n" ;

    //var_dump($data);
    $fp = fopen($fileName, "a");
    fwrite($fp, $data);
    fclose($fp);
    }



$key = $_POST["type"];

$type = array(
  1  => "商品について",
  2  => "お支払について",
  3  => "当サイトについて",
  4 => "その他",
  );

//var_dump($_POST);


$name = $_POST['name'];
$mail_adress = $_POST['mail_adress'];
$contact = $_POST['contact'];

function h($s)
{return htmlspecialchars($s, ENT_QUOTES, "UTF-8");}



?>



<!DOCTYPE html>
<html>
<head>
      <meta charset="UTF-8">
      <title>お問い合わせ</title>
</head>

  <body>
   <h1>お問い合わせ</h1>
   <form action="contact.csv" method = "POST">
   名前 <?php echo h($name) ;?><br><br>
   メールアドレス <?php echo h($mail_adress) ;?><br><br>


   種類
      <?php foreach ($type as $form_key => $form_value) : ?>
        <?php if($key == $form_key) : ?>
          <echo $form_value;?>
        <?php endif;?>
      <?php endforeach;?>

       <br>
       <br>



   お問い合わせ <?php echo h($contact) ;?><br><br>
   <input type="submit" value="投稿"><br><br>
   <a href="home.php">戻る</a>
   </form>








  </body>
</html>