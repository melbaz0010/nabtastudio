<?php  
if(isset($_POST['submit'])) { 
 if (!isset($_POST['g-recaptcha-response']) || $_POST['g-recaptcha-response'] == '') {
      $failed = "آسف! لم يتم إرسال الرسالة ، حاول مرة أخرى لاحقًا.";
 }
 else {
     // call curl to POST request
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => '6LflJ_IgAAAAADXHebgH6QNDHf04Zg2Er9lBJtGg', 'response' => $_POST['g-recaptcha-response'])));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    $arrResponse = json_decode($response, true);
      
    // verify the response
    if($arrResponse["success"] == '1') {
        // valid submission
        // go ahead and do necessary stuff
        $mailto = "contact@nabtastudio.com";  //My email address
         //getting customer data
         $name = $_POST['name']; //getting customer name
         $fromEmail = $_POST['email']; //getting customer email
         $phone = $_POST['tel']; //getting customer Phome number
         $subject = $_POST['subject']; //getting subject line from client
         $subject2 = "Confirmation: Message was submitted successfully | Nabta Studio"; // For customer confirmation
         
         //Email body I will receive
         $message = "Cleint Name: " . $name . "\n"
         . "Phone Number: " . $phone . "\n\n"
         . "Client Message: " . "\n" . $_POST['message'];
         
         //Message for client confirmation
         $message2 = "Dear" . $name . "\n"
         . "أشكركم على الاتصال بنا. نحن سوف نعود اليكم في وقت قريب!" . "\n\n"
         . "لقد أرسلت الرسالة التالية: " . "\n" . $_POST['message'] . "\n\n"
         . "مع تحياتي," . "\n" . "- أستوديو نبتة";
         
         //Email headers
         $headers = "From: " . $fromEmail; // Client email, I will receive
         $headers2 = "From: " . $mailto; // This will receive client
         
         //PHP mailer function
         
          $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
          $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
         
          //Checking if Mails sent successfully
         
          if ($result1 && $result2) {
            $success = "لقد تم ارسال رسالتك بنجاح!";
          } else {
            $failed = "آسف! لم يتم إرسال الرسالة ، حاول مرة أخرى لاحقًا.";
          }
    } else {
        $failed = "آسف! لم يتم إرسال الرسالة ، حاول مرة أخرى لاحقًا.";
        
    }
       
     //print_r($arrResponse);
     //die();

 
 }
 
}
 
?>