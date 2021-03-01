<?php

namespace App\Exports;

use App\Kk_baru;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class KKbaruExport implements FromCollection,WithMapping, WithHeadings, ShouldAutoSize
{ /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kk_baru::all();
    }
   public function map($kk_baru): array
    {
        return [
            $kk_baru->id,
            $kk_baru->nama,
            $kk_baru->no_kk,
            $kk_baru->nik,
            $kk_baru->alamat,
            $kk_baru->no_rt,
            $kk_baru->no_hp,
            $kk_baru->alasan,
            $kk_baru->jumlah,
            $kk_baru->daftar_anggota_nik,
            $kk_baru->daftar_nama_anggota,
            
        ];
    }
    public function headings(): array
    {
        return [
            'id',
            ' nama',
            ' no_kk',
            'nik',
            'alamat',
            'no_rt',
            'no_hp',
            'alasan',
            'jumlah',
            'daftar_anggota_nik',
            'daftar_nama_anggota',
            
        ];
    }
}

