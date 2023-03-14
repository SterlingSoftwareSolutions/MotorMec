<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_id',
        'asset_type',
        'location',
        'file_type'
    ];


    public function application()
    {
        return $this->belongsTo(Application::class);
    }

    public function asset_type()
    {
        return $this->belongsTo(AssetType::class);
    }
}
