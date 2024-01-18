<?php 
session_start();
?>
<?php
if (!isset($_SESSION['admin']))
{
    echo "<script type='text/javascript'>
    window.location.href='./adminLogin.php'; 
    </script>"; 
}
?>
<?php
if (!isset($_SESSION['enquiriesType']))
{
    $_SESSION['enquiriesType']="";
}
if (isset($_POST['type']))
{
    $_SESSION['enquiriesType']=$_POST['type'];
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
                        <li><a href="adminReports.php"><b>Reports</b></a></li>
                                <li><a href="adminMenu.php"><b>Menu</b></a></li>
                                <li><a href="adminEnquiries.php"><b>Enquiries</b></a></li>
                        </ul>
                    </nav>
                </div>

                <div class="header-box3">
                    <nav class="main-nav">
                        <a id="cart" href="./php/adminLogout.php"><img src="assets/nav/logout-icon.png" width="50px"
                                height="50px" style="margin-top: 4px; margin-left: 50px;"></a>
                    </nav>
                </div>
            </div>
        </section>

        <div class="cart-main">
            <table id="history-table" style="width: 80%;">
                <thead>
                    <tr>
                        <th colspan="3">
                            <h2 class="ttl" style="text-align: left;">Enquiries List</h2>
                        </th>
                        <th></th>
                    </tr>


                    <tr style="margin-bottom: 30px;">
                        <script type="text/javascript" src="scripts/adminReports.js"></script>
                        <th colspan="3">
                            <form action="adminEnquiries.php" method="post">
                                <label style="display: inline-block;">Type : </label>
                                <div class="select-style2"
                                    style="display: inline-block; margin-left: 30px; margin-bottom: 20px;">
                                    <select name="type" id="type" onchange="updateDate('go');">
                                        <option value=""
                                            <?php if ($_SESSION['enquiriesType']==""){echo " selected ";}?>>All</option>
                                        <option value="feedback"
                                            <?php if ($_SESSION['enquiriesType']=="feedback"){echo " selected ";}?>>
                                            feedback</option>
                                        <option value="catering"
                                            <?php if ($_SESSION['enquiriesType']=="catering"){echo " selected ";}?>>
                                            catering</option>
                                        <option value="others"
                                            <?php if ($_SESSION['enquiriesType']=="others"){echo " selected ";}?>>others
                                        </option>
                                    </select>
                                </div>
                                <input type="submit" class="go" value="GO" id="go" style="display:none">
                            </form>
                        </th>
                        <th></th>
                        <th></th>
                        <th></th>

                    </tr>

                    <tr>

                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>

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
                        $sql_1 = "SELECT * FROM feedback WHERE subject LIKE '%".$_SESSION['enquiriesType']."%'";
                        $result = mysqli_query($conn, $sql_1);


                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                     echo'
                                        <tr>
                                        <td>'.$row['name'].'</td>
                                        <td>'.$row['email'].'</td>
                                        <td>'.$row['subject'].'</td>
                                        <td>'.$row['message'].'</td>
                                        </tr>'
                                ;
                            }
                        }
                        ?>

                </tbody>
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