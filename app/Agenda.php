<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $guarded = [];

    public function scopeResult($query, $resultado){
        if(trim($resultado) != "")
        {
            $query->where(\DB::raw("CONCAT(name, ' ', lastName, ' ', email)"), "LIKE", "%$resultado%");
        }
    }
}
