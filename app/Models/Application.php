<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'application_date',
        'status',
        'approval_type',
        'vass_engineering',
        'arrival_date',
        'chassis_no',
        'make',
        'model',
        'build_date',
        'fuel_type',
        'transmission',
        'body_type',
        'drive_type',
        'seats',
        'additional_info'
    ];

    public function assets()
    {
        return $this->hasMany(Asset::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
