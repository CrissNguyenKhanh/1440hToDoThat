<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPayment extends Model
{
    use HasFactory;

    // Danh sách các cột được phép gán giá trị
    protected $fillable = [
        'order_id',
        'method_name',

        'payment_id',
        'payment_detail',
       



    ];


   
    protected $table = 'order_paymentable';
    protected $casts =[
 
        'payment_detail'=>'json'
    ];
    public function Orders(){
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
}
