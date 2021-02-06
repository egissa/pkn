<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\kategori;
use App\Admin;
use Auth;
use Illuminate\Support\Carbon;
class KategoriKtpController extends Controller
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

    public function kategoriktp()
    {
    	$user = User::find(auth()->user()->id);
    	return view('user.pemerintahan.kategoriktp', compact('user'));
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'id' => 'required',
            'permohonan' => 'required',
            'users_id' => 'required',
        ]);
        $kategoriktp = kategoriktp::create($request->all());

        $create = Carbon::parse($kategoriktp->created_at)->isoformat('D MMMM Y');
        $ch = curl_init(); 
    $data = array('chat_id' => '630495419', 'text' => "New😃\n\n kategori berhasil di tambah\n id : $kategoriktp->permohonan\n Nik : $kategoriktp->users_id\n  users_id : $kategoriktp->users_id\n\n Kuala Samboja $create");
    curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot1245434228:AAHxu65mWg1B0mVVzoOEhsZqURNnEgrEFHc/sendMessage");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);

        return redirect(route('user.pembangunan'))->with('success', 'Data berhasil dibuat');
    }
}
