<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Story::orderBy('story_id','desc')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'=>'required',
            'image'=>'image|mimes:jpeg,jpg,gif|max:1995',
        ]);
        // Move image to storage
        $request->file('image')->store('public/images');
        // Get Original image name
        $original=$request->file('image')->getClientOriginalName();
        // Get image size
        $size=$request->file('image')->getSize();
        // Add to database
        $story=new Story();
        $story->title=$request->title;
        $story->image=$request->file('image')->hashName();
        $story->orginal=$original;
        $story->size=$size;
        $story->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
