<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comentarios';
    
    public function productos(){
        return $this->belongsTo("App\Modelos\Producto");
    }

    public function users(){
        return $this->belongsTo("App\User");
    } 

}
