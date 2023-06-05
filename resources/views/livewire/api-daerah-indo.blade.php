<div class="row">
    <div class="mb-3 col-lg-6">
        <label for="" class="form-label">Provinsi</label>
        <select class="form-select" name="provinsi" wire:model="provinsiId" wire:change="kota">
            <option selected value="null">--pilih satu--</option>
            @foreach ($provinsi as $array)
                <option value="{{ $array['id'].'/'.$array['nama'] }}">{{ $array['nama'] }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 col-lg-6">
        <label for="" class="form-label">Kota</label>
        <select class="form-select" name="kota">
            <option selected disabled>--pilih jabatan--</option>
            @foreach ($kota as $array)
              <option value="{{ $array['id'].'/'.$array['nama'] }}">{{ $array['nama'] }}</option>
            @endforeach
        </select>
    </div>
</div>