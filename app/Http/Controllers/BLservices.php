<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class BLservices extends Controller
{
    public function pdfForms(){
        $data = [
            'name' => 'Mahmud Abdur Rahman'
        ];
        $pdf = PDF::loadView('pdf.invoice', $data);
        return $pdf->download('invoice.pdf');
    }
}
