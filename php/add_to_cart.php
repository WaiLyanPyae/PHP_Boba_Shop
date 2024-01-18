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

$itemId = $_POST["itemId"];
$quantity = $_POST["quantity"];

if (array_key_exists($itemId,$_SESSION['cart']))
    {
    $quantityTotal= $quantity + $_SESSION['cart'][$itemId];
    $_SESSION['cart'][$itemId]= $quantityTotal;
    }
else
{
    $_SESSION['cart'][$itemId]= $quantity;
}
echo $_SESSION['cart'][$itemId];
$message = " item(s) has been added!";
 echo "<script type='text/javascript'>alert('$message');
window.location.href='../menu.php'; 
</script>";
?>