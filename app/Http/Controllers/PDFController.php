<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $data = [
            'title' => '',
            'date' => date('m/d/Y')
        ];
          s
        $pdf = PDF::loadView('home', $data);
    
        return $pdf->download('');
    }
}