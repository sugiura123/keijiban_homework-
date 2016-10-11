<?php
session_start();

  $name = htmlspecialchars( $_SESSION[ 'name' ], ENT_QUOTES );
  $mail_address = htmlspecialchars( $_SESSION[ 'mail_address' ], ENT_QUOTES );
  $type = htmlspecialchars( $_SESSION[ 'type' ], ENT_QUOTES );
  $contact = htmlspecialchars( $_SESSION[ 'contact' ], ENT_QUOTES );

    $data = $name . "\t" . $mail_address . "\t" . $type . "\t". $contact . "\n" ;

    //var_dump($data);
    $fileName="contact.csv";
    $fp = fopen($fileName, "a");
    fwrite($fp, $data);
    fclose($fp);

?>



<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
</head>
<body>
<div>
        <div>
        <h1>お問い合わせ 送信完了</h1>
        <p>
        お問い合わせありがとうございました。<br>
        内容を確認のうえ、回答させて頂きます。<br>
        しばらくお待ちください。
        </p>
        <a href="home.php">
            <button type="button">お問い合わせに戻る</button>
        </a>
    </div>
</div>
</body>
</html>