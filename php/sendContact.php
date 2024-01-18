<?php
include 'credentials.php';
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message =$_POST["message"];

$sql_1 = "INSERT INTO `feedback` (`name`,`email`,`subject`,`message`) VALUES ('".$name."','".$email."','".$subject."','".$message."')";
$result =mysqli_query($conn, $sql_1);
if ($result) { 
    $message = "Feedback has been received!";
    echo "<script type='text/javascript'>alert('$message');";
    echo "window.location.href='../contact.php';";
    echo"</script>";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>