<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class provider extends Model
{
    protected $primaryKey = "id";

    protected $table = "supplies";

    protected $fillable = [
        "name",
    ];

    public function supplies(){
        return $this->hasMany(Supply::class,"product_id","id");
    }


}
