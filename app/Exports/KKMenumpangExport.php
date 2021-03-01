<?php

namespace App\Exports;

use App\Menumpangkk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class KKMenumpangExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Menumpangkk::all();
    }



    public function map($Menumpangkk): array
    {
        return [
            $Menumpangkk->nama_kk_lama,
            $Menumpangkk->no_kk_lama,
            $Menumpangkk->nik_kk_lama,
            $Menumpangkk->nama_kk_ditempati,
            $Menumpangkk->no_kk_ditempati,
            $Menumpangkk->nik_kk_ditempati,
            $Menumpangkk->alamat_kk_ditempati,
            $Menumpangkk->no_rt,
            $Menumpangkk->kelurahan,
            $Menumpangkk->kota,
            $Menumpangkk->provinsi,
            $Menumpangkk->no_hp,
            $Menumpangkk->alasan_menumpang,
            $Menumpangkk->jumlah_anggota_menumpang,
            $Menumpangkk->daftar_anggota_nik,
            $Menumpangkk->daftar_nama_anggota,

            

        ];
    }

    public function headings(): array
    {
        return [
           ' nama_kk_lama',
            'no_kk_lama',
            'nik_kk_lama',
            'nama_kk_ditempati',
            'no_kk_ditempati',
            'nik_kk_ditempati',
            'alamat_kk_ditempati',
            'no_rt',
            'kelurahan',
            'kota',
            'provinsi',
            'no_hp',
           'alasan_menumpang',
            'jumlah_anggota_menumpang',
            'daftar_anggota_nik',
            'daftar_nama_anggota',
        ];
    }
}

