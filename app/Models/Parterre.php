<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Material;

class Parterre extends Model
{
    use HasFactory;

    public $additional_attributes = ['full_data'];

    protected $table = 'parterres';
    protected $appends = ['full_size'];
    protected $casts = [
        'price' => 'float',
    ];

    protected $fillable = [
        'material_id',
        'length',
        'height',
        'depth',
        'price'
    ];


    /**
     * Get products for the parterre
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Get the parterres for the material
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
        $price = (($this->length/100) * ($this->height/100) * ($this->depth/100)) * $this->material->price;

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
        return "{$this->length} x {$this->height} x {$this->depth}";
    }

    /**
     * Get the full data
     */
    public function getFullDataAttribute()
    {
        return "{$this->material->name} /размер: {$this->length} x {$this->height} x {$this->depth}";
    }
}
