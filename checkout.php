<?php session_start(); ?>
<?php
                    
                    if (!isset($_SESSION['customer']))
                    {
                        $_SESSION['customer'] = array('firstName'=>'','email'=>'','phone'=>'','address'=>'','zip'=>'','notes'=>'');

                    }
?>  

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
if (isset($_SESSION['member']))
{

    $sql = "SELECT * FROM customers WHERE id = ".$_SESSION['member'];

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        
        while($row = mysqli_fetch_assoc($result)) {
            $_SESSION['customer']['firstName']=$row['name'];
            $_SESSION['customer']['email']=$row['email'];
            $_SESSION['customer']['zip']=$row['postalCode'];
            $_SESSION['customer']['phone']=$row['phone'];
            $_SESSION['customer']['address']=$row['address'];
        }
    }
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

        <script type="text/javascript" src="./scripts/checkout.js"> </script>
    </head>

    <body>   
	    <div class="container">

            <section>
            <div class="header">
                    
            <div class="header-box1"><a href="index.php"><img src="assets/nav/logo.png" alt="logo" class="logo"></a></div>
                       
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
        
            <div class="checkout-main">
                <div id="checkout-form">

                
                    <table id="checkout-details">
                        <thead>
                        <tr>
                            <th style="border-bottom: 1px solid #ddd;"><h2 style="text-align: left;">Checkout</h2></th>
                            <th style="border-bottom: 1px solid #ddd;"></th>
                            <th style="border-bottom: 1px solid #ddd;"></th>
                            <th style="border-bottom: 1px solid #ddd;"></th>
                            <th style="border-bottom: 1px solid #ddd;"></th>
                            <th style="border-bottom: 1px solid #ddd;"></th>
    

                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            $allPrice=$_SESSION['allPrice'];
                            echo
                            '<form action="./php/submitOrder.php" method="post">

                            <tr>
                                <td colspan="3"><p><b>name</b></p><input type="text" name="firstName" value="'.$_SESSION['customer']['firstName'].'" class="input-text" id="firstName" ';
                                if (isset($_SESSION['member']))
                                {
                                    echo 'onfocus="this.blur();"';
                                }
                                echo'placeholder="John Doe" style="width: 100%;" onchange="checkFirstName()" required></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><p><b>email</b></p><input type="email" name="email" value="'.$_SESSION['customer']['email'].'" class="input-text" id="email" ';
                                if (isset($_SESSION['member']))
                                {
                                    echo 'onfocus="this.blur();"';
                                }
                                echo'placeholder="john.doe@gmail.com" onchange="checkEmail()" required></td>
                                <td></td>
                                <td><p><b>phone no.</b></p><input type="text" name="phone"  value="'.$_SESSION['customer']['phone'].'"class="input-text" id="phone"';
                                if (isset($_SESSION['member']))
                                {
                                    echo 'onfocus="this.blur();"';
                                }
                                echo'onchange="checkPhone()"  required></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><p><b>address</b></p><input type="text" name="address" value="'.$_SESSION['customer']['address'].'" class="input-text" id="address" placeholder="#B2-54 24 Nanyang Avenue" onchange="checkAddress()" required></td>
                                <td></td>
                                <td><p><b>postal code</b></p><input type="text" name="zip"  value="'.$_SESSION['customer']['zip'].'"class="input-text" id="zip" placeholder="6 digits" onchange="checkZIP()" required></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="3"><p><b>notes</b></p><textarea name="notes"  class="input-textarea" id="notes" rows="4" cols="40" style="width: 100%;" placeholder="no wasabi, more soysauce, no. of chopsticks">'.$_SESSION['customer']['notes'].'</textarea></td> 
                                <td></td>
                                <td></td> 
                            </tr>
                            <tr>
                                <td><small>* pay by cash during food delivery.</small></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>  
                            <tr>
                                <td><a href="./cart.php" class="back-button">BACK TO CART</a></td>
                                <td></td>
                                <td><input type="submit" class="submit" value="SUBMIT ORDER" style="width: 100%;"></td>
                                <td></td>
                                <td></td>
                            </tr>  
                            </form>' ;
                            ?>                                                   
                        </tbody>
                    </table>
                </div>

                <div id="order-summary2">
                    <table id="summary-details">
                        <thead>
                            <th style="border-bottom: 1px solid #ddd;"><h2 style="text-align: left; margin-top: 65px;">Order Summary</h2></th>
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
                                <td style="text-align: left; margin-right: 190px; margin-top: 50px;"><h3>Total</h3></td>
                                <td></td>
                                <td></td>
                                <td style="text-align: left; margin-top: 50px;"><h3><?php echo $allPrice + $gstPrice + 4; ?></h3></td>
                            </tr>
                        </tbody>
                    </table>
                    <?php
                        if ($allPrice==0)
                        {
                            echo "<script type='text/javascript'>
                            window.location.href='./cart.php'; 
                            </script>";
                             
                        }
                        ?>
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


