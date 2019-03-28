<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentType extends Model
{
    public function blocks(){
        return $this->belongsToMany(Block::class, 'blocks_contents');
    }

    public function params(){
        return $this->hasMany(ContentTypeParam::class);
    }
}
