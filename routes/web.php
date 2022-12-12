<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\GoodReceiptController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MatchMakingController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\TravelPermitController;
use App\Models\Certificate;
use App\Models\GoodReceipt;
use App\Models\Invoice;
use App\Models\MatchMaking;
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
Route::get('register', function () {
    return redirect(route('login'));
});

Route::post('/summernote', [SupportController::class, 'upload'])->name('summernote');
Route::middleware(['auth:sanctum',])->group(function () {

    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('bagan', function () {
        return view('bagan');
    })->name('bagan');

    Route::resource('match-making', MatchMakingController::class)->only('index','show','create','edit');

    Route::get('match-making/download/{id}', function ($id) {
        $match= MatchMaking::findOrFail($id);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pdf.presence-match', compact('match'))->setPaper('a4');
        return $pdf->stream($match->sport->title.'-'.$match->title.'.pdf');
    })->name('match-making.download');



    Route::resource('certificate', CertificateController::class)->only('index','create');
    Route::get('certificate/school/{schoolId}',[CertificateController::class,'show'])->name('certificate.show');
    Route::get('certificate/champion/{schoolId}/{sportId}',[CertificateController::class,'champion'])->name('certificate.champion');


//    Route::get('/setCertificate',function (){
////        'sport_id', 'school_id', 'title', 'created_at', 'updated_at'
//        $c= Certificate::create(['school_id' => 44, 'title' =>'peserta']);
//        $school=School::find(44);
//        foreach ($school->students as $a){
//            $count=\App\Models\CertificateDetail::get()->count()+405;
//            \App\Models\CertificateDetail::create(['student_id'=>$a->id, 'certificate_id'=>$c->id,'number'=>"13.$count.A/XII/2022",]);
//        }
//    });

//    Route::get('certificate', function () {
//        $pdf = App::make('dompdf.wrapper');
//        $pdf->loadView('pdf.certificate')->setPaper('a4','landscape');
//        return $pdf->stream('certificate.pdf');
//    })->name('match-making.download');


//    Route::get('pdf', function () {
//        $school= School::get();
//        $pdf = App::make('dompdf.wrapper');
//        $pdf->loadView('pdf.presence', compact('school'))->setPaper('a4');
//        return $pdf->stream('nota-pembayaran.pdf');
////        return view('pdf.presence');
//    });


    Route::get('/school', function (){
        if(auth()->user()->school_id!=null){
            abort(403);
        }
        return view('pages.school.index');
    })->name('school');

    Route::get('/school/{id}', function ($id){
        if(auth()->user()->school_id!=null){
            abort(403);
        }
        return view('pages.school.show',compact('id'));
    })->name('school.show');

    Route::get('/student-all', function (){
        if(auth()->user()->school_id!=null){
            abort(403);
        }
        return view('pages.student.all');
    })->name('student.all');

    Route::get('/student', function (){
        return view('pages.student.index');
    })->name('student.index');
//
    Route::get('/student/create', function (){
        if(auth()->user()->school_id!=null){
            return redirect()->route('dashboard');
        }
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
        if(auth()->user()->school_id!=null){
            abort(403);
        }
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
        return view('show-image',compact('url','title'));
    })->name('show.surat-perwalian');
});
