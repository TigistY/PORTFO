<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home() {
     return view('pages.home'); 
 }
    public function about() { 
        return view('pages.about'); 
    }
    
    public function skills() {
        $skills = [
            'Backend' => ['PHP', 'Laravel', 'MySQL', 'REST API', 'Eloquent ORM'],
            'Frontend' => ['JavaScript', 'HTML5', 'CSS3', 'Bootstrap', 'Tailwind CSS'],
            'Tools & Admin' => ['Git & GitHub', 'Linux / Bash', 'XAMPP', 'Apache']
        ];
        return view('pages.skills', compact('skills'));
    }

    public function projects() {
        $projects = [
            [
                'title' => 'Feedback & Complaint Management System',
                'description' => 'A web-based system designed for Injibara University with Spatie role-based access control.',
                'tech' => ['Laravel', 'MySQL', 'Bootstrap', 'Spatie'],
                'image' => 'images/fcms2.png',
                'github' => 'https://github.com/TigistY',
                'demo' => 'http://fcms.etcodnet.com'
            ],
            [
                'title' => 'Car Rental Management System',
                'description' => 'A web application for booking, managing vehicle fleets, and rental workflows.',
                'tech' => ['PHP', 'Laravel', 'Bootstrap', 'MySQL'],
                'image' => 'images/crms.png',
                'github' => 'https://github.com/TigistY',
                'demo' => null
            ]
        ];
        return view('pages.projects', compact('projects'));
    }

    public function dashboard() { return view('pages.dashboard'); }
    public function contact() { return view('pages.contact'); }
}