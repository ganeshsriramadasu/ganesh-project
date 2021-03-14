<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="test";

   // $u_name=$_POST['name'];
    $u_password=$_POST['password'];
    $u_email=$_POST['email'];
 // $u_gender=$_POST['gender'];
    // if(empty($u_name)){
    //     echo "Name required";
    // }
    if(empty($u_password)){
        echo "password Required";
    }
   if(empty($u_email)){
        echo "Email Required";
    }
    //  if(empty($u_gender)){
    //      echo "Gender Required";
    //  }
    $con=new mysqli($servername,$username,$password,$dbname);
    if($con->connect_error){
        echo "connection failed";
    }
    $stmt=$con->prepare("insert into form values(?,?,)");
    $stmt->bind_param("ss",$u_password,$u_email);
    $stmt->execute();
echo "success";
}

?>

