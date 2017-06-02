<?php
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
    echo header('Location:index.php');
} else {
    for ($i = 0; $i < $_SESSION['basketcounter']; $i++) {
        $sum = $sum + $_SESSION['price' . $i] * $_SESSION['quantity' . $i];
        file_put_contents('files/ordersitems.txt', $_SESSION['item' . $i] . ' (' . $_SESSION['quantity' . $i] . 'шт.) - ' . $_SESSION['price' . $i] * $_SESSION['quantity' . $i] . ' руб. <br>', FILE_APPEND);
    }
    file_put_contents('files/ordersitems.txt', ' Сумма = ' . $sum . ' руб. ' . "\n", FILE_APPEND);
    $login       = $_SESSION['login'];
    $fullname    = htmlspecialchars($_GET['fullname']);
    $phonenumber = htmlspecialchars($_GET['phonenumber']);
    $email       = htmlspecialchars($_GET['email']);
    $address     = htmlspecialchars($_GET['address']);
    $date        = htmlspecialchars($_GET['date']);
    date_default_timezone_set('Etc/GMT-6');
    $orderingdate = date("d.m.y H:i");
    file_put_contents('files/orderslogins.txt', $login . "\n", FILE_APPEND);
    file_put_contents('files/ordersfullnames.txt', $fullname . "\n", FILE_APPEND);
    file_put_contents('files/ordersphonenumbers.txt', $phonenumber . "\n", FILE_APPEND);
    file_put_contents('files/ordersemails.txt', $email . "\n", FILE_APPEND);
    file_put_contents('files/ordersaddresses.txt', $address . "\n", FILE_APPEND);
    file_put_contents('files/ordersdates.txt', $date . "\n", FILE_APPEND);
    $_SESSION['basketcounter'] = 0;
    echo '<script>location.href="thankyou.php"</script>';
}
?>