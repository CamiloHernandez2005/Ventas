<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Sale;

class Sales extends Component
{
    public $sales, $sail_id, $dates, $bill_numbers, $sellers, $payments_methods, $observations ,$discounts_total ,$gross_totals,$taxes_total, $net_total, $values_total;
    public $modal=false;
    public function render()
    {
        $this->sales=Sale::all();
        return view('livewire.sales');
    }

public function crear()
{
    $this->limpiarCampos();
    $this->abrirModal();
}

public function abrirModal(){
    $this-> modal = true;
}

public function cerrarModal(){
    $this-> modal = false;
}

public function limpiarCampos(){
    $this-> sail_id = '';
    $this-> dates = '';
    $this-> bill_numbers = '';
    $this-> sellers = '';
    $this-> payments_methods = '';
    $this-> observations = '';
    $this-> discounts_total = '';
    $this-> gross_totals = '';
    $this-> taxes_total = '';
    $this-> net_total = '';
    $this-> values_total = '';
}

public function editar($id)
{
    $sale= Sale::findOrFail($id);
    $this->sail_id =$id;
    $this-> dates = $sale -> dates;
    $this-> bill_numbers = $sale -> bill_numbers;
    $this-> sellers = $sale -> sellers;
    $this-> payments_methods = $sale -> payments_methods;
    $this-> observations = $sale -> observations;
    $this-> discounts_total = $sale -> discounts_total;
    $this-> gross_totals = $sale -> gross_totals;
    $this-> taxes_total = $sale -> taxes_total;
    $this-> net_total = $sale -> net_total;
    $this-> values_total = $sale -> values_total;
    $this->abrirModal();
}

public function borrar($id)
{
    Sale::find($id)->delete();
    session()->flash('message', 'Registro eliminado correctamente');
}

public function guardar()
{
    Sale::updateOrCreate(['id'=>$this->sail_id],
        [
            'dates' => $this->dates,
            'bill_numbers' => $this->bill_numbers,
            'sellers' => $this->sellers,
            'payments_methods' => $this->payments_methods,
            'observations' => $this->observations,
            'discounts_total' => $this->discounts_total,
            'gross_totals' => $this->gross_totals,
            'taxes_total' => $this->taxes_total,
            'net_total' => $this->net_total,
            'values_total' => $this->values_total
        ]);
     
     session()->flash('message',
        $this->sail_id  ? '¡Actualización exitosa!' : '¡Actualización Exitosa!');
     
     $this->cerrarModal();
     $this->limpiarCampos();
}



}