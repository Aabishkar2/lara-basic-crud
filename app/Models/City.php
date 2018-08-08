<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public static function getAll() {
        return City::all();
    }

    public static function getDetail($id) {
        $condition['id'] = $id;
        return City::where($condition)->first();
    }
}
