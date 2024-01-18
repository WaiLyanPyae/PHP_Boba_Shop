<?php session_start(); ?>

<?php
                    
    if (!isset($_SESSION['customer']))
    {
    $_SESSION['customer'] = array('firstName'=>'','email'=>'','phone'=>'','address'=>'','zip'=>'','notes'=>'');
    }
?>

<?php
if (!isset($_SESSION['cart']))
{
$_SESSION['cart'] = array();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Boba King</title>
    <link rel="shortcut icon" href="./assets/icon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./assets/icon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./styles/style.css">
    <meta charset="utf-8">
    <style>
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: url('OpenSans-Regular.ttf') format('truetype');
        }
    </style>
    <script type="text/javascript" src="scripts/cart.js"></script>
</head>

<body>
    <div class="container">

        <section>
            <div class="header">

                <div class="header-box1"><a href="index.php"><img src="assets/nav/logo.png" alt="logo" class="logo"></a>
                </div>
                <div class="header-box2">
                    <nav class="main-nav">
                        <ul>
                            <li><a href="index.php"><b>HOME</b></a></li>
                            <li><a href="menu.php"><b>MENU</b></a></li>
                            <li><a href="contact.php"><b>CONTACT US</b></a></li>
                        </ul>
                    </nav>
                </div>

                <div class="header-box3">
                    <nav class="main-nav">
                        <a id="cart" href="user.php"><img src="assets/nav/user.png" width="50px" height="50px"></a>
                        <a id="cart" href="cart.php"><img src="assets/nav/cart.png" width="50px" height="50px"></a>
                    </nav>
                </div>
            </div>
        </section>

        <div class="cart-main">
            <div id="cart-table">

                <table id="cart-details">
                    <thead>
                        <tr>
                            <th colspan="4">
                                <h2 class="ttl">Shopping Cart</h2>
                            </th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th></th>
                            <th>Item</th>
                            <th>Item Price</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                    include './php/credentials.php';
                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    ?>
                        <?php
                            $allPrice=0;
                            for ($i=0; $i<count($_SESSION['cart']); $i++)
                            {
                                if ($_SESSION['cart'][array_keys($_SESSION['cart'])[$i]]>0)
                                {   
                /*                  $rowId ='ItemWithId' .$_SESSION['cart'][$i][0];
                                    $quantityId = 'quantity'.$rowId;
                                    echo "<tr id='".$rowId."'>";
                                    echo "<td>" .$_SESSION['cart'][$i][0]. "</td>";
                                    echo '<td><input type="number" name="'.$quantityId.'" value='.$_SESSION['cart'][$i][1].' id="'.$quantityId.'" onchange="';
                                    echo "checkQuantity('".$quantityId."','".$rowId."')";
                                    echo'" style="width:50px; margin-bottom: 30px; margin-top: 30px;"></td>';
                                    echo "</tr>"; */
                                    $sql = "SELECT * FROM menu where id=".array_keys($_SESSION['cart'])[$i];
                                    $result = mysqli_query($conn, $sql);
                                    $item=array();
                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) 
                                        {
                                        
                                            $rowId ='ItemWithId' .array_keys($_SESSION['cart'])[$i];
                                            $quantityId = 'quantity'.$rowId;
                                            $priceId ='price'.$rowId;
                                            $totalPriceId ='totalPrice'.$rowId;
                                            $itemNoId = 'itemNo'.$rowId;
                                            $deleteId ='delete'.$rowId;
                                            $saveId ='save'.$rowId;

                                            echo'<form action="./php/saveChange.php" method="post">';

                                            echo "<tr id='".$rowId."'>";


                                            echo "<td class='td-center'><img src=".$row['imgURL']."><input type='number' class='input-number' value=".array_keys($_SESSION['cart'])[$i]." id='itemNoId' name='itemNoId'";
                                            echo 'style="display:none"';
                                            echo" ></td>";

                                            echo "<td class='td-left'>" .$row['name']. "</td>";

                                            echo "<td id='".$priceId."'>" .$row['price']. "</td>";  

                                            echo '<td><input type="number" class="input-number" style="background-color: #F5F4F0;" name="quantityId" value='.$_SESSION['cart'][array_keys($_SESSION['cart'])[$i]].' id="quantityId" onchange="';
                                            echo "updateCart('".$rowId."','".$priceId."','".$totalPriceId."','".$saveId."')";
                                            echo'" style="width:50px; margin-bottom: 30px; margin-top: 30px;">';
                                            echo'<input type="submit" class="update" value="UPDATE" id="'.$saveId.'" style="display:none">';
                                            echo '</td>';

                                            echo'</form>';

                                            $totalPrice = $row['price']*$_SESSION['cart'][array_keys($_SESSION['cart'])[$i]];

                                            echo "<td class='td-center' id='".$totalPriceId."'>".$totalPrice."</td>";
                                            echo'<td class="td-center"><form action="./php/deleteCartEntry.php" method="post">';

                                            echo "<input type='number' value=".array_keys($_SESSION['cart'])[$i]." id='itemNoId' name='itemNoId'";
                                            echo 'style="display:none"';
                                            echo" >";

                                            echo'<input type="submit" class="delete" value="X" id="'.$deleteId.'">
                                            </form></td>';
                                            
                                            echo "</tr>";
                                            $allPrice = $allPrice +$totalPrice;
                                            

                                        }
                                    }


                                }
                                else
                                {
                                    $_SESSION['cart'][array_keys($_SESSION['cart'])[$i]]=0;
                                }
            

                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <?php
                        if ($allPrice==0)
                        {
                            $message = "Cart is empty";
                            echo "<script type='text/javascript'>alert('$message');
                            window.location.href='./menu.php'; 
                            </script>";
                             
                        }
                        ?>
            <?php
                        $_SESSION['allPrice']=$allPrice;
                        ?>
            <div id="order-summary">
                <table id="summary-details">
                    <thead>
                        <th style="border-bottom: 1px solid #ddd;">
                            <h2 class="ttl" style="text-align: left !important; margin-top: 111px;">Order summary</h2>
                        </th>
                        <th style="border-bottom: 1px solid #ddd;"></th>
                        <th style="border-bottom: 1px solid #ddd;"></th>
                        <th style="border-bottom: 1px solid #ddd;"></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: left; margin-right: 190px;">Subtotal</td>
                            <td></td>
                            <td></td>
                            <td style="text-align: left;"><?php echo $allPrice ?></td>
                        </tr>
                        <tr>
                            <td style="text-align: left; margin-right: 190px;">Delivery</td>
                            <td></td>
                            <td></td>
                            <td style="text-align: left;">4</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; margin-right: 190px;">GST (7%)</td>
                            <td></td>
                            <td></td>
                            <td style="text-align: left;"><?php $gstPrice = $allPrice * 0.07; echo $gstPrice; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="text-align: left; margin-right: 190px; margin-top: 50px;">
                                <h3>Total</h3>
                            </td>
                            <td></td>
                            <td></td>
                            <td style="text-align: left; margin-top: 50px;">
                                <h3><?php echo $allPrice + $gstPrice + 4; ?></h3>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <form action="checkout.php" method="post">
                    <input type="hidden" name="allPrice" value="<?php echo $allPrice ?>">
                    <input type="submit" class="submit2" value="PROCEED TO CHECKOUT">
                </form>
                <form action="menu.php" method="post">
                    <input type="submit" class="back-menu" value="BACK TO MENU" style="margin-top: 10px;">
                </form>
            </div>
        </div>

        <section>
            <div class="footer">
                <div id="icons">
                    <a href="#"><img src="assets/footer/facebook.png"></a>
                    <a href="#"><img src="assets/footer/twitter.png"></a>
                    <a href="#"><img src="assets/footer/instagram.png"></a>
                    <a href="#"><img src="assets/footer/snapchat.png"></a>
                </div>
                <div id="copyright">
                    <i>&copy; Boba King | All Rights Reserved</i>
                </div>
            </div>
        </section>

    </div>
</body>

</html>