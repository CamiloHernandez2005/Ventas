<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Venta;

class Ventas extends Component
{
     public $ventas, $id_cliente, $id_venta, $fecha, $numero_factura, $vendedor, $forma_pago, $valor, $observaciones,$total_bruto,$total_impcargo, $total_neto, $valor_total;
     public $modal=false;
     public function render()
    {
        $this->ventas=Venta::all();
        return view('livewire.ventas');
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
        $this-> id_venta = '';
        $this-> id_cliente = '';
        $this-> fecha = '';
        $this-> numero_factura = '';
        $this-> vendedor = '';
        $this-> forma_pago = '';
        $this-> valor = '';
        $this-> observaciones = '';
        $this-> total_bruto = '';
        $this-> total_impcargo = '';
        $this-> total_neto = '';
        $this-> valor_total = '';
    }

    public function editar($id)
    {
        $venta= Venta::findOrFail($id);
        $this->id_venta =$id;
        $this-> id_cliente =$venta->id_cliente;
        $this-> fecha = $venta -> fecha;
        $this-> numero_factura = $venta -> numero_factura;
        $this-> vendedor = $venta -> vendedor;
        $this-> forma_pago = $venta -> forma_pago;
        $this-> valor = $venta -> valor;
        $this-> observaciones = $venta -> observaciones;
        $this-> total_bruto = $venta -> total_bruto;
        $this-> total_impcargo = $venta -> total_impcargo;
        $this-> total_neto = $venta -> total_neto;
        $this-> valor_total = $venta -> valor_total;
        $this->abrirModal();
    }
    
    public function borrar($id)
    {
        Venta::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        Venta::updateOrCreate(['id'=>$this->id_venta],
            [
                'id_cliente' => $this->id_cliente,
                'fecha' => $this->fecha,
                'numero_factura' => $this->numero_factura,
                'vendedor' => $this->vendedor,
                'forma_pago' => $this->forma_pago,
                'valor' => $this->valor,
                'observaciones' => $this->observaciones,
                'total_bruto' => $this->total_bruto,
                'total_impcargo' => $this->total_impcargo,
                'total_neto' => $this->total_neto,
                'valor_total' => $this->valor_total
            ]);
         
         session()->flash('message',
            $this->id_venta ? '¡Actualización exitosa!' : '¡Actualización Exitosa!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }



}