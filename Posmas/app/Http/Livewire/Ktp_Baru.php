<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\KtpBaru;

class Ktp_Baru extends Component
{
    public $permohonan;

    public function render()
    {
        // $this->permohonan = Permohonan::all();
        return view('livewire.layanan_ktp_baru');
    }

    public function store()
    {
        $this->validate([
            ''
        ]);
    }
}
