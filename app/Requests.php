<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    public function products()
    {
        return $this->hasMany('Products', 'id', 'products_id');
    }

    public function board()
    {
        return $this->hasMany('Boards', 'id', 'boards_id');
    }
}
