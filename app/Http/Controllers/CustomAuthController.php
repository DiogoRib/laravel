<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function registration()
    {
        return view("auth.registration");
    }
    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required | min:5 | max:12'
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->password = Hash::make($request->input('password'));
        $user->email = $request->input('email');
        $res = $user->save();

        if ($res) {
            return back()->with('success', 'Utilizador criado com sucesso!');
        } else {
            return back()->with('error', 'Erro ao criar utilizador!');
        }
    }
    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required | min:5 | max:12'
        ]);

        $user = User::where('email', '=', $request->email)->first();
        if($user)
        {
            if(Hash::check($request->password, $user->password))
            {
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            }
            else
            {
                return back()->with('fail', 'Password Errada.');
            }
        }
        else
        {
            return back()->with('fail', 'Email não encontrado.');
        }
    }

    public function dashboard()
    {
        if(Session::has('loginId'))
        {

            $users = User::all();
            $userID = Session::get('loginId');
            return view('dashboard', compact('users','userID'));
        }

        return view('auth.login')->with('fail', 'Tens que estar logado');;
    }

    public function logout()
    {
        if(Session::has('loginId')){
            Session::forget('loginId');
        }
        return redirect('/login');
    }
}
