<?php

namespace Konnec\Debugging\Controllers;

use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('debugging::index');
    }
}
