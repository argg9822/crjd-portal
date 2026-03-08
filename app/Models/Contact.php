<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'message',
        'phone',
        'service_type',
    ];
}
