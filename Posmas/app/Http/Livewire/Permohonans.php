<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Permohonan;

use Illuminate\Support\Facades\Auth;
use \GuzzleHttp\Client;

class Permohonans extends Component
{
    public $permohonan;
    public $modal = 0;
    private $client;
    private $user;
    private $res;

    public function render()
    {
        $this->permohonan = Permohonan::all();
        return view('livewire.history_permohonan');
    }

    public function getBiodata()
    {
        $user = auth()->user();
        $client = new client();
        $res = $client->get('http://localhost:4500/get', [
            'headers' => [
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
            'form_params' => [
                'nik' => $user->nik
            ]
        ]);
        $res = json_decode($res->getBody()->getContents(), true);

        return $res;
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
