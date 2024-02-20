<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $fillable = ['id_cliente','fecha','numero_factura','vendedor','forma_pago','valor','observaciones','total_bruto','total_impcargo','total_neto','valor_total'];
}
