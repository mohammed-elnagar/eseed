<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = ['user_id', 'email', 'name', 'mobile_number', 'hire_date'];
}
