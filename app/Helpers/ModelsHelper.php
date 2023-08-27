<?php
use App\Models\CourseOfStudy;
use App\Models\ExamType;
use App\Models\Gender;
use App\Models\Nationality;

function getCourseOfStudyId($name)
{
    return CourseOfStudy::where('name', $name)->first()->id;
}

function getGenderId($name)
{
    return Gender::where('name', $name)->first()->id;
}

function getNationalityId($name)
{
    return Nationality::where('state_name', $name)->first()->id;
}

function getExamTypeId($name)
{
    return ExamType::where('name', $name)->first()->id;
}
