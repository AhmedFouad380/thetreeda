<?php

namespace App\Imports;

use App\Models\Seller;
// use Maatwebsite\Excel\Concerns\ToModel;
use Hash;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class sellersImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $key =>$row) 
        {
            if($key != 0 && isset($row[0])){
                $data = new Seller;
                $data->ar_name=$row[0];
                $data->en_name=$row[1];
                $data->owner_name=$row[2];
                $data->phone=$row[3];
                $data->email=$row[4];
                $data->password=Hash::make($row[5]);
                $data->save();
            }

        }
    }
}
