<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Http\RedirectResponse;
use \GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class APIController extends Controller
{
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getApi($nik = "1901030101010001")
    {
        $client = new client();
        // $body['headers']=array('')
        // $request = $client->get('localhost:4500/get');
        // dd(json_decode($request->getBody()));
        // try {
        $res = $client->get('http://localhost:4500/get', [
            'headers' => [
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
            'form_params' => [
                'nik' => $nik
            ]
        ]);
        // $res = json_decode($res->getBody()->getContents(), true);
        $res = json_decode($res->getBody()->getContents(), true);
        // dd($res->getStatusCode);
        // dd($res);
        // echo $res;
        if ($res != null) {
            $message = __('Your email has been verified.');

            return redirect('register');
            // return redirect('register')->with(['success' => 'Pesan Berhasil']);
            // return redirect('register')->with('status', $message);
        }
        // }
        // catch (GuzzleHttp\Exception\ClientException $e) {
        //         $response = $e->getResponse();
        //         $result =  json_decode($response->getBody()->getContents());

        //     return response()->json(['data' => $result]);

        //     }

        // }
    }
}
