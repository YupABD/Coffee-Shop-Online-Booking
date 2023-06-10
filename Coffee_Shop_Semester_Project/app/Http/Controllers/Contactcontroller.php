<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class contactcontroller extends Controller
{
    public function index(){
        return view('contact');
    }
      public function contact(Request $request) {

        $contact = new contact; // Must import the Model file: use App\Student;
       
        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->subject = $request->get('subject');
        $contact->messege = $request->get('message');
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject'=> 'required',
            'message' => 'required',
            
            
        ]);

    
        $contact->save(); /* Store data inside the table */

    
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $messege = $request->message;

        // SMTP protocol mail sending
        $mail = new PHPMailer(true);
        // $mail->SMTPDebug = 2;
        try{
            $mail->isSMTP();
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->Mailer = "smtp";
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->Username = "";   //Enter Your Email 
            $mail->Password = "";          // Enter App password 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->setFrom($email, "$name");
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->SMTPSecure = 'tls';
            $mail->Subject  = "$subject";
            $mail->Body   = "$messege";
            $mail->send();
            
            return redirect('/contact')->with('success', 'Email sent successfully! we will contact you soon');
            
        }
        catch (Exception $e) {
            return redirect('/contact')->with('success', 'Email Failed to sent!');
        }
        


        // --------------------------------------
        // Help on the following code is given at the following URL
        // https://laravel.com/docs/5.8/redirects#redirecting-with-flashed-session-data
        //
        
        // --------------------------------------
        }
}
