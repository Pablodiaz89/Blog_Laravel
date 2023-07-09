<?php

namespace App\Http\Controllers; // esta es la ruta de acceso a este controlador, la necesitamos copiar para trabajar con ella en las rutas y las importamos en los archivos que precisen poniendo use App\Http\Controllers y el nombre del controlador, quedando App\Http\Controllers\PageController; en routes->web.php

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request){
        $search = $request->search;
        
        $posts = Post::where('title', 'LIKE', "%{$search}%")
        ->with('user')
        ->latest()->paginate();

        return view('home', ['posts' => $posts]); 
    }

    public function post(Post $post){

        return view('post', ['post' => $post]);
    }
}
