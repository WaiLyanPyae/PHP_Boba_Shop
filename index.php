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

        <div id="home-main">
            <div id="slideshow-container">
                <div class="carousel-wrapper">
                    <span id="item-1"></span>
                    <span id="item-2"></span>
                    <span id="item-3"></span>
                    <div class="carousel-item item-1">
                        <a class="arrow arrow-prev" href="#item-3"></a>
                        <a href="./menu.php#sets"><button id="link-button"></button></a>
                        <a class="arrow arrow-next" href="#item-2"></a>
                    </div>

                    <div class="carousel-item item-2">
                        <a class="arrow arrow-prev" href="#item-1"></a>
                        <a href="./menu.php#sets"><button id="link-button"></button></a>
                        <a class="arrow arrow-next" href="#item-3"></a>
                    </div>

                    <div class="carousel-item item-3">
                        <a class="arrow arrow-prev" href="#item-2"></a>
                        <a href="./menu.php#sets"><button id="link-button"></button></a>
                        <a class="arrow arrow-next" href="#item-1"></a>
                    </div>
                </div>
            </div>

            <div id="services">
                <h1>Our Services</h1>
                <div class="service-container">
                    <div class="services-card">
                        <img src="./assets/home/food-delivery.png">
                        <br>
                        <h3>Super Fast Delivery</h3><br>
                        Faster than your crush reply.
                    </div>
                    <div class="services-card">
                        <img src="./assets/home/boba.png">
                        <br>
                        <h3>Boba Empire</h3><br>
                        Imported ingredients from Taichung City, 428 Taiwan
                    </div>
                    <div class="services-card">
                        <img src="./assets/home/care.png">
                        <br>
                        <h3>Customer Care</h3><br>
                        Your taste is Our <strong>First Priority</strong>
                    </div>
                </div>
            </div>

            <div id="index-review">
                <h3><i>"10/10 would recommend" - Gordon Ramsay</i></h3>
                <a href="./menu.php" class="submit" style="margin-top: 20px; margin-bottom: 30px;">BUY NOW</a>
            </div>

            <div id="index-roots">
                <div class="col">
                    <h1>Brand Story</h2>
                        <p>In 2017, Empire Eagle Food transforms for her 4th time.We redesigned
                            our Corporate Identity, and redefined our enterprise mission.
                            The hieroglyphic writing of our name “Empire” is divided into two parts: First upper part
                            resembles armor helmet, which represents boba toppings in a cup. While Lower part resembles
                            crown, which represents to the king/leader of a supply-chain. We encourage ourselves to be a
                            leader of bubble tea industry. In the ever changing market, we can stand upright and
                            proudly.
                            May we like an eagle, flutter our wing in the sky; soar high and bring our faith and
                            products to
                            the worldwide.</p>
                </div>
                <div class="col"><img src="./assets/home/boba.png"></div>
            </div>

            <div id="index-dev">
                <div class="col"><img src="./assets/home/development.jpg"></div>
                <div class="col">
                    <h1>Development</h2>
                        <p>Empire Eagle Food Co., Ltd. is a professional manufacturer/ supplier in the bubble tea and
                            bakery industry since 2002, an excellent provider of upstream materials to the bubble tea
                            markets. We own a huge contracted tea plantation in Nantou, in order to not only develop a
                            good tea industry in Taiwan but also to promote pure Taiwan tea worldwide so that we are
                            able to fulfill our customers’ needs in all aspects.. Headquartered in Taichung, the firm
                            holds its own factory to produce flavoring powders, bakery premix, non-dairy creamer,
                            topping creamer, Japanese Roasted sugar and also specializes in R&D.</p>
                </div>
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