<?php

namespace App\Imports;

use App\Models\employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class importEmployee implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new employee([
            "name"=>$row["name"],
            "email"=>$row["email"],
            "phone"=>$row["phone"],
            "salary"=>$row["salary"],
            "department"=>$row["department"],
        ]);
    }
}
