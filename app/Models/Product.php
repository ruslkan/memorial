<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Material;
use App\Models\Stella;
use App\Models\Pedestal;
use App\Models\Parterre;
use App\Models\Tombstone;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $casts = [
        'price' => 'float'
    ];

    protected $fillable = [
        'name',
        'image',
        'category_id',
        'stella_id',
        'parterre_id',
        'tombstone_id',
        'pedestal_id',
        'pillar_id',
        'price',
        'images'
    ];

    /**
     * Get the category a product belongs to
     */
    public function category()
    {
        return $this->belongsTo(Category::class)->withDefault([
            'name' => 'Категория не выбрана',
        ]);
    }


    /**
     * Get the stella a product belongs to
     */
    public function stella()
    {
        return $this->belongsTo(Stella::class)->withDefault([
            'name' => 'Стелла не выбрана',
        ]);
    }

    /**
     * Get the pillar a product belongs to
     */
    public function pillar()
    {
        return $this->belongsTo(Pillar::class)->withDefault([
            'name' => 'Столбик не выбран',
        ]);
    }

    /**
     * Get the parterre a product belongs to
     */
    public function parterre()
    {
        return $this->belongsTo(Parterre::class)->withDefault([
            'name' => 'Цветник не выбран',
        ]);
    }

    /**
     * Get the tombstone a product belongs to
     */
    public function tombstone()
    {
        return $this->belongsTo(Tombstone::class)->withDefault([
            'name' => 'Надгробная плита не выбрана',
        ]);
    }

    /**
     * Get the pedestal a product belongs to
     */
    public function pedestal()
    {
        return $this->belongsTo(Pedestal::class)->withDefault([
            'name' => 'Пьедестал не выбран',
        ]);
    }

    /**
     * Get the price
     */
    public function getPriceAttribute($price)
    {
        $price = ($this->stella->price) + ($this->pillar->price) + ($this->pedestal->price) + ($this->parterre->price) + ($this->tombstone->price);

        return round($price, 2);
    }

    /**
     * Save the price
     */
    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $model->price = $model->price;
        });
    }
}
