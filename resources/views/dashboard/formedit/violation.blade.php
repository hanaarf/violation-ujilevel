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
                    <h4 class="card-title"> form Pelanggaran</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form custom_file_input">
                        <form method="POST" action="/dashboard/simpaneditviolation/{{ $violation->id}}">
                            @method('put')
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Murid</label>
                                <div class="col-sm-10">
                                    <select name="murid_id" class="form-control default-select" id="murid">
                                        <option value="{{ $violation->murid->id }}" selected>{{ $violation->murid->name }}
                                        @foreach ($murid as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>





{{-- 
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pelanggaran</label>
                                <div class="col-sm-10">
                                    <select name="pelanggaran_id" class="form-control default-select"
                                        onchange="udin('{{ url('ajax/nyaBagas/') }}')" id="jackma">
                                        @foreach ($pelanggaran as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row" id="bagas">
                                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Point</label>
                                <div class="col-sm-10">
                                    <input name="point" type="number" class="form-control" placeholder="point" readonly>
                                </div>
                            </div> --}}

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" >pelanggaran</label>
                                <div class="col-sm-10">
                                <select class="form-control select2" style="width: 100%;" name="pelanggaran_id" id="jackma">
                                    <option value="{{ $violation->pelanggaran->id }}" selected>{{ $violation->pelanggaran->name }}
                                    @foreach ($pelanggaran as $item)
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
