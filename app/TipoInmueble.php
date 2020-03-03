<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class TipoInmueble extends Eloquent
{
    
    protected $collection = 'tipos_inmueble';
    protected $primaryKey = '_id';
}
