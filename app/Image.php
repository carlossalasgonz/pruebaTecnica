<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'image';
    public $timestamps = true;
    public $casts = [
        'id'            =>  'integer',
        'name'          =>  'string',
        'path'          =>  'string',
        'width'         =>  'integer',
        'height'        =>  'integer',
        'extension'     =>  'string',
        'created_at'    =>  'datetime',
        'updated_at'    =>  'datetime'
    ];
    
    public function products() {
        return $this->belongsToMany(Product::class, 'product_image_pivot', 'image_id', 'product_id');
    }
}
