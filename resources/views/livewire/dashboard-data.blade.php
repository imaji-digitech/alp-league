<div>
    <div class="row">
        <div class="col-sm-6 col-xl-6 col-lg-6">
            <x-simple-card icon="user" title="Siswa anda yang mengikuti ALP League" color="bg-primary"
                           :value="$generalData['student']"/>
        </div>

        <div class="col-sm-6 col-xl-6 col-lg-6">
            <x-simple-card icon="users" title="Siswa yang mengikuti ALP League" color="bg-secondary"
                           :value="$generalData['studentAll']"/>
        </div>

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


    </div>

</div>
