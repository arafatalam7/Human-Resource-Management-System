<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leave_apply extends Model
{
  protected $fillable = [
        'employee_id','leave_reason', 'employee_name', 'leave_start','leave_end',
    ];
}
