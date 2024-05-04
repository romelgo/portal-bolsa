<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Job; // Asegúrate de importar el modelo Job si aún no lo has hecho

class ApplicationController extends Controller
{
    public function myApplications()
    {
        // Obtener todas las aplicaciones de trabajo del usuario actual
        $user = Auth::user();
        $applications = $user->jobs()->get();

        // Devolver la vista con las aplicaciones de trabajo del usuario
        return view('frontend.jobs.applications', compact('applications'));
    }
}
