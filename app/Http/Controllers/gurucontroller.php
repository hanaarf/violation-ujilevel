<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\kelas;
use App\Models\mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class gurucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $guru = guru::with('mapel','kelas')->get();
        return view('dashboard.teacher', ['guru'=>$guru]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $mapel = mapel::all();
        return view('dashboard.formcreate.guru',['mapel'=> $mapel]);
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
            'mapel_id' => 'required',
            'nik' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'pw' => 'required',
            'telp' => 'required',
            'tgl_lahir' => 'required',
            'gender' => 'required'
        ]);

        $input = $request->all();
        guru::create($input);
        // produk nama model, create=printah msukin dta, 

        return redirect('/dashboard/guru')
        // siswa nama route
            ->with('success','data guru berhasil diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guru = guru::findOrFail($id);
        //    faindorfail function idny ga ktmu jd 404
           return view('dashboard.detail.guru', ['guru' => $guru]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = guru::with('mapel')->findOrFail($id);
        $mapel = mapel::where('id', '!=', $guru->mapel_id)->get(['id','name']);
        return view('dashboard.formedit.guru',['guru' => $guru, 'mapel' => $mapel]);
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
        $guru =  guru::find($id);
        $guru->update($request->except(['_token','submit']));
        return redirect('/dashboard/guru')->with('success','data guru berhasil diubah');
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
        $guru = guru::findOrFail($id);
        $guru -> delete();
        Schema::enableForeignKeyConstraints();
        return redirect('/dashboard/guru')
        ->with('hapus','data guru berhasil dihapus');
    }

    public function deletedguru(){
        $guru = guru::onlyTrashed()->get();
        return view('dashboard.deleted.guru', ['guru'=>$guru]);
    }

    public function restore($id){
        $guru = guru::withTrashed()->where('id', $id)->restore();
        return redirect('/dashboard/guru')
        ->with('success','data guru berhasil di restore');
    }

    public function forceDelete($id){
        guru::onlyTrashed()->find($id)->forcedelete();
        return redirect('/dashboard/guru')
        ->with('hapus','data guru berhasil di forcedelete');
    }
}
