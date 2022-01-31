<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Stella;
use App\Models\Pedestal;
use App\Models\Pillar;

class Material extends Model
{
    use HasFactory;

    public $additional_attributes = ['full_data'];

    protected $table = 'materials';
    protected $casts = [
        'price' => 'float',
    ];

    protected $fillable = [
        'name',
        'image',
        'price',
        'color',
        'country'
    ];

    protected $appends = ['full_data'];

    /**
     * Get materials for the stella
     */
    public function stellas()
    {
        return $this->hasMany(Stella::class);
    }

    /**
     * Get materials for the pedestal
     */
    public function pedestals()
    {
        return $this->hasMany(Pedestal::class);
    }

    /**
     * Get materials for the pillar
     */
    public function pillars()
    {
        return $this->hasMany(Pillar::class);
    }

    /**
     * Get the name color country
     */
    public function getFullDataAttribute()
    {
        return "{$this->name} / {$this->color} / {$this->country}";
    }
}
