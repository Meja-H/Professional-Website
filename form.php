<?php 
    /* send the submitted data to gmail */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    /* shows echo "All fields are required, please fill out the again." if information is not filled out */
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        }  
    /* shows echo "Email sent!" if all information filled out */  
   else {         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("supremehibachi@gmail.com", $subject, $message, $from); 
        echo "Email sent!"; 
        } 
    }   
?>

