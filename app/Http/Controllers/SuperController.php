<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class SuperController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('superAdmin');
    }

    public function index()
    {
        $girisBilgi  = Auth::user()->name;
        return view('superadmin.main.index',compact("girisBilgi"));
    }
    public function profile()
    {
        $girisBilgi  = Auth::user()->name;
        return view('superadmin.main.profile',compact("girisBilgi"));
    }
    public function editProfile()
    {
        $girisBilgi  = Auth::user()->name;
        return view('superadmin.main.edit',compact("girisBilgi"));
    }
    public function request()
    {
        $girisBilgi  = Auth::user()->name;
        return view('superadmin.main.request',compact("girisBilgi"));
    }
}
