<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flow extends Model
{
    protected $fillable = [
        'prod_name',
        'prod_code',
        'prev_prod_code',
        'x_dim',
        'y_dim',
        'z_dim',
        'x_fold',
        'y_fold',
        'laetus',
        'info'
    ];
}
