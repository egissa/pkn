<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Penduduk;
use Auth;

class PendudukController extends Controller
{
    //     /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }
    
    public function pemerintahan()
    {
    	return view('user.pemerintahan.index');
    }

    public function pembangunan()
    {
        return view('user.pembangunan.index');
    }

    public function sosial()
    {
        return view('user.sosial.index');
    }
}
