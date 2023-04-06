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
    // buat milih artikel yang mau diedit
    public function editSelectArticle()
    {
        $article1 = Article::all();
        return view('editSelectArticle', compact('article1'));
    }
    // buat milih artikel yang mau diapus
    public function deleteSelectArticle()
    {
        $article1 = Article::all();
        return view('deleteSelectArticle', compact('article1'));
    }
    // buat nampilin artikel di homepage
    public function homeArticle()
    {
        $article1 = Article::all();
        return view('home', compact('article1'));
    }
    /**
     * Show the form for creating a new resource.
     */
    // buat nampilin add article page
    public function create()
    {
        return view('addarticle');
    }

    /**
     * Store a newly created resource in storage.
     */
    // buat ngirim artikel ke db
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
    // buat nampilin article di dashboard
    public function show()
    {
        $article1 = Article::all();
        return view('dashboard', compact('article1'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    // buat nampilin edit article page
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('editarticle', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    // buat ngirim artikel ke db after update
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
    // buat apus artikel
    public function destroy($id)
    {
        Article::destroy($id);
        return redirect('/dashboard');
    }
    // buat nampilin member di ban page
    public function showMember(){
        // buat validate dari provider admin
        $this->authorize('admin');
        $user = User::All();
        return view('ban', compact('user'));
    }
    // buat ganti role member di db
    public function banMember($id){
        User::findOrFail($id)->update([
            'role' => 'banned'
        ]);

        return redirect('/ban');
    }
    // buat ganti role member unban di db
    public function unbanMember($id){
        User::findOrFail($id)->update([
            'role' => 'member'
        ]);

        return redirect('/ban');
    }
    // buat nampilin list member di list member page
    public function listMember(){
        // buat validate dari provider admin
        $this->authorize('admin');
        $user = User::All();
        return view('listMember', compact('user'));
    }
    // buat nampilin detail article
    public function showArticle($id){
        $article = Article::findOrFail($id);
        return view('showArticle', compact('article'));
    }
}
