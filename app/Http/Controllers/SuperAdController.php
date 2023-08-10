<?php
namespace App\Http\Controllers;
namespace App\Http\Middleware;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;





class SuperAdController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        //$this->middleware('superAdmin');
    }

    public function index()
    {
        return view('superadmin.index');
    }
}
