<?php
    session_start();
        unset($_SESSION['cart']);
        unset($_SESSION['quantity']);
        unset($_SESSION['customer']);
        unset($_SESSION['member']);
        unset($_SESSION['member_ID']);
        
        echo "<script type='text/javascript'>
        window.location.href='../index.php'; 
        </script>"; 
?>