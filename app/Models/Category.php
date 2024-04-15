<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Order;



class Category extends Model
{

    use HasFactory;
    
    protected $table = 'category';
    protected $guarded = [];

    protected $fillable = [
        'id',
        'category_id',
        'name',
        'code'
    ];

    public function products(){

        return $this->hasMany(Product::class);


    }



    
}
