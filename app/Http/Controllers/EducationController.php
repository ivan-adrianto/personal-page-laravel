<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EducationController extends Controller
{
    public function index()
    {
        return view('admin.education.index', [
            "educations" => Education::all()
        ]);
    }

    public function create()
    {
        return view('admin.education.create');
    }

    public function store(Request $request)
    {
        $validatedRequest = $request->validate([
            "title" => "required",
            "description" => "required",
            "image" => "image|file|max:1024"
        ]);

        if ($request->file('image')) {
            $validatedRequest['image'] = $request->file('image')->store('/images');
        }

        Education::create($validatedRequest);
        return redirect('/admin/education')->with('success', 'Success add new education');
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
            "description" => "required",
            "image" => "image|file|max:1024"
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedRequest['image'] = $request->file('image')->store('/images');
        }

        Education::where('id', $education_id)
            ->update($validatedRequest);

        return redirect('/admin/education')->with('success', 'Education has been updated!');
    }

    public function destroy($education_id)
    {
        $education = Education::find($education_id);
        Storage::delete($education->image);
        Education::destroy($education_id);
        return redirect('/admin/education')->with('success', 'Education deleted');
    }
}
