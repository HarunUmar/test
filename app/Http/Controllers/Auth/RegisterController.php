<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Lib\AturId;
use App\Costumer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/';

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

        if($data['daftar'] == 1){

             return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        }
    
        elseif($data['daftar'] == 2){


        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

          }

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        if($data['daftar'] == 1) {


        }

        elseif($data['daftar'] == 2){


       $id = AturId::Atur("username","users","U","2","5");
       $user =  User::create([
            'username' => $id,
            'name' => $data['name'],
            'email' => $data['email'],
            'level' =>$data['daftar'],
            'alamat' =>'sa',
            'password' => bcrypt($data['password']),
        ]);

      $id_costumer = AturId::Atur("id_costumer","costumer","C","2","5");
       $costumer = Costumer::create([
        'id_costumer' =>$id_costumer,
        'username' => $id,
        ]);

         return $user;
        }
 
       
    }
}
