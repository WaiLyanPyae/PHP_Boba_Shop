<?php
session_start()
?>
<?php
include 'credentials.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
die("Connection failed: " . mysqli_connect_error());
}
?>

<?php

$firstName= $_POST["firstName"];
$email= strtolower($_POST["email"]);
$phone= $_POST["phone"];
$address= $_POST["address"];
$postalCode= $_POST["zip"];

$password = sha1($_POST['password']);
$name = $firstName;

echo$firstName;
echo$email;
echo$phone;
echo$address;
echo$postalCode;
echo $password;

$sql = "SELECT * FROM member WHERE email='".$email."'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result)>0)
{

        $message = "your email has been registered";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../signup.php'; 
        </script>"; 
}

else
{
    $sql_1 = "INSERT INTO `customers` (`name`,`address`,`postalCode`,`email`,`phone`) VALUES ('".$name."','".$address."','".$postalCode."','".$email."','".$phone."')";
    $result =mysqli_query($conn, $sql_1);
    echo$sql_1;
    if ($result) { 
    
        $sql_2 = "SELECT ID AS LastID FROM `customers` WHERE ID = @@Identity";
        $result = mysqli_query($conn, $sql_2);
        echo$sql_2;
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) 
            {
                $customerId=$row['LastID'];
            }
            $sql_3 ="INSERT INTO `member` (`customer_ID`,`email`,`password`) VALUES (".$customerId.",'".$email."','".$password."')";
            $result =mysqli_query($conn, $sql_3);
            $_SESSION['member'] = $customerId;

            if ($result) { 
    
                $sql_4 = "SELECT ID AS LastID FROM `customers` WHERE ID = @@Identity";
                $result = mysqli_query($conn, $sql_4);
                echo$sql_4;
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) 
                    {
                        $_SESSION['member_ID'] =$row['LastID'];
                    }
                    echo "<script type='text/javascript'>
                    window.location.href='../user.php'; 
                    </script>"; 
        
                }
            } 


        }
    } 
    else 
    {
        echo "Error: " . $sql_1 . "<br>" . mysqli_error($conn);
    }

}
?>
