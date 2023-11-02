<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class JamController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function getJam()
    {

        if (!auth()->check()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    
        

        $now = Carbon::now();
        return response()->json(['jam' => $now->format('H'), 'menit' => $now->format('i')], 200);
    }
}
