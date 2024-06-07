<?php
 //get all form values
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $website = $_POST['website'];
 $message = $_POST['message'];

 if(!empty($email) && !empty($message)){ //if email and message field are not empty
  if(filter_var($email, FILTER_VALIDATE_EMAIL)){ //if entered email valid

   $receiver = "jason93anag@gmail.com";
   $subject = "From: $name <$email>"; //name of the email holder
   
   //inserting all user values inside body variable
   $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\nMessage: $message\n\nRegards,\n$name";
   $sender = "From: $email"; //sender email
   if(mail($receiver, $subject, $body, $sender)){
    echo "Your message has been sent.";
   }else{
    echo "Sorry, failed to send your message!";
   }

  }else{
   echo "Enter a valid mail address!";
  }
 }else{
  echo "Email and message fields are required!";
 }
?>