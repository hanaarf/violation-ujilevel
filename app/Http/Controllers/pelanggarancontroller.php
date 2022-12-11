<?php

namespace App\Http\Controllers;

use App\Models\pelanggaran;
use App\Models\kategori;
use Illuminate\Http\Request;

class pelanggarancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $datap = pelanggaran::all();
        return view('dashboard.pelanggaran',['datap'=>$datap]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $pelanggaran = pelanggaran::all();
        return view('dashboard.formcreate.pelanggaran',['pelanggaran'=> $pelanggaran]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'point' => 'required',
            'sanksi' => 'required'
        ]);

        $input = $request->all();
        pelanggaran::create($input);

        return redirect('/dashboard/data-pelanggaran')
            ->with('success','data pelanggaran berhasil diinput');
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
        $pelanggaran = pelanggaran::findOrFail($id);
        return view('dashboard.formedit.pelanggaran',['pelanggaran' => $pelanggaran]);
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
        $pelanggaran =  pelanggaran::find($id);
        $pelanggaran->update($request->except(['_token','submit']));
        return redirect('/dashboard/data-pelanggaran')
        ->with('success','data pelanggaran berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggaran = pelanggaran::findOrFail($id);
        $pelanggaran -> delete();
        return redirect('/dashboard/data-pelanggaran')
        ->with('success','data pelanggaran berhasil dihapus');
    }
}
