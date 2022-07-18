<?php

namespace App\Http\Controllers\Api;

use App\Athlete;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AthletesController extends Controller
{
    public function index() {
        $athlets = Athlete::all();
        return response()->json([
            'success' => true,
            'results' => $athlets                      
        ]);
    }
}
