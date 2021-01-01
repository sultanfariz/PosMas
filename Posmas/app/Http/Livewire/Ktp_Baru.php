<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\KtpBaru;

class Ktp_Baru extends Component
{
    public $permohonan;
    public $ktpBaruId;
    public $nik, $jadwal, $service_point, $fotokopi_kk_path, $fotokopi_akta_path, $status;

    public function render()
    {
        // $this->permohonan = Permohonan::all();
        return view('livewire.layanan_ktp_baru');
    }

    public function store(Request $req)
    {
        $validatedData = $this->validate('$req', [
            'fotokopi_kk' => 'jpg,png,jpeg,pdf|max:2048',
            'fotokopi_akta' => 'jpg,png,jpeg,pdf|max:2048',
            'jadwal' => 'required|date',
            'service_point' => 'required|max:100',
        ]);

        $fileModel = new KtpBaru;

        if ($req->file()) {
            $fileNameOne = time() . '_' . $req->fotokopi_kk->getClientOriginalName();
            $filePathOne = $req->file('fotokopi_kk')->storeAs('files', $fileNameOne, 'public');
            $fileNameTwo = time() . '_' . $req->fotokopi_akta->getClientOriginalName();
            $filePathTwo = $req->file('fotokopi_akta')->storeAs('files', $fileNameTwo, 'public');

            // $fileModel->name = time() . '_' . $req->file->getClientOriginalName();
            $fileModel->fotokopi_kk_path = '/storage/' . $filePathOne;
            $fileModel->fotokopi_akta_path = '/storage/' . $filePathTwo;
            $fotokopi_kk_path = '/storage/' . $filePathOne;
            $fotokopi_akta_path = '/storage/' . $filePathTwo;
            $fileModel->save();

            // return back()
            //     ->with('success', 'File has been uploaded.')
            //     ->with('file', $fileNameOne);
        }

        KtpBaru::updateOrCreate(['id' => $this->ktpBaruId], [
            'nik' => $this->nik,
            'jadwal' => $this->jadwal,
            'service_point' => $this->service_point,
            'fotokopi_kk_path' => $this->fotokopi_kk_path,
            'fotokopi_akta_path' => $this->fotokopi_akta_path,
            'status' => $this->status
        ]);

        $this->ktpBaruId = '';
        $this->nik = '';
        $this->jadwal = '';
        $this->service_point = '';
        $this->fotokopi_kk_path = '';
        $this->fotokopi_akta_path = '';
        $this->status = '';

        // $path_one = $req->file('fotokopi_kk')->store('public/files');
        // $path_two = $req->file('fotokopi_akta')->store('public/files');

        // $save = new KtpBaru;
        // $save->;
    }
}
