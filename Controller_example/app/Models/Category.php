<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use function PHPUnit\Framework\returnArgument;

class Category extends Model
{


    protected $fillable = [

        'category_id',
        'category_name',
        



    ];


    public function products()
    {

        return $this->hasMany(product::class);

    }





}
