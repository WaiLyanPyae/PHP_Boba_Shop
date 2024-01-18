<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Boba King</title>
        <link rel="shortcut icon" href="./assets/icon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="./assets/icon/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./styles/style.css">
        <meta charset="utf-8">

        <script type="text/javascript" src="./scripts/signup.js"></script>
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
            <div id="landing-contents" style="height: 700px">
            <div class="border">
                    <table id="signup-table" class="table-center2">
                        <form action="./php/addMember.php" method="post">
                            <tr>
                                <th colspan="3"><h1 class="signup-ttl">Sign up</h2></th>
                            </tr>
                            <tr>
                                <td colspan="3"><p style="text-align: left;"><b>Name</b></p><input type="text" name="firstName" class="input-text" id="firstName" placeholder="Ei Ei Phyu" onchange="checkFirstName();" style="width: 100%;" required></td> 
                            </tr>

                            <tr>
                                <td><p style="text-align: left;"><b>Email</b></p><input type="email" name="email" class="input-text" id="email" placeholder="eiei.phyu@gmail.com" onchange="checkEmail();" style="width: 250px;" required></td>
                                <td></td>
                                <td><p style="text-align: left; margin-left: 30px;"><b>Phone No.</b></p><input type="text" name="phone" class="input-text" id="phone" onchange="checkPhone();" style="margin-left: 30px; width: 250px;" required></td>
                            </tr>

                            <tr>
                                <td><p style="text-align: left;"><b>Address</b></p><input type="text" name="address" class="input-text" id="address" placeholder="#13-205 Sims Drive" onchange="checkAddress();" style="width: 250px;" required></td>
                                <td></td>
                                <td><p style="text-align: left; margin-left: 30px;"><b>Postal code</b></p><input type="text" name="zip" class="input-text" id="zip" placeholder="6 digits" onchange="checkZIP();" style="margin-left: 30px; width: 250px;" required></td>
                            </tr>

                            <tr>
                                <td><p style="text-align: left;"><b>Password</b></p><input type="password" name="password" class="input-text" id="password" onfocusout="checkPassword();"  style="width: 250px;" required></td>
                                <td></td>
                                <td>
                                    <p style="text-align: left; margin-left: 30px;"><b>Confirm Password</b></p><input type="password" name="cpassword" class="input-text" id="cpassword" onfocusout="checkPassword();" style="margin-left: 30px; width: 250px;" required> 
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><p  style="text-align: left; margin-left: 30px;" id="message"></p></td>
                            </tr>
                            <tr>
                                <td colspan="3"><input type="submit" class="submit" id="signUp" name="signUp" value="SIGN UP"></td>
                            </tr>  
                            <tr>
                                <td colspan="3"><a href="./login.php" class="back-button">LOG IN</a></td>
                            </tr>                            
                        </form> 
                    </table> 
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
