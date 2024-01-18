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

$itemId = $_POST["itemNoId"];
$quantity = 0;
$index = array_search($itemId, $_SESSION['cart']) ;
$check= "-".$index."-";

$_SESSION['cart'][$itemId]= $quantity;

echo $_SESSION['cart'][$itemId];

echo "<script type='text/javascript'>
window.location.href='../cart.php'; 
</script>";

?>
