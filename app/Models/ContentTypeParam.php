<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentTypeParam extends Model
{
    public function blockContentParams(){
        return $this->hasMany(BlockContentParam::class, 'content_type_param_id');
    }

    public function value(){
        return $this->hasOne(BlockContentParam::class);
    }
}
