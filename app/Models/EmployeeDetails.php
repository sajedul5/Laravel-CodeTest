<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDetails extends Model
{
    use HasFactory;

    protected $table = 'employee_details';


    public function employee()
    {
        return $this->belongsTo('App\Models\Employee');
    }
}
