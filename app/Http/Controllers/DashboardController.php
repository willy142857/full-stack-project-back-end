<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('created_at', 'DESC')->get();


        $recentProjects=array($projects[0],$projects[1],$projects[2],$projects[3],$projects[4]);

        $data = [
            'recentProjects' => $recentProjects,
        ];


        return view('dashboard.index', $data);
    }
}
