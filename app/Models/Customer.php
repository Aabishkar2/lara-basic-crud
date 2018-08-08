<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public static function getAll() {
        return Customer::all();
    }

    public static function getDetail($id) {
        $condition['id'] = $id;
        return Customer::where($condition)->first();
    }
}
