<?php

namespace App\Exports;

use App\Models\Lead;
use Maatwebsite\Excel\Concerns\FromCollection;
Use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;


class UsersExport implements FromCollection, WithColumnFormatting, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($row): array
	    {
	        return [
	            Date::dateTimeToExcel($row->created_at),
                'name' => $row['name'],
                'email' => $row->email,
                'phone' => $row->phone,
                'message' => $row->message,
                'referrer' => $row->referrer
	        ];
	    }
    public function headings(): array
    {
        return [
            'created_at',
            'name',
            'email',
            'phone',
            'message',
            'referrer'
        ];
    }
	
    public function columnFormats(): array {
        return [
            'A' => NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }

    public function collection()
    {
        return Lead::all();
    }
}
