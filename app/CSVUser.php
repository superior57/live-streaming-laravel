<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CSVUser extends Model
{
    //

    public function getUserList()
    {
        if($csv = array_map('str_getcsv', file(public_path('/storage/uploads/user_list.csv')))) {
            $header = [
                'name',
                'email',
                'password'
            ];
            $data = [];
            foreach($csv as $key => $row) {
                if($key == 0) continue;
                $data[$row[1]] = array_combine($header, $row);
            }
            return $data;
        } else {
            return [];
        }        
    }
}
