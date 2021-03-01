<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\KKbaruExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\User;
use App\Kk_baru;
use App\Admin;
use Auth;
use Illuminate\Support\Carbon;
class KkbaruController extends Controller
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



    public function kk_baru()
    {
    	$user = User::find(auth()->user()->id);
    	return view('user.pemerintahan.kk_baru', compact('user'));
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'no_kk' => 'required',
            'nik' => 'required',
            'alamat' => 'required',
            'no_rt' => 'required',
            'no_hp' => 'required',
            'alasan' => 'required',
            'jumlah' => 'required',
            'daftar_anggota_nik'=> 'required',
            'daftar_nama_anggota'=> 'required',
            
        ]);
        $kkbaru = Kk_baru::create($request->all());

        $create = Carbon::parse($kkbaru->created_at)->isoformat('D MMMM Y');
        $ch = curl_init(); 
    $data = array('chat_id' => '630495419', 'text' => "New😃\n\n Surat Permohonan  KK Penduduk nama : $kkbaru->nama\n\n alasan : $kkbaru->alasan\n KK : $kkbaru->daftar_nama_anggota\n \\ Nik : $kkbaru->no_nik\n\n Kuala Samboja $create");
    curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot1245434228:AAHxu65mWg1B0mVVzoOEhsZqURNnEgrEFHc/sendMessage");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);
 
        return redirect(route('user.pemerintahan'))->with('success', 'Data berhasil dibuat');
    }
}
