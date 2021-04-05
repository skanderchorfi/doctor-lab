<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    protected $fillable = [
        'nom'
    ];

    public function articles() {
        return $this->hasMany(Article::class);
    }
}
