<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacturaServicio extends Model
{
    public function servicio()
    {
        return $this->belongsTo(Servicio::class);
    }
}
