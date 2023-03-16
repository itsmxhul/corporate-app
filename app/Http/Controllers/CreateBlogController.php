<?php

namespace App\Http\Controllers;

use App\Models\create_blog;
use Illuminate\Http\Request;

class CreateBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function create_blog(Request $request){

        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $create_blog = new create_blog;

        // $create_blog->image = $request->file('image');
        $create_blog->title = $request->title;
        $create_blog->description = $request->description;
        $create_blog->save();
        return redirect('blogs');}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(create_blog $create_blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(create_blog $create_blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, create_blog $create_blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(create_blog $create_blog)
    {
        //
    }
}
