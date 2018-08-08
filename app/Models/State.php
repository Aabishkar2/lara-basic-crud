<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public static function getAll() {
        return State::all();
    }

    public static function getDetail($id) {
        $condition['id'] = $id;
        return State::where($condition)->first();
    }
}
