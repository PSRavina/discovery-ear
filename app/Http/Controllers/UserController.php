<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('users');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
