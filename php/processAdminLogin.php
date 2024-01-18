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
$password= sha1($_POST['password']);
$username= $_POST["username"];

$sql = "SELECT * FROM admin WHERE username='".$username."'";

$result = mysqli_query($conn, $sql);


if ($row = mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_assoc($result)) {
    $dbPassword=$row['password'];
    $adminId=$row['id'];
    }
    if($password==$dbPassword)
    {
        $_SESSION['admin'] = $adminId;
        echo "<script type='text/javascript'>
        window.location.href='../adminReports.php'; 
        </script>"; 
    }
    else
    {
        $message = "wrong password fail";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../adminLogin.php'; 
        </script>"; 
    }
}
else
{
    $message = "wrong username";
    echo "<script type='text/javascript'>alert('$message');
    window.location.href='../adminLogin.php'; 
    </script>";

}
?>