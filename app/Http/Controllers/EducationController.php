<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        return view('admin.education.index', [
            "educations" => Education::all()
        ]);
    }

    public function edit($education_id)
    {
        $education = Education::find($education_id);
        return view('admin.education.edit', [
            "education" => $education,
            "education_id" => $education_id
        ]);
    }

    public function update($education_id, Request $request)
    {
        $validatedRequest = $request->validate([
            "title" => "required",
            "description" => "required"
        ]);

        Education::where('id', $education_id)
            ->update($validatedRequest);

        return redirect('/admin/education')->with('success', 'Education has been updated!');
    }
}
