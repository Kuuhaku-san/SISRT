<?php

namespace App;



class Servicio extends Model
{
    public function proforma()
    {
        return $this->belongsTo(Proforma::class, 'codigo_p', 'codigo');
    }

    public function factura_servicio()
    {
        return $this->hasMany(FacturaServicio::class);
    }
}
