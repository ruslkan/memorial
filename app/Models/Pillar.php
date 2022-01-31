<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Material;

class Pillar extends Model
{
    use HasFactory;

    public $additional_attributes = ['full_data'];

    protected $table = 'pillars';
    protected $appends = ['full_size'];
    protected $casts = [
        'price' => 'float',
    ];

    protected $fillable = [
        'material_id',
        'height',
        'width',
        'depth',
        'price'
    ];

    /**
     * Get the stelas for the product
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Get the stelas for the material
     */
    public function material()
    {
        return $this->belongsTo(Material::class)->withDefault([
            'name' => 'Материал не выбран',
        ]);
    }

    /**
     * Get the price
     */
    public function getPriceAttribute($price)
    {
        $price = (($this->height/100)*($this->width/100)*($this->depth/100))*$this->material->price;

        return round($price, 2);
    }

    /**
     * Save the price
     */
    protected static function boot()
    {
        parent::boot();
        static::saving(function($model) {
            $model->price = $model->price;
        });
    }

    /**
     * Get the full size
     */
    public function getFullSizeAttribute()
    {
        return "{$this->height} x {$this->width} x {$this->depth}";
    }

    /**
     * Get the full data
     */
    public function getFullDataAttribute()
    {
        return "{$this->material->name} /размер: {$this->height} x {$this->width} x {$this->depth}";
    }

}
