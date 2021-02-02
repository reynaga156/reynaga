<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function tipo() {
        return $this->belongsTo('App\Tipo', 'tipo_id');
    }

    public function proveedor() {
        return $this->belongsTo('App\Proveedor', 'prove_id');
    }
    protected $fillable = [
     'nombre','cantidad','compra','venta','venc','prod','tipo_id','prove_id'
    ];
}
