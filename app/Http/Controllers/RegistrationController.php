<?php

namespace App\Http\Controllers;

use App\Models\CourseOfStudy;
use App\Models\ExamType;
use App\Models\Gender;
use App\Models\Nationality;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('home', [
            'courseOfStudies' => $this->getCourseOfStudies(),
            'genders' => $this->getGenders(),
            'nationalities' => $this->getNationalities()->unique('country_name'),
            'states' => $this->getNationalities(),
            'examTypes' => $this->getExamTypes()
        ]);
    }

    public function getCourseOfStudies()
    {
        return CourseOfStudy::all(['name', 'display_name']);
    }

    public function getGenders()
    {
        return Gender::all(['name', 'display_name']);
    }

    public function getNationalities()
    {
        return Nationality::all(['country_name', 'country_display_name', 'state_name', 'state_display_name']);
    }

    public function getExamTypes()
    {
        return ExamType::all(['name', 'display_name']);
    }
}
