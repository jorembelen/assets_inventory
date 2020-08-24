<?php

namespace App\Imports;

use App\CheckOut;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CheckOutsImport implements ToModel, WithHeadingRow
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
        return new CheckOut([
            'emp_id'        => $row['emp_id'],
            'asset_id'      => $row['asset_id'],
            'status'        => $row['status'],
             'remarks'      => $row['remarks'],
             'notes'        => $row['notes'],
              'date_issued' => $this->transformDate($row['date_issued']),
            //   'badge'       => $row['badge'],
            //    'name'       => $row['name'],
            //    'user'       => $row['user'],
        ]);
    }
}
