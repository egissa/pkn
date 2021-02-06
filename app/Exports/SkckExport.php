<?php

namespace App\Exports;

use App\Skck;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class SkckExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Skck::all();
    }

    public function map($skck): array
    {
        return [
            $skck->nama,
            $skck->kelamin,
            $skck->kewarganegaraan,
            $skck->tggl_lhr,
            $skck->agama,
            $skck->pekerjaan,
            $skck->perkawinan,
            $skck->nik,
            $skck->alamat,
            $skck->keterangan,
        ];
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
            'No KTP',
            'Alamat',
            'Keterangan',
        ];
    }
}
