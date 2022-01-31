<?php

namespace App\Exports;

use App\Models\Lead;
use Maatwebsite\Excel\Concerns\FromCollection;
Use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;


class UsersExport implements FromCollection, WithColumnFormatting, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($row): array
	    {
	        return [
	            Date::dateTimeToExcel($row->created_at),
	            Date::dateTimeToExcel($row->updated_at),
	        ];
	    }
	
    public function columnFormats(): array {
        return [
            'A' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'B' => NumberFormat::FORMAT_DATE_DDMMYYYY
        ];
    }

    public function collection()
    {
        return Lead::all();
    }
}
