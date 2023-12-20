<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PharIo\Manifest\ApplicationName;
use App\Models\Application;
use Carbon\Carbon;

class MainController extends Controller
{
    public function main()
    {
        return redirect('dashboard');
    }

    public function dashboard()
    {

        return view('dashboard')->with([
            'applications' => Application::latest()->paginate(10),
        ]);
    }
}
