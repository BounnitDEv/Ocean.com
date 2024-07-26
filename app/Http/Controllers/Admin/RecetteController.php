<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recette;


class RecetteController extends Controller
{
    
    function index(){
        $recettes = Recette::All();
        return view('admin.recettes.index', ['recettes' => $recettes]);
    }

    function create(){
        return view('admin.recettes.create');
    }

    function store(Request $request){

        $messages = [
            'required' => ':attribute field is required'
        ];

        $rules = [
            'name'              => 'required',
            'short_description' => 'required',
            'description'       => 'required',
            'image'             => 'required',
            'cover'             => 'required',
        ];

        $request->validate($rules, $messages);

        $slug       = str_slug($request->input('name'));

        $image_path = $request->file('image')->store('recette_images');
        $cover_path = $request->file('cover')->store('recette_covers');

        $recette = Recette::create([

            'slug'              => $slug,
            'name'              => $request->input('name'),
            'short_description' => $request->input('short_description'),
            'description'       => $request->input('description'),
            'image'             => $image_path,
            'cover'             => $cover_path,

        ]);
        dd($recette);
        return redirect()->route('admin.recettes.index')->with('success', 'success');
    }

    public function show($recette_id){

        $recette = Recette::findOrFail($recette_id);

        return view('admin/recettes/show', compact('recette'));
    }

    public function edit($recette_id){
        $recette = Recette::findOrFail($recette_id);

        return view('admin/recettes/edit', compact('recette'));
    }

    public function update(Request $request, $id)
    {
        $recette = Recette::findOrFail($id);

        $image_path = $recette->image;
        $cover_path = $recette->cover;

        if($request->file('image')){
            $image_path = $request->file('image')->store('recette_images');
        }

        if($request->file('cover')){
            $cover_path = $request->file('cover')->store('recette_covers');
        }

        $recette->update([
            'name'              => $request->name,
            'short_description' => $request->short_description,
            'description'       => $request->description,
            'image'             => $image_path,
            'cover'             => $cover_path,            
        ]);
        dd($recette);
        return redirect()->route('admin.recette.index')->with('success', 'success');
    }

    public function destroy($id){
        $recette = Recette::find($id);

        if(!$recette){
            return redirect('admin.recettes.index');
        }

        $recette->delete();

        return redirect()->back()->with('success', 'destroyed');
    
    }

    
}