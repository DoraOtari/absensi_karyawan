<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ApiDaerahIndo extends Component
{
    public $provinsiId;

    public function provinsi()
    {
        return Http::retry(5,1000)->get('https://dev.farizdotid.com/api/daerahindonesia/provinsi')['provinsi'];
    }

    public function kota()
    {
        $id = explode('/',$this->provinsiId);
        return Http::get('https://dev.farizdotid.com/api/daerahindonesia/kota',['id_provinsi' => $id[0]])['kota_kabupaten'];
    }

    public function render()
    {
        return view('livewire.api-daerah-indo',[
            'provinsi' => $this->provinsi(),
            'kota' => $this->kota(),
         ]);
    }
}
