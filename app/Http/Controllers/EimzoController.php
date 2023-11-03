<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class EimzoController extends Controller
{
    /**
     * @return View
     */
    public function view() : View
    {
        Log::info('EimzoControllerView',['blade' => 'eimzologin']);
        return view('eimzologin');
    }
}
