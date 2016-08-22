<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CardBalance;
//use App\CardDeatils;

class CardBalanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CardBalance::all();
      
       //return CardBalance::all();
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
        $r=new CardBalance;
        $r->cardId=$request->input('cardId');
        $r->mainBalance=$request->input('mainBalance');
        $r->bonusBalance=$request->input('bonusBalance');
        $r->bonusPoints=$request->input('bonusPoints');
        $r->activationDate=$request->input('activationDate');
        $r->lastTransactionDate=$request->input('lastTransactionDate');
        $r->expiryDate=$request->input('expiryDate');
        $r->activeStatus=$request->input('activeStatus');
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
        return CardBalance::findorfail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       return  CardBalance::findorfail($id);
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
        $r=CardBalance::findorfail($id);
        $r->cardId=$request->input('cardId');
        $r->mainBalance=$request->input('mainBalance');
        $r->bonusBalance=$request->input('bonusBalance');
        $r->bonusPoints=$request->input('bonusPoints');
        $r->activationDate=$request->input('activationDate');
        $r->lastTransactionDate=$request->input('lastTransactionDate');
        $r->expiryDate=$request->input('expiryDate');
        $r->activeStatus=$request->input('activeStatus');
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
        $r=CardBalance::findorfail($id);
        $r->delete();
    }
}
