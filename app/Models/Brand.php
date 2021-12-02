<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //return $this->belongsTo(City::class);
    use HasFactory;
    protected $table = 'brands';
    //protected $fillable = ['name'];

    public function products(){
        //..uma instância de Brand possui muitos Produtos
        return $this->hasMany(Product::class);    
        
        }

        
        
}
