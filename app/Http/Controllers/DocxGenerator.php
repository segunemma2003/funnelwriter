<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocxGenerator extends Controller
{
    public function generate_offer(Request $request)
    {
        return response()->download($request->all());
    }
}
