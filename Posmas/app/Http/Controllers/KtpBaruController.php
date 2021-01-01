<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KtpBaru;
use App\Models\Permohonan;

class KtpBaruController extends Controller
{
    function createKtpBaru(Request $req)
    {
        $validatedData = $req->validate([
            'fotokopi_kk' => 'mimes:jpg,jpeg,png,pdf|max:2048',
            'fotokopi_akta' => 'mimes:jpg,jpeg,png,pdf|max:2048',
            'service_point' => 'required|max:100',
            'tanggal' => 'required|date',
        ]);

        $fileModel = new KtpBaru;

        $fileModel->nik = $this->getUser();
        $fileModel->jadwal = $req->tanggal;
        $fileModel->service_point = $req->service_point;
        $fileModel->status = "Berlaku";

        $this->insertToHistory($req->tanggal, $req->service_point);


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
        }
        $fileModel->save();

        return redirect('history')
            ->with('success', 'Permohonan anda berhasil disubmit.');
        // ->with('file', $fileNameOne);
    }

    private function getUser()
    {
        $this->user = auth()->user();
        return $this->user->nik;
    }

    private function insertToHistory($jadwal, $service_point)
    {
        $fileModel = new Permohonan;
        $fileModel->nik = $this->getUser();
        $fileModel->jadwal = $jadwal;
        $fileModel->service_point = $service_point;
        $fileModel->pelayanan = "Pembuatan KTP Baru";
        $fileModel->status = "Berlaku";
        $fileModel->save();
    }
}
