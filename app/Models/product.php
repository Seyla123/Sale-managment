<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $primaryKey = "ProductID";
    protected $guarded=["ProductImage"];
    public function category()
    {
        return $this->belongsTo(Category::class,'CategoryID');
    }
    public function sale()
    {
        return $this->hasMany(Sale::class);
    }
    public function purchase()
    {
        return $this->hasMany(Purchase::class);
    }
}
