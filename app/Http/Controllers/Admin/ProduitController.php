<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    
    function index(){
        $produits = Produit::All();
        return view('admin.produits.index', ['produits' => $produits]);
    }

    function create(){
        return view('admin.produits.create');
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

        $image_path = $request->file('image')->store('produit_images');
        $cover_path = $request->file('cover')->store('produit_covers');

        $produit = Produit::create([

            'slug'              => $slug,
            'name'              => $request->input('name'),
            'short_description' => $request->input('short_description'),
            'description'       => $request->input('description'),
            'image'             => $image_path,
            'cover'             => $cover_path,

        ]);
        dd($produit);
        return redirect()->route('admin.produits.index')->with('success', 'success');
    }

    public function show($produit_id){

        $produit = Produit::findOrFail($produit_id);

        return view('admin/produits/show', compact('produit'));
    }

    public function edit($produit_id){
        $produit = Produit::findOrFail($produit_id);

        return view('admin/produits/edit', compact('produit'));
    }

    public function update(Request $request, $id)
    {
        $produit = Produit::findOrFail($id);

        $image_path = $produit->image;
        $cover_path = $produit->cover;

        if($request->file('image')){
            $image_path = $request->file('image')->store('produit_images');
        }

        if($request->file('cover')){
            $cover_path = $request->file('cover')->store('produit_covers');
        }

        $produit->update([
            'name'              => $request->name,
            'short_description' => $request->short_description,
            'description'       => $request->description,
            'image'             => $image_path,
            'cover'             => $cover_path,            
        ]);
        dd($produit);
        return redirect()->route('admin.produit.index')->with('success', 'success');
    }

    public function destroy($id){
        $produit = Produit::find($id);

        if(!$produit){
            return redirect('admin.produits.index');
        }

        $produit->delete();

        return redirect()->back()->with('success', 'destroyed');
    
    }

    
}
