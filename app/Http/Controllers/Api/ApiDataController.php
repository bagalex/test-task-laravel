<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiDataController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = json_decode(file_get_contents(__DIR__ . '/apiResource/data.json'));

        return response()->json($response);
    }
}
