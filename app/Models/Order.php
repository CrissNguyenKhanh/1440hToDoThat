<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\QueryScopes;


class Order extends Model
{
    use HasFactory,SoftDeletes ,QueryScopes;

    // Danh sách các cột được phép gán giá trị
    protected $fillable = [
        'code',
        'fullname',

        'phone',
        'email',
        'province_id',
        'district_id',
        'ward_id',
        'address',
        'description',
        'promotion',
        'cart',
        'customer_id',
        'guess_cookie',
        'method',
        'confirm',
        'payment',
        'delivery',
        'shipping',



    ];


   
  
    protected $casts =[
        'cart'=>'json',
        'promotion'=>'json'
    ];
    public function products(){
        return $this->belongsToMany(Product::class, 'order_product' , 'order_id' , 'product_id')
        ->withPivot(
            'uuid',
            'name',
            'qty',
            'price',
            'priceOriginal',
            'option'

        );
    }
    
    public function order_payments()
    {
        return $this->hasMany(Product::class,'id', 'order_id', '');
    }
}
