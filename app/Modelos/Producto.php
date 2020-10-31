<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'productos';

    public function Comentarios(){
        return $this->hasMany("App\Modelos\Comentarios");
    }
}
