<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\OrderItemDetail;

class OrderItemDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OrderItemDetail::all();
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
        $r=new OrderItemDetail;
        $r->orderId=$request->input('orderId');
        $r->itemId=$request->input('itemId');
        $r->itemType=$request->input('itemType');
        $r->quantity=$request->input('quantity');
        $r->itemTotal=$request->input('itemTotal');
        $r->salesRate=$request->input('salesRate');
        $r->itemCount=$request->input('itemCount');
        $r->payment=$request->input('payment');
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
        return OrderItemDetail::findorfail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return OrderItemDetail::findorfail($id);
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
        $r=OrderItemDetail::findorfail($id);
        $r->orderId=$request->input('orderId');
        $r->itemId=$request->input('itemId');
        $r->itemType=$request->input('itemType');
        $r->quantity=$request->input('quantity');
        $r->itemTotal=$request->input('itemTotal');
        $r->salesRate=$request->input('salesRate');
        $r->itemCount=$request->input('itemCount');
        $r->payment=$request->input('payment');
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
      $r=OrderItemDetail::findorfail($id);
      $r->delete();
    }
}
