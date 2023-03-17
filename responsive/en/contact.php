<?php 
 $to = "info@c4all.gr"; 
 $from = "info@c4all.gr";
 $name = "Visitor"; 
 $headers = "From: $from"; 
 $subject = "Comments/Remarks (english version)"; 
 
 $fields = array(); 
 $fields{"name"} = "name"; 
 $fields{"mail_address"} = "mail_address"; 
 $fields{"status"} = "status"; 
 $fields{"comments"} = "comments"; 
 
 $body = "We have received the following information:\n\n"; foreach($fields as $a => $b){ 	$body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); } 
 

 if($from == '') {print "You have not entered an email, please go back and try again";} 
 else { 
 if($name == '') {print "You have not entered a name, please go back and try again";} 
 else { 
 $send = mail($to, $subject, $body, $headers); 

 if($send) 
 {header( "Location: http://www.c4all.gr/en/contact.html" );} 
 else 
 {print "We encountered an error sending your mail, please notify info@c4all.gr"; } 
 }
}
 ?> 