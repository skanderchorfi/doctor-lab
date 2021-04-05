<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;

    protected $fillable = [
        'titre',
        'contenu'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}