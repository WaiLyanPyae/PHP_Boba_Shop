<!DOCTYPE html>
<html lang="en">

<head>
    <title>Boba King</title>
    <link rel="shortcut icon" href="./assets/icon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./assets/icon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./styles/style.css">
    <meta charset="utf-8">

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
        <div id="landing-contents">
            <div class="border">
                <table class="table-center">
                    <tr>
                        <th>
                            <h1 class="login-ttl">Login</h2>
                        </th>
                    </tr>
                    <form action="./php/processLogin.php" method="post">
                        <tr>
                            <td>
                                <p style="margin-top: 30px;"><b>Email</b></p>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="email" class="input-text" name="email" id="email"></td>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Password</b></p>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="password" class="input-text" name="password" id="password"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" class="submit" value="LOG IN"
                                    style="margin-top: 50px; text-align: center;"><br></td>
                        </tr>
                        <tr>
                            <td><a href="./signup.php" class="back-button" style="margin-top: 15px; width: 220px;">SIGN
                                    UP</a></td>
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