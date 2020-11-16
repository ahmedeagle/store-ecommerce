<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\VerificationRequest;
use App\Http\Services\VerificationServices;
use Illuminate\Http\Request;

class VerificationCodeController extends Controller
{

    public $verificationService;
     public function __construct(VerificationServices $verificationService)
     {
         $this  -> verificationService = $verificationService;
     }

    public function verify(VerificationRequest $request)
    {

        $check = $this ->  verificationService -> checkOTPCode($request -> code);

        if(!$check){  // code not correct

            return 'you enter wrong code ';

        }else {  // verifiction code correct

            return redirect()->route('home');
        }
    }
}
