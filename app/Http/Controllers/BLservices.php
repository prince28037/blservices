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
        if($request->isMethod('post')){
            $data = [
                'name' => 'Mahmud Abdur Rahman'
            ];
            $pdf = PDF::loadView('pdf.bcaapplicationdk', $data);
            return $pdf->setPaper('letter', 'portrait')
                ->stream('invoice.pdf');
            //return view('pdf.bcaapplicationdk');
        }
    }

    public function downloadPdf(Request $request){
        if($request->isMethod('post')){
            $data = [
                'name' => 'Mahmud Abdur Rahman'
            ];
            $pdf = PDF::loadView('pdf.bcaapplicationdk', $data);
            return $pdf->setPaper('a4', 'landscape')
                ->download('invoice.pdf');
        }
    }

    public function mcaCalculator(Request $request){
        return view('calc.mca');
    }
}
