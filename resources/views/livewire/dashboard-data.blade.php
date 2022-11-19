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

    </div>

</div>
