<?php

namespace App;



class FacturaServicio extends Model
{
    public function total()
    {
        return 100;
    }

    public function anular()
    {
        $this->anulado = true;
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'dni_u', 'dni');
    }
}
