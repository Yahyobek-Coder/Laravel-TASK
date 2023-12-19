<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PharIo\Manifest\ApplicationName;
use App\Models\Application;

class MainController extends Controller
{
    public function main()
    {
        return redirect('dashboard');
    }

    public function dashboard()
    {
        return view('dashboard')->with([
            'applications' => Application::paginate(10),
        ]);
    }
}
