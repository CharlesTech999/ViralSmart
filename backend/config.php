<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

define ('Host', 'localhost');
define ('User', 'root');
define ('Pass', '');
define ('Base', 'viralsmart');
 $conn = @new mysqli (Host,User,Pass,Base);

if ($conn->connect_errno === 1049) {
    if (!isset($_SESSION['alert_banco_mostrado'])) {
        echo "<script>alert('Banco de dados faltando ou ainda não inserido.');</script>";
        $_SESSION['alert_banco_mostrado'] = true;
    }
}

?>