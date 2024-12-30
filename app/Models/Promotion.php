<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\QueryScopes;
class Promotion extends Model
{
    use HasFactory,SoftDeletes,QueryScopes;
    protected $fillable = [
        'name',
        'type',
        'code',
        'description',
        'method',
        'discountInfomation',
        'discountValue',
        'discountType',
        'maxDiscountValue',
        'neverEndDate',
        'startDate',
        'endDate',
        'publish',
        'order'
        
    ];
    protected $casts =[
      'discountInfomation' =>'json'
    ];
    

  protected $table = 'promotions';
  public function products(){
    return $this->belongsToMany(Promotion::class, 'promotion_product_variant' , 'promotion_id','product_id' )
    ->withPivot(
        'variant_uuid',
        'model',
        

    )->withTimestamps();
}

}
