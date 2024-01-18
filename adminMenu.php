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
if (!isset($_SESSION['menuType']))
{
    $_SESSION['menuType']="";
}
if (isset($_POST['type']))
{
    $_SESSION['menuType']=$_POST['type'];
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
    </head>

    <body>   
	    <div class="container">

            <section>
            <div class="header">
                    
            <div class="header-box1"><a href="index.php"><img src="assets/nav/logo.png" alt="logo" class="logo"></a></div>
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
                            <a id="cart" href="./php/adminLogout.php"><img src="assets/nav/logout-icon.png" width="50px" height="50px" style="margin-top: 4px; margin-left: 50px;"></a>
                        </nav>
                    </div>  
            </div>
            </section>
        
            <div class="cart-main">            
                
                <table id="history-table" style="width: 80%;">
                        <thead>
                            <tr>
                                <th colspan="4"><h2 class="ttl" style="text-align: left;">Menu Items</h2></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr style="margin-bottom: 30px;"> 
                            
                                <script type="text/javascript" src="scripts/adminMenu.js"></script>
                                    <th colspan="3">
                                    <form action="adminMenu.php" method="post">
                                        <label style="display: inline-block; margin-right: 30px; margin-bottom: 20px;">Type : </label>
                                        <div class="select-style2" style="display: inline-block;">
                                            <select name="type" id="type" onchange="updateDate('go');" >
                                            <option value=""<?php if ($_SESSION['menuType']==""){echo " selected ";}?>>All</option>
                                            <option value="Milk Teas"<?php if ($_SESSION['menuType']=="Milk Teas"){echo " selected ";}?>>Milk Teas</option>
                                            <option value="Refreshers"<?php if ($_SESSION['menuType']=="Refreshers"){echo " selected ";}?>>Refreshers</option>
                                            <option value="Smoothie"<?php if ($_SESSION['menuType']=="Smoothie"){echo " selected ";}?>>Smoothie</option>
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
                                <th></th>
                                <th> Item Name</th>
                                <th>Price</th>
                                <th>Details</th>
                                <th>Availability</th>
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
                        $sql_1 = "SELECT * FROM menu WHERE type LIKE '%".$_SESSION['menuType']."%'";
                        $result = mysqli_query($conn, $sql_1);


                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {

                                
                                
                                     echo'
                                        <tr>
                                        <td><img src="'.$row['imgURL'].'"></td>
                                        <td>'.$row['name'].'</td>
                                        <td><input class="input-number" type="number" align="left" id="price'.$row['id'].'" name="price'.$row['id'].'" style=" text-align:left; background-color: #f4f5f0; margin-left: 0px;" step=0.1 form="form'.$row['id'].'"  value='.$row['price'].' onchange="checkPrice('.$row['id'].');"></td>
                                        <td style="padding-top: 20px;"><textarea class="input-textarea" id="description'.$row['id'].'" name="description'.$row['id'].'" style=" text-align:left;" form="form'.$row['id'].'" onchange="updateDate(\'go'.$row['id'].'\');">'.$row['description'].'</textarea></td>

                                        
                                        <td>
                                        <div class="select-style2">
                                        <select name="availability'.$row['id'].'" id="availability'.$row['id'].'" onchange="updateDate(\'go'.$row['id'].'\');"  form="form'.$row['id'].'" required >
                                        <option value="1"'; if ($row['availability']==1){echo " selected ";}echo'>Available</option>
                                        <option value="0"'; if ($row['availability']==0){echo " selected ";}echo'>Unavailable</option>
                                        </select>
                                        </div>
                                        </td>
                                        
                                        <td>
                                        <form  name="form'.$row['id'].'" id="form'.$row['id'].'" action="./php/editMenu.php" method="post">
                                        <input type="number" id="menuID" name="menuID" style="display: none" value='.$row['id'].'>
                                        <input type="submit" class="update" value="UPDATE" id="go'.$row['id'].'" style="display:none">
                                        </form>
                                        </td>

                                        </tr>'
                                ;
            
                            }
                        }
                        ?>

                        </tbody>
                    </table>
            </div>
            <script type="text/javascript" src="adminMenu.js"></script>
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


