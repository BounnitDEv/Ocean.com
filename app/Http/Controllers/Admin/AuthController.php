<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthController extends Controller
{
    public function index(){

        return view('admin.home');
    }
 
    public function login(){
        return view('admin.auth.login');
    }

    public function logout(){

        Auth::logout();

        return redirect('admin/login');
    }

    public function login_post(Request $request){

        $this->init();

        $credentials = $request->only('email', 'password');

        // dd($credentials);

        if (Auth::attempt($credentials)) {
            // dd($credentials);
            // dd(Auth::user());

            return redirect('admin/home');
        }

        return view('admin.auth.login');
    }

    public function init(){
        $users = User::all();

        if(count($users) == 0){
            $user = User::create([
                'name'      => 'Othmane',
                'email'     => 'atmanebounnit@gmail.com',
                'password'  => bcrypt("q112ksj8è-è_LHLK"),
            ]);
        }

         // dd(User::all());
    }
}