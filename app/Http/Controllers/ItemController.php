<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $r=new Item;
        $r->itemId=$request->input('itemId');
        $r->itemName=$request->input('itemName');
        $r->description=$request->input('description');
        $r->salesRate=$request->input('salesRate');
        $r->otherLang=$request->input('otherLang');
        $r->categoryId=$request->input('categoryId');
        $r->subCategoryId=$request->input('subCategoryId');
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
       return Item::findorfail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Item::findorfail($id);
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
        $r=Item::findorfail($id);
        $r->itemId=$request->input('itemId');
        $r->itemName=$request->input('itemName');
        $r->description=$request->input('description');
        $r->salesRate=$request->input('salesRate');
        $r->otherLang=$request->input('otherLang');
        $r->categoryId=$request->input('categoryId');
        $r->subCategoryId=$request->input('subCategoryId');
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
      $r=Item::findorfail($id);
      $r->delete();  
    }
}
