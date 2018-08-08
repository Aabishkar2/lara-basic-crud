<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public static function getAll() {
        return Country::all();
    }

    public static function getDetail($id) {
        $condition['id'] = $id;
        return Country::where($condition)->first();
    }
}
