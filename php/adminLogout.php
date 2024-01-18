<?php
    session_start();
        unset($_SESSION['admin']);
        unset($_POST["transactionID"]);
        unset($_SESSION['filterDate']);
        unset($_SESSION['menuType']);

        echo "<script type='text/javascript'>
        window.location.href='../adminLogin.php'; 
        </script>"; 
?>