<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController as Client;
use App\Http\Controllers\AdminController as Admin;
use App\Http\Controllers\GiveController as Give;
use App\Mail\SendEmail;
use App\Models\Post;
use Illuminate\Support\Str;





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// user
Route::get('/', [Client::class,'index']);
Route::get('/category/{id}', [Client::class,'category']);
Route::get('/detail/{id}', [Client::class,'detail']);

//admin

Route::get('/admin', [Admin::class,'admin']);
Route::get('/admin/show', [Admin::class,'show']);




Route::get('/admin/add',[Admin::class,'add']);
Route::post('/admin/add',[Admin::class,'add_']);
Route::get('/admin/delete/{id}',[Admin::class,'delete']);
Route::get('/admin/edit/{id}', [Admin::class,'edit']);
Route::post('/admin/edit/{id}', [Admin::class,'edit_']);


//dashboard give 
Route::get("/give",[Give::class,'give']);
Route::post("/give",[Give::class,'give_k'])->name('give_k');


//mailgun
Route::get("/sendmail", function(){
   Mail::mailer('mailgun')
   ->to('nguyendangkhoi2k3@gmail.com')
   ->send( new SendEmail() );
});

// slug
Route::get('/addSlug2',function(){
    $post = Post::all();
    foreach($post as $p){
        $p->slug = Str::slug($p->tieuDe);
        $p->save();
    }
});

