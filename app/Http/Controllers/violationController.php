<?php

namespace App\Http\Controllers;

use App\Models\violation;
use App\Models\murid;
use App\Models\guru;
use App\Models\pelanggaran;
use Illuminate\Http\Request;

class violationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $murid = murid::with('kelas')->get();
        return view('dashboard.violation.jmlh', ['murid'=>$murid]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $murid = murid::all();
        $guru = guru::all();
        $pelanggaran = pelanggaran::all();
        return view('dashboard.formcreate.violation',['murid'=> $murid,'guru'=> $guru,'pelanggaran'=> $pelanggaran]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $murid_id = $request->murid_id;
        $pelanggaran_id = $request->pelanggaran_id;
        $data = $request->all();
        $murid = murid::findOrFail($murid_id);
        $pelanggaran = pelanggaran::findOrFail($pelanggaran_id);
        $poinS = $murid->point;
        $poinP = $pelanggaran->point;
        $poinS+= $poinP;
        if($data){
            $murid->update([
                'point'=>$poinS
            ]);
        }
        violation::create($data);
        return redirect('/dashboard/violation')
        ->with('success','data violation berhasil diinput');

        // $request->validate([
        //     'pelanggaran_id' => 'required',
        //     'point' => 'required',
        //     'murid_id' => 'required',
        //     'guru_id' => 'required'
        // ]);

        // $input = $request->all();
        // violation::create($input);
        // // produk nama model, create=printah msukin dta, 

        // return redirect('/dashboard/violation')
        // // siswa nama route
        //     ->with('success','data violation berhasil diinput');
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
        $violation = violation::with('murid','pelanggaran','guru')->findOrFail($id);
        $murid = murid::where('id', '!=', $violation->murid_id)->get(['id','name']);
        $pelanggaran = pelanggaran::where('id', '!=', $violation->pelanggaran_id)->get(['id','name']);
        return view('dashboard.formedit.violation',['violation' => $violation, 'murid' => $murid, 'pelanggaran' => $pelanggaran]);
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
        $violation =  violation::find($id);
        $violation->update($request->except(['_token','submit']));
        return view('dashboard.detail.murid')
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
        //
    }
}
