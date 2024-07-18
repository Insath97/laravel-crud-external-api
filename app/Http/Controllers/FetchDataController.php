<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FetchDataController extends Controller
{
    public function fetchData()
    {
        $response = Http::get('http://127.0.0.1:8000/api/products');

        if ($response->successful()) {
            $data = $response->object()->data;

            return view('api-data.index', compact('data'));
        } else {
            // Handle error response
            return view('api_data_page', ['data' => null, 'error' => 'Failed to fetch data']);
        }
    }

    public function store()
    {
        return view('api-data.create');
    }

    public function edit(string $id)
    {
        $response = Http::get('http://127.0.0.1:8000/api/products/'.$id);

        if ($response->successful()) {
            $data = $response->object()->data;

            return view('api-data.edit', compact('data'));
        } else {
            // Handle error response
            return view('api_data_page', ['data' => null, 'error' => 'Failed to fetch data']);
        }
    }

}
