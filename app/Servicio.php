<?php

namespace App;



class Servicio extends Model
{
    public function estado()
    {
        return ($this->terminado) ? 'Terminado' : 'Pendiente';
    }

    public function proforma()
    {
        return $this->belongsTo(Proforma::class, 'codigo_p', 'codigo');
    }

    public function factura_servicio()
    {
        return $this->hasMany(FacturaServicio::class);
    }

    public function factura_compra()
    {
        return $this->hasOne(FacturaCompra::class);
    }
}
