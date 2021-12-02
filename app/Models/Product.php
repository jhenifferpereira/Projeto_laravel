<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;

class Product extends Model
{
    use HasFactory;
    protected $with = ['brand'];
    //protected $fillable = ['brand_id','name'];
   

    public function brand(){

       
        //..uma instância de Produto pertence a uma instância de Brand
        return $this->belongsTo(Brand::class, 'brand_name', 'name');
        //return $this->belongsTo(City::class, 'city_id', 'id');

        
        }

        
        
        
}
