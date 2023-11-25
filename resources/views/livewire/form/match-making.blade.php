<form wire:submit.prevent="{{$action}}">

    <div class="row">

        <div class="col-sm-12 card bg-success">
            <div class="row p-3">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <x-form.select :options="$optionTeam" title="Team A" :selected="$data['school1_id']"
                                   model="data.school1_id"/>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-12" style="text-align: center">
                    <br>
                    <h1>VS</h1>
                </div>

                <div class="col-lg-5 col-md-5 col-sm-12">
                    <x-form.select :options="$optionTeam" title="Team B" :selected="$data['school2_id']"
                                   model="data.school2_id"/>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            <x-form.select :options="$optionSport" title="Cabang Olahraga" :selected="$data['sport_id']"
                           model="data.sport_id"/>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            <x-form.input model="data.date_match" title="Tanggal" type="datetime-local"/>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            <x-form.input model="data.supervisor" title="Pengawas Pertandingan" type="text"/>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <x-form.input model="data.title" title="Pertandingan" type="text"/>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <x-form.input model="data.reference_to" title="Jika menang ke kunci mana" type="text"/>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <button type="submit" id="submit" class="btn btn-success" style="width: 100%">Submit</button>
        </div>
    </div>
</form>
