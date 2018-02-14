<?php
$mailto = "";//Enter YOUR email address here surrounded by the quotes.
$subject = "Contact form";//Change "Contact form" to another subject, if desired.
$header = "From: ".$_POST['email'];
foreach ($_POST as $key => $value)
{
   if (!is_array($value))
   {
      $message .= "\n".$key." : ".$value;
   }
   else
   {
      foreach ($_POST[$key] as $itemvalue)
      {
         $message .= "\n".$key." : ".$itemvalue;
      }
   }
}
mail($mailto, $subject, stripslashes($message), $header);
//Below loads the thankyou.html page after the form is submitted. You have to create the thankyou.html page and be sure it is located in the same directory (folder) as this script and the contact.html webpage
   if (test){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=thankyou.html">';
    }  else {
       return false;
    } 
?>