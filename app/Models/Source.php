<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\QueryScopes;

class Source extends Model
{
    use HasFactory,SoftDeletes,QueryScopes;

    // Danh sách các cột được phép gán giá trị
    protected $fillable = [
        'name',
        'keyword',
        'description',
        'publish',
    ];
  protected $table = 'Sources';
  public function customers()
    {
        return $this->hasMany(Customer::class, 'source_id', 'id');
    }
  
}
 