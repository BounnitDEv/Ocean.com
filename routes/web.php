<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\MainController;
use App\Http\Controllers\Front\ContactController;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\RecetteController;
use App\Http\Controllers\Admin\ProduitController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/clear', function() {

   Artisan::call('cache:clear');
   Artisan::call('config:clear');
   Artisan::call('config:cache');
   Artisan::call('view:clear');

   return "Cleared!";

});

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/services', [MainController::class, 'services'])->name('services');
Route::get('/gallery', [MainController::class, 'gallery'])->name('gallery');
Route::get('/story', [MainController::class, 'story'])->name('story');
Route::get('/projects', [MainController::class, 'projects'])->name('projects');
Route::get('/project/{slug}', [MainController::class, 'project'])->name('project');
Route::get('/recette/{slug}', [MainController::class, 'recette'])->name('recette');

Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/post/{slug}', [MainController::class, 'post'])->name('post');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

Route::get('/nos-produits', [MainController::class, 'nos_produits'])->name('nos-produits');
Route::get('/produit/{slug}', [MainController::class, 'produit'])->name('produit');

Route::get('/nos-recettes', [MainController::class, 'nos_recettes'])->name('nos-recettes');
Route::get('/services/site-web', [MainController::class, 'site_web'])->name('site_web');
Route::get('/services/ecommerce', [MainController::class, 'ecommerce'])->name('ecommerce');
Route::get('/services/referencement-web', [MainController::class, 'referencement'])->name('referencement');
Route::get('/services/branding', [MainController::class, 'branding'])->name('branding');
Route::get('/services/maintenance', [MainController::class, 'maintenance'])->name('maintenance');


Route::middleware(['guest'])->prefix('admin')->group(function (){
	Route::get('/login', [AuthController::class,'login'])->name('admin.login');
	Route::post('/login', [AuthController::class,'login_post'])->name('admin.login_post');
});



Route::middleware(['auth'])->prefix('admin')->group(function (){
	Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');
	Route::get('/home', [AuthController::class, 'index'])->name('admin.home');

	Route::get('project', [ProjectController::class, 'index'])->name('admin.project.index');
	Route::get('project/create', [ProjectController::class, 'create'])->name('admin.project.create');
	Route::post('project/store', [ProjectController::class, 'store'])->name('admin.project.store');
	Route::get('project/edit/{id}', [ProjectController::class, 'edit'])->name('admin.project.edit');
	Route::post('project/update/{id}', [ProjectController::class, 'update'])->name('admin.project.update');
	Route::get('project/destroy/{id}', [ProjectController::class, 'destroy'])->name('admin.project.destroy');

	Route::get('recette', [RecetteController::class, 'index'])->name('admin.recette.index');
	Route::get('recette/create', [RecetteController::class, 'create'])->name('admin.recette.create');
	Route::post('recette/store', [RecetteController::class, 'store'])->name('admin.recette.store');
	Route::get('recette/edit/{id}', [RecetteController::class, 'edit'])->name('admin.recette.edit');
	Route::post('recette/update/{id}', [RecetteController::class, 'update'])->name('admin.recette.update');
	Route::get('recette/destroy/{id}', [RecetteController::class, 'destroy'])->name('admin.recette.destroy');

	Route::get('produit', [ProduitController::class, 'index'])->name('admin.produit.index');
	Route::get('produit/create', [ProduitController::class, 'create'])->name('admin.produit.create');
	Route::post('produit/store', [ProduitController::class, 'store'])->name('admin.produit.store');
	Route::get('produit/edit/{id}', [ProduitController::class, 'edit'])->name('admin.produit.edit');
	Route::post('produit/update/{id}', [ProduitController::class, 'update'])->name('admin.produit.update');
	Route::get('produit/destroy/{id}', [ProduitController::class, 'destroy'])->name('admin.produit.destroy');

	Route::get('post', [PostController::class, 'index'])->name('admin.post.index');
	Route::get('post/create', [PostController::class, 'create'])->name('admin.post.create');
	Route::post('post/store', [PostController::class, 'store'])->name('admin.post.store');
	Route::get('post/edit/{id}', [PostController::class, 'edit'])->name('admin.post.edit');
	Route::post('post/update/{id}', [PostController::class, 'update'])->name('admin.post.update');
	Route::get('post/destroy/{id}', [PostController::class, 'destroy'])->name('admin.post.destroy');

	Route::get('contact', [DashboardController::class, 'all_contacts'])->name('admin.contact.index');
	Route::get('contact/close/{contact_id}', [DashboardController::class, 'close_contact'])->name('admin.contact.close');
	Route::get('contact/email/{contact_id}', [DashboardController::class, 'email_contact'])->name('admin.contact.email');
	Route::post('contact/email/{contact_id}', [DashboardController::class, 'email_send_contact'])->name('admin.contact.email_send');
	Route::get('contact/show/{contact_id}', [DashboardController::class, 'show_contact'])->name('admin.contact.show');
	Route::get('contact/destroy/{id}', [DashboardController::class, 'destroy_contact'])->name('admin.contact.destroy');

	Route::get('devis', [DashboardController::class, 'devis'])->name('admin.devis.index');
	Route::get('devis/close/{devis_id}', [DashboardController::class, 'close_devis'])->name('admin.devis.close');
	Route::get('devis/email/{devis_id}', [DashboardController::class, 'email_devis'])->name('admin.devis.email');
	Route::post('devis/email/{devis_id}', [DashboardController::class, 'email_send_devis'])->name('admin.devis.email_send');
	Route::get('devis/show/{devis_id}', [DashboardController::class, 'show_devis'])->name('admin.devis.show');
	Route::get('devis/destroy/{id}', [DashboardController::class, 'destroy_devis'])->name('admin.devis.destroy');
});
