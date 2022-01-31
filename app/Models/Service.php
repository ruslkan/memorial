<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stella;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';
    protected $casts = [
        'price' => 'float',
    ];

    /**
     * Get materials for the parterre
     */
    public function stellas()
    {
        return $this->hasMany(Stella::class);
    }
}
