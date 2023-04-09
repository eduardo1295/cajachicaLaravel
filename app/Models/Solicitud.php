<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    protected $table = 'TbaSolicitudesTdasWEB';
    protected $primaryKey = 'IdSolicitud';
}
