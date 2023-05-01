<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Post;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::orderBy('baptDate', 'desc')->paginate(4);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $get_admin_name = auth()->user()->name;
        return view('posts.create')->with('get_admin_name', $get_admin_name);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'baptDate' => 'required',
            'baptPlace' => 'required',
            'baptName' => 'required',
            'famName' => 'required',
            'dateBirth' => 'required',
            // 'commDate' => 'required',
            // 'commPlace' => 'required',
            // 'commMinister' => 'required'
        ]);

        // Create Candidate

        $post = new Post;
        $post->baptDate = $request->input('baptDate');
        $post->placeBapt = $request->input('baptPlace');
        $post->baptName = $request->input('baptName');
        $post->famName = $request->input('famName');
        $post->dateBirth = $request->input('dateBirth');
        $post->placeBirth = $request->input('placeBirth');
        $post->LGA = $request->input('native');
        $post->dadName = $request->input('dadName');
        $post->momName = $request->input('momName');
        $post->grandDad = $request->input('grandDad');
        $post->grandMom = $request->input('grandMom');
        $post->signedBy = $request->input('signatory');
        $post->minister = $request->input('minister');

        $post->save();


        //********************************************************/
        // Model to Put into Communion Table for A record Con-currently
        // $commPost = new Post;
        // $commPost->commDate = $request->input('commDate');
        // $commPost->parish = $request->input('commPlace');
        // $commPost->minister = $request->input('commMinister');
        // $commPost->signedBy = $request->input('commSignatory');

        // $commPost->save();

        // End of Model
        // *****************************************************

        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $years = Post::selectRaw('extract(year FROM baptDate) AS year');
        return view('posts.show')->with(['post' => $post, 'years' => $years]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'baptDate' => 'required',
            'baptPlace' => 'required',
            'baptName' => 'required',
            'famName' => 'required',
            'dateBirth' => 'required'
        ]);

        // Create Candidate

        $post = Post::find($id);
        $post->baptDate = $request->input('baptDate');
        $post->placeBapt = $request->input('baptPlace');
        $post->baptName = $request->input('baptName');
        $post->famName = $request->input('famName');
        $post->dateBirth = $request->input('dateBirth');
        $post->placeBirth = $request->input('placeBirth');
        $post->LGA = $request->input('native');
        $post->dadName = $request->input('dadName');
        $post->momName = $request->input('momName');
        $post->grandDad = $request->input('grandDad');
        $post->grandMom = $request->input('grandMom');
        $post->signedBy = $request->input('signatory');
        $post->minister = $request->input('minister');

        $post->save();

        return redirect('/posts')->with('success', 'Candidate Info Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/posts')->with('success', 'Candidate Info Deleted');
    }

    public function export(){

        $pdf = Pdf::loadView('posts.show');
        return $pdf->download('show.pdf');
    }
}
