<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;  
use Illuminate\Support\Facades\Redirect;
use App\Models\Pdf;
use Illuminate\Support\Facades\Response;
use File;
use Illuminate\Support\Facades\Storage;

// use DB;
// use PDF;

class PdfController extends Controller
{
    //
    public function index(){
      $pdfs=Pdf::all();
      return view('welcome', compact('pdfs'));
    }
    
    public function addPdf(Request $request){
      
        if($request->file('pdf')){
           $file=$request->file('pdf');
           $filename=time().'.'.$file->getClientOriginalExtension();
        }

        $pdf=Pdf::create([
            'pdf'=>$path,
        ]);
        return Redirect::back();
    }

    public function downloadPdf($id){
        $pdf=Pdf::where('id', '=', $id)->first();
        // $headers = ['Content-Type: application/pdf'];
        // return Response::download($pdf->pdf);
        // $file = File::get(storage_path('app/'.$pdf->pdf));
        // dd($file);
        // return Storage::download(storage_path('app/'.$pdf->pdf));

        return response()->download(storage_path('app/'.$pdf->pdf));


        // return response()->download(File::get(storage_path('app/'.$pdf->pdf)));
    }
}
