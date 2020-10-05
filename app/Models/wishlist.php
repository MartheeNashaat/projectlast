<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    use HasFactory;

    protected $table='wishlists';
    
    protected $fillable = [
        'product_id','User_id'
    ];

    public function product(){

        return $this->hasMany(product::class);
    }
    public function User(){ 

        return $this->belongsTo(User::class);

    }

}
