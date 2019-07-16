
<?php
    session_start();
// $confirmString='';

if (isset($_POST['userConfirmString'])) {
    $userConfirmString = $_POST['userConfirmString'];
        if ($userConfirmString == $_SESSION['confirmString']) {
            echo "認證碼正確";
            $_SESSION['confirmString'] = createConfirmString();
        }else{
            echo "認證碼錯誤";
            $_SESSION['confirmString'] = createConfirmString();
        }
} else {
    $_SESSION['confirmString'] = createConfirmString();
}

function createConfirmString(){
    $codeArea = "123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $confirmString='';
    for ($i = 1; $i <= 4; $i++) {
        $confirm = substr($codeArea, rand(0, strlen($codeArea) - 1), 1);
        $confirmString .= $confirm;
    }
    return $confirmString;;
}
?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <img src="43_GD_confirm.php" alt=""><br>
    <form method="POST" action="">
        <input type="text" value="" name="userConfirmString">
        <input type="submit" value="確定認證碼">
    </form>


    </body>
    </html>

