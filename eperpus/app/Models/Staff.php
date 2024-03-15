<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{

    protected $guarded = ['id'];

    public function getTable()
    {
        return 'staff'; // Specify the actual table name for the Role model
    }
    
}