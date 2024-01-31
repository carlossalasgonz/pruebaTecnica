<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    protected $table = 'category';
    public $timestamps = true;
    public $casts = [
        'id'            => 'integer',
        'name'          => 'string',
        'parent_id'     => 'integer',
        'created_at'    => 'datetime',
        'updated_at'    => 'datetime'
    ];

    public function products() {
        return $this->haveMany(Product::class, 'product_category_pivot', 'category_id', 'product_id');
    }
}
