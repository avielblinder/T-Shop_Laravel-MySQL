<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SigninRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Session;

class UserController extends MainController
{
    function __construct(){
        parent::__construct();//not to cancel father construct
        $this->middleware('signmid',['except'=>['logout']]);//redirect if there is user except logout method
    }

    public function getSignin(){
        self::$data['title'] .= 'Sign in';
        return view('forms.signin', self::$data);
    }

    public function postSignin(SigninRequest $request){
        $rt = !empty($request['rt']) ? $request['rt'] : '';

        if(User::validate($request)){
            return redirect($rt);
        }else{
            self::$data['title'] .= 'Sign in';
            return view('forms.signin', self::$data)->withErrors('Wrong email or password.');
        }
    }

    public function getSignup(){
        self::$data['title'] .= 'Sign up';
        return view('forms.signup', self::$data);
    }

    public function postSignup(SignupRequest $request){
        User::save_new($request);
        return redirect('');
    }

    public function logout(){
        Session::flush();//deleting al the session
        return redirect('user/signin');
    }
}
