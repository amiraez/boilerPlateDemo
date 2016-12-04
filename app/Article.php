<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = "articles";
    public $translatedAttributes = ['name', 'text'];
}
