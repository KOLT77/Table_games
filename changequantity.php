<?php
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
    echo header('Location:index.php');
} else {
	$changequantity = '';
    for ($i = 0; $i < $_SESSION['basketcounter']; $i++) {
        if  (!empty($_GET['changequantity' . $i] == '-') && $_SESSION['quantity' . $i] > 1) {
            $_SESSION['quantity' . $i]--;
            break;
        }
		else {
            continue;
        }
        if (!empty($_GET['changequantity' . $i] == '+') {
            $_SESSION['quantity' . $i]++;
            break;
        }
		else {
            continue;
        }
    }
    echo '<script>location.href="', $_SERVER['HTTP_REFERER'], '"</script>';
}
?>
