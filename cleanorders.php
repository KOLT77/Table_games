<?
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
    file_put_contents('files/orderslogins8Qi2kd3GD38Smq9Fs2.txt', '');
    file_put_contents('files/ordersfullnames8Qi2kd3GD38Smq9Fs2.txt', '');
    file_put_contents('files/ordersphonenumbers8Qi2kd3GD38Smq9Fs2.txt', '');
    file_put_contents('files/ordersemails8Qi2kd3GD38Smq9Fs2.txt', '');
    file_put_contents('files/ordersaddresses8Qi2kd3GD38Smq9Fs2.txt', '');
    file_put_contents('files/ordersdates8Qi2kd3GD38Smq9Fs2.txt', '');
    file_put_contents('files/ordersitems8Qi2kd3GD38Smq9Fs2.txt', '');
    echo '<script>location.href="new_orders.php"</script>';
} else
    header('Location:index.php');
?>