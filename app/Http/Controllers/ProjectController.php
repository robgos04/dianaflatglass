<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // ── Public front-end ─────────────────────────
    public function index()
    {
        $projects = Project::all();
        $latestProjectId = $projects->max('id');
        return view('project', compact('projects', 'latestProjectId'));
    }

    public function adminIndex(Request $request)
    {
        $projects = Project::latest();

        if ($request->category) {
            $projects = $projects->where('category', $request->category);
        }

        $projects = $projects->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'projectname' => 'required',
            'projectpic'  => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'category'    => 'required|in:exterior,interior,aluminium',
        ]);

        $filename = time() . '_' . $request->file('projectpic')->getClientOriginalName();
        $request->file('projectpic')->move(public_path('images/projects'), $filename);

        Project::create([
            'projectname' => $request->projectname,
            'projectpic'  => $filename,
            'category'    => $request->category,
        ]);

        return redirect()->route('admin.projects.index')->with('success', 'Project added successfully!');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'projectname' => 'required',
            'category'    => 'required|in:exterior,interior,aluminium',
        ]);

        if ($request->hasFile('projectpic')) {
            // Delete old image
            $oldPath = public_path('images/projects/' . $project->projectpic);
            if (file_exists($oldPath)) unlink($oldPath);

            $filename = time() . '_' . $request->file('projectpic')->getClientOriginalName();
            $request->file('projectpic')->move(public_path('images/projects'), $filename);
            $project->projectpic = $filename;
        }

        $project->projectname = $request->projectname;
        $project->category    = $request->category;
        $project->save();

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully!');
    }

    public function destroy(Project $project)
    {
        $oldPath = public_path('images/projects/' . $project->projectpic);
        if (file_exists($oldPath)) unlink($oldPath);

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully!');
    }

    public function showProject()
    {
        $projects = Project::latest()->get();
        $latestProjectId = $projects->max('id');

        // Aluminium chunks logic
        $aluminiumProjects = $projects->where('category', 'aluminium')->take(15)->values();
        $smallestIdAluminium = $aluminiumProjects ->min('id');
        $aluminiumChunks = [];
        $i = 0;
        $rowPattern = [2, 3];
        $patternIndex = 0;
        $totalAluminium = count($aluminiumProjects);
        while ($i < $totalAluminium) {
            $size = $rowPattern[$patternIndex % 2];
            $aluminiumChunks[] = [
                'size' => $size,
                'items' => $aluminiumProjects->slice($i, $size)->values()
            ];
            $i += $size;
            $patternIndex++;
        }

        return view('project', compact('projects', 'latestProjectId', 'aluminiumChunks', 'smallestIdAluminium'));
    }
}