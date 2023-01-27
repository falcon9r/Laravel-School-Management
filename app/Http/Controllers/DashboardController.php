<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    public function show(): Factory|View|Application
    {

        $blade = 'teacher.dashboard';

        return view($blade);
    }
}
