<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CardDetails;
use App\OrderPlace;
use App\CardBalance;
class CardDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CardDetails::all();
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
        $r=new CardDetails;
        $r->cardId=$request->input('cardId');
        $r->cardHolderName=$request->input('cardHolderName');
        $r->contactNo=$request->input('contactNo');
        $r->address=$request->input('address');
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
       return CardDetails::findorfail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return  CardDetails::findorfail($id);
    }
    public function orderplace($cardid)
    {
       return OrderPlace::where('order_places.cardId','=',$cardid)
       ->get();
       
    }
     public function cardbalance($cardid)
    {
       return CardBalance::where('card_balances.cardId','=',$cardid)
       ->get();
       
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
       $r=CardDetails::findorfail($id);
        $r->cardId=$request->input('cardId');
        $r->cardHolderName=$request->input('cardHolderName');
        $r->contactNo=$request->input('contactNo');
        $r->address=$request->input('address');
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
        //
    }
}
