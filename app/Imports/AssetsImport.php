<?php

namespace App\Imports;

use App\Asset;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AssetsImport implements ToModel, WithHeadingRow
{

    public function transformDate($value, $format = 'Y-m-d')
{
    try {
        return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
    } catch (\ErrorException $e) {
        return \Carbon\Carbon::createFromFormat($format, $value);
    }
}

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Asset([
            'emp_id'     => $row['emp_id'],
            'ritcco'     => $row['ritcco'],
            'type'     => $row['type'],
            'description'     => $row['description'],
            'serial_number'     => $row['serial_number'],
            'mobile_number'     => $row['mobile_number'],
            'asset_number'     => $row['asset_number'],
            // 'purchased_date'     => $this->transformDate($row['purchased_date']),
            'status'     => $row['status'],
            // 'remarks'     => $row['remarks'],
            // 'updated_by'     => $row['updated_by'],
        ]);
    }
}
