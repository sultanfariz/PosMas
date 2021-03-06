<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Permohonan;

use Illuminate\Support\Facades\Auth;
use \GuzzleHttp\Client;

class Permohonans extends Component
{
    public $permohonan;
    public $biodata;
    public $modal = 0;
    private $client;
    private $user;
    private $res;

    public function render()
    {
        $this->user = auth()->user();
        $this->permohonan = Permohonan::where('nik', $this->user->nik)->get();
        // $this->user = auth()->user();
        // $this->client = new client();
        // $this->res = $this->client->get('http://localhost:4500/get', [
        //     'headers' => [
        //         'Content-Type' => 'application/x-www-form-urlencoded',
        //     ],
        //     'form_params' => [
        //         'nik' => $this->user->nik
        //     ]
        // ]);
        // $this->biodata = json_decode($this->res->getBody()->getContents(), true);
        // return $res;
        $this->getBiodata();
        // dd($this->biodata);
        return view('livewire.history_permohonan');
    }

    public function getBiodata()
    {
        $this->user = auth()->user();
        $this->client = new client();
        $this->res = $this->client->get('http://localhost:4500/get', [
            'headers' => [
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
            'form_params' => [
                'nik' => $this->user->nik
            ]
        ]);

        $this->biodata = json_decode($this->res->getBody()->getContents(), true);
        // return $this->biodata;
    }

    public function showModal()
    {
        $this->modal = 1;
    }
    public function hideModal()
    {
        $this->modal = 0;
    }
}
