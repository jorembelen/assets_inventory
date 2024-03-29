<?php

namespace App\Imports;

use App\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Employee([
            'badge'     => $row['badge'],
            'name'     => $row['name'],
            'designation'    => $row['designation'], 
            'nationality'     => $row['nationality'],
            'location'    => $row['location'], 
            'unit_code'    => $row['unit_code'], 
        ]);
    }
}
