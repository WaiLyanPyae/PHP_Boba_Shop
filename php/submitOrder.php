<?php
session_start();
if (!isset($_SESSION['cart']))
    {
        echo 
        "<script type='text/javascript'>
        window.location.href='../menu.php'; 
        </script>";
    }
    ?>
<?php
if (!isset($_SESSION['cart']))
    {
        echo 
        "<script type='text/javascript'>
        window.location.href='../menu.php'; 
        </script>";
    }
?>

<?php
    
    if (!isset($_SESSION['customer']))
    {
        echo 
        "<script type='text/javascript'>
        window.location.href='../checkout.php'; 
        </script>";

    }
?>  

<?php
    $_SESSION['customer']['firstName']= $_POST["firstName"];
    $_SESSION['customer']['email']= $_POST["email"];
    $_SESSION['customer']['phone']= $_POST["phone"];
    $_SESSION['customer']['address']= $_POST["address"];
    $_SESSION['customer']['zip']= $_POST["zip"];
    $_SESSION['customer']['notes']= $_POST["notes"];

    
    echo$_SESSION['customer']['firstName'];
    echo$_SESSION['customer']['email'];
    echo$_SESSION['customer']['phone'];
    echo$_SESSION['customer']['address'];
    echo$_SESSION['customer']['zip'];
    echo$_SESSION['customer']['notes'];

echo "<script type='text/javascript'>
window.location.href='../confirmation.php'; 
</script>"; 


?>