<?php
session_start();
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
$password= sha1($_POST['password']);
$email= strtolower($_POST["email"]);

$sql = "SELECT * FROM member WHERE email='".$email."'";

$result = mysqli_query($conn, $sql);


if ($row = mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_assoc($result)) {
    $dbPassword=$row['password'];
    $customerId=$row['customer_ID'];
    $memberId=$row['id'];
    }

    if($password==$dbPassword)
    {
        $_SESSION['member'] = $customerId;
        $_SESSION['member_ID'] = $memberId;
        echo "<script type='text/javascript'>
        window.location.href='../user.php'; 
        </script>"; 
    }
    else
    {
        $message = "wrong password fail";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../login.php'; 
        </script>"; 
    }
}
else
{
    $message = "wrong email";
    echo "<script type='text/javascript'>alert('$message');
    window.location.href='../login.php'; 
    </script>";
}
?>