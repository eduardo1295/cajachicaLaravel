<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concepto extends Model
{
    use HasFactory;
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    protected $table = 'TbaConceptos';
    protected $primaryKey = 'IdConcepto';
}
