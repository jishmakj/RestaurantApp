<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Modifier;

class ModifiersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Modifier::all();
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
        $r=new Modifier;
        $r->modifierId=$request->input('modifierId');
        $r->item=$request->input('item');
        $r->modifierName=$request->input('modifierName');
        $r->shortName=$request->input('shortName');
        $r->description=$request->input('description');
        $r->salesRate=$request->input('salesRate');
        $r->save();
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Modifier::findorfail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       return Modifier::findorfail($id);
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
        $r=Modifier::findorfail($id);
        $r->modifierId=$request->input('modifierId');
        $r->item=$request->input('item');
        $r->modifierName=$request->input('modifierName');
        $r->shortName=$request->input('shortName');
        $r->description=$request->input('description');
        $r->salesRate=$request->input('salesRate');
        $r->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $r= Modifier::findorfail($id);
      $r->delete();
    }
}
