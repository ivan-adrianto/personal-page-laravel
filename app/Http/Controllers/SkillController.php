<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Stack;
use Illuminate\Http\Request;

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
                "image" => "max:255",
                "stack_id" => "required"
            ],
            ["stack_id.required" => "stack is required field"]
        );

        Skill::create($validatedRequest);
        return redirect('/admin/skills')->with('success', 'New skill has been added');
    }
}
