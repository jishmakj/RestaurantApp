<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Item;
use App\Subcategory;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Category::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $r=new Category;
        $r->categoryId=$request->input('categoryId');
        $r->name=$request->input('name');
        $r->shortname=$request->input('shortname');
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
        return Category::findorfail($id);
    }

    public function item($catid)
    {
       return Item::where('items.categoryId','=',$catid)
       ->get();
       
    }
    public function subcategory($catid)
    {
       return Subcategory::where('subcategories.categoryId','=',$catid)
       ->get();
       
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Category::findorfail($id);
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
        $r=Category::findorfail($id);
        $r->categoryId=$request->input('categoryId');
        $r->name=$request->input('name');
        $r->shortname=$request->input('shortname');
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
        $r=Category::findorfail($id);
        $r->delete();
    }
}
