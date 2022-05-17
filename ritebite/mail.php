
<?php

print('success');
/*if(isset($_POST['enquiry-submit'])){

echo '<pre>';
print_r($_POST);
echo '</pre>';

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];



$to = 'dentistryaltontowersleads@gmail.com'; 
$from = 'info@dentistryataltontowers.ca'; 
$fromName = $firstname.' '.$lastname; 
 



$subject = "Appointment Request from Dentistry Atalton Towers"; 
$htmlContent = " 
    <html> 
    <head> 
        <title>Welcome to Dentistry Atalton Towers</title> 
    </head> 
    <body> 

      <h3 style='padding:3px 0px;margin:0'>You have received an appointment request from: $firstname </h3>
      <h3 style='margin:0px 0px 10px 0px'>Here are the details:</h3>
        <table cellspacing='0' cellpadding='4' style='border: 2px dashed #FB4314; width: 500px;'> 
            <tr> 
                <th>Name:</th><td>$fromName </td> 
            </tr> 
            <tr style='background-color: #e0e0e0;'> 
                <th>Email:</th><td>$email</td> 
            </tr> 
            <tr> 
                <th>Phone Number:</th><td>$phone</td> 
            </tr> 
             <tr> 
                <th>Message:</th><td>$message</td> 
            </tr>
        </table> 
    </body> 
    </html>"; 
// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= "From: ".$fromName."<".$from.">" . "\r\n"; 

// Send email 
if(mail($to, $subject, $htmlContent, $headers)){ 
    echo "<script>alert('Thanks you,your message has been sent Successfully.We will be in touch shortly.');window.location.href = '../index.php';</script>"; 
}else{ 
   echo "<script>alert('Message sending failedt.');window.location.href = '../index.php';</script>"; 
}


}*/
?>
