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
                    <h4 class="card-title"> form kelas</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form custom_file_input">
                        <form  method="POST" action="/dashboard/form-kelas">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input name="name" type="text" class="form-control" placeholder="nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Wali kelas</label>
                                <div class="col-sm-10">
                                    <select name="guru_id" class="form-control default-select" data-height="100%" id="walikelas">
                                        @foreach ($guru as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
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