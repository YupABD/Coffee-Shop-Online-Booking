<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booktable;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\DB;

class Reservation extends Controller
{
    public function index()
    {
        return view('reservation');
    }

    public function reservation(Request $request)

    {        
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'date' => 'required',
            'time' => 'required',
            // 'persons'=> 'required',
            'persons' => 'required|in:"1", "2" , "3", "4"',

            
            
        ]);

        $reservation_log=new booktable;     
            $reservation_log->name=$request->get('name');
            $reservation_log->email=$request->get('email');
            $reservation_log->persons=$request->get('persons');
            $reservation_log->date=$request->get('date');
            $reservation_log->time=$request->get('time');
            $reservation_log->save();

          




            
            // return redirect('/reservation');

            $name = $request->name;
            $date = $request->date;
            $time = $request->time;
            // $email = "laravel.project.by.abd@gmail.com";
            // $address = $request->address;

            $email = $request->email;
            $persons = $request->persons;
            // $mob = $request->mob;
            // $job = $request->job;
            // $ans = $request->ans;
    
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
            $mail->setFrom($email, "Coffee Shop");
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->SMTPSecure = 'tls';
            $mail->Subject  = "Your Form Details";
            $mail->Body   = "Your Table is booked See Details <br>, $name , $date , $time , $persons";
            $dt = $mail->send();
            if ($dt) {
                // echo 'Email has been send successfully sent to user';
            } else {
                echo 'something went wrong';
            }
           

            return redirect('/reservation')->with('success', 'Your Table is Booked.Thank You');
            
        
    
        }
        catch (Exception $e) {
            return redirect('/reservation')->with('success', 'Email Failed to sent!');
        }

    }

    // public function view(Request $request)
    // {
    //     $search = $request['search'] ?? "";
    //     if($search != "")
    //     {
    //         $reservation = booktable::where('name', 'LIKE', "%$search%")->get();
    //     }   
    //     else{

    //         $reservation = booktable::all();
    //     }

      
    //    $data = compact('reservation');
    //    return view('myorder')->with($data);
    // }

    public function search(Request $request, $name)
    {
        

        // if(isset($_GET['search'])){
        //     $search_text = $_GET['search'];
        //     $reservations = DB::table('reservation')->where('name' , 'LIKE','%'.$search_text.'%')->paginate(3);
        //     return view('myorder',['reservations'=>$reservations ]);
            
        // }
        // else{
        //     return view('myorder');

        // }


            $reservation = booktable::where('name' ,'LIKE', '%'. $name . '%');

             return view('myorder', compact('reservation', 'request'));




    }

   



    }

           

        
        

 
