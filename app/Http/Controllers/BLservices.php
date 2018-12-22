<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class BLservices extends Controller
{
    public function pdfForms(Request $request){
        return view('loan-form');
    }

    public function previewPdf(Request $request){
        //if($request->isMethod('post')){
            $data = [
                'name' => 'Mahmud Abdur Rahman'
            ];
            $pdf = PDF::loadView('pdf.format1', $data);
            return $pdf->stream('invoice.pdf');
        //}
    }

    public function downloadPdf(Request $request){
        if($request->isMethod('post')){
            $data = [
                'name' => 'Mahmud Abdur Rahman'
            ];
            $pdf = PDF::loadView('pdf.invoice', $data);
            return $pdf->download('invoice.pdf');
        }
    }

    public function mcaCalculator(Request $request){
        return view('calc.mca');
    }
}
