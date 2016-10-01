<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Xeber;

class Category extends Model
{
    public function xeber(){

    	return $this->hasMany(Xeber::class);

    }
}
