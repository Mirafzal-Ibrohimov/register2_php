<?
include 'bd.php';

if($_POST){
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $insert = mysqli_query($bd, "INSERT INTO `registersecond`(`name`, `surname`, `email`, `password`) VALUES ('$name','$surname','$email','$password')");
    header("location:index.php");
}
?>