<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB ;
use Illuminate\Http\Request;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function registerForm()
    {
        $colleges=DB::table('college')->get();
        $departments=DB::table('department')->get();
        
        return view('auth.register')->with(['colleges'=>$colleges,'departments'=>$departments]);
}

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $data)
    {
       $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'id_department' => $data['id_department'],
            'id_college' => $data['id_college'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'social_media' => $data['social_media'],
            'enabled' => $data['enabled'],
            'password' => Hash::make($data['password']),
        ]);
        return redirect()->route('login')->with('success','مرحبا  '.$user->name.'  لقد تم تسجيلك كمستخدم بنجاح  يرجى تسجيل الدخول  ');
    }
}
