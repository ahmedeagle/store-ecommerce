<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Services\SMSGateways\VictoryLinkSms;
use App\Http\Services\SMSServices;
use App\Http\Services\VerificationServices;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public $sms_services;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(VerificationServices $sms_services)
    {
        $this->middleware('guest');
        $this -> sms_services = $sms_services;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        try {

             DB::beginTransaction();
            $verification = [];
            $user = User::create([
                'name' => $data['name'],
                'mobile' => $data['mobile'],
                'password' => Hash::make($data['password']),
            ]);

            // send OTP SMS code
            // set/ generate new code
            $verification['user_id'] = $user->id;
            $verification_data =  $this->sms_services->setVerificationCode($verification);
            $message = $this->sms_services->getSMSVerifyMessageByAppName($verification_data -> code );
            //save this code in verifcation table
              //done
             //send code to user mobile by sms gateway   // note  there are no gateway credentails in config file
             # app(VictoryLinkSms::class) -> sendSms($user -> mobile,$message);
            DB::commit();
            return  $user;
        //send to user  mobile
        }catch(\Exception $ex){
            DB::rollback();
        }

    }
}
