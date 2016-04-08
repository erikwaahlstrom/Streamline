<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderArticle extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id', 'article_id'
    ];

    public $timestamps = false;
}
