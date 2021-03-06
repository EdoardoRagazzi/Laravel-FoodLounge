<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function foods() {
        return $this->belongsToMany(Food::class)->withPivot('food_units');
    }
}
