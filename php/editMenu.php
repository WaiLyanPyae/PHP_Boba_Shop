                <?php
                $menuId= $_POST["menuID"];

                $descriptionId= "description".$menuId;
                 $priceId= "price".$menuId;
                 $availabilityId= "availability".$menuId;

                 $description= $_POST[$descriptionId];
                 $price= $_POST[$priceId];
                 $availability= $_POST[$availabilityId];
                ?>
                 <?php

                 include 'credentials.php';
                 
                 // Create connection
                 $conn = mysqli_connect($servername, $username, $password, $dbname);
                 // Check connection
                 if (!$conn) {
                     die("Connection failed: " . mysqli_connect_error());
                 }
                 ?>
                 <?php
                 $sql_1 = "UPDATE menu set description='".$description."',price='".$price."',availability='".$availability."' where id =".$menuId;
                 if (!mysqli_query($conn, $sql_1)) 
                 {
                     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                 }

                echo "<script type='text/javascript'>
                window.location.href='../adminMenu.php'; 
                </script>"; 
                ?>