<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\User;
use App\Sktm;
use App\Admin;
use App\Penduduk;
use Auth;
class SktmController extends Controller
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

    public function sktm()
    {
    	$user = User::find(auth()->user()->id);
        $awal = date('l, d F Y H:i');
        $akhir = '2003-03-08';
        $tahun = Carbon::parse($awal)->isoformat('dddd, D MMMM Y');
        $lahir = Carbon::parse($user->penduduk->tggl_lhr)->isoformat('D MMMM Y');
        $hasil = Carbon::parse($awal)->DiffInYears($user->penduduk->tggl_lhr); // Tahun sekarang - Tahun Lahir 
        // return $tahun;
    	return view('user.sosial.sktm', compact('user','hasil'));
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'nik' => 'required',
            'nama' => 'required',
            'kelamin' => 'required',
            'kewarganegaraan' => 'required',
            'tggl_lhr' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'perkawinan' => 'required',
            'alamat' => 'required',
            'nama_anak' => 'required',
            'sekolah' => 'required',
            'almt_sekolah' => 'required',
        ]);
        $sktm = Sktm::create($request->all());

        $create = Carbon::parse($sktm->created_at)->isoformat('D MMMM Y');
        $ch = curl_init(); 
    $data = array('chat_id' => '630495419', 'text' => "New😃\n\n Surat Keterangan sktm\n Nama : $sktm->nama\n Nik : $sktm->nik\n Jenis Kelamin : $sktm->kelamin\n\n Kuala Samboja $create");
    curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot1245434228:AAHxu65mWg1B0mVVzoOEhsZqURNnEgrEFHc/sendMessage");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);

        return redirect()->back()->with('success', 'Data berhasil dibuat');
    }
}
