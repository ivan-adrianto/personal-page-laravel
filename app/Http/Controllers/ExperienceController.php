<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

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
        ]);

        $validatedRequest['image'] = $request->input('image');

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
        try {
            $validatedRequest = $request->validate([
                "company_name" => "required",
                "description" => "required"
            ]);

            Experience::where('id', $experience_id)
                ->update($validatedRequest);

            return redirect('/admin/experiences')->with('success', 'Experience has been updated!');            //code...
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    public function destroy($experience_id)
    {
        Experience::destroy($experience_id);
        return redirect('/admin/experiences')->with('success', 'Experience deleted');
    }
}
