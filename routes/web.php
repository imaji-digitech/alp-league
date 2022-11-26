<?php

use App\Http\Controllers\DriverController;
use App\Http\Controllers\GoodReceiptController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\TravelPermitController;
use App\Models\GoodReceipt;
use App\Models\Invoice;
use App\Models\Material;
use App\Models\MaterialMutation;
use App\Models\Receipt;
use App\Models\Report;
use App\Models\School;
use App\Models\TravelPermit;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
});
Route::get('test/{a}', function ($a) {
    dd($a);
});

Route::post('/summernote', [SupportController::class, 'upload'])->name('summernote');
Route::middleware(['auth:sanctum',])->group(function () {

    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/school', function (){
        return view('pages.school.index');
    })->name('school');

    Route::get('/school/{id}', function ($id){
        return view('pages.school.show',compact('id'));
    })->name('school.show');

    Route::get('/student-all', function (){
        return view('pages.student.all');
    })->name('student.all');

    Route::get('/student', function (){
        return view('pages.student.index');
    })->name('student.index');

    Route::get('/student/create', function (){
        return view('pages.student.create');
    })->name('student.create');

    Route::get('/student/edit/{id}', function ($id){
        return view('pages.student.edit',compact('id'));
    })->name('student.edit');

    Route::get('/download/surat-pernyataan-dan-pendaftaran-alp-league-kabupaten-2022',function (){
        return response()->download('alp-league/surat-pernyataan-dan-pendaftaran-alp-league-kabupaten-2022.docx');
    })->name('download.surat-pernyataan-dan-pendaftaran-alp-league-kabupaten-2022');
    Route::get('/download/surat-perwalian-alp-league-kabupaten-2022',function (){
        return response()->download('alp-league/surat-perwalian-alp-league-kabupaten-2022.docx');
    })->name('download.surat-perwalian-alp-league-kabupaten-2022');

    Route::get('/download', function () {
        $school= School::get();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pdf.id-password', compact('school'))->setPaper('a4','landscape');
        return $pdf->stream('nota-pembayaran.pdf');
    })->name('receipt.download');


    Route::get('download/surat-pernyataan-dan-pendaftaran/{id}',function ($id){
        return response()->download(storage_path("app/public/" . School::findOrFail($id)->upload1));
    })->name('download.surat-pernyataan-dan-pendaftaran');
    Route::get('show/surat-pernyataan-dan-pendaftaran/{id}',function ($id){
        $title="Surat Pernyataan dan Pendaftaran dari ".School::findOrFail($id)->name;
        $url='storage/'.School::findOrFail($id)->upload1;
        return view('show-image',compact('url','title'));
    })->name('show.surat-pernyataan-dan-pendaftaran');

    Route::get('download/surat-perwalian/{id}',function ($id){
        return response()->download(storage_path("app/public/" . School::findOrFail($id)->upload2));
    })->name('download.surat-perwalian');
    Route::get('show/surat-perwalian/{id}',function ($id){
        $title="Surat Perwalian dari ".School::findOrFail($id)->name;
        $url='storage/'.School::findOrFail($id)->upload2;
        return view('show-image',compact('url',$title));
    })->name('show.surat-perwalian');
});
