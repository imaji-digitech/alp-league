<form wire:submit.prevent="upload" class="row">
    <div class="col-sm-12 col-xl-12 col-lg-12" style="font-size: 1.2rem">
        Upload surat pernyataan dan pendaftaran
        @if(auth()->user()->school->upload1!=null)
            <span style="color: green">(sudah terupload)</span>
        @endif
    </div>
    <div class="col-sm-12 col-xl-8 col-lg-8">
        <x-form.input type="file" title="" model="upload" accept="image/*"/>
        <div wire:loading wire:target="upload">
            Proses upload
        </div>
    </div>
    <div class="col-sm-12 col-xl-4 col-lg-4">
        <button href="" class="btn btn-primary" style="width: 100%">Submit</button>
    </div>
    <div class="col-sm-12 col-xl-12 col-lg-12">
        @if($upload)
            @if($upload->getClientOriginalExtension()=="jpg" or $upload->getClientOriginalExtension()=="jpeg" or $upload->getClientOriginalExtension()=="png")
                @if($upload)
                    <img src="{{$upload->temporaryUrl()}}" alt="" style="max-height: 300px">
                @elseif(auth()->user()->school->upload2!=null)
                    <img src="{{ asset('storage/'.auth()->user()->school->upload2) }}" alt="" style="max-height: 300px">
                @endif
            @else
                Mohon upload dengan format yang sesuai(png,jpeg,jpg)
            @endif
        @endif
    </div>
</form>
