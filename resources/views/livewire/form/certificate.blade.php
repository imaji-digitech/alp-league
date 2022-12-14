<form wire:submit.prevent="{{$action}}">
    <x-form.input type="text" title="Judul sertifikat" model="data.title"/>
    <x-form.select :options="$optionSport" :selected="$data['sport_id']" title="Cabang olahraga" model="data.sport_id"/>
    <x-form.select :options="$optionSchool" :selected="$data['school_id']" title="Sekolah" model="data.school_id"/>
    <div class="form-group col-span-6 sm:col-span-5"></div>
    <button type="submit" id="submit" class="btn btn-primary">Submit</button>
</form>
