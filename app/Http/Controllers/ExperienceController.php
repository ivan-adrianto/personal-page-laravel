<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExperienceController extends Controller
{
    public function index()
    {
        return view('admin.experiences.index', [
            "experiences" => Experience::all()
        ]);
    }

    public function create()
    {
        return view('admin.experiences.create');
    }

    public function store(Request $request)
    {

        $validatedRequest = $request->validate([
            "company_name" => "required",
            "description" => "required",
            "image" => "image|file|max:1024"
        ]);

        if ($request->file('image')) {
            $validatedRequest['image'] = $request->file('image')->store('/images');
        }

        Experience::create($validatedRequest);
        return redirect('/admin/experiences')->with('success', 'Success add new experience');
    }

    public function edit($experience_id)
    {
        $experience = Experience::find($experience_id);
        return view('admin.experiences.edit', [
            "experience" => $experience,
            "experience_id" => $experience_id
        ]);
    }

    public function update($experience_id, Request $request)
    {
        $validatedRequest = $request->validate([
            "company_name" => "required",
            "description" => "required",
            "image" => "image|file|max:1024"
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedRequest['image'] = $request->file('image')->store('/images');
        }

        Experience::where('id', $experience_id)
            ->update($validatedRequest);

        return redirect('/admin/experiences')->with('success', 'Experience has been updated!');            //code...

    }

    public function destroy($experience_id)
    {
        $experience = Experience::find($experience_id);
        Storage::delete($experience->image);
        Experience::destroy($experience_id);
        return redirect('/admin/experiences')->with('success', 'Experience deleted');
    }
}
