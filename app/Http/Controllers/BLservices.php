<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class BLservices extends Controller
{
    public function pdfForms(Request $request){
        if($request->isMethod('post')){
            $data = [
                'name' => 'Mahmud Abdur Rahman'
            ];
            $pdf = PDF::loadView('pdf.invoice', $data);
            return $pdf->download('invoice.pdf');
        }
        return view('loan-form');
    }

    public function mcaCalculator(Request $request){
        return view('calc.mca');
    }
}
