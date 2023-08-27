<?php

namespace App\Http\Controllers;

use App\Models\CourseOfStudy;
use App\Models\ExamType;
use App\Models\Gender;
use App\Models\Nationality;
use App\Models\Registration;
use Illuminate\Http\Request;
use Validator;

class RegistrationController extends Controller
{
    private $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

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

    public function register()
    {
        $this->validateRegistrationRequest();

        Registration::create($this->registrationData());

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }

    public function validateRegistrationRequest()
    {
        Validator::make($this->request->all(), $this->requestPayload())->validate();
    }

    public function requestPayload()
    {
        return [
            "exam_titles_and_scores" => "required|string",
            "jamb_number" => "required|string",
            "jamb_year" => "required|string",
            "course_of_study" => "required|string",
            "surname" => "required|string",
            "first_name" => "required|string",
            "middle_name" => "required|string",
            "email" => "required|email",
            "gender" => "required|string",
            "phone_number" => "required|string",
            "nationality" => "required|string",
            "state" => "required|string",
            "address" => "required|string",
            "sponsor_name" => "required|string",
            "sponsor_email" => "required|email",
            "sponsor_relationship" => "required|string",
            "religion" => "required|string",
            "marital_status" => "required|string",
            "day" => "required",
            "month" => "required",
            "year" => "required",
            "examination_type" => "required|string",
            "examination_year" => "required|string",
            "examination_number" => "required|string"
        ];
    }

    public function registrationData()
    {
        return [
            'exam_titles_and_scores' => $this->request->exam_titles_and_scores,
            'jamb_number' => $this->request->jamb_number,
            'jamb_year' => $this->request->jamb_year,
            'surname' => $this->request->surname,
            'first_name' => $this->request->first_name,
            'middle_name' => $this->request->middle_name,
            'email' => $this->request->email,
            'phone_number' => $this->request->phone_number,
            'address' => $this->request->address,
            'sponsor_name' => $this->request->sponsor_name,
            'sponsor_email' => $this->request->sponsor_email,
            'sponsor_relationship' => $this->request->sponsor_relationship,
            'religion' => $this->request->religion,
            'marital_status' => $this->request->marital_status,
            'examination_year' => $this->request->examination_year,
            'examination_number' => $this->request->examination_number,
            'course_of_study_id' => getCourseOfStudyId($this->request->course_of_study),
            'gender_id' => getGenderId($this->request->gender),
            'nationality_id' => getNationalityId($this->request->state),
            'state_id' => getNationalityId($this->request->state),
            'date_of_birth' => $this->request->day . '-' . $this->request->month . '-' . $this->request->year,
            'examination_type_id' => getExamTypeId($this->request->examination_type),
        ];
    }
}
