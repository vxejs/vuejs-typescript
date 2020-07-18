<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Product extends Model
{
    protected $fillable = ['id', 'name', 'category_id', 'hmotnost'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function amounts(): hasMany
    {
        return $this->hasMany(Product::class);
    }

    public function search($id)
    {
        return DB::table('amounts')
            ->where('product_id', 'like', $id)
            ->get();
    }
}
