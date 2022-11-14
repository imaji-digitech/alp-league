<?php

namespace App\Http\Livewire\Table;

use App\Models\GoodReceipt;
use App\Models\Invoice;
use App\Models\Material;
use App\Models\MaterialMutation;
use App\Models\Receipt;
use App\Models\TravelPermit;
use Exception;
use http\Client;

class Report extends Main
{

    public function report()
    {
        $client = new Client();
        try {
            $report = \App\Models\Report::create(['user_id' => auth()->id(), 'note' => $this->note,]);
            $material = Material::get();
            $travel = TravelPermit::whereReportId(null);
            $invoice = Invoice::whereReportId(null);
            $good = GoodReceipt::whereReportId(null);
            $receipt = Receipt::whereReportId(null);
            $mutation = MaterialMutation::whereReportId(null);

            $travel->update(['report_id' => $report->id]);
            $invoice->update(['report_id' => $report->id]);
            $good->update(['report_id' => $report->id]);
            $receipt->update(['report_id' => $report->id]);
            $mutation->update(['report_id' => $report->id]);

            $travel = TravelPermit::whereReportId($report->id);
            $invoice = Invoice::whereReportId($report->id);
            $good = GoodReceipt::whereReportId($report->id);
            $receipt = Receipt::whereReportId($report->id);
            $mutation = MaterialMutation::whereReportId($report->id);

            $array = [
                'report' => $report->toArray(),
                'material' => $material->toArray(),
                'travel-permit' => $travel->with('travelPermitDetails')->get()->toArray(),
                'invoice' => $invoice->with('invoiceDetails')->get()->toArray(),
                'good' => $good->with('goodReceiptDetails')->get()->toArray(),
                'receipt' => $receipt->with('receiptDetails')->get()->toArray(),
                'mutation' => $mutation->get()->toArray(),
            ];

            $encode = json_encode($array);
            $request = $client->post("http://recycle-hub.imajisociopreneur.id/api/report",
                array(
                    'form_params' => array(
                        'log' => $encode,
                    )
                )
            );
            $response = $request->getBody();
            $this->emit('swal:alert', [
                'type' => 'success',
                'title' => $response,
                'timeout' => 3000,
                'icon' => 'success'
            ]);

            $this->emit('redirect', route('report.index'));
        } catch (Exception $e) {
            $this->emit('swal:alert', [
                'type' => 'success',
                'title' => "data tidak berhasil di input",
                'timeout' => 3000,
                'icon' => 'success'
            ]);
        }
    }
}
