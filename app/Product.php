<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $table = 'product';
    public $timestamps = true;
    public $casts = [
        'id'            => 'integer',
        'name'          => 'string',
        'description'   => 'string',
        'price'         => 'float',
        'status'        => 'boolean',
        'created_at'    => 'datetime',
        'updated_at'    => 'datetime'
    ];

    public function categories() {
        return $this->belongsToMany(Category::class, 'product_category_pivot', 'product_id', 'category_id');
    }

    public function images() {
        return $this->belongsToMany(Image::class, 'product_image_pivot', 'product_id', 'image_id');
    }

    public function manufacturers() {
        return $this->belongsToMany(Manufacturer::class, 'product_manufacturer_pivot', 'product_id', 'manufacturer_id');
    }

    protected static function boot() {
        parent::boot();
        static::addGlobalScope('status', function ($query) {
            $query->where('status', 1);
        });
    }
}
