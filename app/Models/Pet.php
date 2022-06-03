<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = 'pet';
    public $timestamps = false;

    public function kindModel(){
        return $this-belongsTo("\App\Models\KindOfPet", "kind", "kind");
    }
}
