<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AccessoryCategory;

class Accessory extends Model
{
    use HasFactory;

    protected $table = 'accessories';
    protected $casts = [
        'price' => 'float',
    ];

    protected $fillable = [
        'name',
        'description',
        'image',
        'images',
        'price',
        'accessory_category_id',
    ];

    /**
     * Get the category a accessory
     */
    public function accessoryCategory()
    {
        return $this->belongsTo(AccessoryCategory::class)->withDefault([
            'name' => 'Категория не выбрана',
        ]);
    }

}
