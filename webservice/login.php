<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

$username = $_POST['email'];
$password = $_POST['senha'];

$sql = "SELECT * FROM alunos WHERE email='$username' AND senha='$password'";

require_once('dbConnect.php');

$result = mysqli_query($con,$sql);

$check = mysqli_fetch_array($result);

if (isset($check)) 
    echo "success"; 
else 
    echo "failure";

mysqli_close($con);
}
?>