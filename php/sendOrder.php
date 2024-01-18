<?php
session_start();

include 'credentials.php';
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name=$_SESSION['customer']['firstName'];
$address= $_SESSION['customer']['address'];
$postalCode=$_SESSION['customer']['zip'];
$email=$_SESSION['customer']['email'];
$phone= $_SESSION['customer']['phone'];
$note=$_SESSION['customer']['notes'];

if (isset($_SESSION['member']))
{

    $customerId=$_SESSION['member'];
}
else
{
$sql_1 = "INSERT INTO `customers` (`name`,`address`,`postalCode`,`email`,`phone`) VALUES ('".$name."','".$address."','".$postalCode."','".$email."','".$phone."')";
$result =mysqli_query($conn, $sql_1);
if ($result) { 
    
    $sql_2 = "SELECT ID AS LastID FROM `customers` WHERE ID = @@Identity";
    $result = mysqli_query($conn, $sql_2);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) 
        {
            $customerId=$row['LastID'];
        }
    }
} 
else 
{
    echo "Error: " . $sql_1 . "<br>" . mysqli_error($conn);
}

}

    $date = date("Y-m-d");
    
    $sql_3 = "INSERT INTO `transaction` (`customer_ID`,`date`,`ship_address`,`ship_postalCode`,`note`,`price`) VALUES ('".$customerId."','".$date."','".$address."','".$postalCode."','".$note."', ".$_SESSION['allPrice'].")";

    $result =mysqli_query($conn, $sql_3);

    if ($result) { 
        
        $sql_4 = "SELECT ID AS LastID FROM `transaction` WHERE ID = @@Identity";
        $result = mysqli_query($conn, $sql_4);
    
        if (mysqli_num_rows($result) > 0) 
        {
            while($row = mysqli_fetch_assoc($result)) 
            {
            
            $transactionId=$row['LastID'];
            echo $transactionId;
            }
        }

    }
else 
{
    echo "Error: " . $sql_3 . "<br>" . mysqli_error($conn);
}
    
    $sql_5 ="INSERT INTO `orders` (`transaction_ID`,`menu_ID`,`quantity`) VALUES";
    for ($i=0; $i<count($_SESSION['cart']); $i++)
    {
    if ($_SESSION['cart'][array_keys($_SESSION['cart'])[$i]]>0)
    {
    $sql_5=$sql_5."(".$transactionId.",".array_keys($_SESSION['cart'])[$i].",'".$_SESSION['cart'][array_keys($_SESSION['cart'])[$i]]."'),";
    }    
    }
    $sql_5 = substr($sql_5, 0, -1);
    if(mysqli_query($conn, $sql_5))
    {
        $_SESSION['paid']= True;
        $message = "Order has been sent!";
        echo "<script type='text/javascript'>alert('$message');";
        echo "window.location.href='../summary.php';";
        echo"</script>";
    }
    else 
    {
        echo "Error: " . $sql_5 . "<br>" . mysqli_error($conn);
    }
mysqli_close($conn);

?>