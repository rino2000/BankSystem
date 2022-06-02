<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller

{
    public function login()
    {
        return view('auth.login');
    }

    /*
    public function loggingIn(Request $request){
        $form_data=$request->validate(['email'=>['required','email'],
        'password'=>'required']);

        if(auth()->attempt($form_data)){
            $request->session()->regenerate();

            return redirect('/')->with('message','You are now logged in');
        }
        return back()->withErrors(['email'=>'invalid credentials']);
    }
*/
    function userLogin(Request $request)
    {
        //get user email
        $user = User::where(['email' => $request->email])->first();

        if ($user != null) {
            //we add a new value that we can use in validation to compare with the password input
            $request->request->add(['user_password' => $user->password]);
        }
        $verified = DB::Table('users')->where('email', $request->email)->value(('email_verified_at'));
        //$verified=DB::table('users')->whereNotNull('email_verified_at')->get();
        $request->request->add(['verified' => $verified]);
        if ($request->verified == '') {
            return $request->validate(['email' => 'date']);
        }


        //validation rules
        $request->validate([
            'email' => 'required|exists:users',
            'password' => 'required'
        ]);
        //hier hashe ich das password des users in der Datenbank
        //das ist nötig weil das eingebene Password im Feld automatisch gehasht wird
        $u_password = Hash::make($user->password);

        //compare whether or not the hash of input password matches database password
        if (!Hash::check($request->password, $u_password/*$user->password-wenn Registrierung klappt*/)) {
            return $request->validate(['password' => 'same:user_password']) == false;
        } else {
            //if no errors start a session and put a key on keyword user
            $request->session()->put("user", $user);
            return redirect('/');
        }
    }
}
