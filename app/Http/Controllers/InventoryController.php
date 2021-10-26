<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventary;
class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Inventary::orderBy('inventary_id','desc')->get();
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
            'rand_name'=>'required|mines:pdf,docx,xlsx:1999'
        ]);
        // Move file to storage
        $request->file('rand_name')->store('public/docs');
        // Get original file name
        $name=$request->file('rand_name')->getClientOriginalName();
        // Get file size
        $size=$request->file('rand_name')->getSize();
        // Add to database
        $inventory=new Invetory();
        $inventory->rand_name=$request->file('rand_name')->hashName();
        $inventory->ori_name=$name;
        $inventory->size=$size;
        $invetory->save();
        // Return message
        return respornse()->json(['message'=>'created'],201);
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
        $request->validate([
            'rand_name'=>'required|mines:pdf,docx,xlsx:1999'
        ]);
        // Move file to storage
        $request->file('rand_name')->store('public/docs');
        // Get original file name
        $name=$request->file('rand_name')->getClientOriginalName();
        // Get file size
        $size=$request->file('rand_name')->getSize();
        // Add to database
        $inventory=new Invetory();
        $inventory->rand_name=$request->file('rand_name')->hashName();
        $inventory->ori_name=$name;
        $inventory->size=$size;
        $invetory->save();
        // Return message
        return respornse()->json(['message'=>'created'],201);
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
