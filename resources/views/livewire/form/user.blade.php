<form wire:submit.prevent="{{$action}}">
    <x-form.input type="text" title="Nama Sekolah" model="data.name"/>
    <x-form.input type="text" title="Email Sekolah" model="data.email"/>
    <x-form.input type="password" title="Password" model="data.password"/>
    <x-form.input type="password" title="Konfirmasi Password" model="data.password_confirmation"/>
    <x-form.input type="text" title="Nama Desa" model="data.village"/>
    <div class="form-group col-span-6 sm:col-span-5"></div>
    <button type="submit" id="submit" class="btn btn-primary">Submit</button>
</form>
