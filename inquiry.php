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
$mono="";

if(isset($_POST['submit'])){

  if(($_POST['email']!=NULL) && ($_POST['name']!=NULL) && ($_POST['subject']!=NULL) &&($_POST['msg']) && ($_POST['mobile']!=NULL))

{
   
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mono= $_POST['mobile'];
     $email=$_POST['email'];
    $msg= $_POST['msg'];

     $to="avsshubh@gmail.com";
     $mailheader = "From: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    //$mailheader = "From:noreplay@gmail.com";
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    //$from="From:noreplay@gmail.com";
    //$subject ="Mail From Website";
    $txt= "Name =". $name . "<br> Subject = " .$subject . "<br> Mobile No = ".$mono . "<br> Email = ".$email . "<br> Message = ".$msg;
    //$headers="From:noreplay@gmail.com";
     if(mail($to,$subject,$txt,$mailheader))
          {
            
               $sql1 = "insert into  inquiry (Name,Subject,MobileNo,Email,Message,Send) values 
               ('$name' ,'$subject' ,'$mono' , '$email' ,'$msg', 1)";
               $res=mysqli_query($conn,$sql1);

               echo "Mail Send Successfully";
             

          }
          else {
              $sql1 = "insert into  inquiry (Name,Subject,MobileNo,Email,Message,Send) values 
               ('$name' ,'$subject' ,'$mono' , '$email' ,'$msg', 0)";
               mysqli_query($conn,$sql1);
               echo "Failed to Send Mail";
          }
        }
      }
?>