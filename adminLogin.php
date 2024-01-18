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
                <div class="header-box2"></div>

                <div class="header-box3">
                    <nav class="main-nav">
                        <a id="cart" href="index.php"><img src="assets/nav/home-icon.png" width="50px" height="50px"
                                style="margin-top: 4px; margin-left: 50px;"></a>
                    </nav>
                </div>
            </div>
        </section>
        <div id="landing-contents">
            <table class="table-center">
                <tr>
                    <th>
                        <h2 class="ttl" style="padding-top: 70px;">Admin Login</h2>
                    </th>
                </tr>
                <form action="./php/processAdminLogin.php" method="post">
                    <tr>
                        <td>
                            <p style="margin-top: 30px;"><b>Username</b></p>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" class="input-text" name="username" id="username"></td>
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
                </form>
            </table>
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