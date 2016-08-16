<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Order::all();
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
        $r=new Order;
        $r->orderId=$request->input('orderId');
        $r->orderTotal=$request->input('orderTotal');
        $r->cardNo=$request->input('cardNo');
        $r->totalItemsCount=$request->input('totalItemsCount');
        $r->primaryItem=$request->input('primaryItem');
        $r->extraItem=$request->input('extraItem');
        $r->modifierItem=$request->input('modifierItem');
        $r->locationId=$request->input('locationId');
        $r->time=$request->input('time');
        $r->date=$request->input('date');
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
        return Order::findorfail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Order::findorfail($id);
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
        $r=Order::findorfail($id);
        $r->orderId=$request->input('orderId');
        $r->orderTotal=$request->input('orderTotal');
        $r->cardNo=$request->input('cardNo');
        $r->totalItemsCount=$request->input('totalItemsCount');
        $r->primaryItem=$request->input('primaryItem');
        $r->extraItem=$request->input('extraItem');
        $r->modifierItem=$request->input('modifierItem');
        $r->locationId=$request->input('locationId');
        $r->time=$request->input('time');
        $r->date=$request->input('date');
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
        $r=Order::findorfail($id);
        $r->delete();
    }
}
