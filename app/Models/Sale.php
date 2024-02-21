<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = ['dates','bill_numbers','sellers','payments_methods','observations','discounts_total','gross_totals','taxes_total','net_total','values_total'];
}
