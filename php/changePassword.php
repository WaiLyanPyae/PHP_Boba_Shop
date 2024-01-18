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
$oldpassword= sha1($_POST['oldpassword']);
$newpassword= sha1($_POST['password']);

$sql = "SELECT * FROM member WHERE id=".$_SESSION['member_ID'];

$result = mysqli_query($conn, $sql);


if ($row = mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_assoc($result)) {
    $dbPassword=$row['password'];
    }

    if($oldpassword==$dbPassword)
    {
        $sql_1 = "UPDATE member set password='".$newpassword."' where id =".$_SESSION['member_ID'];
        $result = mysqli_query($conn, $sql);
        $message = "password change success";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../user.php'; 
        </script>"; 
    }
    else
    {
        $message = "wrong password fail";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../user.php'; 
        </script>"; 
    } 
}
?>