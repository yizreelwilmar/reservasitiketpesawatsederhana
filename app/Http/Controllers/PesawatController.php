<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pesawat;


class PesawatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesawats = Pesawat::all()->toArray();
        return array_reverse($pesawats);      
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
        $pesawat = new Pesawat([
            'pesawat_name' => $request->input('pesawat_name'),
            'pesawat_code' => $request->input('pesawat_code'),
        ]);
        $pesawat->save();

        return response()->json('Pesawat created!');
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
    public function edit($id)
    {
        //
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
        $pesawat = Pesawat::find($id);
        $pesawat->update($request->all());

        return response()->json('Pesawat updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pesawat = Pesawat::find($id);
        $pesawat->delete();

        return response()->json('Pesawat deleted!');
    }
}
