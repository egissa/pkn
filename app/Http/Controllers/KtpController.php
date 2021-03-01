<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\KtpExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\User;
use App\ktp;
use App\Admin;
use Auth;
use Illuminate\Support\Carbon;

class KtpController extends Controller
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

    public function ktp()
    {
    	$user = User::find(auth()->user()->id);
    	return view('user.pemerintahan.ktp', compact('user'));
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'permohonan' => 'required',
            'nama' => 'required',
            'no_kk' => 'required',
            'no_nik' => 'required',
            'alamat' => 'required',
            'no_rt' => 'required',
            'kode_pos' => 'required',
            'no_hp' => 'required',
        ]);

        $ktp = ktp::create($request->all());

        $create = Carbon::parse($ktp->created_at)->isoformat('D MMMM Y');
        $ch = curl_init(); 
    $data = array('chat_id' => '630495419', 'text' => "New😃\n\n Surat Permohonan kartu Tanda Penduduk permohonan : $ktp->permohonan\n\n Nama : $ktp->nama\n KK : $ktp->no_kk\n \\ Nik : $ktp->no_nik\n\n Kuala Samboja $create");
    curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot1245434228:AAHxu65mWg1B0mVVzoOEhsZqURNnEgrEFHc/sendMessage");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);

        return redirect(route('user.pemerintahan'))->with('success', 'Data berhasil dibuat');
    }
}
