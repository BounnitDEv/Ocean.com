<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Project;
use App\Models\Recette;
use App\Models\Produit;

class MainController extends Controller
{

    public function index(){

        $produits = Produit::OrderBy('created_at', 'desc')->get();

        if(!$produits){
            return redirect('/');
        }

        return view('front.index', ['produits' => $produits]);
    }

    public function about(){

        return view('front.about');
    }

    public function services(){

        return view('front.services');
    }

    public function gallery(){

        return view('front.gallery');
    }

    public function story(){

        return view('front.story');
    }

    public function projects(){

        $projects = Project::OrderBy('created_at', 'desc')->get();

        if(!$projects){
            return redirect('/');
        }

        return view('front.projects', ['projects' => $projects]);
    }

    public function project($slug){

        $project  = Project::where('slug', $slug)->first();
        $projects = Project::where('slug', '<>', $slug)->get()->take(4);

        if(!$project){
            abort(404);
        }
        // dd($category);
        $args = compact('project', 'projects');

        return view('front.project', $args);
    }

    public function blog(){

        $posts= Post::OrderBy('created_at', 'desc')->paginate(9);

        if(!$posts){
            return redirect('/');
        }

        return view('front.blog', ['posts' => $posts]);
    }

    public function post($slug){

        $post  = Post::where('slug', $slug)->first();
        $posts = Post::where('slug', '<>', $slug)->get()->take(4);

        if(!$post){
            abort(404);
        }
        // dd($category);
        $args = compact('post', 'posts');

        return view('front.post', $args);
    }

    public function contact(){

        return view('front.contact');
    }

    /*services*/


    public function nos_recettes(){

        $recettes = Recette::OrderBy('created_at', 'desc')->get();

        if(!$recettes){
            return redirect('/');
        }

        return view('front.nos-recettes', ['recettes' => $recettes]);
    }

    public function recette($slug){

        $recette  = Recette::where('slug', $slug)->first();
        $recettes = Recette::where('slug', '<>', $slug)->get()->take(4);

        if(!$recette){
            abort(404);
        }
        // dd($recette);
        $args = compact('recette', 'recettes');

        return view('front.recette', $args);
    }

    public function nos_produits(){

        $produits = Produit::OrderBy('created_at', 'desc')->get();

        if(!$produits){
            return redirect('/');
        }

        return view('front.nos-produits', ['produits' => $produits]);
    }

    public function produit($slug){

        $produit  = Produit::where('slug', $slug)->first();
        $produits = Produit::where('slug', '<>', $slug)->get()->take(4);

        if(!$produit){
            abort(404);
        }
        // dd($produit);
        $args = compact('produit', 'produits');

        return view('front.produit', $args);
    }

    public function site_web(){

        return view('front.services.site_web');
    }

    public function ecommerce(){

        return view('front.services.ecommerce');
    }

    public function referencement(){

        return view('front.services.referencement');
    }

    public function branding(){

        return view('front.services.branding');
    }

    public function maintenance(){

        return view('front.services.maintenance');
    }

}
