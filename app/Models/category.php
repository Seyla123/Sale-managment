<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table = "Category";
    protected $primaryKey = "CategoryID";
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
