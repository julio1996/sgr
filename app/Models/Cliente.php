<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table= "clientes"; //se define la tabla

    public function persona() //se llama a la funcion
    {
    	return $this->BelongsTo("App\Models\Persona"); 
    	//se llama al modelo y se lo relaciona
    }
}
