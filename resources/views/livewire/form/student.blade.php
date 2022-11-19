<form wire:submit.prevent="{{$action}}">
    <x-form.input type="text" title="Nama siswa" model="data.name"/>
    <x-form.input type="text" title="NISN siswa" model="data.nisn"/>
    <x-form.input type="text" title="Tempat lahir" model="data.place_birth"/>
    <x-form.input type="date" title="Tanggal lahir" model="data.date_birth"/>
    <x-form.input type="text" title="Nama ibu kandung" model="data.mother_name"/>
    <x-form.select :options="$optionSport" :selected="$data['sport_id']" title="Cabang olahraga" model="data.sport_id"/>
    <x-form.input type="file" title="Foto halaman pertama" model="thumbnail" accept="image/*"/>
    <div wire:loading wire:target="thumbnail">
        Proses upload
    </div>
    @if($action=='create')
        @if($thumbnail)
            <img src="{{$thumbnail->temporaryUrl()}}" alt="" style="max-height: 300px">
        @endif
    @else
        @if($thumbnail)
            <img src="{{$thumbnail->temporaryUrl()}}" alt="" style="max-height: 300px">
        @else
            <img src="{{asset('storage/'.$this->data['report'])}}" alt="" style="max-height: 300px">
        @endif
    @endif
    <div class="form-group col-span-6 sm:col-span-5"></div>
    <button type="submit" id="submit" class="btn btn-primary">Submit</button>
</form>
