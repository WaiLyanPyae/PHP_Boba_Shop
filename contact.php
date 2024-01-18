<?php session_start(); ?>
<!DOCTYPE html>

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

            $name='';
            $email='';
            $postalCode='';
            $phone='';
            $address='';

?>
<?php

if (isset($_SESSION['member']))
{

    $sql = "SELECT * FROM customers WHERE id = ".$_SESSION['member'];
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        
        while($row = mysqli_fetch_assoc($result)) {
            $name=$row['name'];
            $email=$row['email'];
            $postalCode=$row['postalCode'];
            $phone=$row['phone'];
            $address=$row['address'];
        }
    }
}
?>
<html lang="en">
    <head>
        <title>Boba King</title>
        <link rel="shortcut icon" href="./assets/icon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="./assets/icon/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./styles/style.css">

        <script type="text/javascript" src="./scripts/contact.js"> </script>
        <meta charset="utf-8">
    </head>
    <body>   
	    
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
        
            <div class="contact-main">
                <div id="contact-form">
                    <h2 class="ttl" style="top: 5px;">Contact Us Now</h2>
                    <form style="text-align:center;" method="post" action="./php/sendContact.php">

                        <div>
                            <div id="label">Name</div>
                            <input type="text" name="name" class="input-text" id="name" onchange="checkName()" <?php echo 'value="'.$name.'"';                                
                                 if (isset($_SESSION['member']))
                                    {
                                        echo ' onfocus="this.blur();"';
                                    }
                                ?>required>
                        </div>
                        <div>
                            <div id="label">E-mail</div>
                            <input type="email" name="email" class="input-text" id="email" onchange="checkEmail()" <?php echo 'value="'.$email.'"';                                
                                 if (isset($_SESSION['member']))
                                    {
                                        echo ' onfocus="this.blur();"';
                                    }
                                ?>required>
                        </div>

                        <div id="label">Subject</div>
                        <div class="select-style">
                            <select name="subject" id="subject" required>
                                <option value="feedback">Feedback</option>
                                <option value="catering">Catering</option>
                                <option value="others">Others</option>
                            </select>
                        </div>

                        <div id="div-message">Message</div><br>
                        <textarea name="message" class="input-textarea" id="message" rows="4" cols="40" required></textarea><br>

                        <div id="div-submit"><input type="submit" class="submit" value="SUBMIT" id="submit"></div>
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
