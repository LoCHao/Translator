<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user();
        if($id->role === 0)
            return redirect('/admin/index') ;
        elseif($id->role === 1)
            return redirect('/user');
        elseif ($id->role === 2)
            return redirect('/pm');
        elseif ($id->role === 3)
            return redirect('/trans');

    }
}
