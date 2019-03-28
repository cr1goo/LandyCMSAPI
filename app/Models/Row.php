<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Row extends Model
{
    public function blocks(){
        return $this->hasMany(Block::class, 'row_id');
    }
}
