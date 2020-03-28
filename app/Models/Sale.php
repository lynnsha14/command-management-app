<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $primaryKey = "id";

    protected $table = "sales";

    protected $fillable = [
        "quantity",
        "product_id",
        "cashier_id",
    ];


    public function product(){
        return $this->belongsTo(product::class,"product_id","id");
    }

    public function cashier(){
        return $this->belongsTo(product::class,"cashier_id","id");
    }
}
