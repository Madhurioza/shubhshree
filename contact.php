<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "shubhshree";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email="";
$name="";
$subject="";
$msg="";
if(isset($_POST['submit'])){

  if(($_POST['email']!=NULL) && ($_POST['name']!=NULL) && ($_POST['subject']!=NULL) &&($_POST['message']))

{
    $email=$_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $msg= $_POST['message'];
     $to="avsshubh@gmail.com";
     $mailheader = "From: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    //$mailheader = "From:noreplay@gmail.com";
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    //$from="From:noreplay@gmail.com";
    //$subject ="Mail From Website";
    $txt= "Name =". $name . "<br> Email = " .$email . "<br> Subject = ".$subject . "<br> Message = ".$msg;
    //$headers="From:noreplay@gmail.com";
     if(mail($to,$subject,$txt,$mailheader))
          {
            
               $sql1 = "insert into  contactus (Email, Name, Subject, Message, send) values ('$email' ,'$name' ,'$subject' , '$msg' , 1)";
               $res=mysqli_query($conn,$sql1);

               echo "Mail Send Successfully";
             

          }
          else {
             $sql = "insert into  contactus (Email,Name,Subject,Message,send) values ('$email' ,'$name' ,'$subject' , '$msg' , 0)";
               mysqli_query($conn,$sql);
               echo "Failed to Send Mail";
          }
        }
      }
?>