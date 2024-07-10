<?php

$connection = mysqli_connect("localhost","root","","book_db");

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];
    

    $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values
    ('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";

    mysqli_query($connection,$request);
    header('location:A:\internship\book.php');
   }
   else{
    echo 'something went wrong try again';
   }
?>
<?php
$servername = "localhost";
$username="root";
$password = "";
$db = "book_db";
try{
    $conn = new PDO("mysql:host=$servername;dbname=$db",$username,$password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected";
}
catch(PDOException $e){
    echo "failed" .$e->getMessage();
}

?>