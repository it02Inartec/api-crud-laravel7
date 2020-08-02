<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;

class ClientController extends Controller
{
    public function index()
    {
        return Client::all();
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        $requestData = Client::create($requestData);
        //return [$requestData];
        return [
            'message' => "Cliente agregado exitosamente!",
            'error' => false
        ];
    }

    public function show($id)
    {
        return Client::findOrFail($id);
    }

    public function update($id, Request $request)
    {
        $client = Client::findOrFail($id);
        $client->fill($request->all());
        $client->save();
        //return [$client];
        if ($client->wasChanged()) {
            return [
                'message' => "Cliente actualizado exitosamente!",
                'error' => false
            ];
        } else {
            return [
                'message' => "Falló al actualizar cliente!",
                'error' => true
            ];
        }

    }

    public function destroy($id)
    {
        Client::destroy($id);
        return [
            'message' => "Cliente eliminado exitosamente!",
            'error' => false
        ];
    }
}
