<?php
include("conn.php");
?>

<head>
   <title>Fertilizer Selling System</title>
    <script src="dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
  
</head>
<body>

</body>

<?php

    session_start();
   // echo $_SESSION['id'];

    $odt=$_POST["date"];
    $fname=addslashes($_POST["fname"]);
    $mo=$_POST["no"];
    $add=addslashes($_POST["add"]);
    $email=$_POST["email"];
    $city=$_POST["city"];
    $pc=$_POST["pc"];
    $proname=$_POST["pname"];
    $probrand=$_POST["bname"];
    $proqty=$_POST["pqty"];
    $proprice=$_POST["pprice"];
    $tot=$_POST["tot"];
    $a=$_COOKIE['cookqty'];

  if ($a<$proqty || $a==0) 
  {
    echo '<script>
      swal({
      title: ":(",
      text: " Quantity is Not available",
      type: "warning",
      showCancelButton: false,
      confirmButtonClass: "btn-danger",
      closeOnConfirm: false
    },
    function(){
       window.location = "afterlgn.php";
    });
    </script>';
   
  }

 else if (isset($_POST['buy'])) 
 {
      
      $b=-$proqty+$a;
      $up= "UPDATE fertilizer set qty = ".$b." WHERE id=".$_SESSION['id'];
      $newqty=mysql_query($up);
    
      $qry="INSERT INTO ferti_delivery(order_date,fname,mo,address,email,city,pincode,fename,bname,qty,price,total_amt) values('$odt','$fname',".$mo.",'$add','$email','$city',".$pc.",'$proname','$probrand',".$proqty.",".$proprice.",".$tot.")";
      $rs=mysql_query($qry);
    // echo "".$qry;
       
 require 'PHPMailer-master/PHPMailerAutoload.php';

         $mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = '';                 // SMTP username
        $mail->Password = '';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom('hemalhvp@gmail.com', 'Hemal Patel');
  
        $mail->addAddress($email);               // Name is optional

        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Your Purchased Fertilizer';
        $mail->Body    = "sir,<br>Your order confirmation has been received.<br>Your Order Summary is:<br>Fertilizer: ".$proname.", Quantity: ".$proqty.",Total Price: ".$tot."<br><i>Thank you for choosing us.</i> ";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        header("location:conorder.php?msg3=1");

if(!$mail->send()) {
                        echo 'Message could not be sent.';
                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                     } 
    
 
 } 

/*    $ch = curl_init();
      $user="purnimaflowers@gmail.com:iitkanpur";
      $receipientno=$mo; 
      $senderID="TEST SMS";  
      $msgtxt="Your order for ".$fname." has been placed successfully.Thank you..!    -From Team, AAU Biofertilizer"; 
      curl_setopt($ch,CURLOPT_URL,"http://api.mVaayoo.com/mvaayooapi/MessageCompose");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
      $buffer = curl_exec($ch);
       if(empty ($buffer))
        { echo " buffer is empty "; }
      else
      { echo $buffer; } 
     curl_close($ch);

      echo"message sent";*/
     
 /*  code for send email*/     

   


		


?>