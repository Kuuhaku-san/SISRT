<?php

namespace App;


class Cliente extends Model
{
    protected $primaryKey = 'ruc';
    protected $keyType = 'string';
    public $incrementing = false;

    public function proformas()
    {
        return $this->hasMany(Proforma::class);
    }
}
