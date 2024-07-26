<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    
    function index(){
        $projects = Project::All();
        return view('admin.projects.index', ['projects' => $projects]);
    }

    function create(){
        return view('admin.projects.create');
    }

    function store(Request $request){

        $messages = [
            'required' => ':attribute field is required'
        ];

        $rules = [
            'name'              => 'required',
            'field'             => 'required',
            'client'            => 'required',
            'link'              => 'required',
            'short_description' => 'required',
            'description'       => 'required',
            'image'             => 'required',
            'cover'             => 'required',
        ];

        $request->validate($rules, $messages);

        $slug       = str_slug($request->input('name'));

        $image_path = $request->file('image')->store('project_images');
        $cover_path = $request->file('cover')->store('project_covers');

        $project = Project::create([

            'slug'              => $slug,
            'name'              => $request->input('name'),
            'field'             => $request->input('field'),
            'client'            => $request->input('client'),
            'link'              => $request->input('link'),
            'short_description' => $request->input('short_description'),
            'description'       => $request->input('description'),
            'image'             => $image_path,
            'cover'             => $cover_path,

        ]);
        dd($project);
        return redirect()->route('admin.projects.index')->with('success', 'success');
    }

    public function show($project_id){

        $project = Project::findOrFail($project_id);

        return view('admin/projects/show', compact('project'));
    }

    public function edit($project_id){
        $project = Project::findOrFail($project_id);

        return view('admin/projects/edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $image_path = $project->image;
        $cover_path = $project->cover;

        if($request->file('image')){
            $image_path = $request->file('image')->store('project_images');
        }

        if($request->file('cover')){
            $cover_path = $request->file('cover')->store('project_covers');
        }

        $project->update([
            'name'              => $request->name,
            'field'             => $request->field,
            'client'            => $request->client,
            'link'              => $request->link,
            'short_description' => $request->short_description,
            'description'       => $request->description,
            'image'             => $image_path,
            'cover'             => $cover_path,            
        ]);
        dd($project);
        return redirect()->route('admin.project.index')->with('success', 'success');
    }

    public function destroy($id){
        $project = Project::find($id);

        if(!$project){
            return redirect('admin.projects.index');
        }

        $project->delete();

        return redirect()->back()->with('success', 'destroyed');
    
    }

    
}