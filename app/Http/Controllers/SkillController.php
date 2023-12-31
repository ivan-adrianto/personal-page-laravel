<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Stack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SkillController extends Controller
{
    public function index()
    {
        return view('admin.skills.index', [
            "skills" => Skill::with('stack')->get()
        ]);
    }

    public function create()
    {
        return view('admin.skills.create', [
            "stacks" => Stack::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedRequest = $request->validate(
            [
                "name" => "required|max:255",
                "image" => "image|file|max:1024",
                "stack_id" => "required"
            ],
            ["stack_id.required" => "stack is required field"]
        );

        if ($request->file('image')) {
            $validatedRequest['image'] = $request->file('image')->store('/images');
        }

        Skill::create($validatedRequest);
        return redirect('/admin/skills')->with('success', 'New skill has been added');
    }

    public function edit($skill_id)
    {
        $skill = Skill::find($skill_id);
        $stacks = Stack::all();
        return view('admin.skills.edit', [
            "skill" => $skill,
            "stacks" => $stacks,
            "skill_id" => $skill_id
        ]);
    }

    public function update($skill_id, Request $request)
    {
        $validatedRequest = $request->validate(
            [
                "name" => "required|max:255",
                "image" => "image|file|max:1024",
                "stack_id" => "required"
            ],
            ["stack_id.required" => "stack is required field"]
        );

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedRequest['image'] = $request->file('image')->store('/images');
        }

        Skill::where('id', $skill_id)
            ->update($validatedRequest);

        return redirect('/admin/skills')->with('success', 'Skill has been edited');
    }

    public function destroy($skill_id)
    {
        $skill = Skill::find($skill_id);
        Storage::delete($skill->image);
        Skill::destroy($skill_id);
        return redirect('admin/skills')->with('success', 'Skill has been deleted');
    }
}
