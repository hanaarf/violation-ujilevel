@extends('layout.app')

@section('title','form')

@section('content')
<div class="container-fluid">
    <!-- Add Project -->
   
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
                <span>Element</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-xl-11 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> form edit guru</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form custom_file_input">
                        <form  method="POST" action="/dashboard/simpaneditguru/{{ $guru->id}}">
                            @method('put')
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input name="name" type="text" class="form-control" placeholder="nama" value="{{ $guru->name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mapel</label>
                                <div class="col-sm-10">
                                    <select name="mapel_id" class="form-control default-select" id="mapel">
                                        <option value="{{ $guru->mapel->id }}" selected>{{ $guru->mapel->name }}
                                        @foreach ($mapel as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">nik</label>
                                <div class="col-sm-10">
                                    <input name="nik" type="text" class="form-control" placeholder="nik" value="{{ $guru->nik}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input name="alamat" type="text" class="form-control" placeholder="alamat" value="{{ $guru->alamat}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input name="email" type="email" class="form-control" placeholder="email" value="{{ $guru->email}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input name="pw" type="password" class="form-control" placeholder="pw" value="{{ $guru->pw}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Telp</label>
                                <div class="col-sm-10">
                                    <input name="telp" type="text" class="form-control" placeholder="telp" value="{{ $guru->telp}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tgl lahir</label>
                                <div class="col-sm-10">
                                    <input name="tgl_lahir" type="date" class="form-control" placeholder="tgl lahir" value="{{ $guru->tgl_lahir}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gender</label>
                                <div class="col-sm-10">
                                    <select name="gender" class="form-control default-select" id="sel1">
                                        <option selected>{{ $guru->gender}}</option>
                                        <option>p</option>
                                        <option>l</option>
                                    </select>
                                </div>
                            </div>

                           <br>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                        remember me
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     
    </div>
</div>
@endsection