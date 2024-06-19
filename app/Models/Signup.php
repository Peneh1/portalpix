<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Hash;

class Signup extends Model
{
    use HasFactory;

  
//===================================================================================================
 static  function domain_taken($db, $sub){

          $subdomain_taken = DB::table('pp_users')
            ->where('subdomain', $sub)
            ->exists();
       
            if($subdomain_taken):
                return TRUE;
            else: 
                return FALSE;
            endif;
               
    }
//====================================================================================================
static function create_user($db,$fname,$lname,$company,$subdomain,$email,$password){

            $create = DB::table('pp_users')
            ->insert([
                'first_name' => $fname,
                'last_name' => $lname,
                'company' => $company,
                'subdomain' => $subdomain,
                'email' => $email,
                'password' => Hash::make($password)
            ]);

            if($create):
                return true;
            else:
                return false;
            endif;

}
//====================================================================================================
   static  function invalid_Email($email)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
              return true;
        }
      
        $host = end(explode("@", $email));
       
        if(!checkdnsrr($host, "MX") && !checkdnsrr($host, "A")){
          return true;

        }
    
        return false;
    }
    
//========================================================================================================
    
    static function send_email($mail, $fname, $email, $subdomain){
        /*Create an instance; passing `true` enables exceptions


try {
    //Server settings
    $mail->SMTPDebug = \PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.portalpix.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'support@portalpix.com';                     //SMTP username
    $mail->Password   = '^Z6v5n0b5';                               //SMTP password
    $mail->SMTPSecure = \PHPMailer\PHPMailer\sPHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('support@portalpix.com', 'Mailer');
    $mail->addAddress($email, $fname);     //Add a recipient
                                          //Name is optional
    $mail->addReplyTo('support@portalpix.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Confirm your email';
    $mail->Body    = 'Hi' . $fname . ',<br> We are so excited, Please confirm your email by 
    clicking here <a href="'. $confirm_url .'">Confirm my email</a>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    return TRUE;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
*/
    }
    
}

