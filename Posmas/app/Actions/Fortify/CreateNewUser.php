<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use Illuminate\Routing\Controller;
use Illuminate\Http\RedirectResponse;

use \GuzzleHttp\Client;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'nik' => ['required', 'string', 'max:255', 'unique:users'],
            'no_kk' => ['required', 'string', 'max:255', 'unique:users'],
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'no_telp' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();

        $nik = $input['nik'];
        // dd($nik);
        $client = new client();
        $res = $client->get('http://localhost:4500/get', [
            'headers' => [
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
            'form_params' => [
                'nik' => $nik
            ]
        ]);
        $res = json_decode($res->getBody()->getContents(), true);
        // dd($res->getStatusCode);
        // dd($res);

        if ($res != null) {
            return User::create([
                'nik' => $input['nik'],
                'no_kk' => $input['no_kk'],
                'nama' => $input['nama'],
                'email' => $input['email'],
                'no_telp' => $input['no_telp'],
                'password' => Hash::make($input['password']),
            ]);
        } else {
            redirect('register');
            // back()->withInput();
            return;
        }
    }
}
