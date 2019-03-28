<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tab extends Model
{
    public function rows(){
        return $this->hasMany(Row::class, 'tab_id');
    }
}
