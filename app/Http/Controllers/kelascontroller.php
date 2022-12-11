<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\guru;
use App\Models\murid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class kelascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = kelas::with('murid','guru')->get();
        return view('dashboard.kelas', ['kelas'=>$kelas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = guru::all();
        return view('dashboard.formcreate.kelas',['guru'=> $guru]);
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
            'guru_id' => 'required'
        ]);

        $input = $request->all();
        kelas::create($input);
        // produk nama model, create=printah msukin dta, 

        return redirect('/dashboard/kelas')
        // siswa nama route
            ->with('success','data kelas berhasil diinput');
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
        $kelas = kelas::with('guru')->findOrFail($id);
        $guru = guru::where('id', '!=', $kelas->guru_id)->get(['id','name']);
        return view('dashboard.formedit.kelas',['kelas' => $kelas, 'guru' => $guru]);
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
        $kelas =  kelas::find($id);
        $kelas->update($request->except(['_token','submit']));
        return redirect('/dashboard/kelas')->with('success','data kelas berhasil diubah');
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
        $kelas = kelas::findOrFail($id);
        $kelas -> delete();
        Schema::enableForeignKeyConstraints();
        return redirect('/dashboard/kelas')
        ->with('hapus','data kelas berhasil dihapus');
    }
}
