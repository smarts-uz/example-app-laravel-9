<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AppendGridController extends Controller
{
    /**
     * @param $name
     * @return Application|Factory|View
     */
    public function view($name): View|Factory|Application
    {
        Log::info('AppendGridControllerView',['blade' => $name]);
        return view($name);
    }
}
