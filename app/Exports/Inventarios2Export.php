<?php

namespace App\Exports;

use App\Models\inventario; 
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class inventarios2Export implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        return view('InventarioReportes.excel2', [
            'invs' => inventario::where('cantidadActual','<=',10)->get()
        ]);
    }
    
  
}
