<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    protected $guarded = [];

    use SoftDeletes;

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_kategori', 'id');
    }
}
