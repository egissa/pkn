<?php

namespace App\Exports;

use App\Sktm;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class SktmExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize
{
    public function collection()
    {
        return Sktm::all();
    }

    public function headings(): array
    {
        return [
            'Nama',
            'Jenis Kelamin',
            'Kewarganegaraan',
            'Tanggal Lahir',
            'Agama',
            'Pekerjaan',
            'Status Kawin',
            'No bdt',
            'Nik',
            'Alamat',
            'Nama Anak',
            'Nis',
            'Sekolah',
            'Alamat Sekolah',
        ];
    }

    public function map($sktm): array
    {
        return [
            $sktm->nama,
            $sktm->kelamin,
            $sktm->kewarganegaraan,
            $sktm->tggl_lhr,
            $sktm->agama,
            $sktm->pekerjaan,
            $sktm->perkawinan,
            $sktm->no_bdt,
            $sktm->nik,
            $sktm->alamat,
            $sktm->nama_anak,
            $sktm->nis,
            $sktm->sekolah,
            $sktm->almt_sekolah,
        ];
    }
}
