<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salary_details extends Model
{
     protected $fillable = [
       'salary_id','employee_id','medical_fee','transportation_fee'
    ];

}
