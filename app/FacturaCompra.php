<?php

namespace App;



class FacturaCompra extends Model
{
    public function servicio()
    {
        return $this->belongsTo(Servicio::class);
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'ruc_p', 'ruc');
    }

    public function total()
    {
        return 100;
    }
}
