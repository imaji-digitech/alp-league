<div class="row">
    @if (auth()->user()->school->upload1!=null or auth()->user()->school->upload2!=null)
    <div class="col-sm-6 col-xl-6 col-lg-6">
        <a class="btn btn-secondary" style="width: 100%"
           href="{{route('download.surat-pernyataan-dan-pendaftaran-alp-league-kabupaten-2022')}}" target="_blank">
            Download Disini <br> Template surat pernyataan dan pendaftaran
        </a>
    </div>
    <div class="col-sm-6 col-xl-6 col-lg-6">
        <a class="btn btn-secondary" style="width: 100%"
           href="{{route('download.surat-perwalian-alp-league-kabupaten-2022')}}" target="_blank">
            Download Disini <br> Template surat perwalian
        </a>
    </div>

    <div class="col-sm-6 col-xl-6 col-lg-6 m-t-25">
        <livewire:upload1/>
    </div>
    <div class="col-sm-6 col-xl-6 col-lg-6 m-t-25">
        <livewire:upload2/>
    </div>
        @endif

</div>
