<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Subcategory;
use App\Item;
//use App\Category;
class SubCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return  Subcategory::all();
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
        $r=new Subcategory;
        $r->categoryId=$request->input('categoryId');
        $r->name=$request->input('name');
        $r->shortName=$request->input('shortName');
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
        return  Subcategory::findorfail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       return  Subcategory::findorfail($id);
    }
     public function item($catid)
    {
       return Item::where('items.subCategoryId','=',$catid)
       ->get();
       
    }
    // public function category($catid)
    // {
    //    return Category::where('categories.id','=',$catid)
    //    ->get();
       
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $r=Subcategory::findorfail($id);
        $r->categoryId=$request->input('categoryId');
        $r->name=$request->input('name');
        $r->shortName=$request->input('shortName');
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
       $r=Subcategory::findorfail($id);
       $r->delete(); 
    }
}
