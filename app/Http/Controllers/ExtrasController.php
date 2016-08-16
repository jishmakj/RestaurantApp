<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Extra;

class ExtrasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return  Extra::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $r=new Extra;
        $r->extrasId=$request->input('extrasId');
        $r->item=$request->input('item');
        $r->extrasName=$request->input('extrasName');
        $r->shortName=$request->input('shortName');
        $r->description=$request->input('description');
        $r->salesRate=$request->input('salesRate');
        $r->save;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return Extra::findorfail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       return Extra::findorfail($id);
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
       $r=Extra::findorfail($id);
        $r->extrasId=$request->input('extrasId');
        $r->item=$request->input('item');
        $r->extrasName=$request->input('extrasName');
        $r->shortName=$request->input('shortName');
        $r->description=$request->input('description');
        $r->salesRate=$request->input('salesRate');
        $r->save;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $r=Extra::findorfail($id);
        $r->delete();
    }
}
