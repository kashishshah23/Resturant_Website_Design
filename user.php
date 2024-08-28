<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "connection succesful";
} else{
    echo "no connection";
}
 mysqli_select_db($con, 'resturant');

 $name = $_POST['name'];
 //echo $name;
 $mobile = $_POST['mobile'];
 $email = $_POST['email'];
 $description = $_POST['description'];

 $query = " insert into resturant (name, mobile, email, description)
 values ('$name', '$mobile', '$email', '$description')";

 echo "$query";

 mysqli_query($con, $query);
 header('location:index.php');
?>