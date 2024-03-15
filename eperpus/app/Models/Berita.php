<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{

    protected $guarded = ['id'];

    public function getTable()
    {
        return 'berita'; // Specify the actual table name for the Role model
    }
    
}