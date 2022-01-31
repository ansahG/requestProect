<?php

namespace App\Models\admin\project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddProject extends Model
{
    public function getRouteKeyName()
    {
        return 'projectId';
    }

    public function user()
    {
        return $this->belongsTo(User::class)->where('user_id', 1);
    }


    public $fillable = [
        'project_theme',
        'company_name',
        'company_email',
        'project_description',
        'amount_charged',
        'projectDocs',
        'projectId',
    ];

    use HasFactory;
}
