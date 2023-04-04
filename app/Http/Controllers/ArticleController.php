<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function editSelectArticle()
    {
        $article1 = Article::all();
        return view('editSelectArticle', compact('article1'));
    }
    
    public function deleteSelectArticle()
    {
        $article1 = Article::all();
        return view('deleteSelectArticle', compact('article1'));
    }

    public function homeArticle()
    {
        $article1 = Article::all();
        return view('home', compact('article1'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addarticle');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'Image' => 'required|mimes:jpg,png,jpeg'
        ]);

        $extension = $request->file('Image')->getClientOriginalExtension();
        $filename = $request->file('Image')->getClientOriginalName();
        $request->file('Image')->storeAs('/public/article/images', $filename);

       Article::create([
        'Tittle' => $request -> Tittle,
        'Image' => $filename,
        'Content' => $request -> Content
       ]);

       return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $article1 = Article::all();
        return view('dashboard', compact('article1'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('editarticle', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'Image' => 'required|mimes:jpg,png,jpeg'
        ]);

        $extension = $request->file('Image')->getClientOriginalExtension();
        $filename = $request->file('Image')->getClientOriginalName();
        $request->file('Image')->storeAs('/public/article/images', $filename);

       Article::findOrFail($id)->update([
        'Tittle' => $request -> Tittle,
        'Image' => $filename,
        'Content' => $request -> Content
       ]);

       return redirect('/dashboard');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Article::destroy($id);
        return redirect('/dashboard');
    }

    public function showMember(){
        $user = User::All();
        return view('ban', compact('user'));
    }

    public function banMember($id){
        User::findOrFail($id)->update([
            'role' => 'banned'
        ]);

        return redirect('/ban');
    }
    public function unbanMember($id){
        User::findOrFail($id)->update([
            'role' => 'member'
        ]);

        return redirect('/ban');
    }
}
