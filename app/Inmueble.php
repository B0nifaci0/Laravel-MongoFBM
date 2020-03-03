<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Inmueble extends Eloquent
{
    protected $collection = 'imuebles';
    protected $primaryKey = '_id';





}
