<?php session_start(); ?>
<?php
    $_SESSION['customer']['firstName']= $_POST["firstName"];
    $_SESSION['customer']['email']= $_POST["email"];
    $_SESSION['customer']['phone']= $_POST["phone"];
    $_SESSION['customer']['address']= $_POST["address"];
    $_SESSION['customer']['zip']= $_POST["zip"];
    
    echo$_SESSION['customer']['firstName'];
    echo$_SESSION['customer']['email'];
    echo$_SESSION['customer']['phone'];
    echo$_SESSION['customer']['address'];
    echo$_SESSION['customer']['zip'];
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
$sql = "SELECT * FROM member WHERE email='".$_SESSION['customer']['email']."' and id<>".$_SESSION['member_ID'];
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result)>0)
{

        $message = "The email has been used by another account";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../user.php'; 
        </script>"; 
}
else
{
    $sql_1 = "UPDATE member set email='".$_SESSION['customer']['email']."' where id =".$_SESSION['member_ID'];
    $sql_2 = "UPDATE customers set email='".$_SESSION['customer']['email']."' where id =".$_SESSION['member'];
    
    if (!mysqli_query($conn, $sql_1)) 
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    if (!mysqli_query($conn, $sql_2)) 
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
$sql_3 = "UPDATE customers set name='".$_SESSION['customer']['firstName']."' where id =".$_SESSION['member'];
$sql_4 = "UPDATE customers set phone='".$_SESSION['customer']['phone']."' where id =".$_SESSION['member'];
$sql_5 = "UPDATE customers set address='".$_SESSION['customer']['address']."' where id =".$_SESSION['member'];
$sql_6 = "UPDATE customers set postalCode='".$_SESSION['customer']['zip']."' where id =".$_SESSION['member'];
$sql_7 = "UPDATE customers set phone='".$_SESSION['customer']['phone']."' where id =".$_SESSION['member'];




if (!mysqli_query($conn, $sql_3)) 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
if (!mysqli_query($conn, $sql_4)) 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
if (!mysqli_query($conn, $sql_5)) 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
if (!mysqli_query($conn, $sql_6)) 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
if (!mysqli_query($conn, $sql_7)) 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

echo "<script type='text/javascript'>
window.location.href='../user.php'; 
</script>"; 
?>