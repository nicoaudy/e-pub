<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    public $loginPath = '/login';

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function redirectPath()
    {

        $role = auth()->user()->role->name;

        if($role == 'Admin')
        {
            return '/admin';
        } elseif($role == 'Customer')
        {
            return '/';
        }

    }

    public function getLogout()
    {
        \Auth::logout();

        return redirect('/');
    }
}