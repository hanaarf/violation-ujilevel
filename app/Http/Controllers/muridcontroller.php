<?php

namespace App\Http\Controllers;

use App\Models\murid;
use App\Models\kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class muridcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $murid = murid::with('kelas')->get();
        return view('dashboard.student', ['murid'=>$murid]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = kelas::all();
        return view('dashboard.formcreate.murid',['kelas'=> $kelas]);
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
            'kelas_id' => 'required',
            'nisn' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'pw' => 'required',
            'telp' => 'required',
            'tgl_lahir' => 'required',
            'gender' => 'required',
            'point' => 'required'
        ]);

        $input = $request->all();
        murid::create($input);
        // produk nama model, create=printah msukin dta, 

        return redirect('/dashboard/murid')
        // siswa nama route
            ->with('success','data murid berhasil diinput');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $murid = murid::findOrFail($id);
        $langgar = $murid->violation;
           return view('dashboard.detail.murid', ['murid' => $murid, 'langgar' => $langgar]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $murid = murid::with('kelas')->findOrFail($id);
        $kelas = kelas::where('id', '!=', $murid->kelas_id)->get(['id','name']);
        return view('dashboard.formedit.murid',['murid' => $murid, 'kelas' => $kelas]);
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
        $murid =  murid::find($id);
        $murid->update($request->except(['_token','submit']));
        return redirect('/dashboard/murid')->with('success','data murid berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Schema::disableForeignKeyConstraints();
        $murid = murid::findOrFail($id);
        $murid -> delete();
        Schema::enableForeignKeyConstraints();
        return redirect('/dashboard/murid')
        ->with('hapus','data murid berhasil dihapus');
    }

    public function deletedmurid(){
        $murid = murid::onlyTrashed()->get();
        return view('dashboard.deleted.murid', ['murid'=>$murid]);
    }

    public function restore($id){
        $murid = murid::withTrashed()->where('id', $id)->restore();
        return redirect('/dashboard/murid')
        ->with('success','data murid berhasil di restore');
    }

    public function forceDelete($id){
        murid::onlyTrashed()->find($id)->forcedelete();
        return redirect('/dashboard/murid')
        ->with('hapus','data murid berhasil di forcedelete');
    }
}
