<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Accessory;

class AccessoryCategory extends Model
{
    use HasFactory;

    protected $table = 'accessory_categories';

    protected $fillable = [
        'name',
        'image',
    ];

    /**
     * Get category accessories
     */
    public function accessories()
    {
        return $this->hasMany(Accessory::class);
    }
}
