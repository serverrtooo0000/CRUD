<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;


class Product extends Model
{

    use HasFactory;

    protected $table = 'products';
    protected $guarded = [];

    protected $fillable = [
        'id',
        'category_id',
        'name',
        'code',
        'description',
        'image',
        'price',
        'created_at',
        'updated_at'
    ];

    public function baskets() {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }


    public function getPriceForCount()
    {

        if(!is_null($this->pivot)){
            return $this->pivot->count*$this->price;
        }
        return $this->price;

    }
    
}
