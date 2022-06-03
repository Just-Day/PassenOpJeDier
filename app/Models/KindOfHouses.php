<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KindOfHouses extends Model
{
    protected $table = "kind_of_houses";

    public function allHouses(){
        return $this->hasMany('\App\Models\House, "kind', "kind");
    }
}
