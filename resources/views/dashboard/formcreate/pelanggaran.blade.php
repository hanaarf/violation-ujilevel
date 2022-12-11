@extends('layout.app')

@section('title','form')

@section('content')
<br>
<div class="ml-3 col-xl-11 col-lg-6">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Form Pelanggaran</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form method="POST" action="/dashboard/form-pelanggaran">
                    @csrf
                    <div class="form-group">
                        <label>Jenis Pelanggaran</label>
                        <input name="name" type="text" class="form-control" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label>Point</label>
                        <input name="point" type="text" class="form-control" autocomplete="off">
                    </div>
                   
                    <div class="form-group">
                        <label>Sanksi</label>
                        <input name="sanksi" type="text" class="form-control" autocomplete="off">
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection