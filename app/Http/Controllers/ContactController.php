<?php


namespace App\Http\Controllers;


use Mail;
use DB;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;



class ContactController extends Controller
{
   public   $title2;
    public static $conid;

    public function sendcontact(Request $request)
    {

        $title = $request->input('subject');
        $content = $request->input('message');
        $name =  $request->input('name');
        $phone =  $request->input('phone');
        $email =  $request->input('email');
        $title2='Kontakt - '.$title;
        $data=array('title' => $title, 'content' => $content, 'name'=> $name, 'phone'=>$phone, 'email'=>$email, 'title2'=>$title2);
        Mail::send('emails.send', $data, function ($message) use ($data)
        {

            $message->from('psi@itradionica.com','Kontakt forma');

            $message->to('psi@itradionica.com');
            $message->subject($data['title2']);
        });
        flash('Your message has been sent to out staff.');
        return back();
    }


    public function contactUser(Request $request)
    {

        $title = $request->input('subject');
        $content = $request->input('message');
        $name =  $request->input('name');
        $phone =  $request->input('phone');
        $email =  $request->input('email');
        $userid = $request->input('user_id');
        $title2='Kontakt - '.$title;
        $data=array('title' => $title, 'user_id'=> $userid, 'content' => $content, 'name'=> $name, 'phone'=>$phone, 'email'=>$email, 'title2'=>$title2);
        Mail::send('emails.send2', $data, function ($message) use ($data, $userid)
        {
            $e_mail = DB::select('SELECT u.email FROM users as u WHERE u.id =' . $userid);

            $message->from('psi@itradionica.com','Kontakt forma');

            $message->to($e_mail[0]->email);
            $message->subject($data['title2']);
        });
        flash('Your message has been sent to out staff.');
        return back();
    }

    public function zakazi_termin(Request $request)
    {

        $content = $request->input('message');
        $name =  $request->input('name');
        $phone =  $request->input('phone');
        $email =  $request->input('email');
        $advert_id = $request->input('user_id');
        $title2='Kontakt - Zakazivanje termina';
        $data=array('user_id'=> $advert_id, 'content' => $content, 'name'=> $name, 'phone'=>$phone, 'email'=>$email, 'title2'=>$title2);
        Mail::send('emails.send3', $data, function ($message) use ($data, $advert_id)
        {
            $id = DB::select("SELECT p.customer_id FROM published as p WHERE p.advert_id =" . $advert_id);
            if ($id) {
                $nick = DB::select("SELECT u.email, u.username FROM users as u WHERE u.id =" . $id[0]->customer_id);
                if ($nick) {
                    $e_mail = $nick[0]->email;
                    flash('Your message has been sent to '.$nick[0]->username);
                    $message->from('psi@itradionica.com','Kontakt forma');

                    $message->to($e_mail);
                    $message->subject($data['title2']);

                }
            }

        });

        return back();
    }

    public static function makecontact($id)
    {
        ContactController::$conid=$id;
        return view('info.kontaktuser');
    }

    public static function zakazi($id)
    {
        ContactController::$conid=$id;
        return view('info.zakazi');
    }
}