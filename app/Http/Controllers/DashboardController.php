<?php

namespace App\Http\Controllers;

use Inertia\Response;
use Inertia\Inertia;

use function Termwind\render;

class DashboardController extends Controller
{
    public function show(): Response {
        return Inertia::render('Dashboard');
    }
}
