<?php

namespace App\Http\Controllers\Advisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
class ResultPDFController extends Controller
{
    public function resultPDF()
    {
        $pdf = new \Mpdf\Mpdf([
            'default_font' => 'nikosh'
        ]);
        $data = [
            'foo' => 'bar'
        ];
        $pdf->WriteHTML(view('result-card-pdf'));
        $pdf->Output('test-pdf', 'I');
    }
    
}
