<?php

namespace App\Models\admin;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function getRouteKeyName()
    {
        return 'service_name';
    }

    use HasFactory;


    public function user()
    {
        return $this->belongsTo(User::class);
    }

        public $fillable = [
        'service_name',
        'service_description',
        'service_price',
        'show_service_price',
    ];

}
