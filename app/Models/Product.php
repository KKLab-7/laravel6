<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static function productPagenator(Request $request)
    {
        $query = Product::find($request->id);
        return $query;
    }
}
