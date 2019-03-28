<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class TestController extends Controller
{
    //
    public function index(Request $r){
        // return $r;
        return Models\Block::find($r->value)->contentTypes[0]->params[1]->value['value'];
    }
}
