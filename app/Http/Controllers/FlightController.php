<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;


class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flight = FLight::latest()->get();
        return view('flight.index', compact('flight'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
         return view('flight.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flight = Flight::create([
            'flight' => $request->input('flight'),
            'code' => $request->input('code'),
            'from' => $request->input('from'),
            'to' => $request->input('to'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'price' => $request->input('price'),
            'baggage' => $request->input('baggage'),
            'status' => $request->input('status')
            ]);
            return redirect('/flight')->with('success','Flight telah Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(flight $flight)
    {
     
        return view('flight.edit', compact('flight'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,flight $flight)
    {
        $flight = Flight::whereId($flight->id)->update([
            'flight' => $request->input('flight'),
            'code' => $request->input('code'),
            'from' => $request->input('from'),
            'to' => $request->input('to'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'price' => $request->input('price'),
            'baggage' => $request->input('baggage'),
            'status' => $request->input('status')
            
            ]);
            
            return redirect('/flight')->with('success','Booking telah Diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(flight $flight)
    {
        $flight = FLight::find($flight->id);
        $flight->delete();
        return redirect('/flight')->with('success','Booking telah Dihapus!');
    }
}
