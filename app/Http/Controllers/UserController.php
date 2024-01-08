<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PHPMailer\PHPMailer\PHPMailer;
use session;

class UserController extends Controller
{
    protected $data=array();

    public function getLogin(LoginRequest $request)
    {
        $user=User::create([
            'last_name'=>$request->last_name,
            'first_name'=>$request->first_name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'phone'=>$request->phone,
        ]);
        Auth::login($user);
        $now = Carbon::now();
        $this->data['user_id'] = auth()->user()->id;
        $this->data['otp'] = rand(123456, 999999);
        $this->data['expire_at'] = Carbon::now()->addMinutes(10);
        session()->put('user_id', $this->data['user_id']);
        session()->put('otp', $this->data['otp']);
        session()->put('expire_at', $this->data['expire_at']);
        $sent=false;
        $mail= new PHPMailer(true);
  try{
      $mail->isSMTP();
      $mail->SMTPDebug = 0;
      $mail->Host = 'smtp.hostinger.com';
      $mail->Port = 587;
      $mail->SMTPAuth = true;
      $mail->Username = 'it@gulfspectrum.com.sa';
      $mail->Password = 'Yosef2012@';
      $mail->setFrom('it@gulfspectrum.com.sa', 'GulfSpectrum');
      $mail->addReplyTo('it@gulfspectrum.com.sa', 'GulfSpectrum');
      $mail->addAddress($user->email);
      $mail->Subject = 'رمز التحقق';
      // $mail->msgHTML(file_get_contents('message.html'), __DIR__);
    //   $mail->addAttachment($file_name);
      $mail->Body = 'عزيزي المستخدم رمز التحقق الخاص بكم هو '.$this->data['otp'];
      $mail-> isHTML(true);
      $mail->CharSet = 'UTF-8';



      if (!$mail->send()) {
          $sent= false;
      } else {
          $sent= true;
      }

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }



            return view('login',['visite'=>true,'SendOTP'=>$sent]);
        // return view('OTP');
    }
    public function checkOtp(Request $request)
    {
        $validator=Validator::make($request->all(),[
            "otp"=>"required|digits:6",
        ]);
        if($validator->fails())
        {
            return response()->json([
                'error'=>true,
                'message'=>$validator->errors()
            ]);
        }
        $now=Carbon::now();
        $diffInMinutes = $now->diffInMinutes(session()->get('expire_at'));
        // return $diffInMinutes;
        if($diffInMinutes==0)
        {
            return response()->json(['error'=>false,'message'=>'Time out']);
        }
        if((session()->get('user_id')==$request->user_id)&&(session()->get('otp')==$request->otp))
        {
            session()->forget('user_id');
            session()->forget('otp');
            session()->forget('expire_at');
            return redirect()->route('new-account');
        }
        else{
            return response()->json(['error'=>false,'message'=>'Invalid OTP']);
        }
    }
}
