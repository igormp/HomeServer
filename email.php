<?php 
if(isset($_POST['submit'])) { 
$to =  			"igorphilippini@hotmail.com"; 
$subject =      $_POST['subject']; 
$name_field =   $_POST['name']; 
$email_field =  $_POST['email']; 
$message =      $_POST['message']; 
  
$body =  "From: $name_field\n E-Mail: $email_field\n Subject: $subject\n Message:\n $message"; 
  
echo "Your mail was sent, thanks :)"; 
mail($to, $subject, $body);
}  else { 
echo "blarg!";
} 
?>