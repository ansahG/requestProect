<?php

namespace App\Models\admin;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInformation extends Model
{
    use HasFactory;

    public $fillable =[
        "facebook",
        "linkedIn",
        "whatsapp",
        "twitter",
        "instagram",
    ];

    public function user()
    {
        return $this->belongsTo(User::class)->where('user_id');
    }

}
