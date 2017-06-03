<?php
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
    echo header('Location:index.php');
} else {
    $sum = 0;
    for ($i = 0; $i < $_SESSION['basketcounter']; $i++) {
        $sum = $sum + $_SESSION['price' . $i] * $_SESSION['quantity' . $i];
        file_put_contents('files/ordersitems8Qi2kd3GD38Smq9Fs2.txt', $_SESSION['item' . $i] . ' (' . $_SESSION['quantity' . $i] . 'шт.) - ' . $_SESSION['price' . $i] * $_SESSION['quantity' . $i] . ' руб. <br>', FILE_APPEND);
    }
    file_put_contents('files/ordersitems8Qi2kd3GD38Smq9Fs2.txt', ' Сумма = ' . $sum . ' руб. ' . "\n", FILE_APPEND);
    $login       = !empty($_SESSION['login']) ? $_SESSION['login'] : '';
    $fullname    = !empty($_GET['fullname']) ? htmlspecialchars($_GET['fullname']) : '';
    $phonenumber = !empty($_GET['phonenumber']) ? htmlspecialchars($_GET['phonenumber']) : '';
    $email       = !empty($_GET['email']) ? htmlspecialchars($_GET['email']) : '';
    $address     = !empty($_GET['address']) ? htmlspecialchars($_GET['address']) : '';
    $date        = !empty($_GET['date']) ? htmlspecialchars($_GET['date']) : '';
    file_put_contents('files/orderslogins8Qi2kd3GD38Smq9Fs2.txt', $login . "\n", FILE_APPEND);
    file_put_contents('files/ordersfullnames8Qi2kd3GD38Smq9Fs2.txt', $fullname . "\n", FILE_APPEND);
    file_put_contents('files/ordersphonenumbers8Qi2kd3GD38Smq9Fs2.txt', $phonenumber . "\n", FILE_APPEND);
    file_put_contents('files/ordersemails8Qi2kd3GD38Smq9Fs2.txt', $email . "\n", FILE_APPEND);
    file_put_contents('files/ordersaddresses8Qi2kd3GD38Smq9Fs2.txt', $address . "\n", FILE_APPEND);
    file_put_contents('files/ordersdates8Qi2kd3GD38Smq9Fs2.txt', $date . "\n", FILE_APPEND);
    $_SESSION['basketcounter'] = 0;
    echo '<script>location.href="thankyou.php"</script>';
}
?>
