<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asmaulhusna;

class AsmaulHusnaController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:api');
    }


    public function index()
    {
        if (!auth()->check()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    
        $asmaulhusna = Asmaulhusna::all();
    
        if ($asmaulhusna->isEmpty()) {
            return response()->json(['message' => 'Data not found.'], 404);
        }
    
        return response()->json($asmaulhusna, 200);
    }
    
}
