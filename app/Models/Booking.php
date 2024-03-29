<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

      public function getRouteKeyName()
    {
        return 'subject';
    }

    
    public $fillable = [
        'subject',
        'name',
        'phone',
        'email',
        'message',
    ];
}
