<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientService;
use Illuminate\Http\Request;

class AdminClientServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd(Client::find(2));

        return view('admin.clientservice.list',[
            'records' => ClientService::getRecords()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ClientService $clientService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClientService $clientService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClientService $clientService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClientService $clientService)
    {
        //
    }
}
