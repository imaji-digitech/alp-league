<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Support\Facades\App;

class CertificateController extends Controller {
    public function index()
    {
        return view('pages.certificate.index');
    }
    public function create()
    {
        return view('pages.certificate.create');
    }

    public function show($id)
    {
        $certificate = Certificate::whereSchoolId($id)->first();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pdf.certificate', compact('certificate'))->setPaper('a4', 'landscape');
        return $pdf->stream('certificate.pdf');
    }

    public function champion($id, $sport)
    {
        $certificate = Certificate::whereSchoolId($id)->whereSportId($sport)->first();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pdf.certificate', compact('certificate'))->setPaper('a4', 'landscape');
        return $pdf->stream('certificate.pdf');
    }

}
