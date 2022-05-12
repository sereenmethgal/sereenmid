<?php

namespace App\Http\Controllers;

use App\Models\Midterm;
use Illuminate\Http\Request;

class MidtermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Midterms=Midterm::all();

        return view('midterms.index',compact('midterms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('midterms.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $midterm= new Midterm;
        $midterm->product_name=$request->product_name;
        $midterm->product_category=$request->product_category;
        $midterm->product_price=$request->product_price;

        $midterm->product_quntity=$request->product_quntity;

        $midterm ->save();
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Midterm  $midterm
     * @return \Illuminate\Http\Response
     */
    public function show(Midterm $midterm)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Midterm  $midterm
     * @return \Illuminate\Http\Response
     */
    public function edit(Midterm $midterm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Midterm  $midterm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Midterm $midterm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Midterm  $midterm
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Midterm=midterm::find($id);
        $Midterm->delete();
        return redirect()->back();
    }
    }

