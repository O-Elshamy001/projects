<?php
$Name=$_REQUEST['name'];
$Email=$_REQUEST['email'];


if(isset($_POST['logbtn']))
{

   $host="localhost";
   $user="root";
   $password="";
   $db="medihealth_form";

    $conn = mysqli_connect($host,$user,$password,$db);

    $insert="insert into visitor values ('$Name','Email')";

    mysqli_query($conn,$insert);
    if($conn){
        echo("<h1 style='color:green;'>  Registred successfily ! </h1> ");
    }
    else{
        echo("<h1 style='color:red;'> Failed! </h1> ");
    }



}

?>