<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ServiceController\service;

class mainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return service::getItem();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return service::addItem($request);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        return service::updateItem($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        return service::deleteItem($request);
    }
}
