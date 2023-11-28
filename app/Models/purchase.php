<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $primarykey = 'PurchaseID';
    public function product()
    {
        return $this->belongsTo(Product::class,'ProductID');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'UserID');
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class,'SupplierID');
    }

}
