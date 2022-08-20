<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
        //print_r($data); die();
    
        return Validator::make($data, [
            'Nombre' => ['required', 'string', 'max:255'],
            'Apellido1' => ['required', 'string', 'max:255'],
            'Apellido2' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'max:250', 'confirmed'],
            'Tipo' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:tipousuario'],
            'Telefono' => ['required', 'string', 'max:10'],
            
            
            

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
       
        return User::create([
            'Nombre' => $data['Nombre'],
            'Apellido1' => $data['Apellido1'],
            'Apellido2' => $data['Apellido2'],
            'password' => Hash::make($data['password']),
            'Tipo' => $data['Tipo'],
            'email' => $data['email'],
            'Telefono' => $data['Telefono'],
            

        ]);
    }
}
