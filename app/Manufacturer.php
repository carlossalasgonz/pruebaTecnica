<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model {
    protected $table = 'manufacturer';
    public $timestamps = true;
    public $casts = [
        'id'            => 'integer',
        'name'          => 'string',
        'url'           => 'string',
        'created_at'    => 'datetime',
        'updated_at'    => 'datetime'
    ];

    public function products() {
        return $this->belongsToMany(Product::class, 'product_manufacturer_pivot', 'manufacturer_id', 'product_id');
    }
}
