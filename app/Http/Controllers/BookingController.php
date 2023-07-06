<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Pesawat;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking = Booking::latest()->get();
        return view('booking.index', compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pesawats = Pesawat::get();

        return view('booking.create', compact('pesawats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booking = Booking::create([
            'nama' => $request->input('nama'),
            'code' => $request->input('code'),
            'pesawat_id' => $request->input('pesawat_id'),
            'from' => $request->input('from'),
            'to' => $request->input('to'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'email' => $request->input('email')
            ]);
            return redirect('/booking')->with('success','Booking telah disimpan!');
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
    public function edit(booking $booking)
    {
        $pesawats = Pesawat::get();
        return view('booking.edit', compact('booking','pesawats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,booking $booking)
    {
        $booking = booking::whereId($booking->id)->update([
            'nama' => $request->input('Nama'),
            'code' => $request->input('code'),
            'pesawat_id' => $request->input('pesawat_id'),
            'from' => $request->input('from'),
            'to' => $request->input('to'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'email' => $request->input('email')
            ]);
            return redirect('/booking')->with('success','Booking telah Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(booking $booking)
    {
        $booking = Booking::find($booking->id);
        $booking->delete();
        return redirect('/booking')->with('success','Booking telah Dihapus!');
    }
    }

